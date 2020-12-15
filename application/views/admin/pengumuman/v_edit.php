 <!-- /.col-lg-4 -->
 <div class="col-lg-13">
     <div class="panel panel-primary">
         <div class="panel-heading">
             Edit Data
         </div>
         <div class="panel-body">

             <?php

                if (isset($error_upload)) {
                    echo '<div class="alert-success alert-dismissible">
                <button  type="button" class="close" data-dismiss="modal"  aria-hidden="true">&times;</button>' . $error_upload . '</div>';
                }
                echo form_open_multipart('pengumuman/edit/' . $pengumuman->id_pengumuman);
                ?>
             <div class="form-group">
                 <label>Judul Pengumuman</label>
                 <input class="form-control" type="text" name="judul_pengumuman" value="<?= $pengumuman->judul_pengumuman ?>" placeholder="Judul Pengumuman" required>
             </div>
             <div class="form-group">
                 <label>Isi Pengumuman</label>
                 <textarea name="isi_pengumuman" class="form-control" type="text" placeholder="Isi Pengumuman" cols="30" rows="10" required><?= $pengumuman->isi_pengumuman ?></textarea>
             </div>
             <div class="form-group">
                 <button type="submit" class="btn btn-primary">Simpan</button>
                 <button type="reset" class="btn btn-success">Reset</button>
             </div>
             <?php echo form_close(); ?>

         </div>
     </div>
     <!-- /.col-lg-4 -->