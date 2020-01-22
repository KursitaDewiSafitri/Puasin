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

        <section class="contact-form">
                    <div class="container">
                        <div class="row"><br/>
                            <div class="col-md-4">
                            
                            </div>
                        </div>
                    </div>
        </section>
        <?php
            error_reporting(0);


        ?>

        <!--==  7. Afordable Pricing  ==-->
        <section id="pricing" class="pricing">
            <div id="w">
                <div class="pricing-filter">
                    <div class="pricing-filter-wrapper">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-10 col-md-offset-1">
                                    <div class="section-header">
                                        <h2 class="pricing-title">Katalog Catering Puas-in Jember</h2>
                                        <ul id="filter-list" class="clearfix">
                                            <li class="filter" data-filter="all">All</li>
                                            <?php
                                            $i= 0;
                                            foreach ($kat->result_array() as $j) :
                                                $i++;
                                                $namaEch = $j['nama_kategori'];
                                                $namaKat=str_replace(' ', '_', $j['nama_kategori']);

		                                    ?>
                                            <li class="filter" data-filter=".<?php echo $namaKat;?>"><?php echo $namaEch;?></li>
                                            <?php endforeach;?>
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
                            <?php
                                $i= 0;
                                foreach ($data->result_array() as $j) :
                                    $i++;
		                            $kat_id=$j['tulisan_id'];
		                            $kat_nama=$j['tulisan_nama'];
		                            $kat_isi=$j['tulisan_isi'];
		                            $kat_harga=$j['tulisan_harga'];
	                                $kat_image=$j['tulisan_gambar'];
                                    $kat_tgl=$j['tanggal'];
                                    $kat_id_kategori=$j['tulisan_id_kategori'];
		                            $kat_nama_kategori= str_replace(' ', '_', $j['tulisan_nama_kategori']);
		                        ?>
                                <li class="item <?php echo $kat_nama_kategori;?>">

                                    <a href="#">
                                        <img src="<?php echo base_url().'desain/frontend/images/'.$kat_image;?>" class="img-responsive" alt="Food" >
                                        <div class="menu-desc text-center">
                                            <span>
                                                <h3><?php echo $kat_nama;?></h3>
                                                <?php echo $kat_isi;?>
                                            </span>
                                        </div>
                                    </a>

                                    <h2 class="white"><?php echo $kat_harga;?></h2>
                                </li>
                                <?php endforeach;?>
                            </ul>

                            <!-- <div class="text-center">
                                    <a id="loadPricingContent" class="btn btn-middle hidden-sm hidden-xs">Load More <span class="caret"></span></a>
                            </div> -->

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
