
<?php echo form_open('keterangan/delete');?>

<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header text-center">
        <h4>SURAT KETERANGAN UMUM </h4>
      </div>
      <div class="card-body">
        <a href="<?php echo base_url()?>keterangan/input/" class="float-right">
          <h4><span class="badge badge-pill badge-success badge-atas">Input Keterangan</span></h4>
          <button class="btn btn-circle btn-lg btn-success btn-atas" type="button"><i class="fa fa-plus"></i>
          </button>
        </a>
        <!-- hapus -->
          <h4 class="badge-hapus"><span class="badge badge-pill badge-danger">Terpilih <span id="jumlah_pilih">0</span></span></h4>

        <div id="alert"><?php echo $this->Core->Hapus_disable(); ?></div>
        <div id="modal"><?php echo $this->Core->Hapus_aktif(); ?></div>

        <div class="table-responsive">
          <table id="myTable" class="table color-table info-table tab ">
          <thead>
              <tr>
                  <th width="1%">#</th>
                  <th width="1%">No Surat</th>
                  <th width="1%">Tgl Surat</th>
                  <th width="1%">Nama </th>

                  <th width="1%">Status</th>
                  <th width="1%">Opsi</th>


              </tr>
          </thead>
        <tbody id="tabel_keterangan">
            <?php $no=1; foreach ($keterangan as $data) {?>
              <?php $id_check = $data->idsk_keterangan;?>
              <tr>
                <td>
                  <input type="checkbox" id="<?php echo $id_check ?>" name="id[] " value="<?php echo $id_check ?>" class="form-check-input id_checkbox">
                </td>
                <td><?php echo "471/".$data->nosurat_skketerangan."/35.09.07.2001/".date("Y",strtotime($data->tglbuatsurat))?></td>
                <td><?php echo $data->tglbuatsurat?></td>
                <td><?php echo $data->nama?></td>


                  <td>
                    <?php if ($data->status_surat == 0) {
                          echo "<span class='badge badge-pill badge-primary'>Baru</span>";
                        } elseif ($data->status_surat == 1) {
                          echo "<span class='badge badge-pill badge-info'>Proses</span>";
                        } elseif ($data->status_surat == 2) {
                          echo "<span class='badge badge-pill badge-success'>Selesai</span>";
                        }

                        ?></td>

                        <td >
                          <?php if ($data->status_surat==0){?>
                            <a href="<?php echo base_url()?>keterangan/proses/<?php echo $data->idsk_keterangan;?>">
                            <button type="button" class="btn btn-success btn-sm" data-placement="top" title="" data-original-title="Proses Surat">Proses Surat</button>
                          </a>
                          <?php
                          }else{?>
                            <a href="<?php echo base_url()?>keterangan/edit/<?php echo $data->idsk_keterangan;?>">
                            <button type="button" class="btn btn-warning btn-sm btn-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="fa fa-edit"></i></button></a>
                            <a href="<?php echo base_url()?>keterangan/cetak/<?php echo $data->idsk_keterangan;?>">
                            <button type="button" class="detail_obat btn btn-primary btn-circle btn-sm" data-toggle="modal" data-target="#scrollmodal" data-placement="top" title="" data-original-title="More"><i class="mdi mdi-printer"></i></button></a>
                            <?php if ($data->status_surat==1): ?>
                            <a href="<?php echo base_url()?>keterangan/selesai/<?php echo $data->idsk_keterangan;?>">
                              <button type="button" class="detail_obat btn btn-success btn-circle btn-sm" data-placement="top" title="" data-original-title="More"><i class="mdi mdi-check"></i></button></a>
                            <?php endif; ?>

                          <?php
                          }
                          ?>
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
