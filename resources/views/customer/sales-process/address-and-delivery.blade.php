@extends('customer.layouts.master-one-col')


@section('content')
<div class="main-shopping">
    <div class="content-shopping">
        <div class="col-lg-9 col-md-9 col-xs-12 pull-right">
            <div class="shipment-page-container">
                <div class="headline-checkout-shopping">
                    <span>انتخاب آدرس تحویل سفارش</span>
                </div>
                <div id="address-section">
                    <div class="checkout-contact">
                        <div class="checkout-contact-content">
                            <ul class="checkout-contact-items">
                                <li class="checkout-contact-item">
                                    گیرنده:
                                    <span class="full-name">حسن شجاعی</span>
                                    <a href="#" class="edit-address-btn"
                                        onclick="document.getElementById('modal').style.display='block'">اصلاح این
                                        آدرس</a>
                                    <a href="#" class="checkout-contact-location"
                                        onclick="document.getElementById('modal').style.display='block'">تغییر آدرس
                                        ارسال</a>
                                </li>
                                <li class="checkout-contact-item">
                                    <div class="checkout-contact-item-mobile">
                                        شماره تماس:
                                        <span class="mobile-phone">0991xxxxxxx</span>
                                    </div>
                                    <div class="checkout-contact-item-message">
                                        کد پستی:
                                        <span class="post-code">946598848626</span>
                                        <br>
                                    </div>
                                    <span class="address-part">خراسان شمالی، بجنورد</span>
                                </li>
                            </ul>
                            <div class="checkout-contact-badge">
                                <i class="fa fa-check"></i>
                            </div>
                        </div>

                    </div>
                </div>
                <form action="#" id="shipping-data-form">
                    <div class="normal-delivery">
                        <div class="checkout-pack">
                            <div class="checkout-pack-header">
                                <span>مرسوله ۱ از ۱</span>
                                <span class="checkout-time-table-shipping-lead-time">
                                    آماده ارسال
                                </span>
                            </div>
                            <div class="checkout-time-table-shipping-type"><i class="fa fa-truck"></i>ارسال عادی
                            </div>
                            {{-- <div class="checkout-pack-row">
                                <div class="swiper-products-compact">
                                    <div class="box">
                                        <div class="col-lg-3 col-md-4 col-xs-12">
                                            <div class="product-box-container">
                                                <div class="product-box-compact">
                                                    <a href="#">
                                                        <img src="{{asset('customer-assets/images/product-slider-2/111460776.jpg')}}" alt="img-slider">
                                                    </a>
                                                    <div class="product-box-title">
                                                        گوشی موبایل سامسونگ مدل Galaxy A50 SM-A505F/DS دو ...
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                            <div class="shipment-submit-type">
                                <div class="checkout-time-table">
                                    <div class="additional-options-action-bar">
                                        <div class="additional-options-checkbox-container">
                                            <label
                                                class="checkout-additional-options-checkbox-image"></label>
                                        </div>
                                        <div class="checkout-additional-options-action-container">
                                            <div class="action-title">زمان تقریبی تحویل  8 روز است</div>
                                            <ul class="action-description">
                                                <li>ارسال بسته پستی به روش‌های مختلفی امکان‌پذیر است.</li>        
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="headline-checkout-shopping">
                <span>صدور فاکتور</span>
            </div>
            <div class="checkout-invoice">
                <div class="checkout-invoice-headline">
                    <div class="form-auth-row">
                        <label class="ui-checkbox">
                            <input type="checkbox" value="1" name="login" id="remember">
                            <span class="ui-checkbox-check"></span>
                        </label>
                        <label for="remember" class="remember-me">درخواست ارسال فاکتور خرید</label>
                    </div>
                </div>
            </div>

            <div class="checkout-to-shipping-sticky">
                <a href="{{route('customer.sales-process.payment')}}" class="selenium-next-step-shipping">ادامه فرآیند خرید</a>
                <div class="checkout-to-shipping-price-report">
                    <p>مبلغ قابل پرداخت</p>
                    <div class="cart-item-product-price">
                        ۳,۴۲۰,۰۰۰
                        <span>تومان</span>
                    </div>
                </div>
            </div>

            <div class="checkout-actions">
                <a href="cart.html" class="btn-link-spoiler">
                    « بازگشت به سبد خرید
                </a>
                <a href="shopping-payment.html" class="save-shipping-data">
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
                                <img src="{{asset('customer-assets/images/digiclub.png')}}" alt="digiclub">
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

     
    </div>
</div>
<div class="remodal-overlay" id="modal">
    <div class="col-lg-8 col-md-8 col-xs-12 mx-auto">
        <div class="remodal">
            <a href="#" class="remodal-close" onclick="document.getElementById('modal').style.display='none'"><i
                    class="fa fa-close"></i></a>
            <div class="middle-container">
                <form action="#" class="form-checkout">
                    <div class="form-checkout-headline">ویرایش آدرس</div>
                    <div class="form-checkout-row">
                        <label for="name">نام و نام خانوادگی تحویل گیرنده</label>
                        <span class="required-star" style="color:red;">*</span>
                        <input type="text" id="name" class="input-name-checkout"
                            placeholder="نام تحویل گیرنده را وارد نمایید">
                        <label for="phone-number">شماره موبایل</label>
                        <span class="required-star" style="color:red;">*</span>
                        <input type="text" id="phone-number" class="input-name-checkout" placeholder="09xxxxxxxxx"
                            style="text-align:left;">
                        <label for="fixed-number">شماره تلفن ثابت</label>
                        <span class="required-star" style="color:red;">*</span>
                        <input type="text" id="fixed-number" class="input-name-checkout" placeholder="021xxxxxx"
                            style="text-align:left;">

                        <div class="form-checkout-valid-row">
                            <label for="province">استان</label>
                            <span class="required-star" style="color:red;">*</span>
                            <select name="province" id="province">
                                <option value="date-desc" selected="selected">شهر مورد نظر خود را انتخاب کنید
                                </option>
                                <option value="date-asc">تهران</option>
                                <option value="rate">مشهد</option>
                                <option value="views">اصفهان</option>
                                <option value="comments">شیراز</option>
                            </select>
                        </div>

                        <div class="form-checkout-valid-row">
                            <label for="city">شهر</label>
                            <span class="required-star" style="color:red;">*</span>
                            <select name="city" id="city">
                                <option value="date-desc" selected="selected">شهر مورد نظر خود را انتخاب کنید
                                </option>
                                <option value="date-asc">آشخانه</option>
                                <option value="rate">شیروان</option>
                                <option value="views">اسفراین</option>
                                <option value="comments">جاجرم</option>
                            </select>
                        </div>

                        <label for="address">آدرس</label>
                        <span class="required-star" style="color:red;">*</span>
                        <input type="text" id="address" class="input-name-checkout"
                            placeholder="آدرس خود را وارد نمایید" style="height:80px;">

                        <div class="form-checkout-valid-row">
                            <div class="parent-btn">
                                <button class="dk-btn dk-btn-info">
                                    ثبت آدرس
                                    <i class="fa fa-check sign-in"></i>
                                </button>
                            </div>
                        </div>

                        <a href="#" class="cancel-edit-address"
                            onclick="document.getElementById('modal').style.display='none'">انصراف و بازگشت</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection
@section('script')
<script src="{{asset('customer-assets/js/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('customer-assets/js/bootstrap.js')}}"></script>
<script src="{{asset('customer-assets/js/main.js')}}"></script>
@endsection

