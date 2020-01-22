
<?php echo form_open('produk/delete');?>

<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header text-center">
        <h4>DAFTAR PRODUK</h4>
      </div>
      <div class="card-body">
        <a href="<?php echo base_url()?>produk/input/" class="float-right">
          <h4><span class="badge badge-pill badge-success badge-atas">Tambah Baru</span></h4>
          <button class="btn btn-circle btn-lg btn-success btn-atas" type="button"><i class="fa fa-plus"></i>
          </button>
        </a>
        <!-- hapus -->
          <!-- <h4 class="badge-hapus"><span class="badge badge-pill badge-danger">Terpilih <span id="jumlah_pilih">0</span></span></h4> -->
<!--
        <div id="alert"><?php echo $this->Core->Hapus_disable(); ?></div>
        <div id="modal"><?php echo $this->Core->Hapus_aktif(); ?></div> -->

        <div class="table-responsive">
          <table class="table product-overview color-table success-table" id="myTable">
            <thead>
                <tr>
                    <th>No</th>

                    <th>Nama</th>
                    <th>Gambar</th>

                    <th>Harga</th>
                    <th>Kategori</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
              <?php $no = 0; foreach ($produk as $value): ?>
                <tr>
                    <td><?php echo ++$no; ?></td>
                    <!-- <td>#<?php echo $value->id_produk; ?></td> -->

                    <td><?php echo $value->nama_produk;?></td>
                    <td> <img src="<?php echo base_url().$value->gambar;?>" alt="iMac" width="80"> </td>
                    <td><?php echo $value->harga; ?></td>
                    <td> <span class="label label-success font-weight-100"><?php echo $value->kategori ?></span> </td>
                    <td>
                      <a href="<?php echo base_url('produk/edit/'.$value->id_produk) ?>" class="text-inverse p-r-10 btn btn-circle btn-sm btn-warning" data-toggle="tooltip" title="Edit"><i class="ti-marker-alt"></i></a>
                      <a href="<?php echo base_url('produk/delete/'.$value->id_produk) ?>" class="text-inverse p-r-10 btn btn-circle btn-sm btn-danger" data-toggle="tooltip" title="Hapus"><i class="fa fa-trash"></i></a>
                    </td>
                </tr>
              <?php endforeach; ?>
            </tbody>

            </table>
        </div>
      </div>
    </div>
  </div>
</div>
<?php echo form_close();?>

<!-- All Jquery -->
<!-- ============================================================== -->
<script src="<?php echo base_url() ?>desain/assets/node_modules/jquery/jquery-3.2.1.min.js"></script>
<?php echo $this->Core->Fungsi_JS_Hapus();?>
<!-- <script>
$('input:checkbox').on('ifToggled', function() {
alert(ldjakdjakdj);
});
</script> -->
