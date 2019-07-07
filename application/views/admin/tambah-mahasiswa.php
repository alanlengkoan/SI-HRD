			<!-- MAIN -->
			<div class="main">
				<!-- MAIN CONTENT -->
				<div class="main-content">
					<div class="content-heading clearfix">
						<div class="heading-left">
							<h1 class="page-title">Tambah Mahasiswa</h1>
						</div>
						<ul class="breadcrumb">
							<li><a href="#"><i class="fa fa-home"></i> Home</a></li>
							<li><a class="active">Tambah Mahasiswa</a></li>
						</ul>
					</div>											
				<div class="container-fluid">
						<!-- TOP METRICS -->
						<div class="panel">
									<div class="panel-heading">
										<h3 class="panel-title">TAMBAH MAHASISWA</h3>
									</div>
									<div class="panel-body">
												<form class="form-horizontal label-left" action="<?= base_url();?>admin/TambahMahasiswa/Insert" method="post">
											<div class="form-group">
												<label for="signup-firstname" class="col-sm-3 control-label">Nama Mahasiswa</label>
												<div class="col-sm-9">
													<input type="text" class="form-control" id="nama" name="nama">
												</div>
											</div>
											<div class="form-group">
												<label for="signup-lastname" class="col-sm-3 control-label">Nomor Induk Mahasiswa</label>
												<div class="col-sm-9">
													<input type="text" class="form-control" id="nim" name="nim">
												</div>
											</div>
											<div class="form-group">
												<label for="signup-password" class="col-sm-3  control-label">Password</label>
												<div class="col-sm-9">
													<input type="password" class="form-control" id="password" name="password">
												</div>
											</div>
											<div class="form-group">
												<label for="signup-email" class="col-sm-3 control-label">Email</label>
												<div class="col-sm-9">
													<input type="email" class="form-control" id="email" name="email">
												</div>
											</div>
											<div class="form-group">
												<label for="address" class="col-sm-3 control-label">Alamat</label>
												<div class="col-sm-9">
													<input type="address" class="form-control" id="alamat" name="alamat">
												</div>
											</div>
											<div class="form-group">
												<label for="signup-username" class="col-sm-3  control-label">Nomor Telepon</label>
												<div class="col-sm-9">
													<input type="text" class="form-control" id="telepon" name="telepon">
												</div>
											</div>
											<div class="form-group">
											<label for="signup-username" class="col-sm-3 control-label">Jenis Kelamin</label>
												<div>
													<label class="radio radio-inline">
														<input id="kelamin" type="radio" name="kelamin" value="P">Perempuan</label>
													</label>
													<label class="radio radio-inline">
														<input id="kelamin" type="radio" name="kelamin" value="L">Laki-Laki</label>
													</label>
												</div>
											</div>
											<button type="submit" class="btn btn-primary btn-lg btn-fullrounded center-block"><i class="fa fa-check-circle"></i>
												<span>TAMBAHKAN</span>
											</button>
										</form>
											</div>
										</div>
									</div>
								</div>
							</ul>
						</nav>
					</div>
				</div>
			</div>
			<!-- END MAIN -->
			<div class="clearfix"></div>
			<footer>
				<div class="container-fluid">
					<p class="copyright">&copy; 2018 <a href="https://www.themeineed.com" target="_blank">Theme I Need</a>. All Rights Reserved.</p>
				</div>
			</footer>
		</div>
		<!-- END WRAPPER -->