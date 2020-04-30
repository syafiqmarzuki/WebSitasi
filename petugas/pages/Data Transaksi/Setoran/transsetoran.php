<header class="page-header">
						<h2>Transaksi Setoran</h2>
					
						<div class="right-wrapper pull-right">
							<ol class="breadcrumbs">
								<li>
									<a href="index.html">
										<i class="fa fa-home"></i>
									</a>
								</li>
								<li><span>Transaksi</span></li>
								<li><span>Setoran</span></li>
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
						
								<h2 class="panel-title">Transaksi Setoran</h2>
							</header>
							<div class="panel-body">
								
                      			<div class="form-group">
											<label class="col-sm-4 control-label">Masukan No Rek: </label>
											<div class="col-sm-6">
											<input type="text" class="form-control" id="id_siswa" name="id_siswa" placeholder="No Rekening" readonly>
											</div>
											<div class="col-sm-1">
											<span class="input-group-btn">
									  		<button type="button" class="btn btn-success btn-flat" data-toggle="modal" data-target="#tabel">Browse</button>
											</span>
											</div>
											
								</div>
								<div class="form-group">
											<label class="col-sm-4 control-label">Nis: </label>
											<div class="col-sm-8">
											<input type="email" name="text" class="form-control">
											</div>
								</div>
								<div class="form-group">
											<label class="col-sm-4 control-label">Nama: </label>
											<div class="col-sm-8">
											<input type="email" name="text" class="form-control">
											</div>
								</div>
								<div class="form-group">
											<label class="col-sm-4 control-label">Jumlah Setoran: </label>
											<div class="col-sm-8">
											<input type="text" name="text" class="form-control">
											</div>
								</div>
								<div class="form-group">
											<label class="col-sm-4 control-label">Nama Petugas: </label>
											<div class="col-sm-8">
											<input type="text" name="text" class="form-control">
											</div>
								</div>
								<br>


									<footer class="panel-footer">
										<button class="btn btn-primary">Submit </button>
										<button type="reset" class="btn btn-default">Reset</button>
									</footer>
										
								</div>
						</section>

						<!--Modal untuk no rek-->
<div id="tabel" class="modal fade" role="dialog">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
				<form role="form" id="form-tambah" method="post" action="input.php">
				<div class="modal-header">
					<center>
					<h3 class="modal-title">Pilih Nasabah</h3>
					</center>
				</div>
					<div class="modal-body">
						
						
							<table width="100%" class="table table-hover" id="datatable-default">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>No Rek</th>
                                        <th>Nis</th>
                                        <th>Nama</th>
                                    </tr>
                                </thead>
                                <tbody>
									<tr id="siswa" data-id_siswa="" data-nama="">
										<td>1</td>
										<td>6575586</td>
										<td>16090001</td>
										<td>Ade</td>
									</tr>
                            </table>	
					</div>	
					
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
					</div>
		</div>
	</div>
</div>