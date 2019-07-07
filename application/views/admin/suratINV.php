<!-- MAIN -->
<div class="main">
	<!-- MAIN CONTENT -->
	<div class="main-content">
		<div class="content-heading clearfix">
			<div class="heading-left">
				<h1 class="page-title">Surat Keterangan Aktif Kuliah</h1>
			</div>
			<ul class="breadcrumb">
				<li><a href="#"><i class="fa fa-home"></i>Home</a></li>
				<li><a href="#">Proses Surat</a></li>
				<li class="active">SK Aktif Kuliah</li>
			</ul>
		</div>
		<div class="container-fluid">
			<!-- PASSWORD -->
			<div class="panel">
				<div class="panel-heading">
					<h3 class="panel-title">DAFTAR PERMINTAAN SURAT KETERANGAN AKTIF KULIAH</h3>
				</div>
				<div class="panel-body">
					<table id="datatable-column-reorder" class="table table-hover table-bordered">
						<thead>
							<tr>
								<th title="Field #8">Nomor</th>
								<th title="Field #8">Nama Mahasiswa</th>
								<th title="Field #8">Tanggal Pengajuan</th>
								<th title="Field #8">Tanggal Diproses Staff</th>
								<th title="Field #8">Tanggal Pengiriman ke Staff Fakultas</th>
								<th title="Field #8">Status</th>
								<th title="Field #8">Keterangan</th>
							</tr>
						</thead>
						<tbody>
							<?php
							foreach($data as $mahasiswa){ ?>
								<tr>
									<td><?php echo $mahasiswa->nomor_surat ?></td>
									<td><?php echo $mahasiswa->pengirim ?></td>
									<td><?php echo $mahasiswa->projek ?></td>
									<td><?php echo $mahasiswa->tanggal_selesai ?></td>
									<td><?php echo $mahasiswa->deskripsi ?></td>
									<td><?php echo $mahasiswa->harga ?></td>
									<td><?php echo $mahasiswa->status ?></td>
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
