<div class="main-content">
  <div class="section__content section__content--p30">
    <div class="container-fluid">
      <div class="row">

        <div class="col-lg-12">
          <div class="card">
            <div class="card-header">
              <strong>karyawan</strong>
              <small> Form Edit</small>
            </div>
            <div class="card-body card-block">
              <?php echo form_open_multipart('karyawan/update');?>
              <?php echo @$error;echo form_hidden('id', $this->uri->segment(3));?>

              <?php $this->load->view($form)?>
              <!-- <?php echo $this->Core->btn_input()?> -->

              <?php echo form_close(); ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
