@extends('customer.layouts.master-one-col')

@section('head-tag')
<title>سبد خرید</title>
<style>
/* استایل برای لینک محصول */
.product-link {
    text-decoration: none;
    display: block;
    margin-bottom: 10px;
    transition: all 0.3s ease;
}

/* استایل برای نام محصول */
.product-name {
    background-color: #f7f7f7;
    padding: 10px;
    border-radius: 8px;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
    text-align: center; /* متن را وسط چین می‌کند */
}

/* عنوان محصول */
.product-title {
    font-size: 18px;
    color: #333;
    font-family: 'Arial', sans-serif;
}

/* تغییر رنگ پس‌زمینه و متن در هنگام hover */
.product-link:hover .product-name {
    background-color: #e0f7fa;
}

.product-link:hover .product-title {
    color: #00796b;
    text-decoration: underline;
}
/* استایل برای رنگ محصول */
.cart-product-selected-color {
    transition: transform 0.3s ease;
}

.cart-product-selected-color:hover {
    transform: scale(1.2);
}

/* استایل برای گارانتی */
.cart-product-selected-warranty {
    font-size: 18px;
}


</style>
@endsection


@section('content')
<div class="nav-categories-overlay"></div>
<div class="overlay-search-box"></div>

<!--  cart------------------>
<div class="col-12">
    <div class="page-content">
        <div class="col-lg-4 col-md-4 col-xs-12 pull-right">
            <div class="checkout-tab">
                <div class="checkout-tab-pill listing-active-cart">
                    سبد خرید
                    <span class="checkout-tab-counter">1</span>
                </div>
                <div class="checkout-tab-pill">لیست خرید بعدی</div>
            </div>

        </div>
    </div>
    <div class="cart-tab-main">
        <div class="col-lg-9 col-md-9 col-xs-12 pull-right">
            <div class="page-content-cart">
                <form action="#">
                    @csrf
                    @php
                        $totalProductPrice = 0;
                        $totalDiscount = 0;
                    @endphp
    
                    @foreach ($cartItems as $cartItem)
                        @php
                            $totalProductPrice += $cartItem->cartItemProductPrice();
                            $totalDiscount += $cartItem->cartItemProductDiscount();
                        @endphp
    
    
                        <div class="checkout-body">
                            <a href="#" class="remove-from-cart"><i class="mdi mdi-close"></i></a>
                            <a href="#" class="col-thumb">  
                                <img src="{{ asset($cartItem->product->image['indexArray']['medium']) }}" alt="">
                            </a>
    
                            <div class="checkout-col-desc">
                                <a href="#" class="product-link">
                                    <div class="product-name">
                                        <p class="fw-bold product-title">{{ $cartItem->product->name }}</p>
                                    </div>
                                </a>
                                    
                                
                                <div class="checkout-variant-color">
                                    <table class="table table-sm table-borderless">
                                        <tbody>
                                            <!-- نمایش رنگ محصول -->
                                            <tr>
                                                <th scope="row" class="fw-bold">رنگ</th>
                                                <td>
                                                    @if (!empty($cartItem->color) && !empty($cartItem->color->color))
                                                        <span style="background-color: {{ $cartItem->color->color }}; width: 20px; height: 20px; display: inline-block; border-radius: 50%;" class="cart-product-selected-color me-2"></span>
                                                        <span>
                                                            {{ $cartItem->color->color_name }}</span>
                                                    @else
                                                        <span class="text-warning">رنگ منتخب وجود ندارد</span>
                                                    @endif
                                                </td>
                                            </tr>
                                
                                            <!-- نمایش گارانتی -->
                                            <tr>
                                                <th scope="row" class="fw-bold">گارانتی</th>
                                                <td>
                                                    @if (!empty($cartItem->guarantee))
                                                        <i class="fa fa-shield-alt cart-product-selected-warranty me-1 text-success"></i>
                                                        <span class="text-muted">{{ $cartItem->guarantee->name }}</span>
                                                    @else
                                                        <span class="text-danger">گارانتی ندارد</span>
                                                    @endif
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                
                              
                            </div>
                        </div>
                    @endforeach
                </form>
            </div>
    
            <div class="checkout-to-shipping-sticky">
                <a href="{{ route('customer.sales-process.address-and-delivery') }}" class="selenium-next-step-shipping">ادامه فرآیند خرید</a>
                <div class="checkout-to-shipping-price-report">
                    <p>مبلغ قابل پرداخت</p>
                    <div class="cart-item-product-price">
                        <section class="text-nowrap fw-bold" id="totalPrice">
                            {{ priceFormat($cartItem->cartItemProductPrice()) }} تومان
                        </section>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-lg-3 col-md-3 col-xs-12 pull-left">
            <div class="page-aside">
                <div class="checkout-summary">
                    <ul class="checkout-summary-summary">
                        <li>
                            @if (!empty($cartItem->product->activeAmazingSales()))
                                <section class="cart-item-discount text-danger text-nowrap mb-1">
                                    تخفیف {{ priceFormat($cartItem->cartItemProductDiscount()) }}
                                </section>
                            @endif
                        </li>
                        <li>
                            <span>جمع</span>
                            <section class="text-nowrap fw-bold">
                                {{ priceFormat($cartItem->cartItemProductPrice()) }} تومان
                            </section>
                        </li>
                        <li>
                            <p>انتخاب روش ارسال:</p>
                            <select name="delivery_method" id="delivery_method" class="form-control" onchange="updateTotalPrice()">
                                @foreach ($deliveries as $delivery)
                                    <option value="{{ $delivery->id }}" data-price="{{ $delivery->amount }}">
                                        {{ $delivery->name }} - {{ number_format($delivery->amount) }} تومان
                                    </option>
                                @endforeach
                            </select>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    
    
    <div class="cart-tab-main" style="display:none;">
        <div class="col-lg-8 col-md-8 col-xs-12 pull-right">
            <div class="page-content-cart">
                <div class="container">
                    <div class="checkout-empty">
                        <div class="checkout-empty-icon">
                            <span class="mdi mdi-cart-remove"></span>
                        </div>
                        <div class="checkout-empty-title">لیست خرید بعدی شما خالی است!</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-xs-12 pull-left">
            <div class="page-aside">
                <div class="checkout-summary">
                    <h1>لیست خرید بعدی چیست؟</h1>
                    <p>
                        شما می‌توانید محصولاتی که به سبد خرید
                        خود افزوده اید و موقتا قصد خرید آن‌ها را ندارید، در لیست خرید بعدی خود قرار داده و
                        هر زمان مایل بودید آن‌ها را مجدداً به سبد خرید اضافه کرده و خرید آن‌ها را تکمیل کنید.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!--  cart------------------>


@endsection



@section('script')
<script>
    function updateTotalPrice() {
        // دریافت انتخاب شده برای روش ارسال
        const deliveryMethod = document.getElementById('delivery_method');
        const selectedOption = deliveryMethod.options[deliveryMethod.selectedIndex];
        
        // دریافت قیمت ارسال از گزینه انتخاب شده
        const deliveryPrice = parseInt(selectedOption.getAttribute('data-price')) || 0;
        
        // محاسبه قیمت نهایی
        const basePrice = {{ $totalProductPrice }};
        const finalPrice = basePrice + deliveryPrice;

        // نمایش قیمت نهایی
        document.getElementById('totalPrice').innerText = finalPrice.toLocaleString() + " تومان";
    }

    // در صورتی که صفحه بارگذاری شد، قیمت را بروز رسانی می‌کنیم
    document.addEventListener('DOMContentLoaded', function () {
        updateTotalPrice();
    });
</script>
@endsection


