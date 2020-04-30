<header class="page-header">
						<h2>Data Nasabah</h2>
					
						<div class="right-wrapper pull-right">
							<ol class="breadcrumbs">
								<li>
									<a href="index.html">
										<i class="fa fa-home"></i>
									</a>
								</li>
								<li><span>Data Nasabah</span></li>
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
						
								<h2 class="panel-title">Data Nasabah</h2>
							</header>
							<div class="panel-body">
								 <a href="#tambahnasabah" data-toggle="modal" onclick="" class="btn btn-primary">
                      			<i class="fa fa-plus"></i> Tambah Nasabah</a>
                      			<br>
                      			<br>
										<div class="table-responsive">
											<table class="table table-hover mb-none" id="datatable-default">
												<thead>
													<tr>
														<th>No</th>
														<th>No Rek</th>
														<th>Nis</th>
														<th>Nama</th>
														<th>Action</th>
													</tr>
												</thead>
												<tbody>
													<?php
													require '../Petugas.php';
													$objPetugas = new Petugas();
													$stmt = $objPetugas->shownasabah();
													$no = 1;
													while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
														
													?>
													<tr>
														<td>1</td>
														<td><?php echo $row ['no_rek']; ?></td>
														<td><?php echo $row ['nis']; ?></td>
														<td><?php echo $row ['nama_nsbh']; ?></td>
														<td>
															<!-- <a href="#editnasabah" data-toggle="modal" class=""><i class="fa fa-pencil"></i></a> -->
															<a href="#deletenasabah" data-toggle="modal" class=""><i class="fa fa-trash-o"></i></a>
															<?php include('modals.php'); ?>
														</td>
													</tr>
													<?php $no++; }?>
													
												</tbody>
											</table>
										</div>
									</div>
						</section>