<div class="modal fade" id="tambahpetugas" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header" style="background-color: #4286f4;">
                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                          <center><h4 class="modal-title" id="myModalLabel" style="color: #fff">Tambah Petugas</h4></center>
                        </div>
                        <div class="modal-body">
                           <form action="pages/Data Master/Data Petugas/insert.php" method="post">
                             <div class="container-fluid">
                              <div class="box-body">
                                <div class="row">
                          <div class="col-lg-4">
                            <label class="control-label" style="position:relative; top:7px;">Nama Petugas</label>
                          </div>
                          <div class="col-lg-8">
                            <input type="text" class="form-control" name="nm_ptgs" required placeholder="Masukan Nama" style="width: 335px;">
                          </div>
                        </div>

                        <div style="height:10px;"></div>
                        <div class="row">
                          <div class="col-lg-4">
                            <label class="control-label" style="position:relative; top:7px;">Alamat</label>
                          </div>
                          <div class="col-lg-8">
                            <textarea rowspan="2" class="form-control" required placeholder="Masukan Alamat" style="width: 335px;" name="alamat_ptgs"></textarea>
                          </div>
                        </div>

                        <div style="height:10px;"></div>
                        <div class="row">
                          <div class="col-lg-4">
                            <label class="control-label" style="position:relative; top:7px;">Telepon</label>
                          </div>
                          <div class="col-lg-8">
                            <input type="text" class="form-control" required name="telepon" placeholder="Masukan Nomor Telepon" style="width: 335px;">
                          </div>
                        </div>

                        <div style="height:10px;"></div>
                        <div class="row">
                          <div class="col-lg-4">
                            <label class="control-label" style="position:relative; top:7px;">Level</label>
                          </div>
                          <div class="col-lg-8">
                              <select class="form-control" required style="width: 335px;" name="level">
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
                              <select class="form-control" required style="width: 335px;" name="jk_ptgs">
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
                            <input type="text" class="form-control" required placeholder="Masukan Username" style="width: 335px;" name="username">
                          </div>
                        </div>


                        <div style="height:10px;"></div>
                        <div class="row">
                          <div class="col-lg-4">
                            <label class="control-label" style="position:relative; top:7px;">Password</label>
                          </div>
                          <div class="col-lg-8">
                            <input type="password" class="form-control" required placeholder="Masukan Password" style="width: 335px;" name="password">
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
						<h2>Data Petugas</h2>
					
						<div class="right-wrapper pull-right">
							<ol class="breadcrumbs">
								<li>
									<a href="index.html">
										<i class="fa fa-home"></i>
									</a>
								</li>
								<li><span>Data Master</span></li>
								<li><span>Data Petugas</span></li>
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
						
								<h2 class="panel-title">Data Petugas</h2>
							</header>
							<div class="panel-body">
								 <a href="#tambahpetugas" data-toggle="modal" onclick="" class="btn btn-primary">
                      			<i class="fa fa-plus"></i> Tambah Petugas</a>

              
                      			<br>
                      			<br>
										<div class="table-responsive">
											<table class="table table-hover mb-none" id="datatable-default">
												<thead>
													<tr>
														<th>No</th>
														<th>Nama</th>
														<th>Alamat</th>
														<th>No Hp</th>
														<th>Level</th>
														<th>Action</th>
													</tr>
												</thead>
												<tbody>
													<?php
													require '../Admin.php';
													$objAdmin  = new Admin();
                          $stmt   = $objAdmin->showptgs();
                          $no = 1;
                          while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
													?>
													<tr>
                            <td><?php echo $no; ?></td>
														<td><?php echo $row ['nm_ptgs']; ?></td>
														<td><?php echo $row ['alamat_ptgs']; ?></td>
														<td><?php echo $row ['telepon']; ?></td>
														<td><?php echo $row ['level']; ?></td>
														<td>
															<a data-target="#editpetugas<?php echo $row ['id_ptgs']; ?>" data-toggle="modal" class="text-nowrap"><i class="fa fa-pencil"></i></a>
															<a href="#hapuspetugas<?php echo $row ['id_ptgs']; ?>" data-toggle="modal" class=""><i class="fa fa-trash-o"></i></a>
														</td>

                            <div class="modal fade" id="editpetugas<?php echo $row ['id_ptgs'] ; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header" style="background-color: #4286f4;">
                                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                    <center><h4 class="modal-title" id="myModalLabel" style="color: #fff">Edit Petugas</h4></center>
                                  </div>
                                  <div class="modal-body">
                                    <?php  
                                    $id_ptgs = $row['id_ptgs'];
                                    $eks = new Admin();
                                    $eks->id_ptgs = $id_ptgs;
                                    $eks->showByIdptgs();

                                    ?>
                                    
                                    <form action="pages/Data Master/Data Petugas/delete.php?id_ptgs=<?php echo $row['id_ptgs'] ; ?>" method="post">
                                       <div class="container-fluid">
                                        <div class="box-body">
                                          <div class="row">
                                            <div class="col-lg-4">
                                              <label class="control-label" style="position:relative; top:7px;">Nama Petugas</label>
                                            </div>
                                            <div class="col-lg-8">
                                              <input type="text" class="form-control" name="nm_ptgs" value="<?php echo $eks->nm_ptgs ; ?>" style="width: 335px;">
                                            </div>
                                          </div>

                                        <div style="height:10px;"></div>
                                        <div class="row">
                                          <div class="col-lg-4">
                                            <label class="control-label" style="position:relative; top:7px;">Alamat</label>
                                          </div>
                                          <div class="col-lg-8">
                                            <textarea rowspan="2" class="form-control"  style="width: 335px;" name="alamat_ptgs"><?php echo $eks->alamat_ptgs ; ?></textarea>
                                          </div>
                                        </div>

                                        <div style="height:10px;"></div>
                                        <div class="row">
                                          <div class="col-lg-4">
                                            <label class="control-label" style="position:relative; top:7px;">Telepon</label>
                                          </div>
                                          <div class="col-lg-8">
                                            <input type="text"  class="form-control" name="telepon" value="<?php echo $eks->telepon ; ?>"  style="width: 335px;">
                                          </div>
                                        </div>

                                        <div style="height:10px;"></div>
                                        <div class="row">
                                          <div class="col-lg-4">
                                            <label class="control-label" style="position:relative; top:7px;">Level</label>
                                          </div>
                                          <div class="col-lg-8">
                                              <select class="form-control" style="width: 335px;" name="level" >
                                              <option value="0"><?php echo $eks->level; ?></option>
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
                                              <option value="0"><?php echo $eks->jk_ptgs; ?></option>
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
                                            <input type="text" class="form-control" style="width: 335px;" name="username" value="<?php echo $eks->username ; ?>">
                                          </div>
                                        </div>


                                        <div style="height:10px;"></div>
                                        <div class="row">
                                          <div class="col-lg-4">
                                            <label class="control-label" style="position:relative; top:7px;">Password</label>
                                          </div>
                                          <div class="col-lg-8">
                                            <input type="password" class="form-control" value="<?php echo $eks->password ; ?>" style="width: 335px;" name="password">
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


                            <div class="modal fade" id="hapuspetugas<?php echo $row ['id_ptgs']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                    <h4 class="modal-title" id="myModalLabel">Are you sure?</h4>
                                  </div>
                                  <div class="modal-body">
                                <form action="pages/Data Master/Data Petugas/delete.php?id_ptgs=<?php echo $row['id_ptgs'] ; ?>" method="post" enctype="multipart/form-data">
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
													<?php $no++; }?>
													
												</tbody>
											</table>
										</div>
									</div>
						</section>