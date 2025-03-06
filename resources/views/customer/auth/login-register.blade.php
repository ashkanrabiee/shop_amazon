@extends('customer.layouts.master-simple')



@section('content')
    
<div id="main">
    <div class="col-lg-4 col-md-6 col-xs-12 mx-auto">
        <div class="account-box">
            <a href="index.html" class="logo-account"><img src="{{asset('customer-assets/images/logo-login.png')}}" alt="logo"></a>
            <span class="account-head-line">ثبت نام در دیجی‌استور</span>
            <div class="content-account">
                <div class="massege-light">ثبت نام تنها با شماره تلفن همراه امکان پذیر است.</div>
                 <form action="{{route('auth.customer.send-code')}}" method="POST">
                    @csrf
                    <label for="">شماره موبایل یا پست الکترونیک خود را وارد کنید</label>
                    <input type="text" name="id" class="input-email-account"  value="{{ old('id') }}">
                    @error('id')
                    <span class="alert_required bg-danger text-white p-1 rounded" role="alert">
                        <strong>
                            {{ $message }}
                        </strong>
                    </span>
                @enderror

                    <div class="parent-btn">
                        <button class="dk-btn dk-btn-info">
                            ثبت نام به دیجی استور
                            <i class="mdi mdi-account-plus-outline sign-in"></i>
                        </button>
                    </div>
                    <div class="form-auth-row">
                        <label for="remember" class="ui-checkbox">
                            <input type="checkbox" value="1" name="login" checked="" id="remember">
                            <span class="ui-checkbox-check"></span>
                        </label>
                        <label for="remember" class="remember-me"><a href="#">حریم خصوصی</a> و <a href="#">شرایط
                                قوانین</a>استفاده از سرویس های سایت دیجی‌استور را مطالعه نموده و با کلیه موارد آن
                            موافقم.</label>
                    </div>
                </form>
            </div>

           
        </div>
    </div>
</div>

@endsection




