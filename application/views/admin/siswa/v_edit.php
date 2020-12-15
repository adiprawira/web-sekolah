 <!-- /.col-lg-4 -->
 <div class="col-lg-13">
     <div class="panel panel-primary">
         <div class="panel-heading">
             Edit Data
         </div>
         <div class="panel-body">

             <?php

                echo validation_errors('div class="alert-success alert-dismissible">
                  <button  type="button" class="close" data-dismiss="modal"  aria-hidden="true">&times;</button>', '</div>');

                if (isset($error_upload)) {
                    echo '<div class="alert-success alert-dismissible">
                <button  type="button" class="close" data-dismiss="modal"  aria-hidden="true">&times;</button>' . $error_upload . '</div>';
                }
                echo form_open_multipart('siswa/edit/' . $siswa->id_siswa);
                ?>
             <div class="form-group">
                 <label>NIS</label>
                 <input class="form-control" type="text" value="<?= $siswa->nis ?>" name="nis" placeholder="NIS" required>
             </div>
             <div class="form-group">
                 <label>Nama Siswa</label>
                 <input class="form-control" type="text" value="<?= $siswa->nama_siswa ?>" name="nama_siswa" placeholder="Nama Siswa" required>
             </div>
             <div class="col-md-6">
                 <div class="form-group">
                     <label>Tempat Lahir</label>
                     <input class="form-control" type="text" value="<?= $siswa->tempat_lahir ?>" name="tempat_lahir" placeholder="Tempat Lahir" required>
                 </div>
             </div>
             <div class="col-md-6">
                 <div class="form-group">
                     <label>Tanggal Lahir</label>
                     <input class="form-control" type="text" name="tgl_lahir" value="<?= $siswa->tgl_lahir ?>" id="tanggal" placeholder="Tanggal Lahir" required>
                 </div>
             </div>

             <div class="col-md-6">
                 <div class="form-group">
                     <label>Kelas</label>
                     <select name="kelas" class="form-control">
                         <option value="<?= $siswa->kelas ?>"><?= $siswa->kelas ?></option>
                         <option value="I">I</option>
                         <option value="II">II</option>
                         <option value="III">III</option>
                         <option value="IV">IV</option>
                         <option value="V">V</option>
                         <option value="VI">VI</option>
                         <option value="VII">VII</option>
                         <option value="VIII">VIII</option>
                         <option value="IX">IX</option>
                         <option value="X">X</option>
                         <option value="XI">XI</option>
                         <option value="XII">XII</option>
                     </select>
                 </div>
             </div>

             <div class="col-md-6">
                 <div class="form-group">
                     <label>Ganti Foto</label>
                     <input type="file" class="form-control" type="text" name="foto_siswa">
                 </div>
             </div>

             <div class="form-group">
                 <label>Foto Siswa</label>
                 <img src="<?= base_url('foto_siswa/' . $siswa->foto_siswa) ?>" width="150px">
             </div>

             <div class="form-group">
                 <button type="submit" class="btn btn-primary">Simpan</button>
                 <button type="reset" class="btn btn-success">Reset</button>
             </div>

             <?php echo form_close(); ?>

         </div>
     </div>
     <!-- /.col-lg-4 -->