
<div class="card">
  <div class="card-body card-block">


           <div class="row form-group">
                   <div class="col col-md-3">
                     <label for="idobat" class=" form-control-label">Nama</label>
                   </div>
                   <div class="col-12 col-md-9">
                     <input type="text" name="nama" id="nama" class="form-control" placeholder="" value="<?php echo @$karyawan['nama']; ?>" >
                   </div>
                 </div>

                 <div class="row form-group">
                         <div class="col col-md-3">
                           <label for="idobat" class=" form-control-label">Jenis Kelamin</label>
                         </div>
                         <div class="col-12 col-md-9">

                           <input type="radio" name="jk" value="Laki-Laki" required <?php if (@$karyawan["jk"]=="Laki-Laki"): ?>
                             <?php echo "checked" ?>
                           <?php endif; ?>> Laki-Laki<br>
                           <input type="radio" name="jk" value="Perempuan" required <?php if (@$karyawan["jk"]=="Perempuan"): ?>
                             <?php echo "checked" ?>
                           <?php endif; ?>> Perempuan
                         </div>
                 </div>


                 <div class="row form-group">
                         <div class="col col-md-3">
                           <label for="idobat" class=" form-control-label">Alamat</label>
                         </div>
                         <div class="col-12 col-md-9">
                           <input type="text" name="alamat" id="alamat" class="form-control" placeholder="" value="<?php echo @$karyawan['alamat']; ?>" >
                         </div>
                       </div>

                       <div class="row form-group">
                               <div class="col col-md-3">
                                 <label for="idobat" class=" form-control-label">Telepon</label>
                               </div>
                               <div class="col-12 col-md-9">
                                 <input type="text" name="telepon" id="telepon" class="form-control" placeholder="" value="<?php echo @$karyawan['telepon']; ?>" >
                               </div>
                             </div>
                             <div class="row form-group">
                                     <div class="col col-md-3">
                                       <label for="idobat" class=" form-control-label">Email</label>
                                     </div>
                                     <div class="col-12 col-md-9">
                                       <input type="text" name="email" id="email" class="form-control" placeholder="" value="<?php echo @$karyawan['email']; ?>" >
                                     </div>
                                   </div>
                                   <div class="row form-group">
                                           <div class="col col-md-3">
                                             <label for="idobat" class=" form-control-label">jabatan</label>
                                           </div>
                                           <div class="col-12 col-md-9">
                                             <input type="text" name="jabatan" id="jabatan" class="form-control" placeholder="" value="<?php echo @$karyawan['jabatan']; ?>" >
                                           </div>
                                         </div>

                             <div class="row form-group">
                                     <div class="col col-md-3">
                                       <label for="idobat" class=" form-control-label">No KTP</label>
                                     </div>
                                     <div class="col-12 col-md-9">
                                       <input type="number" name="noktp" id="lembaga" class="form-control" placeholder="" value="<?php echo @$karyawan['noktp']; ?>" >
                                     </div>
                                   </div>


        <div class="form-actions">
            <button type="submit" class="btn btn-danger"> <i class="fa fa-check"></i> SIMPAN</button>
            <button type="button" class="btn btn-inverse" onclick="window.history.back()">KEMBALI</button>
        </div>
  </div>
</div>
