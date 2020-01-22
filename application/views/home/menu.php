<?php $counter= $this->Core->get_counter();?>

<!-- <li class="nav-small-cap">----------- <i class="mdi mdi-view-dashboard"> UTAMA </i> -----------</li> -->
<li class="nav-small-cap">--- UTAMA </li>
<li <?php if ($this->uri->segment(1) == ''): ?>
  class="active"
<?php endif; ?>>
  <a class="waves-effect waves-dark" href="<?php echo base_url()?>">
    <i class="mdi mdi-home"></i>
    <span class="hide-menu">Beranda</span></a>
</li>

<!-- <li class="nav-small-cap">----- <i class="mdi mdi-database"> Content Front End </i> -----</li> -->
<li class="nav-small-cap">--- Content Front End </li>
<li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-layout-accordion-merged"></i><span class="hide-menu">Katalog</span></a>
    <ul aria-expanded="false" class="collapse">
        <li><a href="<?php echo base_url();?>admin/Produk">Produk</a></li>
        <li><a href="<?php echo base_url();?>admin/Kategori">Kategori</a></li>
    </ul>
</li>
<li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="fa fa-newspaper-o"></i><span class="hide-menu">Artikel</span></a>
    <ul aria-expanded="false" class="collapse">
        <li><a href="<?php echo base_url().'admin/artikel/add_artikel'?>">Tambah Baru</a></li>
        <li><a href="<?php echo base_url();?>admin/Artikel">Daftar Artikel</a></li>
    </ul>
</li>
<li>
  <a class="waves-effect waves-dark" href="<?php echo base_url().'admin/Testimoni'?>" aria-expanded="false"><i class="fa fa-camera"></i><span class="hide-menu">Testimoni</span></a>
</li>
<li>
  <a class="waves-effect waves-dark" href="<?php echo base_url();?>admin/Saran" aria-expanded="false"><i class="ti-email"></i><span class="hide-menu">Saran <span class="badge badge-pill badge-cyan ml-auto"></span></span></a>
</li>

  <!-- <li <?php if ($this->uri->segment(1) == 'artikel'): ?>
    class="active"
  <?php endif; ?>>
    <a class="waves-effect waves-dark" href="<?php echo base_url() ?>artikel/">
      <i class="mdi mdi-pencil-box"></i>
      <span class="hide-menu">Artikel</span></a>
    </li> -->

    <!-- <li <?php if ($this->uri->segment(1) == 'testimoni'): ?>
      class="active"
    <?php endif; ?>>
      <a class="waves-effect waves-dark" href="<?php echo base_url() ?>testimoni/">
        <i class="mdi mdi-pencil-box"></i>
        <span class="hide-menu">Testimoni</span></a>
      </li> -->

<!--
<li class="nav-small-cap">------- <i class="mdi mdi-database"> Data Master </i> -------</li> -->
<li class="nav-small-cap">--- DATA MASTER </li>


  <li <?php if ($this->uri->segment(1) == 'produk'): ?>
    class="active"
  <?php endif; ?>>
    <a class="waves-effect waves-dark" href="<?php echo base_url() ?>produk/">
      <i class="mdi mdi-food-fork-drink"></i>
      <span class="hide-menu">Produk</span></a>
    </li>

      <li <?php if ($this->uri->segment(1) == 'customer'): ?>
        class="active"
      <?php endif; ?>>
        <a class="waves-effect waves-dark" href="<?php echo base_url() ?>customer/">
          <i class="mdi mdi-face"></i>
          <span class="hide-menu">Customer</span></a>
        </li>

        <li <?php if ($this->uri->segment(1) == 'karyawan'): ?>
          class="active"
        <?php endif; ?>>
          <a class="waves-effect waves-dark" href="<?php echo base_url() ?>karyawan/">
            <i class="mdi mdi-tie"></i>
            <span class="hide-menu">Karyawan</span></a>
          </li>


<li class="nav-small-cap">--- PEMESANAN </li>
<!-- <li class="nav-small-cap"><i class="mdi mdi-cart">---TRANSAKSI </i> </li> -->

<li <?php if ($this->uri->segment(1) == 'pemesanan/input'): ?>
  class="active"
<?php endif; ?>>
  <a class="waves-effect waves-dark" href="<?php echo base_url() ?>pemesanan/input">
    <i class="mdi mdi-calculator"></i>
    <span class="hide-menu">Pemesanan</span></a>
  </li>

  <li <?php if ($this->uri->segment(1) == 'pemesanan/index2'): ?>
    class="active"
  <?php endif; ?>>
    <a class="waves-effect waves-dark" href="<?php echo base_url() ?>pemesanan/index2">
      <i class="mdi mdi-format-list-bulleted"></i>
      <span class="hide-menu">Daftar Pemesanan</span></a>
    </li>



<!-- <li class="nav-small-cap">---------- <i class="mdi mdi-file-document"> Laporan </i> ----------</li> -->
<li class="nav-small-cap">--- LAPORAN </li>

<li <?php if ($this->uri->segment(1) == 'pemesanan/index'): ?>
  class="active"
<?php endif; ?>>
  <a class="waves-effect waves-dark" href="<?php echo base_url() ?>pemesanan/index">
    <i class="mdi mdi-file-document-box"></i>
    <span class="hide-menu">Laporan Harian </span></a>
  </li>

  <li <?php if ($this->uri->segment(1) == 'pemesanan/index3'): ?>
    class="active"
  <?php endif; ?>>
    <a class="waves-effect waves-dark" href="<?php echo base_url() ?>pemesanan/index3">
      <i class="mdi mdi-file-document-box"></i>
      <span class="hide-menu">Laporan Bulanan </span></a>
    </li>
