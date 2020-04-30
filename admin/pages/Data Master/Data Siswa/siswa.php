<div class="modal fade" id="tambahsiswa" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header" style="background-color: #4286f4;">
                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                          <center><h4 class="modal-title" id="myModalLabel" style="color: #fff">Tambah Petugas</h4></center>
                        </div>
                        <div class="modal-body">
                           <form action="pages/Data Master/Data Siswa/insert.php" method="post">
                             <div class="container-fluid">
                              <div class="box-body">
                                <div class="row">
                          <div class="col-lg-4">
                            <label class="control-label" style="position:relative; top:7px;">NIS</label>
                          </div>
                          <div class="col-lg-8">
                            <input type="text" class="form-control" name="nis" placeholder="Masukan NIS" style="width: 335px;">
                          </div>
                        </div>

                        <div style="height:10px;"></div>
                        <div class="row">
                          <div class="col-lg-4">
                            <label class="control-label" style="position:relative; top:7px;">Nama Siswa</label>
                          </div>
                          <div class="col-lg-8">
                            <input type="text" class="form-control" name="nama" placeholder="Masukan Nama" style="width: 335px;">
                          </div>
                        </div>

                        <div style="height:10px;"></div>
                        <div class="row">
                          <div class="col-lg-4">
                            <label class="control-label" style="position:relative; top:7px;">Alamat</label>
                          </div>
                          <div class="col-lg-8">
                            <textarea rowspan="2" class="form-control" placeholder="Masukan Alamat" style="width: 335px;" name="alamat"></textarea>
                          </div>
                        </div>

                        <div style="height:10px;"></div>
                        <div class="row">
                          <div class="col-lg-4">
                            <label class="control-label" style="position:relative; top:7px;">Tanggal Lahir</label>
                          </div>
                          <div class="col-lg-8">
                            <input type="date" class="form-control" name="tgl_lahir" placeholder="Masukan Tanggal Lahir" style="width: 335px;">
                          </div>
                        </div>

                        <div style="height:10px;"></div>
                        <div class="row">
                          <div class="col-lg-4">
                            <label class="control-label" style="position:relative; top:7px;">Jenis Kelamin</label>
                          </div>
                          <div class="col-lg-8">
                              <select class="form-control" style="width: 335px;" name="jk_sw">
                              <option value="0">Pilih Jenis Kelamin</option>
                              <option value="Laki-laki">Laki-laki</option>
                              <option value="Perempuan">Perempuan</option>
                              </select>
                          </div>
                        </div>

                        <div style="height:10px;"></div>
                        <div class="row">
                          <div class="col-lg-4">
                            <label class="control-label" style="position:relative; top:7px;">Telepon</label>
                          </div>
                          <div class="col-lg-8">
                            <input type="text" class="form-control" placeholder="Masukan Telepon" style="width: 335px;" name="telepon_sw">
                          </div>
                        </div>


                      

                              </div>
                               

                             </div>

                              <div style="height:10px;"></div>

                             <div class="modal-footer">
                          <button type="submit" class="btn btn-primary">Confirm</button>
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>

                           </form>

                        </div>
                        
                      </div>
                    </div>
                  </div>

<header class="page-header">
						<h2>Data Siswa</h2>
					
						<div class="right-wrapper pull-right">
							<ol class="breadcrumbs">
								<li>
									<a href="index.html">
										<i class="fa fa-home"></i>
									</a>
								</li>
								<li><span>Data Master</span></li>
								<li><span>Data Siswa</span></li>
							</ol>
					
							<a class="sidebar-right-toggle"><i class="fa fa-chevron-left"></i></a>
						</div>
					</header>

					<!-- start: page -->
						<section class="panel">
							<header class="panel-heading">
								<div class="panel-actions">
									<a href="#" class="fa fa-caret-down"></a>
									<a href="#" class="fa fa-times"></a>
								</div>
						
								<h2 class="panel-title">Data Siswa</h2>
							</header>
							<div class="panel-body">
								 <a href="#tambahsiswa" data-toggle="modal" onclick="" class="btn btn-primary">
                      			<i class="fa fa-plus"></i> Tambah Siswa</a>
                      			<br>
                      			<br>
										<div class="table-responsive">
											<table class="table table-hover mb-none" id="datatable-default">
												<thead>
													<tr>
														<th>Nis</th>
														<th>Nama</th>
														<th>Alamat</th>
														<th>No Hp</th>
														<th>Action</th>
													</tr>
												</thead>
												<tbody>
													<?php
													require '../Admin.php';
													$objAdmin = new Admin();
													$stmt = $objAdmin->showsw();
													$no = 1;
													while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
													?>
													<tr>
														<td><?php echo $row ['nis']; ?></td>
														<td><?php echo $row ['nama']; ?></td>
														<td><?php echo $row ['alamat']; ?></td>
														<td><?php echo $row ['telepon_sw']; ?></td>
														<td>
															<a href="#editsiswa<?php echo $row ['nis'] ; ?>" data-toggle="modal" class=""><i class="fa fa-pencil"></i></a>
															<a href="#deletesiswa<?php echo $row ['nis'] ; ?>" data-toggle="modal" class=""><i class="fa fa-trash-o"></i></a>
														</td>

                            <div class="modal fade" id="editsiswa<?php echo $row ['nis'] ; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header" style="background-color: #4286f4;">
                                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                    <center><h4 class="modal-title" id="myModalLabel" style="color: #fff">Edit Petugas</h4></center>
                                  </div>
                                  <div class="modal-body">
                                    <?php  
                                    $nis = $row['nis'];
                                    $eks = new Admin();
                                    $eks->nis = $nis;
                                    $eks->showByIdnis();

                                    ?>
                                    
                                    <form action="pages/Data Master/Data Petugas/delete.php?id_ptgs=<?php echo $row['id_ptgs'] ; ?>" method="post">
                                       <div class="container-fluid">
                                        <div class="box-body">
                                          <div class="row">
                                            <div class="col-lg-4">
                                              <label class="control-label" style="position:relative; top:7px;">Nis</label>
                                            </div>
                                            <div class="col-lg-8">
                                              <input type="text" readonly class="form-control" name="nis" value="<?php echo $eks->nis ; ?>" style="width: 335px;">
                                            </div>
                                          </div>

                                          <div style="height:10px;"></div>
                                          <div class="row">
                                          <div class="col-lg-4">
                                            <label class="control-label" style="position:relative; top:7px;">Nama</label>
                                          </div>
                                          <div class="col-lg-8">
                                            <input type="text"  class="form-control" name="nama" value="<?php echo $eks->nama ; ?>" style="width: 335px;">
                                          </div>
                                          </div>

                                        <div style="height:10px;"></div>
                                        <div class="row">
                                          <div class="col-lg-4">
                                            <label class="control-label" style="position:relative; top:7px;">Alamat</label>
                                          </div>
                                          <div class="col-lg-8">
                                            <textarea rowspan="2" class="form-control"  style="width: 335px;" name="alamat"><?php echo $eks->alamat ; ?></textarea>
                                          </div>
                                        </div>

                                         <div style="height:10px;"></div>
                                        <div class="row">
                                          <div class="col-lg-4">
                                            <label class="control-label" style="position:relative; top:7px;">Tanggal Lahir</label>
                                          </div>
                                          <div class="col-lg-8">
                                            <input type="date"  class="form-control" name="tgl_lahir" value="<?php echo $eks->tgl_lahir ; ?>" style="width: 335px;">
                                          </div>
                                        </div>

                                        <div style="height:10px;"></div>
                                        <div class="row">
                                          <div class="col-lg-4">
                                            <label class="control-label" style="position:relative; top:7px;">Jenis Kelamin</label>
                                          </div>
                                          <div class="col-lg-8">
                                              <select class="form-control" style="width: 335px;" name="jk_sw">
                                              <option value="<?php echo $eks->jk_sw ; ?>"><?php echo $eks->jk_sw ; ?></option>
                                              <option value="Laki-laki">Laki-laki</option>
                                              <option value="Perempuan">Perempuan</option>
                                              </select>
                                          </div>
                                        </div>

                                        <div style="height:10px;"></div>
                                        <div class="row">
                                          <div class="col-lg-4">
                                            <label class="control-label" style="position:relative; top:7px;">Telepon</label>
                                          </div>
                                          <div class="col-lg-8">
                                            <input type="text"  class="form-control" name="telepon_sw" value="<?php echo $eks->telepon_sw ; ?>" style="width: 335px;">
                                          </div>
                                        </div>

                                     


                                        

                                       
                                        </div>
                                        </div>

                                       <div style="height:10px;"></div>
                                        <div class="modal-footer">
                                          <button type="submit" class="btn btn-primary">Confirm</button>
                                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                     </form>
                                    
                                   
                                     
                                  </div>
                                  
                                </div>
                              </div>
                            </div>


                            <div class="modal fade" id="deletesiswa<?php echo $row ['nis']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                    <h4 class="modal-title" id="myModalLabel">Are you sure?</h4>
                                  </div>
                                  <div class="modal-body">
                                <form action="pages/Data Master/Data Siswa/delete.php?nis=<?php echo $row['nis'] ; ?>" method="post" enctype="multipart/form-data">
                                     <p>Apakah anda ingin menghapusnya?</p>
                                     <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary">Confirm</button>
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                  </div>
                                </form>
                                  </div>
                                  
                                </div>
                              </div>
                            </div>
													</tr>
													<?php }?>
													
												</tbody>
											</table>
										</div>
									</div>
						</section>