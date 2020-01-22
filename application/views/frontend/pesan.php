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