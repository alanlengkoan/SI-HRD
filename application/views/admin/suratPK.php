<!-- MAIN -->
<div class="main">
	<!-- MAIN CONTENT -->
	<div class="main-content">
		<div class="content-heading clearfix">
			<div class="heading-left">
				<h1 class="page-title">Surat Permohonan Kerja Praktek</h1>
			</div>
			<ul class="breadcrumb">
				<li><a href="#"><i class="fa fa-home"></i>Home</a></li>
				<li><a href="#">Proses Surat</a></li>
				<li class="active">Surat Permohonan KP</li>
			</ul>
		</div>
		<div class="container-fluid">
			<!-- PASSWORD -->
			<div class="panel">
				<div class="panel-heading">
					<h3 class="panel-title">DAFTAR PERMINTAAN SURAT PERMOHONAN KERJA PRAKTEK</h3>
				</div>
				<div class="panel-body">
					<table id="datatable-column-reorder" class="table table-hover table-bordered">
						<thead>
							<tr>
								<th title="Field #8">Nomor</th>
								<th title="Field #8">Pemohon</th>
								<th title="Field #8">Jabatan Pemnohon</th>
								<th title="Field #8">Perusahaan</th>
								<th title="Field #8">Waktu Kerja</th>
								<th title="Field #8">Status</th>
								<th title="Field #8">Pemilik Rekening</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody>
							<?php
							foreach($data as $suratpk){ ?>
								<tr>
									<td><?php echo $suratpk->nomor_surat ?></td>
									<td><?php echo $suratpk->pemohon ?></td>
									<td><?php echo $suratpk->jabatan_pemohon ?></td>
									<td><?php echo $suratpk->perusahaan ?></td>
									<td><?php echo $suratpk->waktu_kerja ?></td>
									<td><?php echo $suratpk->status ?></td>
									<td><?php echo $suratpk->pemilik_rekening ?></td>
									<td>
										<a href="Suratperjankerja/CetakSPK01/<?php echo $suratpk->id_data_suratspk01 ?>" class="btn btn-success btn-sm">Cetak</a>
									</td>
								</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
</div>

<div class="clearfix"></div>
<footer>
	<div class="container-fluid">
		<p class="copyright">&copy; 2018 <a href="https://www.themeineed.com" target="_blank">Theme I Need</a>. All Rights Reserved.</p>
	</div>
</footer>
</div>
<!-- END WRAPPER -->
