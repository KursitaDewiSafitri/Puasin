<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="<?php echo base_url(); ?>desain/frontend/images/puasin.png" type="favicon/ico" />

        <title>PUASIN JEMBER</title>

        <link rel="stylesheet" href="<?php echo base_url(); ?>desain/frontend/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>desain/frontend/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>desain/frontend/css/owl.carousel.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>desain/frontend/css/owl.theme.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>desain/frontend/css/animate.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>desain/frontend/css/flexslider.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>desain/frontend/css/pricing.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>desain/frontend/css/main.css">


        <script src="<?php echo base_url(); ?>desain/frontend/js/jquery-1.11.2.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>desain/frontend/js/jquery.flexslider.min.js"></script>
        <script type="text/javascript">
            $(window).load(function() {
                $('.flexslider').flexslider({
                 animation: "slide",
                 controlsContainer: ".flexslider-container"
                });
            });
        </script>

        <script src="https://maps.googleapis.com/maps/api/js"></script>
        <script>
            function initialize() {
                var mapCanvas = document.getElementById('map-canvas');
                var mapOptions = {
                    center: new google.maps.LatLng(-8.183047, 113.699501),
                    zoom: 16,
                    scrollwheel: false,
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                }
                var map = new google.maps.Map(mapCanvas, mapOptions)

                var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(-8.183047, 113.699501),
                    title:"Puasin Jember"
                });

                // To add the marker to the map, call setMap();
                marker.setMap(map);
            }
            google.maps.event.addDomListener(window, 'load', initialize);
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
                        <img src="<?php echo base_url(); ?>desain/frontend/images/logo puasin.png" width="" height="" >
                    </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <?php $this->load->view('frontend/menu')?>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.row -->
        </nav>


       


        <!--== 6. About us ==-->
        <section id="about" class="about">
            <img src="" class="img-responsive section-icon hidden-sm hidden-xs">
            <div class="wrapper">
                <div class="container-fluid">
                    <div class="row dis-table">
                        <div class="hidden-xs col-sm-6 section-bg about-bg dis-table-cell">

                        </div>
                        <div class="col-xs-12 col-sm-6 dis-table-cell">
                            <div class="section-content">
                                <h1 class="section-content-title">Puasin Jember</h1>
                                <p class="section-content-para">
                                    PuasinJember adalah sebuah wirausaha yang melayani pemesanan masakan baik berupa makanan, minuman maupun aneka jenis kue usaha yang bergerak dalam bidang pemesanan makanan sehat dan aneka kue terletak di daerah kabupaten jember, tepatnya di jalan ledjen suprapto VI no.90.  
                                </p>
                                <p class="section-content-para">
                                    PuasinJember melayani pemesanan makanan yang digunakan untuk menjamu tamu pesta, seminar, rapat suatu instansi, acara lomba di suatu kampus serta acara dalam suatu komuitas di daerah jember. 
                                </p>
                                
                            </div> <!-- /.section-content -->
                        </div>
                    </div> <!-- /.row -->
                </div> <!-- /.container-fluid -->
            </div> <!-- /.wrapper -->
        </section> <!-- /#about -->

        <section id="contact" class="contact">
            <div class="container-fluid color-bg">
                <div class="row dis-table">
                    <div class="hidden-xs col-sm-6 dis-table-cell">
                        <h2 class="section-title">Hubungi Kami</h2>
                    </div>
                    <div class="col-xs-6 col-sm-6 dis-table-cell">
                        <div class="section-content">
                            <p>Puas-in Jember</p>
                            <p>Jalan Letjen Suprapto VI No.19 Jember</p>
                            <p>082144770224</p>
                        </div>
                    </div>
                </div>
                <div class="social-media">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                            <ul class="center-block">
                                <li><a href="https://www.instagram.com/puasinjember/?hl=id" class="fb"></a></li>
                                <li><a href="#" class="twit"></a></li>
                                <li><a href="#" class="g-plus"></a></li>
                                <li><a href="#" class="link"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="container-fluid">
            <div class="row">
                <div id="map-canvas"></div>
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

    
        <script src="<?php echo base_url(); ?>desain/frontend/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>desain/frontend/js/owl.carousel.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>desain/frontend/js/jquery.mixitup.min.js" ></script>
        <script src="<?php echo base_url(); ?>desain/frontend/js/wow.min.js"></script>
        <script src="<?php echo base_url(); ?>desain/frontend/js/jquery.validate.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>desain/frontend/js/jquery.hoverdir.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>desain/frontend/js/jQuery.scrollSpeed.js"></script>
        <script src="<?php echo base_url(); ?>desain/frontend/js/script.js"></script>
        

    </body>
</html>