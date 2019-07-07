<!-- MAIN -->
<div class="main">
	<div class="main-content">
		<div class="content-heading clearfix">
			<div class="heading-left">
				<h1 class="page-title">SELAMAT DATANG DI ADMINISTRASI PERSURATAN</h1>
				<p class="page-subtitle">Keep Strong and Don't Forget to be Happy</p>
			</div>
			<ul class="breadcrumb">
				<li><a href="#"><i class="fa fa-home"></i>Home</a></li>
				<li class="active">Edit Surat</li>
			</ul>
		</div>
		<div class="container-fluid">
			<form action="<?php echo base_url(); ?>admin/EditTemplate/cek_surat" method="post">
				<div class="panel">
					<div class="panel-heading">
						<h3 class="panel-title">Edit Surat</h3>
					</div>
					<div class="panel-body">
						<div class="box">
							<div class="col-lg-12">
								<hr><h2 class="intro-text text-center"><strong>PILIH SURAT</strong></h2></hr></div>
								<div class="form-gorup">
									<div class="col-md-4 col-md-offset-4">
										<select id="jenissurat" class="form-control" onchange="pilih_edit_surat()" name="jenissurat">
											<option value="" disabled="" selected="" style="display:none;">Pilih Jenis Surat</option>
											<?php foreach ($data as $a) { ?>
												<option value="<?php echo $a->kode ; ?>" <?php echo set_select('jenissurat', $a->kode, FALSE); ?> ><?php echo $a->jenis ; ?> </option>
											<?php } ?>
										</select>
									</div>
								</div>
							</div>

							<div class="box-forms">
								<div class="col-md-6 col-md-offset-3">
									<h4 class="intro-text text-center">
										<br>
										<strong>
											<?php if($this->uri->segment(3) == "SPK01")
											{
												echo "SURAT PERJANJIAN KERJA";
											}
											elseif ($this->uri->segment(3) == "SPK02") {
												echo "SURAT KESEPAKTAN KERJA LAPANGAN";
											}
											elseif ($this->uri->segment(3) == "INV") {
												echo "SURAT INVOICE";
											}
											?>
										</strong>
									</h4>
								</div>
							</div>
						</div>
					</div>

                    <?php
                    if ($this->uri->segment(3) == "SPK01")
                    {
                        require_once 'editsuratspk1.php';
                    }
                    elseif ($this->uri->segment(3) == "SPK02")
                    {
                        // require_once 'editsuratspk2.php';
                    }
                    elseif ($this->uri->segment(3) == "INV")
                    {
                        // require_once 'editinvoice.php';
                    }
                    ?>
                    
				</div>
			</form>
		</div>
	</div>
	<!-- END MAIN -->
	<div class="clearfix"></div>
	<footer>
		<div class="container-fluid">
			<p class="copyright">&copy;<a href="https://www.themeineed.com" target="_blank">Upana Studio Internasional</a></p>
		</div>
	</footer>
</div>
<!-- END WRAPPER -->
