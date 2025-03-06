@extends('customer.layouts.master-simple')

@section('content')
<div id="main">
    <div class="col-lg-4 col-md-6 col-xs-12 mx-auto">
        <div class="account-box">
            <a href="index.html" class="logo-account">
                <img src="{{ asset('customer-assets/images/logo-login.png') }}" alt="logo">
            </a>
            <div class="message-light">
                <div class="massege-light">
                    <form action="{{ route('auth.customer.check-code', $token) }}" method="post">
                        @csrf

                        @if($otp->type == 0)
                            <section class="login-info">
                                کد تایید برای شماره موبایل {{ $otp->login_id }} ارسال گردید
                            </section>
                        @else
                            <section class="login-info">
                                کد تایید برای ایمیل {{ $otp->login_id }} ارسال گردید
                            </section>
                        @endif
                        <div class="form-account">
                            <div class="form-account-title">کد تایید را وارد کنید</div>
                            <div class="form-account-row">
                                <input type="text" name="otp" class="form-control text-center otp-input" maxlength="6" required placeholder="کد تأیید را وارد کنید">
                                
                                @error('otp')
                                    <span class="alert_required bg-danger text-white p-1 rounded mt-2 d-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-account-row">
                            <a href="{{ route('auth.customer.get-code', $token) }}">دریافت مجدد کد تایید</a>
                        </div>
                        <div class="parent-btn">
                            <button type="submit" class="dk-btn dk-btn-info">
                                تایید و ادامه
                                <i class="mdi mdi-account-plus-outline sign-in"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection