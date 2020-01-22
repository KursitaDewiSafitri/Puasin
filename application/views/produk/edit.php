
<?php echo form_open('Barang/delete');?>

<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header text-center">
        <h4>LIST BARANG</h4>
      </div>
      <div class="card-body">
        <a href="<?php base_url(); ?>Barang/input" class="float-right">
          <h4><span class="badge badge-pill badge-success badge-atas">Tambah </span></h4>
          <button class="btn btn-circle btn-lg btn-success btn-atas" type="button"><i class="fa fa-plus"></i>
          </button>
        </a>
        <!-- hapus -->
          <!-- <h4 class="badge-hapus"><span class="badge badge-pill badge-danger">Terpilih <span id="jumlah_pilih">0</span></span></h4>

        <div id="alert"><?php echo $this->core->Hapus_disable(); ?></div>
        <div id="modal"><?php echo $this->core->Hapus_aktif(); ?></div> -->
        <div class="table-responsive">
                                    <table class="table product-overview" id="myTable">
                                        <thead>
                                            <tr>
                                                <th>NO</th>
                                                <th>ID Barang</th>
                                                <th>Photo</th>
                                                <th>Nama</th>
                                                <th>Harga</th>
                                                <th>Kategori</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                          <?php $no = 0; foreach ($barang as $value): ?>
                                            <tr>
                                                <td><?php echo ++$no; ?></td>
                                                <td>#<?php echo $value->id_barang; ?></td>
                                                <td> <img src="<?php echo base_url().$value->gambar;?>" alt="iMac" width="80"> </td>
                                                <td><?php echo $value->nama_barang;?></td>
                                                <td><?php echo $value->harga; ?></td>
                                                <td> <span class="label label-success font-weight-100"><?php echo $value->kategori ?></span> </td>
                                                <td>
                                                  <a href="<?php echo base_url('Barang/edit/'.$value->id_barang) ?>" class="text-inverse p-r-10 btn btn-circle btn-sm btn-warning" data-toggle="tooltip" title="Edit"><i class="ti-marker-alt"></i></a>
                                                  <a href="<?php echo base_url('Barang/delete/'.$value->id_barang) ?>" class="text-inverse p-r-10 btn btn-circle btn-sm btn-danger" data-toggle="tooltip" title="Hapus"><i class="fa fa-trash"></i></a>
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
<?php echo $this->core->Fungsi_JS_Hapus(); ?>
