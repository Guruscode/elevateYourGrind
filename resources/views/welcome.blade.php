<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Male_Fashion Template">
    <meta name="keywords" content="Male_Fashion, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Elevate your Grind Male-Luxury | Wristwatch</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="offcanvas__option">
            <div class="offcanvas__links">
                <a ">Sign in</a>
             
            </div>
          
        </div>
       
        <div id="mobile-menu-wrap"></div>
        <div class="offcanvas__text">
            <p>5-day return or refund guarantee.</p>
        </div>
    </div>
    <!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-7">
                        <div class="header__top__left">
                            <p>5-day return or refund guarantee.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-5">
                        <div class="header__top__right">
                            <div class="header__top__links">
                                <a ">Sign in</a>
                               
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3">
                    <div class="header__logo">
                        <a href="{{route('home')}}" style="font-size: 24px; color:black; font:bolder;">Elevate your Grind <span style="color: red">.</span></a>
                        {{-- <a href="./index.html"><img src="{{asset('img/logo.png.webp')}}" alt=""></a> --}}
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <nav class="header__menu mobile-menu">
                        <ul>
                            <li class="active"><a href="{{route('home')}}">Home</a></li>
                            <li><a href="{{route('collection')}}">View Collection</a></li>
                            <li><a href="{{route('cart.show')}}">View Cart</a></li>
                            {{-- <li><a href="./blog.html">Blog</a></li> --}}
                            <li><a href="{{route('contact')}}">Contacts</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3 col-md-3">
                    <div class="header__nav__option">
                        <a href="#" id="cart-link"  style="color: red !important; font-size:18px">
                            <img src="{{ asset('img/icon/cart.png.webp') }}" alt="">
                            <span id="cart-count">0</span> items
                        </a>
                       
                    </div>
                </div>
                
                
               
            </div>
            <div class="canvas__open"><i class="fa fa-bars"></i></div>
        </div>
    </header>
    <!-- Header Section End -->

    <!-- Hero Section Begin -->
    <section class="hero">
        <div class="hero__slider owl-carousel">
            <div class="hero__items set-bg" data-setbg="{{asset('img/watch.jpg')}}">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-5 col-lg-7 col-md-8">
                            <div class="hero__text">
                                <h6 style="color: white !important">Precision Engineering</h6>
                                <h2 style="color: white !important">Elevate Your Grind Signature Series</h2>
                                <p style="color: white !important">Crafting timeless elegance where innovation meets luxury. Meticulously designed watches that elevate every moment of your journey.</p>
                                <a href="#" class="primary-btn" >Explore Collection<span class="arrow_right"></span></a>
                                <div class="hero__social">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-pinterest"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero__items set-bg" data-setbg="{{asset('img/watch2.jpg')}}">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-5 col-lg-7 col-md-8">
                            <div class="hero__text">
                                <h6 style="color: white !important">Limited Edition</h6>
                                <h2 style="color: white !important">Timeless Precision</h2>
                                <p style="color: white !important">Elevate Your Grind presents an exclusive collection of haute horlogerie. Uncompromising quality, exceptional design, and supreme craftsmanship.</p>
                                <a href="#" class="primary-btn" style="color: white !important">Shop now <span class="arrow_right"></span></a>
                                <div class="hero__social">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-pinterest"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

   <!-- Banner Section Begin -->
<section class="banner spad">
    <div class="container">
        <div class="row">
            <!-- First Banner Item -->
            <div class="col-lg-7 offset-lg-4">
                <div class="banner__item">
                    <div class="banner__item__pic">
                        <img src="{{asset('inage/1.jpg')}}" alt="Luxury Wristwatch">
                    </div>
                    <div class="banner__item__text">
                        <h2>Timeless Elegance</h2>
                        <p>Discover the newest Collection of Luxury Wristwatches</p>
                        <a href="{{route('collection')}}">Explore Collection</a>
                    </div>
                </div>
            </div>

            <!-- Second Banner Item -->
            <div class="col-lg-5">
                <div class="banner__item banner__item--middle">
                    <div class="banner__item__pic">
                        <img src="{{asset('inage/2.jpg')}}" alt="Premium Watch Accessories">
                    </div>
                    <div class="banner__item__text">
                        <h2>Premium Accessories</h2>
                        <p>Complement Your Style with Exquisite Add-ons</p>
                        <a href="{{route('collection')}}">Shop Accessories</a>
                    </div>
                </div>
            </div>

            <!-- Third Banner Item -->
            <div class="col-lg-7">
                <div class="banner__item banner__item--last">
                    <div class="banner__item__pic">
                        <img src="{{asset('inage/3.jpg')}}" alt="Limited Edition Watches">
                    </div>
                    <div class="banner__item__text">
                        <h2>Limited Edition</h2>
                        <p>Exclusive Timepieces for Discerning Collectors</p>
                        <a href="{{route('collection')}}">View Limited Editions</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Banner Section End -->

    <!-- Product Section Begin -->
    <section class="product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="filter__controls">
                        <li class="active" data-filter="*">Best Sellers</li>
                        <li data-filter=".new-arrivals">New Arrivals</li>
                        <li data-filter=".hot-sales">Hot Sales</li>
                    </ul>
                </div>
            </div>
            <div class="row product__filter">
                <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix new-arrivals">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="{{asset('inage/1.jpg')}}">
                            <span class="label">New</span>
                            <ul class="product__hover">
                                <li><a href="#"><img src="{{asset('img/icon/heart.png.webp')}}" alt=""></a></li>
                                <li><a href="#"><img src="{{asset('img/icon/compare.png.webp')}}" alt=""> <span>Compare</span></a></li>
                                <li><a href="#"><img src="{{asset('img/icon/search.png.webp')}}" alt=""></a></li>
                            </ul>
                        </div>
                        <div class="product__item__text">
                            <h6>Piqué Biker Jacket</h6>
                            <a href="#" class="add-cart" 
                            data-product-name="Piqué Biker Jacket" 
                            data-product-price="67.24" 
                            data-product-id="1">+ Add To Cart</a>
                            <div class="rating">
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                            <h5>₦67.24</h5>
                            <div class="product__color__select">
                                <label for="pc-1">
                                    <input type="radio" id="pc-1">
                                </label>
                                <label class="active black" for="pc-2">
                                    <input type="radio" id="pc-2">
                                </label>
                                <label class="grey" for="pc-3">
                                    <input type="radio" id="pc-3">
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix hot-sales">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="{{asset('inage/2.jpg')}}">
                            <ul class="product__hover">
                                <li><a href="#"><img src="{{asset('img/icon/heart.png.webp')}}" alt=""></a></li>
                                <li><a href="#"><img src="{{asset('img/icon/compare.png.webp')}}" alt=""> <span>Compare</span></a></li>
                                <li><a href="#"><img src="{{asset('img/icon/search.png.webp')}}" alt=""></a></li>
                            </ul>
                        </div>
                        <div class="product__item__text">
                            <h6>Piqué Biker Jacket</h6>
                            <a href="#" class="add-cart" 
                            data-product-name="Piqué Biker Jacket" 
                            data-product-price="67.24" 
                            data-product-id="1">+ Add To Cart</a>
                            <div class="rating">
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                            <h5>₦67.24</h5>
                            <div class="product__color__select">
                                <label for="pc-4">
                                    <input type="radio" id="pc-4">
                                </label>
                                <label class="active black" for="pc-5">
                                    <input type="radio" id="pc-5">
                                </label>
                                <label class="grey" for="pc-6">
                                    <input type="radio" id="pc-6">
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix new-arrivals">
                    <div class="product__item sale">
                        <div class="product__item__pic set-bg" data-setbg="{{asset('inage/3.jpg')}}">
                            <span class="label">Sale</span>
                            <ul class="product__hover">
                                <li><a href="#"><img src="{{asset('img/icon/heart.png.webp')}}" alt=""></a></li>
                                <li><a href="#"><img src="{{asset('img/icon/compare.png.webp')}}" alt=""> <span>Compare</span></a></li>
                                <li><a href="#"><img src="{{asset('img/icon/search.png.webp')}}" alt=""></a></li>
                            </ul>
                        </div>
                        <div class="product__item__text">
                            <h6>Multi-pocket Chest Bag</h6>
                            <a href="#" class="add-cart" 
                            data-product-name="Piqué Biker Jacket" 
                            data-product-price="67.24" 
                            data-product-id="1">+ Add To Cart</a>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                            <h5>₦43.48</h5>
                            <div class="product__color__select">
                                <label for="pc-7">
                                    <input type="radio" id="pc-7">
                                </label>
                                <label class="active black" for="pc-8">
                                    <input type="radio" id="pc-8">
                                </label>
                                <label class="grey" for="pc-9">
                                    <input type="radio" id="pc-9">
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix hot-sales">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="{{asset('inage/4.jpg')}}">
                            <ul class="product__hover">
                                <li><a href="#"><img src="{{asset('img/icon/heart.png.webp')}}" alt=""></a></li>
                                <li><a href="#"><img src="{{asset('img/icon/compare.png.webp')}}" alt=""> <span>Compare</span></a></li>
                                <li><a href="#"><img src="{{asset('img/icon/search.png.webp')}}" alt=""></a></li>
                            </ul>
                        </div>
                        <div class="product__item__text">
                            <h6>Diagonal Textured Cap</h6>
                            <a href="#" class="add-cart" 
                            data-product-name="Piqué Biker Jacket" 
                            data-product-price="67.24" 
                            data-product-id="1">+ Add To Cart</a>
                            <div class="rating">
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                            <h5>₦60.9</h5>
                            <div class="product__color__select">
                                <label for="pc-10">
                                    <input type="radio" id="pc-10">
                                </label>
                                <label class="active black" for="pc-11">
                                    <input type="radio" id="pc-11">
                                </label>
                                <label class="grey" for="pc-12">
                                    <input type="radio" id="pc-12">
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix new-arrivals">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="{{asset('inage/6.jpg')}}">
                            <ul class="product__hover">
                                <li><a href="#"><img src="{{asset('img/icon/heart.png.webp')}}" alt=""></a></li>
                                <li><a href="#"><img src="{{asset('img/icon/compare.png.webp')}}" alt=""> <span>Compare</span></a></li>
                                <li><a href="#"><img src="{{asset('img/icon/search.png.webp')}}" alt=""></a></li>
                            </ul>
                        </div>
                        <div class="product__item__text">
                            <h6>Lether Backpack</h6>
                            <a href="#" class="add-cart" 
                            data-product-name="Piqué Biker Jacket" 
                            data-product-price="67.24" 
                            data-product-id="1">+ Add To Cart</a>
                            <div class="rating">
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                            <h5>₦31.37</h5>
                            <div class="product__color__select">
                                <label for="pc-13">
                                    <input type="radio" id="pc-13">
                                </label>
                                <label class="active black" for="pc-14">
                                    <input type="radio" id="pc-14">
                                </label>
                                <label class="grey" for="pc-15">
                                    <input type="radio" id="pc-15">
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix hot-sales">
                    <div class="product__item sale">
                        <div class="product__item__pic set-bg" data-setbg="{{asset('inage/7.jpg')}}">
                            <span class="label">Sale</span>
                            <ul class="product__hover">
                                <li><a href="#"><img src="{{asset('img/icon/heart.png.webp')}}" alt=""></a></li>
                                <li><a href="#"><img src="{{asset('img/icon/compare.png.webp')}}" alt=""> <span>Compare</span></a></li>
                                <li><a href="#"><img src="{{asset('img/icon/search.png.webp')}}" alt=""></a></li>
                            </ul>
                        </div>
                        <div class="product__item__text">
                            <h6>Ankle Boots</h6>
                            <a href="#" class="add-cart">+ Add To Cart</a>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                            <h5>₦98.49</h5>
                            <div class="product__color__select">
                                <label for="pc-16">
                                    <input type="radio" id="pc-16">
                                </label>
                                <label class="active black" for="pc-17">
                                    <input type="radio" id="pc-17">
                                </label>
                                <label class="grey" for="pc-18">
                                    <input type="radio" id="pc-18">
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix new-arrivals">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="{{asset('inage/8.jpg')}}">
                            <ul class="product__hover">
                                <li><a href="#"><img src="{{asset('img/icon/heart.png.webp')}}" alt=""></a></li>
                                <li><a href="#"><img src="{{asset('img/icon/compare.png.webp')}}" alt=""> <span>Compare</span></a></li>
                                <li><a href="#"><img src="{{asset('img/icon/search.png.webp')}}" alt=""></a></li>
                            </ul>
                        </div>
                        <div class="product__item__text">
                            <h6>T-shirt Contrast Pocket</h6>
                            <a href="#" class="add-cart">+ Add To Cart</a>
                            <div class="rating">
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                            <h5>₦49.66</h5>
                            <div class="product__color__select">
                                <label for="pc-19">
                                    <input type="radio" id="pc-19">
                                </label>
                                <label class="active black" for="pc-20">
                                    <input type="radio" id="pc-20">
                                </label>
                                <label class="grey" for="pc-21">
                                    <input type="radio" id="pc-21">
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix hot-sales">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="{{asset('inage/2.jpg')}}">
                            <ul class="product__hover">
                                <li><a href="#"><img src="{{asset('img/icon/heart.png.webp')}}" alt=""></a></li>
                                <li><a href="#"><img src="{{asset('img/icon/compare.png.webp')}}" alt=""> <span>Compare</span></a></li>
                                <li><a href="#"><img src="{{asset('img/icon/search.png.webp')}}" alt=""></a></li>
                            </ul>
                        </div>
                        <div class="product__item__text">
                            <h6>Basic Flowing Scarf</h6>
                            <a href="#" class="add-cart">+ Add To Cart</a>
                            <div class="rating">
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                            <h5>₦26.28</h5>
                            <div class="product__color__select">
                                <label for="pc-22">
                                    <input type="radio" id="pc-22">
                                </label>
                                <label class="active black" for="pc-23">
                                    <input type="radio" id="pc-23">
                                </label>
                                <label class="grey" for="pc-24">
                                    <input type="radio" id="pc-24">
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Section End -->

   <!-- Categories Section Begin -->
<section class="categories spad">
    <div class="container">
        <div class="row">
            <!-- Text Section -->
            <div class="col-lg-3">
                <div class="categories__text">
                    <h2>Luxury Watches <br /> <span>Exclusive Editions</span> </h2>
                </div>
            </div>

            <!-- Hot Deal Section -->
            <div class="col-lg-4">
                <div class="categories__hot__deal">
                    <img src="{{asset('inage/4.jpg')}}" alt="Luxury Watch Hot Deal">
                    <div class="hot__deal__sticker">
                        <span>Sale Of</span>
                        <h5>₦999.99</h5>
                    </div>
                </div>
            </div>

            <!-- Deal Countdown Section -->
            <div class="col-lg-4 offset-lg-1">
                <div class="categories__deal__countdown">
                    <span>Deal Of The Week</span>
                    <h2>Rose Gold Chronograph</h2>
                    <div class="categories__deal__countdown__timer" id="countdown">
                        <div class="cd-item">
                            <span>5</span>
                            <p>Days</p>
                        </div>
                        <div class="cd-item">
                            <span>12</span>
                            <p>Hours</p>
                        </div>
                        <div class="cd-item">
                            <span>30</span>
                            <p>Minutes</p>
                        </div>
                        <div class="cd-item">
                            <span>45</span>
                            <p>Seconds</p>
                        </div>
                    </div>
                    <a href="#" class="primary-btn">Shop now</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Categories Section End -->


    <!-- Instagram Section Begin -->
    <section class="instagram spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="instagram__pic">
                        <div class="instagram__pic__item set-bg" data-setbg="{{asset('inage/2.jpg')}}"></div>
                        <div class="instagram__pic__item set-bg" data-setbg="{{asset('inage/2.jpg')}}"></div>
                        <div class="instagram__pic__item set-bg" data-setbg="i{{asset('inage/2.jpg')}}"></div>
                        <div class="instagram__pic__item set-bg" data-setbg="{{asset('inage/2.jpg')}}"></div>
                        <div class="instagram__pic__item set-bg" data-setbg="{{asset('inage/2.jpg')}}"></div>
                        <div class="instagram__pic__item set-bg" data-setbg="{{asset('inage/2.jpg')}}"></div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="instagram__text">
                        <h2>Our Exclusive Collection</h2>
                        <p>Experience the pinnacle of craftsmanship and elegance with our curated selection of luxury timepieces designed for the discerning collector.</p>
                        <h3>#LuxuryTimepieces</h3>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <!-- Instagram Section End -->

    {{-- <!-- Latest Blog Section Begin -->
    <section class="latest spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>Exclusive Selections</span>
                        <h2>Timeless Luxury Watches</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic set-bg" data-setbg="{{asset('inage/3.jpg')}}"></div>
                        <div class="blog__item__text">
                            <span><img src="{{asset('img/icon/calendar.png.webp')}}" alt=""> 16 February 2020</span>
                            <span>Precision Engineering</span>
                            <h5>Chronomaster Heritage 2023</h5>
                            <a href="#">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic set-bg" data-setbg="{{asset('inage/6.jpg')}}"></div>
                        <div class="blog__item__text">
                            <span><img src="img/icon/calendar.png" alt=""> 21 February 2020</span>
                            <h5>Eternity Bands Do Last Forever</h5>
                            <a href="#">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic set-bg" data-setbg="{{asset('inage/1.jpg')}}"></div>
                        <div class="blog__item__text">
                            <span><img src="img/icon/calendar.png" alt=""> 28 February 2020</span>
                            <h5>The Health Benefits Of Sunglasses</h5>
                            <a href="#">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Latest Blog Section End --> --}}

    <!-- Footer Section Begin -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <div class="footer__logo">
                            <a href="#"><img src="img/footer-logo.png" alt=""></a>
                        </div>
                        <p>The customer is at the heart of our unique business model, which includes design.</p>
                        <a href="#"><img src="{{asset('img/payment.png.webp')}}" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-2 offset-lg-1 col-md-3 col-sm-6">
                   
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6">
                    <div class="footer__widget">
                        <h6>Shopping</h6>
                        <ul>
                            <li><a href="#">Contact Us</a></li>
                            <li><a href="#">Payment Methods</a></li>
                            <li><a href="#">Delivary</a></li>
                            <li><a href="#">Return & Exchanges</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 offset-lg-1 col-md-6 col-sm-6">
                    
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="footer__copyright__text">
                        
                        <p>Copyright ©
                            <script>
                                document.write(new Date().getFullYear());
                            </script>2024 All rights reserved | Built with love <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://mobiverio.com" target="_blank">Mobiverio</a>
                        </p>
                     
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery.nicescroll.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-23581568-13');
    </script>
<script>
   document.addEventListener("DOMContentLoaded", function () {
    let cart = JSON.parse(localStorage.getItem('cart')) || [];
    let cartCount = cart.reduce((total, item) => total + item.quantity, 0);

    // Update cart count display
    function updateCartCount() {
        document.getElementById('cart-count').textContent = cartCount;
    }

    // Add to Cart event listener
    document.querySelectorAll('.add-cart').forEach(button => {
        button.addEventListener('click', function (event) {
            event.preventDefault();
            
            // Get product details from data attributes
            const productId = this.getAttribute('data-product-id');
            const productName = this.getAttribute('data-product-name');
            const productPrice = this.getAttribute('data-product-price');

            // Check if product is already in the cart
            const existingProduct = cart.find(product => product.id === productId);

            if (existingProduct) {
                existingProduct.quantity += 1;
            } else {
                cart.push({ id: productId, name: productName, price: productPrice, quantity: 1 });
            }

            // Update localStorage
            localStorage.setItem('cart', JSON.stringify(cart));

            // Increment cart count and update display
            cartCount++;
            updateCartCount();

            console.log(cart); // Display cart contents in console for testing
        });
    });

    // Redirect to cart page on click
    document.querySelector('.header__nav__option a').addEventListener('click', function (event) {
        event.preventDefault(); // Prevent default link behavior

        // Redirect to cart page
        window.location.href = '/cart'; // Update this URL to match your cart page
    });

    // Initialize cart count display
    updateCartCount();
});

    </script>
    

</body>

</html>