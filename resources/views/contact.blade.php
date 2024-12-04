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


<style>
    /* General Styles */
    .contact-section {
        background: linear-gradient(to bottom, #f8f8f8, #e8e8e8);
        padding: 60px 0;
        font-family: 'Poppins', sans-serif;
    }
    
    /* Contact Form Section */
    .contact__form__title h2 {
        font-size: 32px;
        font-weight: 600;
        color: #333;
    }
    
    .contact__form__title p {
        font-size: 16px;
        color: #666;
        margin-bottom: 30px;
    }
    
    .contact-section input,
    .contact-section textarea {
        width: 100%;
        padding: 12px 15px;
        margin-bottom: 20px;
        border: 1px solid #ddd;
        border-radius: 8px;
        font-size: 14px;
        color: #333;
        background: #fff;
    }
    
    .contact-section input:focus,
    .contact-section textarea:focus {
        border-color: #c19a6b;
        outline: none;
        box-shadow: 0 0 8px rgba(193, 154, 107, 0.3);
    }
    
    .contact-section textarea {
        height: 150px;
        resize: none;
    }
    
    /* Submit Button */
    .site-btn {
        display: inline-block;
        padding: 12px 30px;
        font-size: 16px;
        color: #fff;
        background: #c19a6b;
        border: none;
        border-radius: 30px;
        cursor: pointer;
        transition: background 0.3s ease;
        text-transform: uppercase;
    }
    
    .site-btn:hover {
        background: #a67b50;
    }
    
    /* Contact Info Section */
    .contact__info {
        padding: 30px;
        background: #fff;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        border-radius: 12px;
    }
    
    .contact__info h3 {
        font-size: 28px;
        font-weight: 600;
        color: #333;
        margin-bottom: 20px;
    }
    
    .contact__info ul {
        list-style: none;
        padding: 0;
    }
    
    .contact__info ul li {
        font-size: 16px;
        color: #555;
        margin-bottom: 10px;
    }
    
    .contact__info ul li i {
        color: #c19a6b;
        margin-right: 10px;
    }
    
    /* Responsive Design */
    @media (max-width: 768px) {
        .contact__info {
            margin-top: 30px;
        }
    }
    </style>
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

    <!-- Contact Section Begin -->
    <section class="contact-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="contact__form__title">
                        <h2>Get in Touch</h2>
                        <p>We would love to hear from you! Drop us a message and we'll get back to you as soon as possible.</p>
                    </div>
                    <form action="" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6">
                                <input type="text" name="name" placeholder="Your Name" required>
                            </div>
                            <div class="col-lg-6">
                                <input type="email" name="email" placeholder="Your Email" required>
                            </div>
                            <div class="col-lg-12">
                                <textarea name="message" placeholder="Your Message" required></textarea>
                                <button type="submit" class="site-btn">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6">
                    <div class="contact__info">
                        <h3>Contact Info</h3>
                        <ul>
                            <li><i class="fa fa-phone"></i> Phone: +1 (555) 123 456</li>
                            <li><i class="fa fa-envelope"></i> Email: info@example.com</li>
                            <li><i class="fa fa-map-marker"></i> Address: 123 Main Street, City, Country</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->

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
