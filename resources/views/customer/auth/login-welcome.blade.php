@extends('customer.layouts.master-simple')


@section('content')
    
<div id="main">
    <div class="col-lg-4 col-md-6 col-xs-12 mx-auto">
        <div class="account-box">
            <a href="index.html" class="logo-account"><img src="{{asset('customer-assets/images/logo-login.png')}}" alt="logo"></a>
            <span class="account-head-line">به دیجی استور خوش آمدید</span>
            <div class="content-account">
                <div class="account-box-message">
                    <div class="user-account-welcome">
                        <span class="mdi mdi-account-outline user-welcome"></span>
                    </div>
                    <div class="made-account">
                        <h2>حساب کاربری شما در دیجی استور ساخته شد</h2>
                        <p>اکنون می‌توانید به صفحه‌ای که در آن بودید بازگردید و یا با تکمیل اطلاعات حساب کاربری
                            خود به کلیه امکانات و
                            سرویس‌های دیجی استور و سرویس‌های وابسته به آن دسترسی داشته باشید</p>
                    </div>
                </div>
                <ul>
                    <li>
                        <div class="parent-btn">
                            <a href="{{route('auth.customer.show-otp')}}" class="dk-btn dk-btn-info">
                                تکمیل حساب کاربری
                                <i class="fa fa-user sign-in"></i>
                            </a>
                        </div>
                    </li>
                    <li>
                        <a href="{{route('customer.home')}}" class="back-page-before">بازگشت به صفحه‌ای که در آن بودید</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>


@endsection














