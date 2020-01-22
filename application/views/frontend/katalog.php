<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="<?php echo base_url(); ?>/desain/frontend/images/puasin.png" type="favicon/ico" />

        <title>PUASIN JEMBER</title>

        <link rel="stylesheet" href="<?php echo base_url(); ?>/desain/frontend/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>/desain/frontend/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>/desain/frontend/css/owl.carousel.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>/desain/frontend/css/owl.theme.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>/desain/frontend/css/animate.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>/desain/frontend/css/flexslider.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>/desain/frontend/css/pricing.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>/desain/frontend/css/main.css">


        <script src="<?php echo base_url(); ?>/desain/frontend/js/jquery-1.11.2.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>/desain/frontend/js/jquery.flexslider.min.js"></script>
        <script type="text/javascript">
            $(window).load(function() {
                $('.flexslider').flexslider({
                 animation: "slide",
                 controlsContainer: ".flexslider-container"
                });
            });
        </script>

    </head>
    <body data-spy="scroll" data-target="#template-navbar">

        <!--== 4. Navigation ==-->
        <nav id="template-navbar" class="navbar-default custom-navbar-default navbar-fixed-top">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#Food-fair-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">
                        <img src="<?php echo base_url(); ?>/desain/frontend/images/logo puasin.png" >
                    </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <?php $this->load->view('frontend/menu')?>
            </div><!-- /.row -->
        </nav>
<!--==  7. Afordable Pricing  ==-->
        <section id="pricing" class="pricing">
            <div id="w">
                <div class="pricing-filter">
                    <div class="pricing-filter-wrapper">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-10 col-md-offset-1">
                                    <div class="section-header">
                                        <h2 class="pricing-title">Katalog</h2>
                                        <ul id="filter-list" class="clearfix">
                                            <li class="filter" data-filter="all">Semua</li>
                                            <li class="filter" data-filter=".breakfast">Rice Box</li>
                                            <li class="filter" data-filter=".special">Snack Box</li>
                                        </ul><!-- @end #filter-list -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="row">  
                        <div class="col-md-10 col-md-offset-1">
                            <ul id="menu-pricing" class="menu-price">
                               <!--  <li class="item dinner">
                                    <a href="#">
                                        <img src="<?php echo base_url(); ?>desain/frontend/images/5.jpg" class="img-responsive" alt="Food" >
                                        <div class="menu-desc text-center">
                                            <span>
                                                <h3>Tomato Curry</h3>
                                                Natalie &amp; Justin Cleaning by Justin Younger
                                            </span>
                                        </div>
                                    </a>
                                        
                                    <h2 class="white">$20</h2>
                                </li> -->

                                <li class="item breakfast">

                                    <a href="#">
                                        <img src="<?php echo base_url(); ?>desain/frontend/images/menu2.png" class="img-responsive" alt="Food" >
                                        <div class="menu-desc">
                                            <span>
                                                <h3>Ayam Kecap</h3>
                                                
                                            </span>
                                        </div>
                                    </a>
                                        
                                    <h2 class="white">Rp20.000</h2>
                                </li>
                               <!--  <li class="item desert">

                                    <a href="#">
                                        <img src="<?php echo base_url(); ?>desain/frontend/images/food3.jpg" class="img-responsive" alt="Food" >
                                        <div class="menu-desc">
                                            <span>
                                                <h3>Salad Dish</h3>
                                                Consectetur adipisicing elit, sed do eiusmod
                                            </span>
                                        </div>
                                    </a>
                                        
                                    <h2 class="white">$18</h2>
                                </li> -->
                                <li class="item breakfast">

                                    <a href="#">
                                        <img src="<?php echo base_url(); ?>desain/frontend/images/menu4.png" class="img-responsive" alt="Food" >
                                        <div class="menu-desc">
                                            <span>
                                                <h3>Ayam Bakar</h3>
                                                
                                            </span>
                                        </div>
                                    </a>
                                        
                                    <h2 class="white">Rp21.000</h2>
                                </li>
                                <li class="item breakfast">

                                    <a href="#">
                                        <img src="<?php echo base_url(); ?>desain/frontend/images/menu5.png" class="img-responsive" alt="Food" >
                                        <div class="menu-desc">
                                            <span>
                                                <h3>Nasi Kuning</h3>
                                                
                                            </span>
                                        </div>
                                    </a>
                                        
                                    <h2 class="white">Rp17.500</h2>
                                </li>
                                <li class="item dinner special">

                                    <a href="#">
                                        <img src="<?php echo base_url(); ?>desain/frontend/images/menu6.png" class="img-responsive" alt="Food" >
                                        <div class="menu-desc">
                                            <span>
                                                <h3>Snack Box</h3>
                                                Isi 6
                                            </span>
                                        </div>
                                    </a>

                                    <h2 class="white">Rp15.000</h2>
                                </li>
                               <!--  <li class="item desert">

                                    <a href="#">
                                        <img src="<?php echo base_url(); ?>desain/frontend/images/food7.jpg" class="img-responsive" alt="Food" >
                                        <div class="menu-desc">
                                            <span>
                                                <h3>Vegetable Noodles</h3>
                                                Nisi ut aliquip ex ea commodo
                                            </span>
                                        </div>
                                    </a>

                                    <h2 class="white">$32</h2>
                                </li> -->
                                <li class="item dinner special">

                                    <a href="#">
                                        <img src="<?php echo base_url(); ?>desain/frontend/images/menu1.png" class="img-responsive" alt="Food" >
                                        <div class="menu-desc">
                                            <span>
                                                <h3>Snack Box </h3>
                                                isi 4
                                            </span>
                                        </div>
                                    </a>

                                    <h2 class="white">Rp10.000</h2>
                                </li>
                                <li class="item dinner special">

                                    <a href="#">
                                        <img src="<?php echo base_url(); ?>desain/frontend/images/menu7.png" class="img-responsive" alt="Food" >
                                        <div class="menu-desc">
                                            <span>
                                                <h3>Snack Box</h3>
                                                Isi 3
                                            </span>
                                        </div>
                                    </a>
                                    
                                    <h2 class="white">Rp6.000</h2>
                                </li>  
                            </ul>

                            <!-- <div class="text-center">
                                    <a id="loadPricingContent" class="btn btn-middle hidden-sm hidden-xs">Load More <span class="caret"></span></a>
                            </div> -->

                        </div>   
                    </div>
                </div>

            </div> 
        </section>

        <div class="container-fluid">
            <div class="row">
                
            </div>
        </div>




        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <div class="copyright text-center">
                            <p>
                                &copy; Copyright, 2018 TIM PSI
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

    
        <script src="<?php echo base_url(); ?>/desain/frontend/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>/desain/frontend/js/owl.carousel.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>/desain/frontend/js/jquery.mixitup.min.js" ></script>
        <script src="<?php echo base_url(); ?>/desain/frontend/js/wow.min.js"></script>
        <script src="<?php echo base_url(); ?>/desain/frontend/js/jquery.validate.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>/desain/frontend/js/jquery.hoverdir.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>/desain/frontend/js/jQuery.scrollSpeed.js"></script>
        <script src="<?php echo base_url(); ?>/desain/frontend/js/script.js"></script>
        

    </body>
</html>