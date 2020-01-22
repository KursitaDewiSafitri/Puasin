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
                        <img src="<?php echo base_url(); ?>/desain/frontend/images/logo puasin.png">
                    </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <?php $this->load->view('frontend/menu')?>
            </div><!-- /.row -->
        </nav>

        <!--== 8. Great Place to enjoy ==-->
        <section id="great-place-to-enjoy" class="great-place-to-enjoy">
            <img class="img-responsive section-icon hidden-sm hidden-xs" src="">
            <div class="wrapper">
                <div class="container-fluid">
                    <div class="row dis-table">
                        <div class="col-xs-6 col-sm-6 dis-table-cell color-bg">
                            <h2 class="section-title">Great Place to enjoy</h2>
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