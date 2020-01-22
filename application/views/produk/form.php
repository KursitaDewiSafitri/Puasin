
<div class="card">
  <div class="card-body card-block">

           <div class="row form-group">
                   <div class="col col-md-3">
                     <label for="idobat" class=" form-control-label">Nama Produk</label>
                   </div>
                   <div class="col-12 col-md-9">
                     <input type="text" name="namaproduk" id="namaproduk" class="form-control" placeholder="" value="<?php echo @$produk['namaproduk']; ?>" required>
                   </div>
           </div>

           <div class="row form-group">
            <div class="col col-md-3">
              <label for="kategori_obat" class=" form-control-label">Kategori Produk</label>
            </div>
            <div class="col-12 col-md-9">
              <select name="kategori_produk_idkategori_produk" id="select" class="form-control select2">
                  <?php foreach ($kategori_obat as $value): ?>
                    <option value="<?php echo $value->idkategori_obat;?>" <?php if (@$obat['kategori_obat_idkategori_obat']==$value->idkategori_obat) {
                      echo "selected";
                    }?>><?php echo $value->kategori_obat;?></option>
                  <?php endforeach; ?>
              </select>
            </div>
    </div>

  </div>
</div>
