<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
              <div class="col-lg-12 col-md-6">
                                      <button type="button" class="btn waves-effect waves-light btn-lg btn-success"> <i class="mdi mdi-food-fork-drink"></i>INPUT FORM PRODUK</button>
                    </div>

                <!-- <span><h4 class="card-title"> <i class="mdi mdi-food-fork-drink"></i> INPUT PRODUK</h4><br></span> -->
                  <?php echo form_open_multipart('produk/insert', array('class' => "floating-labels"));?>
                  <?php echo @$error;?>

                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group ">
                        <label>Upload Gambar :</label><br><br>
                        <input type="file" id="input-file-now-custom-1" name="gambar" class="dropify" data-default-file="" />
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="col-md-12">
                        <label for="nama">Nama :</label>
                        <div class="form-group ">
                            <input type="text" class="form-control" id="nama" name="nama" required value="<?php echo @$produk['nama']; ?>">
                            <span class="bar"></span>

                        </div>
                      </div>
                      <div class="col-md-12">
                        <label for="nama">KodeProduk :</label>
                        <div class="form-group ">
                              <input type="text" name="KodeProduk" id="KodeProduk" class="form-control" placeholder="" value="<?php if($this->uri->segment(2)=="edit"){echo @$produk['KodeProduk'];}else{echo "P01"; } ?>" required>
                            <span class="bar"></span>

                        </div>
                      </div>
                      <div class="col-md-12">
                        <label for="nama">Harga produk (Rp)</label>
                        <div class="form-group ">
                            <input type="text" class="form-control" id="harga" name="harga" required value="<?php echo @$produk['harga']; ?>">
                            <span class="bar"></span>

                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group ">
                          <label for="kategori">Kategori</label>
                          <input type="text" class="form-control" id="kategori" name="kategori" required value="<?php echo @$produk['kategori'];  ?>">
                          <span class="bar"></span>

                          <!-- <label for="kategori">Kategori</label><br><br> -->
                          <!-- <select class="select2 m-b-10 select2-multiple" style="width: 100%" multiple="multiple" data-placeholder="Choose"> -->
                                      <!-- <?php foreach ($kategori as $value): ?> -->
                                          <!-- <option value="<?php echo $value->id_kategori ?>"><?php echo $value->nama_kategori ?></option> -->
                                      <!-- <?php endforeach; ?> -->
                                      <!-- </select> -->

                        </div>
                      </div>
                    </div>
                      <div class="col-md-12">
                            <label for="keterangan">Keterangan</label>
                        <div class="form-group m-b-5">
                            <textarea class="form-control" rows="4" id="keterangan" name="keterangan"><?php echo @$produk['keterangan']; ?></textarea>
                            <span class="bar"></span>

                        </div>
                      </div>
                      <br><br>
                      <div class="col-md-12">
                        <button type="button" name="kembali" class="btn btn-default btn-sm" onclick="window.history.back()"> <i class="fa fa-mail-reply"></i> Kembali</button>
                        <button type="submit" name="submit" class="btn btn-success pull-right" > <i class="fa fa-save"></i> Simpan</button>
                      </div>
                  </div>

                  <?php echo form_close(); ?>
            </div>
        </div>
    </div>
</div>
