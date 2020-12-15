 <!-- /.col-lg-4 -->
 <div class="col-lg-13">
     <div class="panel panel-primary">
         <div class="panel-heading">
             Add Data
         </div>
         <div class="panel-body">

             <?php

                if (isset($error_upload)) {
                    echo '<div class="alert-success alert-dismissible">
                <button  type="button" class="close" data-dismiss="modal"  aria-hidden="true">&times;</button>' . $error_upload . '</div>';
                }

                echo validation_errors(
                    '<div class="alert-warning alert-dismissible">
                <button  type="button" class="close" data-dismiss="modal"  aria-hidden="true">&times;</button>',
                    '</div>'
                );

                echo form_open_multipart('berita/add');
                ?>

             <div class="form-group">
                 <label>Judul Berita</label>
                 <input class="form-control" type="text" name="judul_berita" placeholder="Judul Berita" required>
             </div>
             <div class="form-group">
                 <label>Gambar Berita</label>
                 <input type="file" class="form-control" type="text" name="gambar_berita" required>
             </div>


             <div class="form-group">
                 <label>Isi Berita</label>
                 <textarea name="isi_berita" id="editor" required></textarea>
             </div>

             <div class="form-group">
                 <button type="submit" class="btn btn-primary">Simpan</button>
                 <button type="reset" class="btn btn-success">Reset</button>
             </div>

             <?php echo form_close(); ?>

         </div>
     </div>
     <!-- /.col-lg-4 -->