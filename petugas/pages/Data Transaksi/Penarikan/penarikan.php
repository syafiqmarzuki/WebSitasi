<header class="page-header">
						<h2>Transaksi Penarikan</h2>
					
						<div class="right-wrapper pull-right">
							<ol class="breadcrumbs">
								<li>
									<a href="index.html">
										<i class="fa fa-home"></i>
									</a>
								</li>
								<li><span>Transaksi</span></li>
								<li><span>Penarikan</span></li>
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
						
								<h2 class="panel-title">Transaksi Penarikan</h2>
							</header>
							<div class="panel-body">
								 <a href="?hal=transpenarikan" onclick="" class="btn btn-primary">
                      			<i class="fa fa-plus"></i> Tambah Transaksi</a>
                      			<br>
                      			<br>
										<div class="table-responsive">
											<table class="table table-hover mb-none" id="datatable-default">
												<thead>
													<tr>
														<th>No</th>
														<th>Id Trans</th>
														<th>Nama Petugas</th>
														<th>No Rek</th>
														<th>Jumlah Penarikan</th>
														<th>Tanggal Transaksi</th>
														<th>Action</th>
													</tr>
												</thead>
												<tbody>
													<?php
													require '../Petugas.php';
													$objPetugas = new Petugas();
													$stmt = $objPetugas->showkredit();
													$no = 1;
													while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
													?>
													<tr>
														<td><?php echo $no;?></td>
														<td><?php echo $row ['id_trans'] ?></td>
														<td><?php echo $row ['id_ptgs'] ?></td>
														<td><?php echo $row ['no_rek'] ?></td>
														<td><?php echo $row ['jumlah'] ?></td>
														<td><?php echo $row ['tgl_trans'] ?></td>
														<td>
															<a href="#detail" data-toggle="modal" class=""><i class="fa fa-list"></i></a>
															<a href="#print" data-toggle="modal" class=""><i class="fa fa-print"></i></a>
															<?php include('modals.php'); ?>
														</td>
													</tr>
													<?php $no++; }?>
													
												</tbody>
											</table>
										</div>
									</div>
						</section>