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

        <!--== 12. Our Featured Dishes Menu ==-->
        <section id="featured-dish" class="featured-dish">
            <img class="img-responsive section-icon hidden-sm hidden-xs" src="">
            <div class="wrapper">
                <div class="container-fluid">
                    <div class="row dis-table">
                        <div class="col-xs-6 col-sm-6 dis-table-cell color-bg">
                            <h2 class="section-title">Testimoni Puas-in Jember</h2>
                        </div>
                        <div class="col-xs-6 col-sm-6 dis-table-cell section-bg">

                        </div>
                    </div> <!-- /.dis-table -->
                </div> <!-- /.row -->
            </div> <!-- /.wrapper -->
        </section> <!-- /#featured-dish -->

        <!--== 14. Have a look to our dishes ==-->
        <div class="container">
            <div class="row"><br/>
            <center><h2>Testimoni Puas-in Jember</h2></center>
            </br>
            <?php foreach ($data->result() as $row) :	?>
            <div class="col-md-4">
                <a class="example-image-link" href="<?php echo base_url().'desain/frontend/images/testi/'.$row->galeri_gambar;?>" data-lightbox="example-2" data-title="<?php echo $row->galeri_judul;?>"><img class="example-image img-responsive" src="<?php echo base_url().'desain/frontend/images/testi/'.$row->galeri_gambar;?>" alt="image-1"/></a>
            </div>
            <?php endforeach;?>
            </div>
        </div>
            <br/>
            <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
					<br/>
				</div>
			</div>
	</div>


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
