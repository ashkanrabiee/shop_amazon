@extends('customer.layouts.master-one-col')

@section('head-tag')
<!-- فایل CSS برای Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- فایل JS برای Bootstrap 5 -->

<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Main Page</title>
     <style>
        .main-slider-container {
    height: 580px; /* ارتفاع ثابت برای اسلایدر */
    overflow: hidden; /* جلوگیری از خارج شدن عکس‌ها از محدوده */
}

.carousel-item {
    height: 100%; /* ارتفاع آیتم‌های اسلایدر برابر با ارتفاع اسلایدر */
}

.carousel-item img {
    width: 100%;
    height: 100%;
    object-fit: contain;
}
.main-slider-container {
    height: auto;
}

.carousel-item img {
    width: 100%;
    height: auto;
    max-height: 580px;
}
.owl-stage-outer {
    overflow-x: auto !important;
    white-space: nowrap !important;
    display: flex !important;
}

.owl-stage {
    display: flex !important;
    flex-wrap: nowrap !important;
}

.owl-item {
    flex: 0 0 auto !important;
}


/* discount */
.original-price {
    font-size: 18px; /* اندازه فونت قیمت اصلی */
    text-decoration: line-through;
    margin-bottom: 8px;
}

.discount-price {
    font-size: 22px; /* اندازه فونت قیمت تخفیف‌دار */
    color: #e74c3c;
    font-weight: bold;
    margin-bottom: 8px;
}

.discount-percentage {
    font-size: 18px; /* اندازه فونت درصد تخفیف */
    color: #2ecc71;
    font-weight: bold;
}

.product-price {
    font-size: 20px; /* اندازه فونت قیمت اصلی */
    font-weight: bold;
    color: #2d3e50;
}
.owl-item {
    margin-bottom: 40px; /* فاصله بیشتر بین محصولات */
}

.item {
    margin-bottom: 40px; /* فاصله بیشتر بین محصولات در هر خط */
}






     </style>
@endsection




@section('content')
    


    
<div class="nav-categories-overlay"></div>
<div class="overlay-search-box"></div>

<!--    Start Main Slider -------------------->


<div class="row">
    <!-- اسلایدر -->
    <div class="col-lg-8 col-md-8 col-xs-12">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <!-- نقاط ناوبری (Indicators) -->
            <ol class="carousel-indicators">
                @foreach ($slideShowImages as $key => $slideShowImage)
                    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{ $key }}" class="{{ $key == 0 ? 'active' : '' }}"></li>
                @endforeach
            </ol>
    
            <!-- عکس‌های اسلایدر -->
            <div class="carousel-inner">
                @foreach ($slideShowImages as $key => $slideShowImage)
                    <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                        <a class="w-100 d-block h-100 text-decoration-none" href="{{ urldecode($slideShowImage->url) }}">
                            <img class="d-block w-100 h-100 rounded-2 object-fit-cover" src="{{ asset($slideShowImage->image) }}" alt="{{ $slideShowImage->title }}">
                        </a>
                    </div>
                @endforeach
            </div>
    
            <!-- کنترل‌های قبلی و بعدی -->
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    
    <!-- بنرها -->
    <div class="col-lg-4 col-md-4 col-xs-12">
        @foreach ($topBanners as $topBanner)
            <aside class="adplacement-container-column">
                <a href="#" class="adplacement-item adplacement-item-column">
                    <div class="adplacement-sponsored-box">
                        <img class="w-100 h-100 rounded-2 object-fit-cover" src="{{ asset($topBanner->image) }}" alt="{{ $topBanner->title }}">
                    </div>
                </a>
            </aside>
        @endforeach
    </div>
</div>
<!--adplacement-------------------------------->

<!--  product-slider-------------------->
<div class="col-lg-12 col-md-12 col-xs-12 pull-right">
    <div class="row">
        <div class="col-12">
            <div class="amazing">
                <div class="widget widget-product card">
                    <span class="amazing-title"><img src="{{asset('customer-assets/images/product-slider-2/amazing.png')}}"
                            alt="amazing"></span>
                    <div class="product-carousel owl-carousel owl-theme owl-rtl owl-loaded owl-drag">
                        <div class="owl-stage-outer">
                            <div class="owl-stage"
                                style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 2234px;">
                                <div class="owl-item active" style="width: 309.083px; margin-left: 10px;">
                                    <div class="item">
                                        <a href="#">
                                            <img src="{{asset('customer-assets/images/product-slider-2/111460776.jpg')}}"
                                                class="img-fluid" alt="img-slider">
                                        </a>
                                        <h2 class="post-title">
                                            <a href="#">
                                                گوشی موبایل سامسونگ مدل Galaxy A50 SM-A505F/DS دو ...
                                            </a>
                                        </h2>
                                        <div class="price">
                                            <del><span>۴,۵۳۰,۰۰۰<span>تومان</span></span></del>
                                            <ins><span>۳,۳۹۵,۰۰۰<span>تومان</span></span></ins>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item active" style="width: 309.083px; margin-left: 10px;">
                                    <div class="item">
                                        <a href="#">
                                            <img src="{{asset('customer-assets/images/product-slider-2/111474228.jpg')}}"
                                                class="img-fluid" alt="img-slider">
                                        </a>
                                        <h2 class="post-title">
                                            <a href="#">
                                                گوشی موبایل سامسونگ مدل Galaxy A10 SM-A105F/DS دو ...
                                            </a>
                                        </h2>
                                        <div class="price">
                                            <del><span>۴,۵۳۰,۰۰۰<span>تومان</span></span></del>
                                            <ins><span>۳,۳۹۵,۰۰۰<span>تومان</span></span></ins>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item active" style="width: 309.083px; margin-left: 10px;">
                                    <div class="item">
                                        <a href="#">
                                            <img src="{{asset('customer-assets/images/product-slider-2/112145268.jpg')}}"
                                                class="img-fluid" alt="img-slider">
                                        </a>
                                        <h2 class="post-title">
                                            <a href="#">
                                                گوشی موبایل سامسونگ مدل Galaxy A70 SM-A705FN/DS دو...
                                            </a>
                                        </h2>
                                        <div class="price">
                                            <del><span>۴,۵۳۰,۰۰۰<span>تومان</span></span></del>
                                            <ins><span>۳,۳۹۵,۰۰۰<span>تومان</span></span></ins>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item active" style="width: 309.083px; margin-left: 10px;">
                                    <div class="item">
                                        <a href="#">
                                            <img src="{{asset('customer-assets/images/product-slider-2/111475300.jpg')}}"
                                                class="img-fluid" alt="img-slider">
                                        </a>
                                        <h2 class="post-title">
                                            <a href="#">
                                                گوشی موبایل سامسونگ مدل Galaxy A30 SM-A305F/DS دو ...
                                            </a>
                                        </h2>
                                        <div class="price">
                                            <del><span>۴,۵۳۰,۰۰۰<span>تومان</span></span></del>
                                            <ins><span>۳,۳۹۵,۰۰۰<span>تومان</span></span></ins>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 309.083px; margin-left: 10px;">
                                    <div class="item">
                                        <a href="#">
                                            <img src="{{asset('customer-assets/images/product-slider-2/113542184.jpg')}}"
                                                class="img-fluid" alt="img-slider">
                                        </a>
                                        <h2 class="post-title">
                                            <a href="#">
                                                گوشی موبایل اپل مدل iPhone 11 Pro Max A2218 دو سیم...
                                            </a>
                                        </h2>
                                        <div class="price">
                                            <del><span>۴,۵۳۰,۰۰۰<span>تومان</span></span></del>
                                            <ins><span>۳,۳۹۵,۰۰۰<span>تومان</span></span></ins>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 309.083px; margin-left: 10px;">
                                    <div class="item">
                                        <a href="#">
                                            <img src="assets/"
                                                class="img-fluid" alt="img-slider">
                                        </a>
                                        <h2 class="post-title">
                                            <a href="#">
                                                گوشی موبایل سامسونگ مدل Galaxy A20 SM-A205F/DS دو ...
                                            </a>
                                        </h2>
                                        <div class="price">
                                            <del><span>۴,۵۳۰,۰۰۰<span>تومان</span></span></del>
                                            <ins><span>۳,۳۹۵,۰۰۰<span>تومان</span></span></ins>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 309.083px; margin-left: 10px;">
                                    <div class="item">
                                        <a href="#">
                                            <img src="assets/images/product-slider-2/111472656.jpg"
                                                class="img-fluid" alt="img-slider">
                                        </a>
                                        <h2 class="post-title">
                                            <a href="#">
                                                گوشی موبایل سامسونگ مدل Samsung Galaxy S10 Plus SM...
                                            </a>
                                        </h2>
                                        <div class="price">
                                            <del><span>۴,۵۳۰,۰۰۰<span>تومان</span></span></del>
                                            <ins><span>۳,۳۹۵,۰۰۰<span>تومان</span></span></ins>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--  product-slider-------------------->

<!--slider-amazing----------------------------->
<section class="section-slider amazing-section mb-3 mt-4" style="background: rgb(239, 57, 78);">
    <div class="container-amazing">
        <div class="container-main">
            <div class="row">
                <!-- بخش تصویر و دکمه مشاهده همه -->
                <div class="col-lg-3 display-md-none pull-right">
                    <div class="amazing-product text-center mt-5">
                        <a href="">
                            <img src="{{ asset('customer-assets/images/amazing/amazing.png') }}" alt="amazing">
                        </a>
                        <a href="#" class="view-all-amazing-btn">
                            مشاهده همه
                            <i class="uil uil-angle-left"></i>
                        </a>
                    </div>
                </div>

                <!-- بخش اسلایدر کالاها -->
                <div class="col-lg-9 col-md-12 pull-left">
                    <div class="section-slider-content">
                        <div class="section-slider-product slider-amazing mt-3">
                            <div class="widget widget-product card" style="margin:0;">
                                <header class="card-header card-header-amazing">
                                    <span class="title-one">پیشنهاد شگفت انگیز</span>
                                    <a class="card-title">مشاهده همه</a>
                                </header>
                                <div class="product-carousel owl-carousel owl-theme owl-rtl owl-loaded owl-drag">
                                    <div class="owl-stage-outer">
                                        <div class="owl-stage" style="display: flex; overflow-x: auto;">
                                            @foreach ($mostVisitedProducts as $mostVisitedProduct)
                                                <div class="owl-item" style="flex: 0 0 auto; margin-left: 10px; margin-right: 10px;">
                                                    <div class="item">
                                                        <a href="{{ route('customer.market.product', $mostVisitedProduct) }}">
                                                            <img class="w-100" src="{{ asset($mostVisitedProduct->image['indexArray']['medium']) }}" alt="{{ $mostVisitedProduct->name }}">
                                                        </a>
                                                        <h2 class="post-title">
                                                            <h3>{{ Str::limit($mostVisitedProduct->name, 10) }}</h3>
                                                        </h2>
                                                        <div class="price">
                                                            <section class="product-price">{{ priceFormat($mostVisitedProduct->price) }} تومان</section>
                                                        </div>
                                                        <div class="product-box-timer">
                                                            <span class="fa fa-clock-o"></span>
                                                            <div class="countdown countdown-style-3 h4"
                                                                data-date-time="10/10/2025 24:00"
                                                                data-labels='{"label-second": "", "label-minute": "", "label-hour": ""}'>
                                                            </div>
                                                        </div>

                                                        <div class="text-center mt-2">
                                                            <!-- دکمه افزودن به علاقه‌مندی‌ها -->
                                                            <a href="#" class="btn-favorite" style="background-color: #ff4757; color: white; padding: 8px 16px; border-radius: 4px; text-decoration: none; margin-left: 8px;">
                                                                <i class="uil uil-heart"></i> افزودن به علاقه‌مندی‌ها
                                                            </a>
                                                        
                                                            <!-- دکمه مشاهده کالا -->
                                                            <a href="{{ route('customer.market.product', $mostVisitedProduct) }}" class="btn-view-product" style="background-color: #2ed573; color: white; padding: 8px 16px; border-radius: 4px; text-decoration: none;">
                                                                <i class="uil uil-eye"></i> مشاهده کالا
                                                            </a>
                                                        </div>


                                                        <!-- دکمه مشاهده کالا -->
                                                       
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--slider-amazing----------------------------->



<!--slider-amazing----------------------------->
<section class="section-slider amazing-section mb-3 mt-4" style="background: #6bb927;">
    <div class="container-amazing">
        <div class="container-main">
            <div>
                <div class="col-lg-3 display-md-none pull-right">
                    <div class="amazing-product text-center mt-5">
                        <a href="#">
                            <img src="{{asset('customer-assets/images/amazing/amazing-supermarket.png')}}" alt="amazing">
                        </a>
                        <a href="#" class="view-all-amazing-btn">
                            مشاهده همه
                            <i class="uil uil-angle-left"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-9 col-md-12 pull-left">
                    <div class="section-slider-content">
                        <div class="section-slider-product slider-amazing amazing-supermarket mt-3">
                            <div class="widget widget-product card" style="margin:0;">
                                <header class="card-header card-header-amazing">
                                    <span class="title-one">شگفت انگیز سوپر مارکتی</span>
                                    <a class="card-title">مشاهده همه</a>
                                </header>
                                <div class="product-carousel owl-carousel owl-theme owl-rtl owl-loaded owl-drag">
                                    <div class="owl-stage-outer">
                                        <div class="owl-stage"
                                            style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 2234px;">
                                            
                                            @foreach ($brands as $brand)
                                            
                                            <div class="owl-item active"
                                                style="width: 309.083px; margin-left: 10px;">


                                                <div class="item">
                                                    <a href="#">
                                                        <img class="rounded-2" src="{{ asset($brand->logo['indexArray']['medium']) }}" alt="">
                                                    </a>
                                                    
                                                    <div class="price">
                                                       
                                                        
                                                    </div>
                                                    <div class="product-box-timer">
                                                        
                                                        <div class="countdown countdown-style-3 h4"
                                                            data-date-time="10/10/2025 24:00"
                                                            data-labels='{"label-second": "", "label-minute": "", "label-hour": ""}'>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach




                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--slider-amazing----------------------------->

<!--    discount section ------------------->
<div class="col-lg-2 col-md-12 col-xs-12 pull-left">
    <div class="slider-sidebar">
        <div class="widget-suggestion widget card">
            <header class="card-header promo-single-headline">
                <h3 class="card-title">محصولات دارای تخفیف</h3>
            </header>
            <div id="progressBar">
                <div class="slide-progress" style="width: 100%; transition: width 5000ms ease 0s;"></div>
            </div>
            <div id="suggestion-slider" class="owl-carousel owl-theme owl-rtl owl-loaded owl-drag">
                <div class="owl-stage-outer">
                    @if ($offerProducts->isEmpty())
                        <p>هیچ محصول تخفیف‌داری در حال حاضر وجود ندارد.</p>
                    @else
                        @foreach ($offerProducts as $offerProduct)
                            <div class="owl-stage">
                                <div class="owl-item cloned">
                                    <div class="item" style="margin-bottom: 40px;"> <!-- افزایش margin-bottom -->
                                        <a href="{{ route('customer.market.product', $offerProduct) }}">
                                            <img class="w-100" src="{{ asset($offerProduct->image['indexArray']['medium']) }}" alt="{{ $offerProduct->name }}">
                                        </a>
                                        <h3 class="mb-3">{{ Str::limit($offerProduct->name, 10) }}</h3>
                                        <div class="price">
                                            @if($offerProduct->activeAmazingSales())
                                                <div class="d-flex flex-column">
                                                    <span class="original-price text-muted text-decoration-line-through mb-2">
                                                        {{ priceFormat($offerProduct->price) }} تومان
                                                    </span>
                                                    <span class="discount-price text-danger font-weight-bold mb-2" style="font-size: 20px;">
                                                        با تخفیف: {{ priceFormat($offerProduct->price - ($offerProduct->price * $offerProduct->activeAmazingSales()->percentage / 100)) }} تومان
                                                    </span>
                                                    <span class="discount-percentage text-success" style="font-size: 16px;">
                                                        تخفیف {{ $offerProduct->activeAmazingSales()->percentage }}%
                                                    </span>
                                                </div>
                                            @else
                                                <span class="product-price font-weight-bold" style="font-size: 20px;">
                                                    {{ priceFormat($offerProduct->price) }} تومان
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>




<!--    Slider-sidebar------------------->

<!--   slider-product-------------------->
<div class="col-lg-10 col-md-12 col-xs-12 pull-right mt-2">
    <div class="row">
        <div class="col-12">
            <div class="widget widget-product card">
           
                
                <div class="product-carousel owl-carousel owl-theme owl-rtl owl-loaded owl-drag">
                    <div class="owl-stage-outer">
                        <div class="owl-stage"
                            style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 2234px;">
                            @foreach ($mostVisitedProducts as $mostVisitedProduct)
                                <div class="owl-item active" style="width: 309.083px; margin-left: 10px;">
                                    <div class="item">
                                        <a href="{{ route('customer.market.product', $mostVisitedProduct) }}">
                                            <img class="w-100" src="{{ asset($mostVisitedProduct->image['indexArray']['medium']) }}" alt="{{ $mostVisitedProduct->name }}">
                                        </a>
                                        <h2 class="post-title">
                                            <h3>{{ Str::limit($mostVisitedProduct->name, 10) }}</h3>
                                        </h2>
                                        <div class="price">
                                            <section class="product-price">{{ priceFormat($mostVisitedProduct->price) }} تومان</section>
                                        </div>
                                        <div class="product-box-timer">
                                            <span class="fa fa-clock-o"></span>
                                            <div class="countdown countdown-style-3 h4"
                                                data-date-time="10/10/2025 24:00"
                                                data-labels='{"label-second": "", "label-minute": "", "label-hour": ""}'>
                                            </div>
                                        </div>
                
                                        <div class="text-center mt-2">
                                            <!-- دکمه افزودن به علاقه‌مندی‌ها -->
                                            <a href="#" class="btn-favorite" style="background-color: #ff4757; color: white; padding: 8px 16px; border-radius: 4px; text-decoration: none; margin-left: 8px;">
                                                <i class="uil uil-heart"></i> افزودن به علاقه‌مندی‌ها
                                            </a>
                                        
                                            <!-- دکمه مشاهده کالا -->
                                            <a href="{{ route('customer.market.product', $mostVisitedProduct) }}" class="btn-view-product" style="background-color: #2ed573; color: white; padding: 8px 16px; border-radius: 4px; text-decoration: none;">
                                                <i class="uil uil-eye"></i> مشاهده کالا
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--        category--------------------------->
<div class="col-12">
    <div class="promotion-categories-container mt-4 mb-4">
        <span class="promotion-categories-title">بیش از ۲،۰۰۰،۰۰۰ کالا در دسته‌بندی‌های مختلف</span>
        <div class="category-container">
            <div class="promotion-categories">
                <a href="#" class="promotion-category">
                    <img src="{{asset('customer-assets/images/category/computer.png')}}" alt="promotion-categories">
                    <div class="promotion-category-name">کالای دیجیتال</div>
                    <div class="promotion-category-quantity">۲۰۳۰۰۰ کالا</div>
                </a>
                <a href="#" class="promotion-category">
                    <img src="{{asset('customer-assets/images/category/medication.png')}}" alt="promotion-categories">
                    <div class="promotion-category-name">لوازم آرایشی</div>
                    <div class="promotion-category-quantity">۶۰۰۰۰ کالا</div>
                </a>
                <a href="#" class="promotion-category">
                    <img src="{{asset('customer-assets/images/category/web.png')}}" alt="promotion-categories">
                    <div class="promotion-category-name">خودرو، ابزار و اداری</div>
                    <div class="promotion-category-quantity">۷۲۰۰۰ کالا</div>
                </a>
                <a href="#" class="promotion-category">
                    <img src="{{asset('customer-assets/images/category/dress.png')}}" alt="promotion-categories">
                    <div class="promotion-category-name">مد و پوشاک</div>
                    <div class="promotion-category-quantity">۲۶۱۰۰۰ کالا</div>
                </a>
                <a href="#" class="promotion-category">
                    <img src="{{asset('customer-assets/images/category/furniture-and-household.png')}}" alt="promotion-categories">
                    <div class="promotion-category-name">خانه و آشپزخانه</div>
                    <div class="promotion-category-quantity">۲۷۷۰۰۰ کالا</div>
                </a>
                <a href="#" class="promotion-category">
                    <img src="{{asset('customer-assets/images/category/pen.png')}}" alt="promotion-categories">
                    <div class="promotion-category-name">کتاب، لوازم تحریر و هنر</div>
                    <div class="promotion-category-quantity">۱۰۴۰۰۰ کالا</div>
                </a>
                <a href="#" class="promotion-category">
                    <img src="{{asset('customer-assets/images/category/motherhood.png')}}" alt="promotion-categories">
                    <div class="promotion-category-name">اسباب بازی، کودک و نوزاد</div>
                    <div class="promotion-category-quantity">۳۷۰۰۰ کالا</div>
                </a>
                <a href="#" class="promotion-category">
                    <img src="{{asset('customer-assets/images/category/sports-and-competition.png')}}" alt="promotion-categories">
                    <div class="promotion-category-name">ورزش و سفر</div>
                    <div class="promotion-category-quantity">۱۹۰۰۰ کالا</div>
                </a>
                <a href="#" class="promotion-category">
                    <img src="{{asset('customer-assets/images/category/food-and-restaurant.png')}}" alt="promotion-categories">
                    <div class="promotion-category-name">خوردنی و آشامیدنی</div>
                    <div class="promotion-category-quantity">۲۷۰۰۰ کالا</div>
                </a>
            </div>
        </div>
    </div>
</div>
<!--        category--------------------------->


<!--   slider-product-------------------->

<!--   adplacement -------------------->
{{-- <div class="container">
    <div class="row adplacement">
        @foreach ($topBanners as $topBanner)
        <div class="col-6 col-lg-3" style="padding-left:0;">
            <a href="#" class="item-adplacement d-block">
                <img class="w-100 h-100 rounded-2 object-fit-cover" src="{{ asset($topBanner->image) }}" alt="{{ $topBanner->title }}">
            </a>
        </div>
        @endforeach
    </div>
</div> --}}

  <div class="adplacement">

    @foreach ($topBanners as $topBanner)
        <div class="col-lg-6 col-xs-12 pull-right">
            <a href="#" class="item-adplacement">
                <img class="w-100 h-100 rounded-2 object-fit-cover" src="{{ asset($topBanner->image) }}" alt="{{ $topBanner->title }}">
            </a>
        </div>
        @endforeach
        
    </div>


<!--   slider-product-------------------->
<div class="col-lg-12 col-md-12 col-xs-12 pull-right">
    <div class="row">
        <div class="col-12">
            <div class="widget widget-product card">
                <header class="card-header">
                    <span class="title-one">کامیپوتر های مجموعه </span>
                </header>
                <div class="product-carousel owl-carousel owl-theme owl-rtl owl-loaded owl-drag">
                    <div class="owl-stage-outer">
                        
                        @php
                            $filteredProducts = $mostVisitedProducts->where('category_id', 2);
                        @endphp

                        @if ($filteredProducts->isEmpty())
                            <p>دسته بندی هنوز ساخته نشده است.</p>
                        @else
                            @foreach ($filteredProducts as $mostVisitedProduct)
                            <div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 2234px;">
                                <div class="owl-item active" style="width: 309.083px; margin-left: 10px;">
                                    <div class="item">
                                        <a href="{{ route('customer.market.product', $mostVisitedProduct) }}">
                                            <img class="w-100" src="{{ asset($mostVisitedProduct->image['indexArray']['medium']) }}" alt="{{ $mostVisitedProduct->name }}">
                                        </a>
                                        
                                        <h2 class="post-title">
                                            <h3>{{ Str::limit($mostVisitedProduct->name, 10) }}</h3>
                                        </h2>

                                        <div class="price">
                                            <section class="product-price">{{ priceFormat($mostVisitedProduct->price) }} تومان</section>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>







<div class="col-lg-12 col-md-12 col-xs-12 pull-right">
    <div class="row">
        <div class="col-12">
            <div class="widget widget-product card">
                <header class="card-header">
                    <span class="title-one">از ارزون ترین تا گرون ترین </span>
                </header>
                <div class="product-carousel owl-carousel owl-theme owl-rtl owl-loaded owl-drag">
                    <div class="owl-stage-outer">
                        <div class="owl-stage"
                            style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 2234px;">
                            @foreach ($mostVisitedProducts->sortBy('price') as $mostVisitedProduct)
                            <div class="owl-item active" style="width: 309.083px; margin-left: 10px;">
                                <div class="item">
                                    <a href="{{ route('customer.market.product', $mostVisitedProduct) }}">
                                        <img class="w-100" src="{{ asset($mostVisitedProduct->image['indexArray']['medium']) }}" alt="{{ $mostVisitedProduct->name }}">
                                    </a>
                                   
                                    <h2 class="post-title">
                                        <h3>{{ Str::limit($mostVisitedProduct->name, 10) }}</h3>
                                    </h2>
                                    
                                    <div class="price">
                                        <section class="product-price">{{ priceFormat($mostVisitedProduct->price) }} تومان</section>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




                                                {{-- @foreach ($mostVisitedProducts as $mostVisitedProduct)
                                                <div class="owl-item" style="flex: 0 0 auto; margin-left: 10px; margin-right: 10px;">
                                                    <div class="item">
                                                        <a href="{{ route('customer.market.product', $mostVisitedProduct) }}">
                                                            <img class="w-100" src="{{ asset($mostVisitedProduct->image['indexArray']['medium']) }}" alt="{{ $mostVisitedProduct->name }}">
                                                        </a>
                                                        <h2 class="post-title">
                                                            <h3>{{ Str::limit($mostVisitedProduct->name, 10) }}</h3>
                                                        </h2>
                                                        <div class="price">
                                                            <section class="product-price">{{ priceFormat($mostVisitedProduct->price) }} تومان</section>
                                                        </div>
                                                        <div class="product-box-timer">
                                                            <span class="fa fa-clock-o"></span>
                                                            <div class="countdown countdown-style-3 h4"
                                                                data-date-time="10/10/2025 24:00"
                                                                data-labels='{"label-second": "", "label-minute": "", "label-hour": ""}'>
                                                            </div>
                                                        </div>

                                                        <div class="text-center mt-2">
                                                            <!-- دکمه افزودن به علاقه‌مندی‌ها -->
                                                            <a href="#" class="btn-favorite" style="background-color: #ff4757; color: white; padding: 8px 16px; border-radius: 4px; text-decoration: none; margin-left: 8px;">
                                                                <i class="uil uil-heart"></i> افزودن به علاقه‌مندی‌ها
                                                            </a>
                                                        
                                                            <!-- دکمه مشاهده کالا -->
                                                            <a href="{{ route('customer.market.product', $mostVisitedProduct) }}" class="btn-view-product" style="background-color: #2ed573; color: white; padding: 8px 16px; border-radius: 4px; text-decoration: none;">
                                                                <i class="uil uil-eye"></i> مشاهده کالا
                                                            </a>
                                                        </div>


                                                        <!-- دکمه مشاهده کالا -->
                                                       
                                                    </div>
                                                </div>
                                            @endforeach --}}
<!--   slider-product-------------------->


<!--banner----------------------------->
<div class="col-12">
    <div class="banner" style="height: auto;">
        @if($bottomBanner)
            <a href="#">
                <img src="{{ asset($bottomBanner->image) }}" alt="{{ $bottomBanner->title }}" class="w-100">
            </a>
        @else
            <p>بنری برای نمایش وجود ندارد.</p>
        @endif
    </div>
</div>

<!--banner----------------------------->


<div class="col-lg-12 col-md-12 col-xs-12 pull-right">
    <div class="row">
        <div class="col-12">
            <div class="widget widget-product card">
                <header class="card-header">
                    <span class="title-one">گوشی های مجموعه</span>
                </header>
                <div class="product-carousel owl-carousel owl-theme owl-rtl owl-loaded owl-drag">
                    <div class="owl-stage-outer">
                        
                        @php
                            $filteredProducts = $mostVisitedProducts->where('category_id', 1);
                        @endphp

                        @if ($filteredProducts->isEmpty())
                            <p>دسته بندی هنوز ساخته نشده است.</p>
                        @else
                            @foreach ($filteredProducts as $mostVisitedProduct)
                            <div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 2234px;">
                                <div class="owl-item active" style="width: 309.083px; margin-left: 10px;">
                                    <div class="item">
                                        <a href="{{ route('customer.market.product', $mostVisitedProduct) }}">
                                            <img class="w-100" src="{{ asset($mostVisitedProduct->image['indexArray']['medium']) }}" alt="{{ $mostVisitedProduct->name }}">
                                        </a>
                                        
                                        <h2 class="post-title">
                                            <h3>{{ Str::limit($mostVisitedProduct->name, 10) }}</h3>
                                        </h2>

                                        <div class="price">
                                            <section class="product-price">{{ priceFormat($mostVisitedProduct->price) }} تومان</section>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!--   slider-product-------------------->
<div class="col-lg-12 col-md-12 col-xs-12 pull-right">
    <div class="row">
        <div class="col-12">
            <div class="widget widget-product card">
                <header class="card-header">
                    <span class="title-one">برندهای ویژه</span>
                </header>
                <div class="product-carousel owl-carousel owl-theme owl-rtl owl-loaded owl-drag">
                    <div class="owl-stage-outer">
                        @foreach ($brands as $brand)
                                            
                        <div class="owl-item active"
                            style="width: 309.083px; margin-left: 10px;">


                            <div class="item">
                                <a href="#">
                                    <img class="rounded-2" src="{{ asset($brand->logo['indexArray']['medium']) }}" alt="">
                                </a>
                                
                                <div class="price">
                                   
                                    
                                </div>
                                <div class="product-box-timer">
                                    
                                    <div class="countdown countdown-style-3 h4"
                                        data-date-time="10/10/2025 24:00"
                                        data-labels='{"label-second": "", "label-minute": "", "label-hour": ""}'>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach

                </div>
            </div>
        </div>
    </div>
</div>


<div class="col-lg-12 col-md-12 col-xs-12 pull-right">
    <div class="row">
        <div class="col-12">
            <div class="widget widget-product card">
                <header class="card-header">
                    <span class="title-one">از بیشترین تخفیف تا کمترین</span>
                </header>
                <div class="product-carousel owl-carousel owl-theme owl-rtl owl-loaded owl-drag">
                    <div class="owl-stage-outer">
                        @if ($offerProducts->isEmpty())
                            <p>هیچ محصول تخفیف‌داری در حال حاضر وجود ندارد.</p>
                        @else
                            @foreach ($offerProducts->sortByDesc(function ($product) {
                                return $product->activeAmazingSales() ? $product->activeAmazingSales()->percentage : 0;
                            }) as $offerProduct)
                                <div class="owl-stage">
                                    <div class="owl-item active" style="width: 309.083px; margin-left: 10px;">
                                        <div class="item" style="margin-bottom: 40px;">
                                            <a href="{{ route('customer.market.product', $offerProduct) }}">
                                                <img class="w-100" src="{{ asset($offerProduct->image['indexArray']['medium']) }}" alt="{{ $offerProduct->name }}">
                                            </a>
                                            
                                            <h3 class="mb-3">{{ Str::limit($offerProduct->name, 10) }}</h3>
                                            <div class="price">
                                                @if($offerProduct->activeAmazingSales())
                                                    <div class="d-flex flex-column">
                                                        <span class="original-price text-muted text-decoration-line-through mb-2">
                                                            {{ priceFormat($offerProduct->price) }} تومان
                                                        </span>
                                                        <span class="discount-price text-danger font-weight-bold mb-2" style="font-size: 20px;">
                                                            با تخفیف: {{ priceFormat($offerProduct->price - ($offerProduct->price * $offerProduct->activeAmazingSales()->percentage / 100)) }} تومان
                                                        </span>
                                                        <span class="discount-percentage text-success" style="font-size: 16px;">
                                                            تخفیف {{ $offerProduct->activeAmazingSales()->percentage }}%
                                                        </span>
                                                        
                                                        @php
                                                            // تاریخ پایان تخفیف را می‌خوانیم
                                                            $endDate = $offerProduct->activeAmazingSales()->end_date;
                                                            $now = now();
                                                            $diff = $now->diffInDays($endDate, false); // تفاوت روزها
                                                            $diff = max(intval($diff), 0); // اگر diff منفی شد، صفر کنیم و از intval برای حذف اعشار استفاده می‌کنیم
                                                        @endphp

                                                        @if ($diff > 0)
                                                            <span class="discount-timer text-info" style="font-size: 12px;">
                                                                {{ $diff }} روز تا پایان تخفیف باقی‌مانده
                                                            </span>
                                                        @else
                                                            <span class="discount-ended text-danger" style="font-size: 12px;">
                                                                مهلت تخفیف تمام شده
                                                            </span>
                                                        @endif
                                                    </div>
                                                @else
                                                    <span class="product-price font-weight-bold" style="font-size: 20px;">
                                                        {{ priceFormat($offerProduct->price) }} تومان
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>












<div class="col-lg-12 col-md-12 col-xs-12 pull-right">
    <div class="row">
        <div class="col-12">
                                     
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>                           
                                    </div>
                                </div>
                            </div>
                          
                        </div>
                    </div>
                </div>
            </div>
        </div>   
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>








@endsection



@section('script')
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"></script>

@endsection
















