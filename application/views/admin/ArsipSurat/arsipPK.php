<!-- MAIN -->
<div class="main">
	<!-- MAIN CONTENT -->
	<div class="main-content">
		<div class="content-heading clearfix">
			<div class="heading-left">
				<h1 class="page-title">Arsip Surat Permohonan Kerja Praktek</h1>
			</div>
			<ul class="breadcrumb">
				<li><a href="#"><i class="fa fa-home"></i>Home</a></li>
				<li><a href="#">Arsip Surat</a></li>
				<li class="active">Surat Permohonan KP</li>
			</ul>
		</div>
		<div class="container-fluid">
			<div class="panel">
				<div class="panel-heading">
					<h3 class="panel-title">ARSIP SURAT PERMOHONAN KERJA PRAKTEK MAHASISWA</h3>
				</div>
				<div class="panel-body">
					<table id="featured-datatable" class="table table-striped table-hover">
						<thead>
							<tr>
								<th title="Field #8">Nomor</th>
								<th title="Field #8">Pemohon</th>
								<th title="Field #8">Jabatan Pemnohon</th>
								<th title="Field #8">Perusahaan</th>
								<th title="Field #8">Waktu Kerja</th>
								<th title="Field #8">Status</th>
								<th title="Field #8">Pemilik Rekening</th>
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
								</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<div class="container-fluid">
			<div class="panel">
				<div class="panel-heading">
					<h3 class="panel-title">ARSIP SURAT KERJA PRAKTEK MAHASISWA</h3>
				</div>
				<div class="panel-body">
					<table id="featured-datatable2" class="table table-striped table-hover">
						<thead>
							<tr>
								<th>Nomor</th>
								<th>Nomor Surat</th>
								<th>Nama Mahasiswa</th>
								<th>Tanggal Pengajuan</th>
								<th>Tanggal Surat Selesai</th>
								<th>Keterangan</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1.</td>
								<td>231</td>
								<td>Billa</td>
								<td>25 September 2018</td>
								<td>30 Oktober 2018</td>
								<td>-</td>
							</tr>
							<tr>
								<td>2.</td>
								<td>232</td>
								<td>Nani</td>
								<td>15 September 2018</td>
								<td>20 September 2018</td>
								<td>-</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<div class="container-fluid">
			<div class="panel">
				<div class="panel-heading">
					<h3 class="panel-title">ARSIP SURAT PERMOHONAN KERJA PRAKTEK ALUMNI</h3>
				</div>
				<div class="panel-body">
					<table id="featured-datatable2" class="table table-striped table-hover">
						<thead>
							<tr>
								<th>Nomor</th>
								<th>Nomor Surat</th>
								<th>Nama Mahasiswa</th>
								<th>Tanggal Pengajuan</th>
								<th>Tanggal Surat Selesai</th>
								<th>Keterangan</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1.</td>
								<td>231</td>
								<td>Billa</td>
								<td>25 September 2018</td>
								<td>30 Oktober 2018</td>
								<td>-</td>
							</tr>
							<tr>
								<td>2.</td>
								<td>232</td>
								<td>Nani</td>
								<td>15 September 2018</td>
								<td>20 September 2018</td>
								<td>-</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<div class="container-fluid">
			<div class="panel">
				<div class="panel-heading">
					<h3 class="panel-title">ARSIP SURAT KERJA PRAKTEK ALUMNI</h3>
				</div>
				<div class="panel-body">
					<table id="featured-datatable2" class="table table-striped table-hover">
						<thead>
							<tr>
								<th>Nomor</th>
								<th>Nomor Surat</th>
								<th>Nama Mahasiswa</th>
								<th>Tanggal Pengajuan</th>
								<th>Tanggal Surat Selesai</th>
								<th>Keterangan</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1.</td>
								<td>231</td>
								<td>Billa</td>
								<td>25 September 2018</td>
								<td>30 Oktober 2018</td>
								<td>-</td>
							</tr>
							<tr>
								<td>2.</td>
								<td>232</td>
								<td>Nani</td>
								<td>15 September 2018</td>
								<td>20 September 2018</td>
								<td>-</td>
							</tr>
						</tbody>
					</table>
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
