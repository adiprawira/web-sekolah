 <!-- /.col-lg-4 -->
 <div class="col-lg-13">
     <div class="panel panel-primary">
         <div class="panel-heading">
             <a href="<?= base_url('mapel/add') ?>" class="btn btn-primary btn-sm">
                 <i class=" fa fa-plus"></i> Add
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
                         <th>Mata Pelajaran</th>
                         <th>Action</th>
                     </tr>

                 </thead>
                 <tbody>
                     <?php $no = 1;
                        foreach ($mapel as $key => $value) { ?>

                         <tr>
                             <td><?= $no++; ?></td>
                             <td><?= $value->nama_mapel ?></td>
                             <td>
                                 <a href="<?= base_url('mapel/edit/' . $value->id_mapel) ?>" class="btn btn-xs btn-success"><i class="fa fa-pencil"></i></a>
                                 <a href="<?= base_url('mapel/delete/' . $value->id_mapel) ?>" onclick="return confirm('Apakah data ini akan dihapus..?')" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i></a>
                             </td>
                         </tr>
                     <?php } ?>
                 </tbody>
             </table>

         </div>
     </div>
     <!-- /.col-lg-4 -->