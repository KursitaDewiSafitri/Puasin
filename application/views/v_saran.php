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
                        <img src="<?php echo base_url(); ?>desain/frontend/images/Logo1.png" width="" height="" >
                    </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                 <div class="collapse navbar-collapse" id="Food-fair-toggle">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="<?php echo base_url();?>Beranda">Profile</a></li>
                        <li><a href="<?php echo base_url();?>Katalog">Katalog</a></li>
                        <li><a href="<?php echo base_url();?>Artikel">Artikel</a></li>
                        <li><a href="<?php echo base_url();?>Saran">Saran</a></li>
                        <li><a href="<?php echo base_url();?>Galeri">Testimoni</a></li>
                        <li><a href="<?php echo base_url();?>Pesan">Pesan</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->

            </div><!-- /.row -->
        </nav>



        <!--== 10. Our Breakfast Menu ==-->
        <section id="breakfast" class="breakfast">
            <img class="img-responsive section-icon hidden-sm hidden-xs" src="">
            <div class="wrapper">
                <div class="container-fluid">
                    <div class="row dis-table">
                        <div class="col-xs-6 col-sm-6 dis-table-cell color-bg">
                            <h2 class="section-title">Saran & Kritik Puas-in Jember</h2>
                        </div>
                        <div class="col-xs-6 col-sm-6 dis-table-cell section-bg">

                        </div>
                    </div> <!-- /.dis-table -->
                </div> <!-- /.row -->
            </div> <!-- /.wrapper -->
        </section> <!-- /#breakfast -->



        <!--== 11. Our Bread ==-->
            <section class="reservation">
            <img class="img-responsive section-icon hidden-sm hidden-xs" src="">
            <div class="wrapper">
                <div class="container-fluid">
                    <div class=" section-content">
                        <div class="row">
                            <div class="col-md-5 col-sm-6">
                                <form class="reservation-form" method="post" action="<?php echo base_url().'saran/kirim_saran'?>">
                                    <?php echo $this->session->flashdata('msg');?>
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12">
                                            <div class="form-group">
                                                <input type="text" class="form-control reserve-form empty iconified" name="nama" id="nama" required="required" placeholder="  &#xf007;  Nama">
                                            </div>
                                            <div class="form-group">
                                                <input type="email" name="email" class="form-control reserve-form empty iconified" id="email" required="required" placeholder="  &#xf1d8;  E-mail">
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-sm-12">
                                            <textarea type="text" name="pesan" class="form-control reserve-form empty iconified" id="pesan" rows="3" required="required" placeholder="  &#xf086;  Saran"></textarea>
                                        </div>

                                        <div class="col-md-12 col-sm-12">
                                            <button type="submit" id="submit" name="submit" class="btn btn-reservation">

                                                Kirim Saran
                                            </button>
                                        </div>

                                    </div>
                                </form>
                            </div>

                            <div class="col-md-2 hidden-sm hidden-xs"></div>

                            <div class="col-md-5 col-sm-6 ">
                                <div class="opening-time">
                                    <h3 class="opening-time-title">Saran dan Kritik</h3>
                                    <p>Silahkan isi saran & kritik anda mengenai apa yang dirasa
                                     kurang berkenan pada proses pemesanan agar kami bisa mengetahui kekurangan kami.</p>
                                    <p> Untuk puasin jember menjadi yang lebih baik! </p>
                                    <p>Terimakasih ;)</p>


                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <div class="copyright text-center">
                            <p>
                                &copy; Copyright, 2018 TIM PSI <!-- <a href="#">Your Website Link.</a> Theme by <a href="http://themewagon.com/"  target="_blank">ThemeWagon</a> -->
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
