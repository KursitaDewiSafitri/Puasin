<!DOCTYPE html>
<html lang="en">
<?php
if (!isset($_SESSION['username']) && !isset($_SESSION['id_login'])) {
  redirect('Login');
}?>
<!--Counter Saran-->
<?php
    $query=$this->db->query("SELECT * FROM saran WHERE saran_status='1'");
    $jum_saran=$query->num_rows();
?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url() ?>desain/puasin.png">
    <title>PUASIN JEMBER</title>
    <!-- This page CSS -->
    <!-- chartist CSS -->
    <link href="<?php echo base_url() ?>desain/assets/node_modules/morrisjs/morris.css" rel="stylesheet">
    <!--Toaster Popup message CSS -->
    <link href="<?php echo base_url() ?>desain/assets/node_modules/toast-master/css/jquery.toast.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo base_url() ?>desain/dist/css/style.min.css" rel="stylesheet">
    <!-- Dashboard 1 Page CSS -->
    <link href="<?php echo base_url() ?>desain/dist/css/pages/dashboard1.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="skin-default fixed-layout">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">PUASIN JEMBER</p>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.html">
                        <!-- Logo icon --><b>
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <!-- <img src="<?php echo base_url() ?>desain/assets/images/logo-icon.png" alt="homepage" class="dark-logo" /> -->
                            <!-- Light Logo icon -->
                            <!-- <img src="<?php echo base_url() ?>desain/assets/images/logo-light-icon.png" alt="homepage" class="light-logo" /> -->
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text --><span>
                         <!-- dark Logo text -->
                         <!-- <img src="<?php echo base_url() ?>desain/assets/images/logo-text.png" alt="homepage" class="dark-logo" /> -->
                         <!-- Light Logo text -->
                         <!-- <img src="<?php echo base_url() ?>desain/assets/images/logo-light-text.png" class="light-logo" alt="homepage" /></span> </a> -->
                          <img src="<?php echo base_url() ?>desain/cc.png"  class="light-logo" alt="homepage" style="max-width: 200px;" /></span> </a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav mr-auto">
                        <!-- This is  -->
                        <li class="nav-item"> <a class="nav-link nav-toggler d-block d-sm-none waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                        <li class="nav-item"> <a class="nav-link sidebartoggler d-none d-lg-block d-md-block waves-effect waves-dark" href="javascript:void(0)"><i class="icon-menu"></i></a> </li>
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->

                    </ul>
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav my-lg-0">

                          <li class="nav-item dropdown u-pro">
                              <a class="nav-link dropdown-toggle waves-effect waves-dark profile-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="http://puasinjember.com/desain/frontend/images/logo.jpg" alt="user" class=""> <span class="hidden-md-down"><?php echo $_SESSION['user']; ?> &nbsp;<i class="fa fa-angle-down"></i></span> </a>
                              <div class="dropdown-menu dropdown-menu-right animated flipInY">
                                  <!-- text-->

                                  <!-- text-->
                                  <a href="<?php echo base_url(); ?>Login/logout" class="dropdown-item"><i class="fa fa-power-off"></i> Keluar </a>
                                  <!-- text-->
                              </div>
                          </li>
                          <!-- ============================================================== -->
                          <!-- End User Profile -->
                          <!-- ============================================================== -->
                          <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="ti-email"></i>
                                <div class="notify"> <span class="heartbit"></span><span class="point"></span> </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right mailbox animated bounceInDown">
                                <ul>
                                    <li>
                                        <div class="drop-title">Anda memiliki <?php echo $jum_saran;?> saran</div>
                                    </li>
                                <?php
                                    $saran=$this->db->query("SELECT saran.*,DATE_FORMAT(saran_tanggal,'%d %M %Y') AS tanggal FROM saran WHERE saran_status='1' ORDER BY saran_id DESC LIMIT 5");
                                    foreach ($saran->result_array() as $in) :
                                        $saran_id=$in['saran_id'];
                                        $saran_nama=$in['saran_nama'];
                                        $saran_tgl=$in['tanggal'];
                                        $saran_pesan=$in['saran_pesan'];
                                ?>
                                    <li>
                                        <div class="message-center">
                                          <!-- Message -->
                                            <a href="<?php echo base_url().'admin/saran'?>">
                                                <div class="btn btn-danger btn-circle"><i class="fa fa-link"></i></div>
                                                <div class="mail-contnet">
                                                    <h5><?php echo $saran_nama;?></h5> <span class="mail-desc"><?php echo $saran_pesan;?></span> <span class="time"><?php echo $saran_tgl;?></span> </div>
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <a class="nav-link text-center link" href="<?php echo base_url().'admin/saran'?>"> <strong>Lihat Semua Pesan</strong> <i class="fa fa-angle-right"></i> </a>
                                    </li>
                                <?php endforeach;?>
                                </ul>
                            </div>
                        </li>
                          <!-- ============================================================== -->
                          <!-- ============================================================== -->
                          <li class="nav-item right-side">
                              <a class="nav-link  waves-effect waves-light" href="<?php echo base_url().'Beranda'?>" target="_blank" title="Lihat Website"><i class="fa fa-globe"></i></a>
                          </li>
                          <li class="nav-item right-side-toggle"> <a class="nav-link  waves-effect waves-light" href="javascript:void(0)"><i class="ti-settings"></i></a></li>
                      </ul>
                  </div>
              </nav>
          </header>
          <!-- ============================================================== -->
          <!-- End Topbar header -->
          <!-- ============================================================== -->
          <!-- ============================================================== -->
          <!-- Left Sidebar - style you can find in sidebar.scss  -->
          <!-- ============================================================== -->
          <aside class="left-sidebar">
              <!-- Sidebar scroll-->
              <div class="scroll-sidebar">
                  <!-- Sidebar navigation-->
                  <nav class="sidebar-nav">
                      <ul id="sidebarnav">
                          <li class="user-pro"> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false" style="background: url(../../../desain/assets/images/background/user-info.jpg) center center/cover no-repeat;"><span class="hide-menu">MENU PUASIN JEMBER</span></a>

                          </li>

              <?php $this->load->view("home/menu"); ?>
                      </ul>
                  </nav>
                  <!-- End Sidebar navigation -->
              </div>
              <!-- End Sidebar scroll-->
          </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h4 class="text-themecolor"><?php echo $this->uri->segment(2) ?></h4>
                    </div>
                    <div class="col-md-7 align-self-center text-right">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>

                                <li class="breadcrumb-item active">Saran</li>
                            </ol>

                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Info box -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <td colspan="2">

                                </td>
                                <div class="table-responsive">
                                    <table id="demo-foo-addrow" class="table m-t-30 table-hover contact-list"  data-page-size="10" >
                                        <thead>
                                            <tr>
                                                <th>Tanggal</th>
                                                <th>Nama</th>
                                                <th>Email</th>
                                                <th>Saran</th>
                                                <th style="text-align:right;">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                         <?php
                                            $no=0;
                                            foreach ($data->result_array() as $i) :
                                               $no++;
                                               $saran_id=$i['saran_id'];
                                               $saran_nama=$i['saran_nama'];
                                               $saran_email=$i['saran_email'];
                                               $saran_msg=$i['saran_pesan'];
                                               $tanggal=$i['tanggal'];

                                            ?>
                                        <tr>
                                          <td><?php echo $tanggal;?></td>
                                          <td><?php echo $saran_nama;?></td>
                                          <td><?php echo $saran_email;?></td>
                                          <td><?php echo $saran_msg;?></td>
                                          <td style="text-align:right;">
                                                <a class="btn" data-toggle="modal" data-target="#ModalHapus<?php echo $saran_id;?>"><span class="fa fa-trash"></span></a>
                                          </td>
                                        </tr>
                                        <?php endforeach;?>

                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <td colspan="7">
                                                    <div class="text-right">
                                                        <ul class="pagination"> </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- Comment - table -->
                <!-- ============================================================== -->
                <?php foreach ($data->result_array() as $i) :
              $saran_id=$i['saran_id'];
              $saran_nama=$i['saran_nama'];
              $saran_email=$i['saran_email'];
              $saran_msg=$i['saran_pesan'];
              $tanggal=$i['tanggal'];
            ?>
    <!--Modal Hapus Saran-->
        <div class="modal fade" id="ModalHapus<?php echo $saran_id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel">Hapus Saran</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>

                    </div>
                    <form class="form-horizontal" action="<?php echo base_url().'admin/saran/hapus_saran'?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                                   <input type="hidden" name="kode" value="<?php echo $saran_id;?>"/>
                            <p>Apakah Anda yakin mau menghapus data ini?</p>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary btn-flat" id="simpan">Hapus</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    <?php endforeach;?>
                    <!-- ============================================================== -->
                    <!-- Comment widgets -->
                    <!-- ============================================================== -->

                    <!-- ============================================================== -->
                    <!-- Table -->
                    <!-- ============================================================== -->

                <!-- ============================================================== -->
                <!-- End Comment - chats -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Over Visitor, Our income , slaes different and  sales prediction -->
                <!-- ============================================================== -->

                <!-- ============================================================== -->
                <!-- End Page Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Todo, chat, notification -->
                <!-- ============================================================== -->

                <!-- ============================================================== -->
                <!-- End Page Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <div class="right-sidebar">
                    <div class="slimscrollright">
                        <div class="rpanel-title"> Service Panel <span><i class="ti-close right-side-toggle"></i></span> </div>
                        <div class="r-panel-body">
                            <ul id="themecolors" class="m-t-20">
                                <li><b>With Light sidebar</b></li>
                                <li><a href="javascript:void(0)" data-skin="skin-default" class="default-theme working">1</a></li>
                                <li><a href="javascript:void(0)" data-skin="skin-green" class="green-theme">2</a></li>
                                <li><a href="javascript:void(0)" data-skin="skin-red" class="red-theme">3</a></li>
                                <li><a href="javascript:void(0)" data-skin="skin-blue" class="blue-theme">4</a></li>
                                <li><a href="javascript:void(0)" data-skin="skin-purple" class="purple-theme">5</a></li>
                                <li><a href="javascript:void(0)" data-skin="skin-megna" class="megna-theme">6</a></li>
                                <li class="d-block m-t-30"><b>With Dark sidebar</b></li>
                                <li><a href="javascript:void(0)" data-skin="skin-default-dark" class="default-dark-theme ">7</a></li>
                                <li><a href="javascript:void(0)" data-skin="skin-green-dark" class="green-dark-theme">8</a></li>
                                <li><a href="javascript:void(0)" data-skin="skin-red-dark" class="red-dark-theme">9</a></li>
                                <li><a href="javascript:void(0)" data-skin="skin-blue-dark" class="blue-dark-theme">10</a></li>
                                <li><a href="javascript:void(0)" data-skin="skin-purple-dark" class="purple-dark-theme">11</a></li>
                                <li><a href="javascript:void(0)" data-skin="skin-megna-dark" class="megna-dark-theme ">12</a></li>
                            </ul>

                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <footer class="footer">
            TIM PSI - 2018
        </footer>
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="<?php echo base_url() ?>desain/assets/node_modules/jquery/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap popper Core JavaScript -->
    <script src="<?php echo base_url() ?>desain/assets/node_modules/popper/popper.min.js"></script>
    <script src="<?php echo base_url() ?>desain/assets/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="<?php echo base_url() ?>desain/dist/js/perfect-scrollbar.jquery.min.js"></script>
    <!--Wave Effects -->
    <script src="<?php echo base_url() ?>desain/dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="<?php echo base_url() ?>desain/dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="<?php echo base_url() ?>desain/dist/js/custom.min.js"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <!--morris JavaScript -->
    <script src="<?php echo base_url() ?>desain/assets/node_modules/raphael/raphael-min.js"></script>
    <script src="<?php echo base_url() ?>desain/assets/node_modules/morrisjs/morris.min.js"></script>
    <script src="<?php echo base_url() ?>desain/assets/node_modules/jquery-sparkline/jquery.sparkline.min.js"></script>
    <!-- Popup message jquery -->
    <script src="<?php echo base_url() ?>desain/assets/node_modules/toast-master/js/jquery.toast.js"></script>
    <!-- Chart JS -->
    <script src="<?php echo base_url() ?>desain/dist/js/dashboard1.js"></script>
    <script src="<?php echo base_url() ?>desain/assets/node_modules/toast-master/js/jquery.toast.js"></script>

</body>

</html>
