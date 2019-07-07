			<!-- MAIN -->
			<div class="main">
				<div class="main-content">
					<div class="content-heading clearfix">
						<div class="heading-left">
							<h1 class="page-title">SELAMAT DATANG DI ADMINISTRASI PERSURATAN FKG UNLAM</h1>
							<p class="page-subtitle">Keep Strong and Don't Forget to be Happy</p>
						</div>
						<ul class="breadcrumb">
							<li><a href="#"><i class="fa fa-home"></i>Home</a></li>
							<li class="active">Dashboard</li>
						</ul>
					</div>										
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-3 col-sm-6">
								<div class="widget widget-metric_1 animate">
									<span class="icon-wrapper custom-bg-lightseagreen"><i class="ti-reload"></i></span>
									
									<div class="right">
										<span class="value"><?php echo $data2 ?></i></span>
										<span class="title">SURAT DIPROSES
											<span class="change text-indicator-green"></span>
										</span>
									</div>
								</div>
							</div>
							<div class="col-md-3 col-sm-6">
								<div class="widget widget-metric_1 animate">
									<span class="icon-wrapper custom-bg-red"><i class="ti-alert"></i></span>
									<div class="right">
										<span class="value"><?php echo $data3 ?></i></span>
										<span class="title">SURAT DIBATALKAN
											<span class="change text-indicator-green"></span>
										</span>
									</div>
								</div>
							</div>
							<div class="col-md-3 col-sm-6">
								<div class="widget widget-metric_1 animate">
									<span class="icon-wrapper custom-bg-blue2"><i class="ti-file"></i></span>
									<div class="right">
										<span class="value"><?php echo $data1 ?></span>
										<span class="title">SURAT SELESAI
											<span class="change text-indicator-red"></span>
										</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- END MAIN -->