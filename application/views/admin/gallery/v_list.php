 <!-- /.col-lg-4 -->
 <div class="col-lg-13">
     <div class="panel panel-primary">
         <div class="panel-heading">
             <a href="<?= base_url('gallery/add') ?>" class="btn btn-primary btn-sm">
                 <i class=" fa fa-plus"></i>Add
             </a>
         </div>
         <div class="panel-body">

             <?php

                if ($this->session->flashdata('pesan')) {
                    echo '<div class="alert-success alert-dismissible">
    <button  type="button" class="close" data-dismiss="modal"  aria-hidden="true">&times;</button>';
                    $this->session->flashdata('pesan');
                    echo  " </div>";
                }
                ?>
             <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                 <thead>
                     <tr>
                         <th>No</th>
                         <th>Nama Gallery</th>
                         <th>Sampul</th>
                         <th>Action</th>
                     </tr>

                 </thead>
                 <tbody>
                     <?php $no = 1;
                        foreach ($gallery as $key => $value) { ?>

                         <tr>
                             <td><?= $no++; ?></td>
                             <td><?= $value->nama_gallery ?></td>
                             <td class="text-center">
                                 <img src="<?= base_url('sampul/' . $value->sampul) ?>" width="150px"><br>
                                 <i class="fa fa-image"> <?= $value->jml_foto ?> Foto</i> <br>
                                 <a href="<?= base_url('gallery/add_foto') ?>" class="btn btn-success btn-xs"><i class=" fa fa-plus"></i>Tambah Foto</a>
                             </td>
                             <td>
                                 <a href="<?= base_url('gallery/edit/' . $value->id_gallery) ?>" class="btn btn-xs btn-success"><i class="fa fa-pencil"></i></a>
                                 <a href="<?= base_url('gallery/delete/' . $value->id_gallery) ?>" onclick="return confirm('Apakah data ini akan dihapus..?')" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i></a>
                             </td>
                         </tr>
                     <?php } ?>
                 </tbody>
             </table>

         </div>
     </div>
     <!-- /.col-lg-4 -->