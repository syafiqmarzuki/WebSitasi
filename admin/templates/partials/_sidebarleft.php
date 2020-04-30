<div class="sidebar-header">
						<div class="sidebar-title">
							Navigation
						</div>
						<div class="sidebar-toggle hidden-xs" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
							<i class="fa fa-bars" aria-label="Toggle sidebar"></i>
						</div>
					</div>
				
					<div class="nano">
						<div class="nano-content">
							<nav id="menu" class="nav-main" role="navigation">
								<ul class="nav nav-main">
									<li class="nav-active">
										<a href="?hal=dashboard">
											<i class="fa fa-home" aria-hidden="true"></i>
											<span>Dashboard</span>
										</a>
									</li>
									
									<li class="nav-parent <?php if($current_page=='petugas'){echo 'active';} ?>">
										<a>
											<i class="fa fa-copy" aria-hidden="true"></i>
											<span>Master Data</span>
										</a>
										<ul class="nav nav-children <?php if($current_page=='petugas'){echo 'active';} ?>" >
											<li class="<?php if($current_page=='petugas'){echo 'active';} ?>">
												<a href="?hal=petugas">
													  Data Petugas
												</a>
											</li>

											<li class="<?php if($current_page=='coba'){echo 'active';} ?>">
												<a href="?hal=coba">
													  Data Petugas1
												</a>
											</li>
											
											<li>
												<a href="?hal=siswa">
													 Data Siswa
												</a>
											</li>
											
										</ul>
									</li>

									<li class="nav">
										<a href="?hal=laporan">
											<i class="fa fa-home" aria-hidden="true"></i>
											<span>Laporan</span>
										</a>
									</li>
									
								</ul>
							</nav>				
						</div>
					</div>