
<?php echo form_open('karyawan/delete');?>

<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header text-center">
        <h4>DAFTAR KARYAWAN PUASINJEMBER</h4>
      </div>
      <div class="card-body">
        <a href="<?php echo base_url()?>karyawan/input/" class="float-right">
          <h4><span class="badge badge-pill badge-success badge-atas">Tambah</span></h4>
          <button class="btn btn-circle btn-lg btn-success btn-atas" type="button"><i class="fa fa-plus"></i>
          </button>
        </a>
        <!-- hapus -->
          <h4 class="badge-hapus"><span class="badge badge-pill badge-danger">Terpilih <span id="jumlah_pilih">0</span></span></h4>

        <div id="alert"><?php echo $this->Core->Hapus_disable(); ?></div>
        <div id="modal"><?php echo $this->Core->Hapus_aktif(); ?></div>

        <div class="table-responsive">
          <table id="myTable" class="table color-table success-table">
          <thead>
              <tr>
                  <th width="1%">#</th>

                  <th width="1%">Nama</th>
                  <th width="1%">Telepon</th>
                  <th width="1%">Jabatan </th>
                  <th width="1%">Aksi</th>


              </tr>
          </thead>
        <tbody id="tabel_karyawan">
            <?php $no=1; foreach ($karyawan as $data) {?>
              <?php $id_check = $data->nik;?>
              <tr>
                <td>
                  <input type="checkbox" id="<?php echo $id_check ?>" name="id[] " value="<?php echo $id_check ?>" class="form-check-input id_checkbox">
                </td>
                        
                        <td><?php echo $data->nama?></td>
                        <td><?php echo $data->telepon?></td>
                        <td><?php echo $data->jabatan?></td>
                        <td >
                            <a href="<?php echo base_url()?>karyawan/edit/<?php echo $data->nik;?>">
                            <button type="button" class="btn btn-warning btn-sm btn-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="fa fa-edit"></i></button></a>
                        </td>
              </tr>
            <?php
            $no++;
            }?>
          </tbody>

            </table>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- All Jquery -->
<!-- ============================================================== -->
<script src="<?php echo base_url() ?>desain/assets/node_modules/jquery/jquery-3.2.1.min.js"></script>
<?php echo $this->Core->Fungsi_JS_Hapus();?>
<!-- <script>
$('input:checkbox').on('ifToggled', function() {
alert(ldjakdjakdj);
});
</script> -->
