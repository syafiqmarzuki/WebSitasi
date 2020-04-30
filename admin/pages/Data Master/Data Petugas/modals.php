  <!-- insert modal dialog-->
  <div class="modal fade" id="tambahpetugas" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
          <!-- <div class="modal-header"> -->
            <div class="modal-header" style="background-color: #4286f4;">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  <center><h3 class="modal-title" id="myModalLabel" style="color: #fff">Tambah Petugas</h3></center>
              </div>
          <div class="modal-body">
          <form method="post" action="pages/data_petugas/aksi_tambah_petugas.php" enctype="multipart/form-data">

          <div class="container-fluid">
                    

                      <div class="box-body">
                        <div class="row">
                          <div class="col-lg-4">
                            <label class="control-label" style="position:relative; top:7px;">Nama Petugas</label>
                          </div>
                          <div class="col-lg-8">
                            <input type="text" class="form-control" name="nmptgs" placeholder="Masukan Nama" style="width: 335px;">
                          </div>
                        </div>

                        <div style="height:10px;"></div>
                        <div class="row">
                          <div class="col-lg-4">
                            <label class="control-label" style="position:relative; top:7px;">Alamat</label>
                          </div>
                          <div class="col-lg-8">
                            <textarea rowspan="2" class="form-control" placeholder="Masukan Alamat" style="width: 335px;" name="almtptgs"></textarea>
                          </div>
                        </div>

                        <div style="height:10px;"></div>
                        <div class="row">
                          <div class="col-lg-4">
                            <label class="control-label" style="position:relative; top:7px;">Telepon</label>
                          </div>
                          <div class="col-lg-8">
                            <input type="text" class="form-control" name="tlpptgs" placeholder="Masukan Nomor Telepon" style="width: 335px;">
                          </div>
                        </div>

                        <div style="height:10px;"></div>
                        <div class="row">
                          <div class="col-lg-4">
                            <label class="control-label" style="position:relative; top:7px;">Level</label>
                          </div>
                          <div class="col-lg-8">
                              <select class="form-control" style="width: 335px;" name="level">
                              <option value="0">Pilih Level</option>
                                <option value="Admin">Admin</option>
                                <option value="Petugas">Petugas</option>
                              </select>
                          </div>
                        </div>


                        <div style="height:10px;"></div>
                        <div class="row">
                          <div class="col-lg-4">
                            <label class="control-label" style="position:relative; top:7px;">Jenis Kelamin</label>
                          </div>
                          <div class="col-lg-8">
                              <select class="form-control" style="width: 335px;" name="jk_ptgs">
                              <option value="0">Pilih Jenis Kelamin</option>
                              <option value="Laki-laki">Laki-laki</option>
                              <option value="Perempuan">Perempuan</option>
                              </select>
                          </div>
                        </div>

                        <div style="height:10px;"></div>
                        <div class="row">
                          <div class="col-lg-4">
                            <label class="control-label" style="position:relative; top:7px;">Username</label>
                          </div>
                          <div class="col-lg-8">
                            <input type="text" class="form-control" placeholder="Masukan Username" style="width: 335px;" name="usernama">
                          </div>
                        </div>


                        <div style="height:10px;"></div>
                        <div class="row">
                          <div class="col-lg-4">
                            <label class="control-label" style="position:relative; top:7px;">Password</label>
                          </div>
                          <div class="col-lg-8">
                            <input type="password" class="form-control" placeholder="Masukan Password" style="width: 335px;" name="passworde">
                          </div>
                        </div>
                      

                    </div>
                    </div>

                  

          </div>
          <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                      <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</a>
                    </div>     
                    </form>            
      </div>
    </div>
  </div>         
  <!-- /modal dialog-->



<!-- Edit Modal HTML -->
    <div id="editpetugas<?php echo $row['id_ptgs']; ?>" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
              <?php
              include '../include/config.php';
              if (isset($_GET['id_ptgs'])) {
                $id = $_GET['id_ptgs'];
                $data = $SITASI->readid($id);
              }

               ?>
                   <div class="modal-header" style="background-color: #f7c01b">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  <center><h3 class="modal-title" id="myModalLabel" style="color: #fff">Edit Petugas</h3></center>
              </div>
                   <div class="modal-body">  
                <form method="post" action="pages/data_petugas/aksi_update_petugas.php?id_ptgs=<?php echo $erow['id_ptgs'];?>">

                     <div class="container-fluid">

                      <div class="box-body">
                        <div class="row">
                          <div class="col-lg-4">
                            <label class="control-label" style="position:relative; top:7px;">ID Petugas</label>
                          </div>
                          <div class="col-lg-8">
                            <input type="text" class="form-control" readonly name="nissw"  style="width: 335px;">
                          </div>
                        </div>

                        <div style="height:10px;"></div>
                        <div class="row">
                          <div class="col-lg-4">
                            <label class="control-label" style="position:relative; top:7px;">Nama Petugas</label>
                          </div>
                          <div class="col-lg-8">
                            <input type="text" class="form-control"  name="nmptgs" style="width: 335px;">
                          </div>
                        </div>

                        <div style="height:10px;"></div>
                        <div class="row">
                          <div class="col-lg-4">
                            <label class="control-label" style="position:relative; top:7px;">Alamat</label>
                          </div>
                          <div class="col-lg-8">
                            <textarea rowspan="2" class="form-control"   style="width: 335px;" name="almtptgs"></textarea>
                          </div>
                        </div>


                        <div style="height:10px;"></div>
                        <div class="row">
                          <div class="col-lg-4">
                            <label class="control-label" style="position:relative; top:7px;">Telepon</label>
                          </div>
                          <div class="col-lg-8">
                            <input type="text" class="form-control"  style="width: 335px;" name="tlpptgs">
                          </div>
                        </div>

                        <div style="height:10px;"></div>
                        <div class="row">
                          <div class="col-lg-4">
                            <label class="control-label" style="position:relative; top:7px;">Level</label>
                          </div>
                          <div class="col-lg-8">
                              <select class="form-control"  style="width: 335px;" name="level">
                                <option value="Admin">Admin</option>
                    <option value="Petugas">Petugas</option>
                              </select>
                          </div>
                        </div>

                        <div style="height:10px;"></div>
                        <div class="row">
                          <div class="col-lg-4">
                            <label class="control-label" style="position:relative; top:7px;">Jenis Kelamin</label>
                          </div>
                          <div class="col-lg-8">
                              <select class="form-control"  style="width: 335px;" name="jns_kelamin_ptgs">
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                              </select>
                          </div>
                        </div>

                        <div style="height:10px;"></div>
                        <div class="row">
                          <div class="col-lg-4">
                            <label class="control-label" style="position:relative; top:7px;">Username</label>
                          </div>
                          <div class="col-lg-8">
                            <input type="text" class="form-control"  style="width: 335px;" name="usernama">
                          </div>
                        </div>

                        <div style="height:10px;"></div>
                        <div class="row">
                          <div class="col-lg-4">
                            <label class="control-label" style="position:relative; top:7px;">Password</label>
                          </div>
                          <div class="col-lg-8">
                            <input type="password" class="form-control"  style="width: 335px;" name="passworde">
                          </div>
                        </div>
                       
                    </div> 
                    </div>
                    </div>

      
                    
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                      <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</a>
                    </div>

                </form>
            </div>
        </div>
    </div>
    <!-- Delete Modal HTML -->
    <div class="modal modal-danger fade" id="deletepetugas" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
              <div class="modal-content">
                  <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <center><h3 class="modal-title" id="myModalLabel">Delete Pegawai</h3></center>
                  </div>
                  <div class="modal-body">
          <div class="container-fluid">
            <h5><center>Apakah anda yakin akan menghapus Petugas dengan Nama : <strong>GGG</strong></center></h5>
                  </div>
          </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                      <a href="pages/data_petugas/aksi_hapus_petugas.php?hal=petugas&id_ptgs=<?php echo $drowptgs['id_ptgs'];?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</a>
                  </div>
              </div>
          </div>
      </div>
  <!-- /.modal -->

  <!-- END MODAL DELETE -->