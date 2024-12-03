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
                <a href="{{route('login')}}">Sign in</a>
            </div>
        </div>
        <div id="mobile-menu-wrap"></div>
        <div class="offcanvas__text">
            <p> 5-day return or refund guarantee.</p>
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
                                <a href="{{route('login')}}">Sign in</a>
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
                        <a href="./index.html"><img src="{{asset('img/logo.png.webp')}}" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <nav class="header__menu mobile-menu">
                        <ul>
                            <li class="active"><a href="{{route('home')}}">Home</a></li>
                            <li><a href="{{route('collection')}}">View Collection</a></li>
                            <li><a href="{{route('contact')}}">Contact</a></li> <!-- Added Contact link -->
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="canvas__open"><i class="fa fa-bars"></i></div>
        </div>
    </header>
    <!-- Header Section End -->


      <!-- Banner Section Begin -->
      <section class="banner spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 offset-lg-4">
                    <div class="banner__item">
                        <div class="banner__item__pic">
                            <img src="{{asset('inage/1.jpg')}}" alt="">
                        </div>
                        <div class="banner__item__text">
                            <h2>Clothing Collections 2030</h2>
                            <a href="#">Shop now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="banner__item banner__item--middle">
                        <div class="banner__item__pic">
                            <img src="{{asset('inage/2.jpg')}}" alt="">
                        </div>
                        <div class="banner__item__text">
                            <h2>Accessories</h2>
                            <a href="#">Shop now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="banner__item banner__item--last">
                        <div class="banner__item__pic">
                            <img src="{{asset('inage/3.jpg')}}" alt="">
                        </div>
                        <div class="banner__item__text">
                            <h2>Shoes Spring 2030</h2>
                            <a href="#">Shop now</a>
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
                          <a href="#" class="add-cart">+ Add To Cart</a>
                          <div class="rating">
                              <i class="fa fa-star-o"></i>
                              <i class="fa fa-star-o"></i>
                              <i class="fa fa-star-o"></i>
                              <i class="fa fa-star-o"></i>
                              <i class="fa fa-star-o"></i>
                          </div>
                          <h5>$67.24</h5>
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
                          <a href="#" class="add-cart">+ Add To Cart</a>
                          <div class="rating">
                              <i class="fa fa-star-o"></i>
                              <i class="fa fa-star-o"></i>
                              <i class="fa fa-star-o"></i>
                              <i class="fa fa-star-o"></i>
                              <i class="fa fa-star-o"></i>
                          </div>
                          <h5>$67.24</h5>
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
                          <a href="#" class="add-cart">+ Add To Cart</a>
                          <div class="rating">
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star-o"></i>
                          </div>
                          <h5>$43.48</h5>
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
                          <a href="#" class="add-cart">+ Add To Cart</a>
                          <div class="rating">
                              <i class="fa fa-star-o"></i>
                              <i class="fa fa-star-o"></i>
                              <i class="fa fa-star-o"></i>
                              <i class="fa fa-star-o"></i>
                              <i class="fa fa-star-o"></i>
                          </div>
                          <h5>$60.9</h5>
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
                          <a href="#" class="add-cart">+ Add To Cart</a>
                          <div class="rating">
                              <i class="fa fa-star-o"></i>
                              <i class="fa fa-star-o"></i>
                              <i class="fa fa-star-o"></i>
                              <i class="fa fa-star-o"></i>
                              <i class="fa fa-star-o"></i>
                          </div>
                          <h5>$31.37</h5>
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
                          <h5>$98.49</h5>
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
                          <h5>$49.66</h5>
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
                          <h5>$26.28</h5>
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
                          <li><a href="#">Delivery</a></li>
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

</body>

</html>
