<?php

namespace App\Http\Controllers\Auth\Customer;

use Carbon\Carbon;
use App\Models\Otp;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRegisterRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;
use App\Http\Services\Message\MessageService;
use App\Http\Services\Message\SMS\SmsService;
use App\Http\Services\Message\Email\EmailService;


class LoginRegisterController extends Controller
{
    
    public function welcomePage(){

    return  view('customer.auth.login-welcome');

    }

    public function showOtp(){
        return  view('customer.auth.login-register');
    }

    public function sendCode(LoginRegisterRequest $request){

        $inputs = $request->all();

        // Check if input is email
        if(filter_var($inputs['id'], FILTER_VALIDATE_EMAIL)) {
            $type = 1; // 1 => email
            $user = User::where('email', $inputs['id'])->first();
            if(empty($user)){
                $newUser['email'] = $inputs['id'];
            }
        }

        // Check if input is mobile
        elseif(preg_match('/^(\+98|98|0)9\d{9}$/', $inputs['id'])){
            $type = 0; // 0 => mobile

            // Format mobile number
            $inputs['id'] = ltrim($inputs['id'], '0');
            $inputs['id'] = substr($inputs['id'], 0, 2) === '98' ? substr($inputs['id'], 2) : $inputs['id'];
            $inputs['id'] = str_replace('+98', '', $inputs['id']);

            $user = User::where('mobile', $inputs['id'])->first();
            if(empty($user)){
                $newUser['mobile'] = $inputs['id'];
            }
        } else {
            return redirect()->route('auth.customer.login-register-form')->withErrors(['id' => 'شناسه ورودی شما نه شماره موبایل است نه ایمیل']);
        }

        if(empty($user)){
            $newUser['password'] = '98355154';
            $newUser['activation'] = 1;
            $user = User::create($newUser);
        }

            // Create OTP
            $otpCode = rand(111111, 999999);
            $token = Str::random(60);
            $otpInputs = [
                'token' => $token,
                'user_id' => $user->id,
                'otp_code' => $otpCode,
                'login_id' => $inputs['id'],
                'type' => $type,
            ];

        Otp::create($otpInputs);

        // Send SMS or Email
        if($type == 0) {
            $smsService = new SmsService();
            $smsService->setFrom(Config::get('sms.otp_from'));
            $smsService->setTo(['0' . $user->mobile]);
            $smsService->setText("مجموعه آمازون \n  کد تایید : $otpCode");
            $smsService->setIsFlash(true);

            $messagesService = new MessageService($smsService);
        } elseif($type === 1) {
            $emailService = new EmailService();
            $details = [
                'title' => 'ایمیل فعال سازی',
                'body' => "کد فعال سازی شما : $otpCode"
            ];
            $emailService->setDetails($details);
            $emailService->setFrom('noreply@example.com', 'example');
            $emailService->setSubject('کد احراز هویت');
            $emailService->setTo($inputs['id']);

            $messagesService = new MessageService($emailService);
        }

        $messagesService->send();

        return redirect()->route('auth.customer.get-code', $token);

    }

    public function getCode($token){
        $otp = Otp::where('token', $token)->first();
        if(empty($otp)) {
            return redirect()->route('auth.customer.login-register-form')->withErrors(['id' => 'آدرس وارد شده نامعتبر میباشد']);
        }


        return view('customer.auth.login-confirm', compact('token', 'otp'));
    }

    public function checkCode($token, LoginRegisterRequest $request)
{
    $inputs = $request->all();

    // اطمینان از این که مقدار `otp` همیشه یک رشته معتبر است
    $otpCode = is_array($inputs['otp']) ? implode('', $inputs['otp']) : $inputs['otp'];

    $otp = Otp::where('token', $token)
        ->where('used', 0)
        ->where('created_at', '>=', Carbon::now()->subMinute(5)->toDateTimeString())
        ->first();

    if (empty($otp)) {
        return redirect()->route('auth.customer.get-code', $token)->withErrors(['id' => 'آدرس وارد شده نامعتبر می‌باشد']);
    }

    if ($otp->otp_code !== $otpCode) {
        return redirect()->route('auth.customer.get-code', $token)->withErrors(['otp' => 'کد وارد شده صحیح نمی‌باشد']);
    }

    // علامت‌گذاری OTP به عنوان استفاده شده
    $otp->update(['used' => 1]);
    $user = $otp->user()->first();

    // تأیید موبایل یا ایمیل
    if ($otp->type == 0 && empty($user->mobile_verified_at)) {
        $user->update(['mobile_verified_at' => Carbon::now()]);
    } elseif ($otp->type == 1 && empty($user->email_verified_at)) {
        $user->update(['email_verified_at' => Carbon::now()]);
    }

    // ورود کاربر
    Auth::login($user);

    // هدایت به صفحه اصلی
    return redirect()->route('customer.home');
}


    public function logout()
    {
        Auth::logout();
        return redirect()->route('customer.home');
    }

    
    
   


}
