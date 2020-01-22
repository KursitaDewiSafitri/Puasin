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
               <?php $this->load->view('frontend/menu'); ?>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.row -->
        </nav>


        <!--== 5. Header ==-->
        <section id="header-slider" class="owl-carousel">
            <div class="item">
                <div class="container">
                    <div class="header-content">
                        <!-- <h1 class="header-title">BEST FOOD</h1>
                        <p class="header-sub-title">create your own slogan</p> -->
                    </div> <!-- /.header-content -->
                </div>
            </div>
            <div class="item">
                <div class="container">
                    <div class="header-content">
                        <!-- <h1 class="header-title">BEST SNACKS</h1>
                        <p class="header-sub-title">create your own slogan</p> -->
                    </div> <!-- /.header-content -->
                </div>
            </div>
            <!-- <div class="item">
                <div class="container">
                    <div class="header-content text-right pull-right">
                        <h1 class="header-title">BEST DRINKS</h1>
                        <p class="header-sub-title">create your own slogan</p>
                    </div> <!- /.header-content -->
                <!-- </div>
            </div> -->
        </section>

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
                        </div>   
                    </div>
                </div>

            </div> 
        </section>

        <!--== 14. Have a look to our dishes ==-->

        <section id="have-a-look" class="have-a-look hidden-xs">
            <img class="img-responsive section-icon hidden-sm hidden-xs" src="">
            <div class="wrapper">
                <div class="container-fluid">
                    <div class="row">

                        <div class="menu-gallery" style="width: 50%; float:left;">
                            <div class="flexslider-container">
                                <div class="flexslider">
                                    <ul class="slides">
                                        <li>
                                            <img src="<?php echo base_url(); ?>desain/frontend/images/menu-gallery/testi1.png" />
                                        </li>
                                        <li>
                                            <img src="<?php echo base_url(); ?>desain/frontend/images/menu-gallery/testi2.png" />
                                        </li>
                                        <li>
                                            <img src="<?php echo base_url(); ?>desain/frontend/images/menu-gallery/testi3.png" />
                                        </li>
                                        <li>
                                            <img src="<?php echo base_url(); ?>desain/frontend/images/menu-gallery/testi4.png" />
                                        </li>
                                        <li>
                                            <img src="<?php echo base_url(); ?>desain/frontend/images/menu-gallery/testi5.png" />
                                        </li>
                                        
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="gallery-heading hidden-xs color-bg" style="width: 50%; float:right;">
                            <h2 class="section-title">Testimoni Catering Puasin Jember</h2>
                        </div>
                    </div> <!-- /.row -->
                </div> <!-- /.container-fluid -->
            </div> <!-- /.wrapper -->
        </section>

        <!--== 15. Reserve A Table! ==-->
        <section id="reserve" class="reserve">
            <img class="img-responsive section-icon hidden-sm hidden-xs" src="">
            <div class="wrapper">
                <div class="container-fluid">
                    <div class="row dis-table">
                        <div class="col-xs-6 col-sm-6 dis-table-cell color-bg">
                            <h2 class="section-title">Catering Puasin Jember</h2>
                        </div>
                        <div class="col-xs-6 col-sm-6 dis-table-cell section-bg">
                            
                        </div>
                    </div> <!-- /.dis-table -->
                </div> <!-- /.row -->
            </div> <!-- /.wrapper -->
        </section> <!-- /#reserve -->

        <section class="reservation">
            <img class="img-responsive section-icon hidden-sm hidden-xs" src="">
            <div class="wrapper">
                <div class="container-fluid">
                    <div class="section-content">
                        <div class="row">
                            <div class="col-md-5 col-sm-6">
                                <form class="reservation-form" method="post" action="">
                                    <div class="row">
                                        <center><h2>PESAN</h2></center>
                                        <center><p>Hubungi Kami dengan Klik Tombol Dibawah !</p></center>

                                        <div class="col-md-12 col-sm-12">
                                            <button type="submit" id="submit" name="submit" class="btn btn-reservation"><a href="https://api.whatsapp.com/send?phone=6282233860297&text=*Selamat*%20*Order*%20*di*%20*Puasin*%20*Jember*%20%0ANama%20%3A%0ANo.Telp%20%3A%0ATanggal%20Pemesanan%20dan%20Jam%20%3A%0ATujuan%20Antar%20%3A%0AJenis%20Pesanan%20%3A%0AJenis%20Pembayaran%20%3A" style="color:#ffffff">
                                                <span><i class="fa fa-check-circle-o"></i></span> 
                                                WA : Puasin Jember
                                            </a></button>
                                        </div>
                                            
                                    </div>
                                </form>
                            </div>

                            <div class="col-sm-2 hidden-sm hidden-xs"></div>

                            <div class="col-md-5 col-sm-6">
                                <div class="opening-time">
                                    <h3 class="opening-time-title">Contoh Format Order:</h3>
                                    <p>Nama : Dina Pamungkas</p>
                                    <p>No.Telp : 085234xxxxxx</p>
                                    <p>Tanggal Pemesanan & jam : 30 Desember 2018 & 15:00</p>
                                    <p>Tujuan Antar : jl.Kalimantan VII</p>
                                    <p>Jenis Pesanan : 4 Ricebox @21.000 & 4 snackbox @6.000 </p>
                                    <p>Jenis Pembayaran : Cash / Transfer</p>  
                                    <p>Transfer BCA A/N Tantri Wulandari Soebroto : 0244182255</p>  
                                    <p>Transfer BRI A/N Tantri Wulandari Soebroto : 774901003772532</p>  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

         <!--== 8. Great Place to enjoy ==-->
        <section id="great-place-to-enjoy" class="great-place-to-enjoy">
            <img class="img-responsive section-icon hidden-sm hidden-xs" src="">
            <div class="wrapper">
                <div class="container-fluid">
                    <div class="row dis-table">
                        <div class="col-xs-6 col-sm-6 dis-table-cell color-bg">
                            <h2 class="section-title">Saran & Kritik Puasin Jember</h2>
                        </div>
                        <div class="col-xs-6 col-sm-6 dis-table-cell section-bg">
                            
                        </div>
                    </div> <!-- /.dis-table -->
                </div> <!-- /.row -->
            </div> <!-- /.wrapper -->
        </section> <!-- /#great-place-to-enjoy -->

        <section class="contact-form">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1">
                        <div class="row">
                             <form class="contact-form" method="post" action="contact.php">
                                    <h2><p><b>Kotak Saran&Kritik</b></p></h2>
                                    <p>Silahkan isi saran & kritik anda mengenai apa yang dirasa
                                     kurang berkenan</p>
                                    <p>pada proses pemesanan agar kami bisa mengetahui kekurangan kami</p>
                                    <p> Untuk puasin jember menjadi yang lebih baik! Terimakasih</p>
                               
                                <div class="col-md-6 col-sm-6">
                                    <textarea name="saran" type="text" class="form-control" id="message" rows="7" required="required" placeholder="Saran & Kritik"></textarea>
                                </div>

                                <div class="col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3">
                                    <div class="text-center">
                                        <button type="submit" id="submit" name="submit" class="btn btn-send">Kirim</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>


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