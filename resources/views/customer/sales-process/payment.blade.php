@extends('customer.layouts.master-one-col')



@section('head-tag')
<title>shopping-payment</title>
@endsection








@section('content')
    

<div class="main-shopping">
    <div class="content-shopping">
        <div class="col-lg-9 col-md-9 col-xs-12 pull-right">
            <div class="shipment-page-container">
                <div class="headline-checkout-shopping">
                    <span>انتخاب شیوه پرداخت</span>
                </div>
                <div class="payment">
                    <ul class="checkout-paymethod">
                        <li class="wallet-container">
                            <div class="checkout-paymethod-item">
                                <span class="mdi mdi-card-text-outline"></span>
                                <label class="radio-primary">
                                    <input type="radio" name="payment-radio" value="wallet">
                                    <span class="ui-radio-check"></span>
                                </label>
                                <div class="checkout-paymethod-title">
                                    <div class="paymethod-wallet-amount">
                                        <p class="checkout-paymethod-title-label">افزایش اعتبار و پرداخت از کیف پول</p>
                                        <span>موجودی:</span>
                                        <span class="wallet-amount">0</span>
                                        <span class="checkout-paymethod-currency">تومان</span>
                                    </div>
                                </div>
                                <div class="wallet-extra-info">نیازمند
                                    <span class="wallet-needed-money">۷۷,۵۰۰ </span>
                                    تومان افزایش اعتبار
                                </div>
                                <div class="checkout-paymethod-by-digipay">
                                    <img src="assets/images/af737e9d.png" alt="digipay">
                                </div>
                            </div>
                        </li>
                        <li class="wallet-container">
                            <div class="checkout-paymethod-item">
                                <span class="mdi mdi-card-text-outline"></span>
                                <label class="radio-primary" style="display:block">
                                    <input type="radio" name="payment-radio" value="wallet" checked="checked">
                                    <span class="ui-radio-check"></span>
                                </label>
                                <div class="checkout-paymethod-title">
                                    <div class="paymethod-wallet-amount">
                                        <p class="checkout-paymethod-title-label">پرداخت اینترنتی هوشمند دیجی‌استور</p>
                                        <span>آنلاین با تمامی کارت‌های بانکی</span>
                                    </div>
                                </div>
                                <div class="checkout-paymethod-by-digipay">
                                    <img src="assets/images/af737e9d.png" alt="digipay">
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="headline-checkout-shopping">
                    <span>خلاصه سفارش</span>
                </div>
                <div class="checkout-order-summary">
                    <div class="checkout-order-summary-item">
                        <a class="btn btn-light btn-checkout" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                            <header class="checkout-order-summary-header">
                                <i class="fa fa-chevron-down arrow"></i>
                                <div class="checkout-order-summary-row">
                                    <div class="checkout-order-summary-col-post-time">مرسوله 1 از 1
                                        <span>(۱ کالا)</span>
                                    </div>
                                    <div class="checkout-order-summary-col-post-time">زمان ارسال
                                        <span>بازه جمعه ۸ آذر - سه‌شنبه ۱۲ آذر</span>
                                    </div>
                                    <div class="checkout-order-summary-col-shipping-cost">
                                        مبلغ مرسوله
                                        <span>423,000,0 تومان</span>
                                    </div>
                                </div>
                            </header>
                        </a>
                        <div class="collapse float-right" id="collapseExample">
                            <div class="checkout-order-summary-content">
                                <section class="swiper-order-summary">
                                    <div class="swiper-container">
                                        <div class="col-lg-5 col-md-6 col-xs-12">
                                            <div class="product-box-container">
                                                <div class="product-box-compact">
                                                    <a href="#">
                                                        <img src="assets/images/product-slider-2/111460776.jpg" alt="img-slider">
                                                    </a>
                                                    <div class="product-box-title">
                                                        گوشی موبایل سامسونگ مدل Galaxy A50 SM-A505F/DS دو ...
                                                    </div>
                                                    <div class="checkout-order-summary-tagline">
                                                        <span>تعداد : 1 عدد</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                    <div class="checkout-to-shipping-sticky">
                        <a href="#" class="selenium-next-step-shipping">ادامه فرآیند خرید</a>
                        <div class="checkout-to-shipping-price-report">
                            <p>مبلغ قابل پرداخت</p>
                            <div class="cart-item-product-price">
                                ۳,۴۲۰,۰۰۰
                                <span>تومان</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="grid">
                <div class="checkout-price-options">
                    <section class="checkout-price-options-container">
                        <div class="checkout-price-options-header">
                            <span>استفاده از کارت هدیه دیجی‌استور</span>
                        </div>
                        <div class="checkout-price-options-content">
                            <p>با ثبت کد کارت هدیه، مبلغ کارت هدیه از “مبلغ قابل پرداخت” کسر می‌شود.</p>
                        </div>
                        <div class="checkout-price-options-row">
                            <div class="checkout-price-options-form-field">
                                <input type="text" name="gift-card-serial" class="input-field"
                                    placeholder="مثلا 1234ABCD5678EFGH0123">
                            </div>
                            <button class="checkout-price-options-form-button">
                                ثبت کدهدیه
                            </button>
                        </div>
                    </section>
                </div>
                <div class="checkout-price-options">
                    <section class="checkout-price-options-container">
                        <div class="checkout-price-options-header">
                            <span>استفاده از کد تخفیف دیجی‌استور</span>
                        </div>
                        <div class="checkout-price-options-content">
                            <p>با ثبت کد تخفیف، مبلغ کد تخفیف از “مبلغ قابل پرداخت” کسر می‌شود.</p>
                        </div>
                        <div class="checkout-price-options-row">
                            <div class="checkout-price-options-form-field">
                                <input type="text" name="gift-card-serial" class="input-field"
                                    placeholder="مثلا 837A2CS">
                            </div>
                            <button class="checkout-price-options-form-button">
                                ثبت کد هدیه
                            </button>
                        </div>
                    </section>
                </div>
            </div>



            <div class="checkout-actions">
                <a href="#" class="btn-link-spoiler">
                    « بازگشت به سبد خرید
                </a>
                <a href="#" class="save-shipping-data">
                    تایید و ادامه ثبت سفارش »
                </a>
            </div>
        </div>

        <div class="col-lg-3 col-md-3 col-xs-12 pull-left">
            <div class="page-aside" style="margin-top: 95px;">
                <div class="checkout-summary">
                    <ul class="checkout-summary-summary">
                        <li>
                            <span>مبلغ کل (۱ کالا)</span>
                            <span>۳,۴۲۰,۰۰۰ تومان</span>
                        </li>
                        <li>
                            <span>جمع</span>
                            <span>۳,۴۲۰,۰۰۰ تومان</span>
                        </li>
                        <li>
                            <span style="color: #424750; font-size:14px;">هزینه ارسال</span>
                            <span></span>
                        </li>
                        <li>
                            <span><i class="fa fa-truck"></i>ارسال عادی</span>
                            <span>رایگان</span>
                        </li>
                        <li>
                            <span>مبلغ قابل پرداخت</span>
                            <span>۳,۴۲۰,۰۰۰ تومان</span>
                        </li>
                        <li class="checkout-digiclub-container">
                            <span class="checkout-digiclub-row">
                                <img src="assets/images/digiclub.png" alt="digiclub">
                                <span class="checkout-digiclub-points">
                                    امتیاز دیجی‌کلاب
                                </span>
                            </span>
                            <span class="checkout-digiclub-row">150
                                <span class="checkout-bill-currency">
                                    امتیاز
                                </span>
                            </span>

                        </li>
                    </ul>
                </div>
                <div class="checkout-summary-content">
                    <p>کالاهای موجود در سبد شما ثبت و رزرو نشده‌اند، برای ثبت سفارش مراحل بعدی را تکمیل کنید.</p>
                </div>
            </div>
        </div>




@endsection




