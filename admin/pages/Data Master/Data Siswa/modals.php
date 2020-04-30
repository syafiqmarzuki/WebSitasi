

  <!-- insert modal dialog-->
  <div class="modal fade" id="tambahsiswa" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
          <!-- <div class="modal-header"> -->
            <div class="modal-header" style="background-color: #4286f4;">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  <center><h3 class="modal-title" id="myModalLabel" style="color: #fff">Tambah Siswa</h3></center>
              </div>
                 <div class="modal-body">
                 <form method="post" action="pages/data_siswa/tambah_siswa.php">
                 <div class="container-fluid">

                      <div class="box-body">
                        <div class="row">
                          <div class="col-lg-4">
                            <label class="control-label" style="position:relative; top:7px;">NIS</label>
                          </div>
                          <div class="col-lg-8">
                            <input type="text" class="form-control" name="nissw" placeholder="Masukan Nis" style="width: 335px;">
                          </div>
                        </div>

                        <div style="height:10px;"></div>
                        <div class="row">
                          <div class="col-lg-4">
                            <label class="control-label" style="position:relative; top:7px;">Nama</label>
                          </div>
                          <div class="col-lg-8">
                            <input type="text" class="form-control" name="nmsw" placeholder="Masukan Nama" style="width: 335px;">
                          </div>
                        </div>

                        <div style="height:10px;"></div>
                        <div class="row">
                          <div class="col-lg-4">
                            <label class="control-label" style="position:relative; top:7px;">Alamat</label>
                          </div>
                          <div class="col-lg-8">
                            <textarea rowspan="2" class="form-control" placeholder="Masukan Alamat" style="width: 335px;" name="almtsw"></textarea>
                          </div>
                        </div>

                        <div style="height:10px;"></div>
                        <div class="row">
                          <div class="col-lg-4">
                            <label class="control-label" style="position:relative; top:7px;">Tanggal Lahir</label>
                          </div>
                          <div class="col-lg-8">
                          
                            <input type="date" class="form-control" style="width: 335px;" name="tglhsw">
                          </div>
                        </div>


                        <div style="height:10px;"></div>
                        <div class="row">
                          <div class="col-lg-4">
                            <label class="control-label" style="position:relative; top:7px;">Jenis Kelamin</label>
                          </div>
                          <div class="col-lg-8">
                              <select class="form-control" style="width: 335px;" name="jsw">
                              <option value="0">Pilih Jenis Kelamin</option>
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                              </select>
                          </div>
                        </div>

                        <div style="height:10px;"></div>
                       


                        <div style="height:10px;"></div>
                        <div class="row">
                          <div class="col-lg-4">
                            <label class="control-label" style="position:relative; top:7px;">Telepon</label>
                          </div>
                          <div class="col-lg-8">
                            <input type="text" class="form-control" placeholder="Masukan Nomor Telepon" style="width: 335px;" name="telsw">
                          </div>
                        </div>


                        <div style="height:10px;"></div>
                        

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



<!-- Edit Modal HTML -->
    <div id="editsiswa" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                   <div class="modal-header" style="background-color: #f7c01b">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  <center><h3 class="modal-title" id="myModalLabel" style="color: #fff">Edit Siswa</h3></center>
              </div>
                    <div class="modal-body">  
                <form method="post" action="pages/data_siswa/update_siswa.php?nis=<?php echo $erow['nis'];?>">

                     <div class="container-fluid">

                      <div class="box-body">
                        <div class="row">
                          <div class="col-lg-4">
                            <label class="control-label" style="position:relative; top:7px;">NIS</label>
                          </div>
                          <div class="col-lg-8">
                            <input type="text" class="form-control" readonly name="nissw" style="width: 335px;">
                          </div>
                        </div>

                        <div style="height:10px;"></div>
                        <div class="row">
                          <div class="col-lg-4">
                            <label class="control-label" style="position:relative; top:7px;">Nama</label>
                          </div>
                          <div class="col-lg-8">
                            <input type="text" class="form-control"  name="nmsw" style="width: 335px;">
                          </div>
                        </div>

                        <div style="height:10px;"></div>
                        <div class="row">
                          <div class="col-lg-4">
                            <label class="control-label" style="position:relative; top:7px;">Alamat</label>
                          </div>
                          <div class="col-lg-8">
                            <textarea rowspan="2" class="form-control"   style="width: 335px;" name="almtsw"></textarea>
                          </div>
                        </div>

                        <div style="height:10px;"></div>
                        <div class="row">
                          <div class="col-lg-4">
                            <label class="control-label" style="position:relative; top:7px;">Tanggal Lahir</label>
                          </div>
                          <div class="col-lg-8">
                            <input type="date" class="form-control"  style="width: 335px;" name="tglhsw">
                          </div>
                        </div>


                        <div style="height:10px;"></div>
                        <div class="row">
                          <div class="col-lg-4">
                            <label class="control-label" style="position:relative; top:7px;">Jenis Kelamin</label>
                          </div>
                          <div class="col-lg-8">
                              <select class="form-control"  style="width: 335px;" name="jsw">
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                              </select>
                          </div>
                        </div>

                        <div style="height:10px;"></div>
                        



                        <div style="height:10px;"></div>
                        <div class="row">
                          <div class="col-lg-4">
                            <label class="control-label" style="position:relative; top:7px;">Telepon</label>
                          </div>
                          <div class="col-lg-8">
                            <input type="text" class="form-control"  style="width: 335px;" name="telsw">
                          </div>
                        </div>


                        <div style="height:10px;"></div>
                        

                        <div style="height:10px;"></div>
                        

                        
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
    <div class="modal modal-danger fade" id="deletesiswa" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
              <div class="modal-content">
                  <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <center><h3 class="modal-title" id="myModalLabel">Hapus Siswa</h3></center>
                  </div>
                  <div class="modal-body">
          <div class="container-fluid">
            <h5><center>Apakah anda yakin akan menghapus Siswa dengan Nama : <strong></strong></center></h5>
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