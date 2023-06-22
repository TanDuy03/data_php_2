<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Furniture</title>
    <link rel="shortcut icon" type="image/icon" href="<?php echo base_url?>/public/images/logo/favicon.png" />

    <!--font-awesome.min.css-->
    <link rel="stylesheet" href="<?php echo base_url?>/public/css/font-awesome.min.css">

    <!--linear icon css-->
    <link rel="stylesheet" href="<?php echo base_url?>/public/css/linearicons.css">

    <!--animate.css-->
    <link rel="stylesheet" href="<?php echo base_url?>/public/css/animate.css">

    <!--owl.carousel.css-->
    <link rel="stylesheet" href="<?php echo base_url?>/public/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url?>/public/css/owl.theme.default.min.css">

    <!--bootstrap.min.css-->
    <link rel="stylesheet" href="<?php echo base_url?>/public/css/bootstrap.min.css">

    <!-- bootsnav -->
    <link rel="stylesheet" href="<?php echo base_url?>/public/css/bootsnav.css">

    <!--style.css-->
    <link rel="stylesheet" href="<?php echo base_url?>/public/css/style.css">

    <!--responsive.css-->
    <link rel="stylesheet" href="<?php echo base_url?>/public/css/responsive.css">
    <!-- script angular -->
    <script src="<?php echo base_url;?>/public/js/angular.min.js"></script>
</head>
<body>
    <header id="home" class="welcome-hero">
        <div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
            <!--/.carousel-indicator -->
            <ol class="carousel-indicators">
                <li data-target="#header-carousel" data-slide-to="0" class="active"><span class="small-circle"></span></li>
                <li data-target="#header-carousel" data-slide-to="1"><span class="small-circle"></span></li>
                <li data-target="#header-carousel" data-slide-to="2"><span class="small-circle"></span></li>
            </ol>
            <div class="carousel-inner" style="background-color: #CCC; background-image: url('<?php echo base_url?>/public/images/bg.jpg'); background-size: 100%; min-height:300px" role="listbox"></div>
        </div>
        <!--/#header-carousel-->
        <!-- top-area Start -->
        <div class="top-area">
            <div class="header-area">
                <!-- Start Navigation -->
                <nav class="navbar navbar-default bootsnav  navbar-sticky navbar-scrollspy" data-minus-value-desktop="70" data-minus-value-mobile="55" data-speed="1000">
                    <!-- Start Top Search -->
                    <div class="top-search">
                        <div class="container">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-search"></i></span>
                                <input type="text" class="form-control" placeholder="Search">
                                <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
                            </div>
                        </div>
                    </div>
                    <!-- End Top Search -->
                    <div class="container">
                        <!-- Start Atribute Navigation -->
                        <div class="attr-nav">
                            <ul>
                                <li class="search">
                                    <a href="#"><span class="lnr lnr-magnifier"></span></a>
                                </li>
                                <!--/.search-->
                                <li class="nav-setting">
                                    <a href="<?php echo base_url?>/login"><span class="lnr lnr-user"></span></a>
                                </li>
                                <!--/.search-->
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <span class="lnr lnr-cart"></span>
                                        <span class="badge badge-bg-1">2</span>
                                    </a>
                                    <ul class="dropdown-menu cart-list s-cate">
                                        <li class="single-cart-list">
                                            <a href="#" class="photo"><img src="<?php echo base_url?>/public/images/collection/arrivals1.png" class="cart-thumb" alt="image" /></a>
                                            <div class="cart-list-txt">
                                                <h6><a href="#">arm <br> chair</a></h6>
                                                <p>1 x - <span class="price">$180.00</span></p>
                                            </div>
                                            <!--/.cart-list-txt-->
                                            <div class="cart-close">
                                                <span class="lnr lnr-cross"></span>
                                            </div>
                                            <!--/.cart-close-->
                                        </li>
                                        <!--/.single-cart-list -->
                                        <li class="single-cart-list">
                                            <a href="#" class="photo"><img src="<?php echo base_url?>/public/images/collection/arrivals2.png" class="cart-thumb" alt="image" /></a>
                                            <div class="cart-list-txt">
                                                <h6><a href="#">single <br> armchair</a></h6>
                                                <p>1 x - <span class="price">$180.00</span></p>
                                            </div>
                                            <!--/.cart-list-txt-->
                                            <div class="cart-close">
                                                <span class="lnr lnr-cross"></span>
                                            </div>
                                            <!--/.cart-close-->
                                        </li>
                                        <!--/.single-cart-list -->
                                        <li class="single-cart-list">
                                            <a href="#" class="photo"><img src="<?php echo base_url?>/public/images/collection/arrivals3.png" class="cart-thumb" alt="image" /></a>
                                            <div class="cart-list-txt">
                                                <h6><a href="#">wooden arn <br> chair</a></h6>
                                                <p>1 x - <span class="price">$180.00</span></p>
                                            </div>
                                            <!--/.cart-list-txt-->
                                            <div class="cart-close">
                                                <span class="lnr lnr-cross"></span>
                                            </div>
                                            <!--/.cart-close-->
                                        </li>
                                        <!--/.single-cart-list -->
                                        <li class="total">
                                            <span>Total: $0.00</span>
                                            <button class="btn-cart pull-right" onclick="window.location.href='#'">view cart</button>
                                        </li>
                                    </ul>
                                </li>
                                <!--/.dropdown-->
                            </ul>
                        </div>
                        <!--/.attr-nav-->
                        <!-- End Atribute Navigation -->

                        <!-- Start Header Navigation -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                                    <i class="fa fa-bars"></i>
                                </button>
                            <a class="navbar-brand" href="<?php echo base_url?>">sine<span>mkt</span>.</a>

                        </div>
                        <!--/.navbar-header-->
                        <!-- End Header Navigation -->

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse menu-ui-design" id="navbar-menu">
                            <ul class="nav navbar-nav navbar-center" data-in="fadeInDown" data-out="fadeOutUp">
                                <li class=" scroll active"><a href="#home">home</a></li>
                                <li class="scroll"><a href="#new-arrivals">new arrival</a></li>
                                <li class="scroll"><a href="#feature">features</a></li>
                                <li class="scroll"><a href="#blogg">blog</a></li>
                                <li class="scroll"><a href="#newsletter">contact</a></li>
                            </ul>
                            <!--/.nav -->
                        </div>
                        <!-- /.navbar-collapse -->
                    </div>
                    <!--/.container-->
                </nav>
                <!--/nav-->
                <!-- End Navigation -->
            </div>
            <!--/.header-area-->
            <div class="clearfix"></div>
        </div>
        <!-- /.top-area-->
        <!-- top-area End -->
    </header>
    {{content}}
    <footer id="footer" class="footer">
        <div class="container">
            <div class="hm-footer-copyright text-center">
                <div class="footer-social">
                    <a href="https://www.facebook.com/ntanduy26" target="_blank"><i class="fa fa-facebook"></i></a>
                    <a href="https://www.instagram.com/cuxe2612/" target="_blank"><i class="fa fa-instagram"></i></a>
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                    <a href="#"><i class="fa fa-pinterest"></i></a>
                    <a href="#"><i class="fa fa-behance"></i></a>
                </div>
                <p>
                    Copyright &copy; 2023. designed by <a href="https://www.facebook.com/ntanduy26" target="_blank">Tan Duy.</a> All rights reserved.
                </p>
                <!--/p-->
            </div>
            <!--/.text-center-->
        </div>
        <!--/.container-->

        <div id="scroll-Top">
            <div class="return-to-top">
                <i class="fa fa-angle-up " id="scroll-top" data-toggle="tooltip" data-placement="top" title="" data-original-title="Back to Top" aria-hidden="true"></i>
            </div>

        </div>
        <!--/.scroll-Top-->

    </footer>
    <!--  -->
    <script src="<?php echo base_url?>/public/js/jquery.js"></script>

    <!--modernizr.min.js-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>

    <!--bootstrap.min.js-->
    <script src="<?php echo base_url?>/public/js/bootstrap.min.js"></script>

    <!-- bootsnav js -->
    <script src="<?php echo base_url?>/public/js/bootsnav.js"></script>

    <!--owl.carousel.js-->
    <script src="<?php echo base_url?>/public/js/owl.carousel.min.js"></script>

    <!--Custom JS-->
    <script src="<?php echo base_url?>/public/js/custom.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <!-- <script>
        document.addEventListener("contextmenu", function(e){
            console.log("Ok");
        })
    </script> -->
</body>
</html>