<!doctype html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>pillloMart</title>
    <link rel="icon" href="{{ url('public') }}/assets/img/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ url('public') }}/assets/css/bootstrap.min.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="{{ url('public') }}/assets/css/animate.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="{{ url('public') }}/assets/css/owl.carousel.min.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="{{ url('public') }}/assets/css/all.css">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="{{ url('public') }}/assets/css/flaticon.css">
    <link rel="stylesheet" href="{{ url('public') }}/assets/css/themify-icons.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="{{ url('public') }}/assets/css/magnific-popup.css">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="{{ url('public') }}/assets/css/slick.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="{{ url('public') }}/assets/css/style.css">
</head>

<body>
    <!--::header part start::-->
    <header class="main_menu home_menu">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="index.html"> <img src="{{ url('public') }}/assets/img/logo.png" alt="logo"> </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="menu_icon"><i class="fas fa-bars"></i></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{url(' /')}}">Home</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown_1"
                                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        product
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown_1">
                                        <a class="dropdown-item" href="{{url('produk_1')}}"> Bantal Printing</a>
                                        <a class="dropdown-item" href="{{url('produk_2')}}"> Bantal rasfur</a>
                                        
                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown_3"
                                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        pages
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown_2">
                                        <a class="dropdown-item" href="{{url('login')}}"> 
                                            login
                                            
                                        </a>
                                        <a class="dropdown-item" href="{{url('checkout')}}">Checkout</a>
                                    </div>
                                </li>
                                
                                <li class="nav-item">
                                    <a class="nav-link" href="{{url('/contact')}}">Contact</a>
                                </li>
                            </ul>
                        </div>
                        <div class="hearer_icon d-flex align-items-center">
                            <a id="search_1" href="javascript:void(0)"><i class="ti-search"></i></a>
                            <a href="{{url('cart')}}">
                                <i class="flaticon-shopping-cart-black-shape"></i>
                            </a>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <div class="search_input" id="search_input_box">
            <div class="container ">
                <form class="d-flex justify-content-between search-inner">
                    <input type="text" class="form-control" id="search_input" placeholder="Search Here">
                    <button type="submit" class="btn"></button>
                    <span class="ti-close" id="close_search" title="Close Search"></span>
                </form>
            </div>
        </div>
    </header>
    <!-- Header part end-->

    <!-- breadcrumb part start-->
    <section class="breadcrumb_part single_product_breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb part end-->

  <!--================Single Product Area =================-->
  <div class="product_image_area">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-12">
          <div class="product_img_slide owl-carousel">
            <div class="single_product_img">
              <img src="{{ url('public') }}/assets/img/product/single_product.png" alt="#" class="img-fluid">
            </div>
            <div class="single_product_img">
              <img src="{{ url('public') }}/assets/img/product/single_product.png" alt="#" class="img-fluid">
            </div>
            <div class="single_product_img">
              <img src="{{ url('public') }}/assets/img/product/single_product.png" alt="#" class="img-fluid">
            </div>
          </div>
        </div>
        <div class="col-lg-8">
          <div class="single_product_text text-center">
            <h3>Foam filling cotton slow <br>
                rebound pillows</h3>
            <p>
                Seamlessly empower fully researched growth strategies and interoperable internal or “organic” sources. Credibly innovate granular internal or “organic” sources whereas high standards in web-readiness. Credibly innovate granular internal or organic sources whereas high standards in web-readiness. Energistically scale future-proof core competencies vis-a-vis impactful experiences. Dramatically synthesize integrated schemas. with optimal networks.
            </p>
            <div class="card_area">
                <div class="product_count_area">
                    <p>Quantity</p>
                    <div class="product_count d-inline-block">
                        <span class="product_count_item inumber-decrement"> <i class="ti-minus"></i></span>
                        <input class="product_count_item input-number" type="text" value="1" min="0" max="10">
                        <span class="product_count_item number-increment"> <i class="ti-plus"></i></span>
                    </div>
                    <p>$5</p>
                </div>
              <div class="add_to_cart">
                  <a href="#" class="btn_3">add to cart</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--================End Single Product Area =================-->
   <!-- subscribe part here -->
   <section class="subscribe_part section_padding">
      <div class="container">
          <div class="row justify-content-center">
              <div class="col-lg-8">
                  <div class="subscribe_part_content">
                  <h2>Dapatkan promosi & pembaruan!</h2>
                        <h2>Dari Toko Kami</h2>
                        <div class="subscribe_form">
                            <input type="email" placeholder="Masukan Email Annda">
                            <a href="#" class="btn_1">Subscribe</a>
                        </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!-- subscribe part end -->

  <!--::footer_part start::-->
  <footer class="footer_part">
        <div class="footer_iner section_bg">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-lg-8">
                        <div class="footer_menu">
                            <div class="footer_logo">
                                <a href="index.html"><img src="{{ url('public') }}/assets/img/logo.png" alt="#"></a>
                            </div>
                        
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="social_icon">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-google-plus-g"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="copyright_part">
            <div class="container">
                <div class="row ">
                    <div class="col-lg-12">
                        <div class="copyright_text">
                            <P><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="ti-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></P>
                            <div class="copyright_link">
                                <a href="#">Turms & Conditions</a>
                                <a href="#">FAQ</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--::footer_part end::-->

    <!-- jquery plugins here-->
    <script src="{{ url('public') }}/assets/js/jquery-1.12.1.min.js"></script>
    <!-- popper js -->
    <script src="{{ url('public') }}/assets/js/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="{{ url('public') }}/assets/js/bootstrap.min.js"></script>
    <!-- easing js -->
    <script src="{{ url('public') }}/assets/js/jquery.magnific-popup.js"></script>
    <!-- swiper js -->
    <script src="{{ url('public') }}/assets/js/swiper.min.js"></script>
    <!-- swiper js -->
    <script src="{{ url('public') }}/assets/js/mixitup.min.js"></script>
    <!-- particles js -->
    <script src="{{ url('public') }}/assets/js/owl.carousel.min.js"></script>
    <script src="{{ url('public') }}/assets/js/jquery.nice-select.min.js"></script>
    <!-- slick js -->
    <script src="{{ url('public') }}/assets/js/slick.min.js"></script>
    <script src="{{ url('public') }}/assets/js/jquery.counterup.min.js"></script>
    <script src="{{ url('public') }}/assets/js/waypoints.min.js"></script>
    <script src="{{ url('public') }}/assets/js/contact.js"></script>
    <script src="{{ url('public') }}/assets/js/jquery.ajaxchimp.min.js"></script>
    <script src="{{ url('public') }}/assets/js/jquery.form.js"></script>
    <script src="{{ url('public') }}/assets/js/jquery.validate.min.js"></script>
    <script src="{{ url('public') }}/assets/js/mail-script.js"></script>
    <!-- custom js -->
    <script src="{{ url('public') }}/assets/js/custom.js"></script>
</body>

</html>