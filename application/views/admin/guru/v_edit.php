 <!-- /.col-lg-4 -->
 <div class="col-lg-13">
     <div class="panel panel-primary">
         <div class="panel-heading">
             Edit Data
         </div>
         <div class="panel-body">

             <?php

                  echo validation_errors('div class="alert-success alert-dismissible">
                  <button  type="button" class="close" data-dismiss="modal"  aria-hidden="true">&times;</button>','</div>');

                if (isset($error_upload)) {
                    echo '<div class="alert-success alert-dismissible">
                <button  type="button" class="close" data-dismiss="modal"  aria-hidden="true">&times;</button>' . $error_upload . '</div>';
                }
                echo form_open_multipart('guru/edit/' . $guru->id_guru);
                ?>
             <div class="form-group">
                 <label>NIP</label>
                 <input class="form-control" type="text" value="<?= $guru->nip ?>" name="nip" placeholder="NIP" required>
             </div>
             <div class="form-group">
                 <label>Nama Guru</label>
                 <input class="form-control" type="text" value="<?= $guru->nama_guru ?>" name="nama_guru" placeholder="Nama Guru" required>
             </div>
             <div class="col-md-6">
                 <div class="form-group">
                     <label>Tempat Lahir</label>
                     <input class="form-control" type="text" value="<?= $guru->tempat_lahir ?>" name="tempat_lahir" placeholder="Tempat Lahir" required>
                 </div>
             </div>
             <div class="col-md-6">
                 <div class="form-group">
                     <label>Tanggal Lahir</label>
                     <input class="form-control" type="text" name="tgl_lahir" value="<?= $guru->tgl_lahir ?>" id="tanggal" placeholder="Tanggal Lahir" required>
                 </div>
             </div>
             <div class="col-md-6">
                 <div class="form-group">
                     <label>Mata Pelajaran</label>
                     <select name="id_mapel" class="form-control">
                         <option value="<?= $guru->id_mapel ?>"><?= $guru->nama_mapel ?></option>
                         <?php foreach ($mapel as $key => $value) { ?>
                             <option value="<?= $value->id_mapel ?>"><?= $value->nama_mapel ?></option>
                         <?php } ?>
                     </select>
                 </div>
             </div>

             <div class="col-md-6">
                 <div class="form-group">
                     <label>Pendidikan</label>
                     <select name="pendidikan" class="form-control">
                         <option value="<?= $guru->pendidikan ?>"><?= $guru->pendidikan ?></option>
                         <option value="D3">D3</option>
                         <option value="S1">S1</option>
                         <option value="S2">S2</option>
                         <option value="S2">S3</option>
                     </select>
                 </div>
             </div>


             <div class="form-group">
                 <img src="<?= base_url('foto_guru/' . $guru->foto_guru) ?>" width="150px">
             </div>

             <div class="form-group">
                 <label>Ganti Guru</label>
                 <input type="file" class="form-control" type="text" name="foto_guru">
             </div>

             <div class="form-group">
                 <button type="submit" class="btn btn-primary">Simpan</button>
                 <button type="reset" class="btn btn-success">Reset</button>
             </div>

             <?php echo form_close(); ?>

         </div>
     </div>
     <!-- /.col-lg-4 -->