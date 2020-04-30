

  <!-- insert modal dialog-->
  <div class="modal fade" id="detail" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
          <!-- <div class="modal-header"> -->
            <div class="modal-header" style="background-color: #4286f4;">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  <center><h3 class="modal-title" id="myModalLabel" style="color: #fff">Detail Transaksi</h3></center>
              </div>
                 <div class="modal-body">
                 <form method="post" action="pages/data_siswa/tambah_siswa.php">
                 <div class="container-fluid">

                      <div class="box-body">
                        <div class="row">
                          <div class="col-lg-4">
                            <label class="control-label" style="position:relative; top:7px;">No Rekening</label>
                          </div>
                          <div class="col-lg-8">
                            <input type="text" class="form-control" name="nissw" placeholder="Masukan Nis" style="width: 335px;">
                          </div>
                        </div>

                        <div style="height:10px;"></div>
                        <div class="row">
                          <div class="col-lg-4">
                            <label class="control-label" style="position:relative; top:7px;">Nis</label>
                          </div>
                          <div class="col-lg-8">
                            <input type="text" class="form-control" name="nmsw" placeholder="Masukan Nama" style="width: 335px;">
                          </div>
                        </div>

                        <div style="height:10px;"></div>
                        

                        <div style="height:10px;"></div>
                        <div class="row">
                          <div class="col-lg-4">
                            <label class="control-label" style="position:relative; top:7px;">Nama</label>
                          </div>
                          <div class="col-lg-8">
                          
                            <input type="date" class="form-control" style="width: 335px;" name="tglhsw">
                          </div>
                        </div>


                        <div style="height:10px;"></div>
                        <div class="row">
                          <div class="col-lg-4">
                            <label class="control-label" style="position:relative; top:7px;">Jumlah Setoran</label>
                          </div>
                          <div class="col-lg-8">
                            <input type="text" class="form-control" name="no_rek" placeholder="Masukan No Rekening" style="width: 335px;">
                          </div>
                        </div>
                        <div style="height:10px;"></div>
                        <div class="row">
                          <div class="col-lg-4">
                            <label class="control-label" style="position:relative; top:7px;">Nama Petugas</label>
                          </div>
                          <div class="col-lg-8">
                            <input type="text" class="form-control" name="no_rek" placeholder="Masukan No Rekening" style="width: 335px;">
                          </div>
                        </div>
                        <div style="height:10px;"></div>


                        

                        </div>
                        </div>
                     <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                      <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</a>
                    </div> 
                    </div>
                    </div>    
                    </form>            
      </div>
    </div>
  </div>         
  <!-- /modal dialog-->


    <!-- Delete Modal HTML -->
    <div class="modal modal-danger fade" id="deletenasabah" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
              <div class="modal-content">
                  <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <center><h3 class="modal-title" id="myModalLabel">Hapus Nasabah</h3></center>
                  </div>
                  <div class="modal-body">
          <div class="container-fluid">
            <h5><center>Apakah anda yakin akan menghapus Nasabah dengan Nama : <strong></strong></center></h5>
                  </div>
          </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                      <a href="pages/data_siswa/hapus_siswa.php?hal=siswa&nis=<?php echo $drow['nis'];?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</a>
                  </div>
              </div>
          </div>
      </div>
  <!-- /.modal -->

  <!-- END MODAL DELETE -->