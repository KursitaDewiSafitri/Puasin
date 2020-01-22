
<?php echo form_open('kategori/delete');?>

<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header text-center">
        <h4>LIST KATEGORI OBAT</h4>
      </div>
      <div class="card-body">
        <a href="<?php echo base_url(); ?>kategori/input" class="float-right">
          <h4><span class="badge badge-pill badge-success badge-atas">Tambah Kategori</span></h4>
          <!-- <button class="btn btn-circle btn-lg btn-success btn-atas" type="button"><i class="fa fa-plus"></i>
          </button> -->
        </a>
        <!-- hapus -->
          <!-- <h4 class="badge-hapus"><span class="badge badge-pill badge-danger">Terpilih <span id="jumlah_pilih">0</span></span></h4> -->

        <!-- <div id="alert"><?php echo $this->Core->Hapus_disable(); ?></div>
        <div id="modal"><?php echo $this->Core->Hapus_aktif(); ?></div> -->
        <div class="table-responsive">
          <table id="myTable" class="table color-table info-table tab ">
          <thead>
              <tr>
                  <th>#</th>
                  <th>Kategori Produk</th>
                  <th>Opsi</th>
              </tr>
          </thead>
          <tbody>
            <?php $no=1; foreach ($kategori as $data) {?>
              <?php $id_check = $data->idkategori_produk;?>
              <tr>
                  <td><div class="checkbox">
                      <label for="<?php echo $id_check ?>" class="form-check-label ">
                        <input type="checkbox" id="<?php echo $id_check ?>" name="id[] " value="<?php echo $id_check ?>" class="form-check-input id_checkbox"><?php echo $no;?>
                      </label></div></td>
                  <td><?php echo $data->nama_kategori?></td>
                  <td><a href="<?php base_url()?>/kategori/edit/<?php echo $data->idkategori_produk;?>">
                    <button type="button" class="btn btn-warning btn-sm btn-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit">
                      <i class="fa fa-edit"></i>
                    </button>
                  </a></td>
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
<?php echo form_close();?>
<?php echo $this->Core->Fungsi_JS_Hapus(); ?>
