 <!-- /.col-lg-4 -->
 <div class="col-lg-13">
     <div class="panel panel-primary">
         <div class="panel-heading">
             Add Gallery
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

                echo form_open_multipart('gallery/add');
                ?>

             <div class="form-group">
                 <label>Nama Gallery</label>
                 <input class="form-control" type="text" name="nama_gallery" placeholder="Nama Gallery" required>
             </div>

             <div class="form-group">
                 <label>Sampul</label>
                 <input type="file" class="form-control" type="text" name="sampul" required>
             </div>

             <div class="form-group">
                 <button type="submit" class="btn btn-primary">Simpan</button>
                 <button type="reset" class="btn btn-success">Reset</button>
             </div>

             <?php echo form_close(); ?>

         </div>
     </div>
     <!-- /.col-lg-4 -->