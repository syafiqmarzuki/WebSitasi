<header class="page-header">
						<h2>Laporan</h2>
					
						<div class="right-wrapper pull-right">
							<ol class="breadcrumbs">
								<li>
									<a href="index.html">
										<i class="fa fa-home"></i>
									</a>
								</li>
								<li><span>Laporan</span></li>
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
						
								<h2 class="panel-title">Laporan Nasabah</h2>
							</header>
							<div class="panel-body">
                      			<br>
                      			<br>
										<div class="table-responsive">
											<table class="table table-hover mb-none" id="datatable-default">
												<thead>
													<tr>
														<th>No</th>
														<th>No Rekening</th>
														<th>Nama</th>
														<th>Saldo</th>
													</tr>
												</thead>
												<tbody>
													<?php
													require '../Admin.php';
													$objAdmin = new Admin();
													$stmt = $objAdmin->showlp();
													$no = 1;
													while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

													?>
													<tr>
														<td><?php echo $no; ?></td>
														<td><?php echo $row ['no_rek']; ?></td>
														<td><?php echo $row ['nama_nsbh']; ?></td>
														<td><?php echo $row ['saldo']; ?></td>
														
													</tr>
													<?php
												$no++;}
													?>
													
												</tbody>
											</table>
										</div>
									</div>
						</section>