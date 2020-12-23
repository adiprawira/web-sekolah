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
                echo form_open_multipart('mapel/edit/' . $mapel->id_mapel);
                ?>

             <div class="form-group">
                 <label>Nama Mapel</label>
                 <input class="form-control" type="text" value="<?= $mapel->nama_mapel ?>" name="nama_mapel" placeholder="Nama Mapel" required>
             </div>


             <div class="form-group">
                 <button type="submit" class="btn btn-primary">Simpan</button>
                 <button type="reset" class="btn btn-success">Reset</button>
             </div>

             <?php echo form_close(); ?>

         </div>
     </div>
     <!-- /.col-lg-4 -->