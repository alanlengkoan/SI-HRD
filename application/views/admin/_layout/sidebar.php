<?php
$act = $this->uri->segment(3);
$ive = $this->uri->segment(2);
?>
<!-- LEFT SIDEBAR -->
<div id="sidebar-nav" class="sidebar">
	<nav>
		<ul class="nav" id="sidebar-nav-menu">
			<li><a href="<?php echo base_url('admin/Dashboard'); ?>" class="<?php echo ($ive==('Dashboard') or $act == ('dashboard'))?'active':'';?>"><i class="ti-dashboard"></i><span class="title">Dashboard</span></a></li>
			<li class="panel">
				<a href="#riwayat" data-toggle="collapse" data-parent="#sidebar-nav-menu" class="collapsed"><i class="fa fa-history"></i> <span class="title">Master Data</span> <i class="icon-submenu ti-angle-left"></i></a>
				<div id="riwayat" class="collapse ">
					<ul class="submenu">
						<li><a href="<?php echo base_url('admin/EditTemplate'); ?>" ><i class="fa fa-pencil"></i> <span class="title">Edit Template Surat</span></a></li>
					</ul>
				</div>
			</li>
			<li><a href="<?php echo base_url('admin/BuatSurat'); ?>" class="<?php echo ($ive==('BuatSurat'))?'active':'';?>"><i class="fa fa-plus"></i> <span class="title">Buat Surat</span></a></li>
			<li class="panel">
				<a href="#dashboards" data-toggle="collapse" data-parent="#sidebar-nav-menu" class="<?php echo ($act=='ProsesKerjaPraktek' or $act=='ProsesAktifKuliah' or $act=="ProsesIzinPenelitian")?'collapsed active':'';?>"><i class="ti-receipt"></i> <span class="title">Proses Surat</span> <i class="icon-submenu ti-angle-left"></i></a>
				<div id="dashboards" class="collapse ">
					<ul class="submenu">
						<li><a href="<?php echo base_url('admin/SuratInvoice'); ?>" class="<?php echo ($act=='SuratInvoice')?'active':'';?>" >Surat Invoice</a></li>
						<li><a href="<?php echo base_url('admin/SuratPerjanKerja'); ?>" class="<?php echo ($act=='SuratPerjanKerja')?'active':'';?>" >Surat Perjanjian Kerja</a></li>
						<li><a href="<?php echo base_url('admin/SuratPerjanKerjaLepas'); ?>" class="<?php echo ($act=='SuratPerjanKerjaLepas')?'active':'';?>" >Surat Perjanjian Kerja Pekerja Lepas</a></li>
					</ul>
				</div>
			</li>
			<li class="panel">
				<a href="#layouts" data-toggle="collapse" data-parent="#sidebar-nav-menu" class="<?php echo ($act==('Invoice') or $act==('SPK01') or $act==('SPK02'))?'collapsed':'';?>"><i class="ti-layout-grid2"></i> <span class="title">Arsip Surat</span> <i class="icon-submenu ti-angle-left"></i></a>
				<div id="layouts" class="collapse ">
					<ul class="submenu">
						<li><a href="<?php echo base_url('admin/ArsipSurat/Invoice'); ?>" class="<?php echo ($act=='KerjaPraktek')?'collapsed active':'';?>">Surat Invoice</a></li>
						<li><a href="<?php echo base_url('admin/ArsipSurat/SPK01'); ?>" class="<?php echo ($act=='AktifKuliah')?'active':'';?>">Surat Perjanjian Kerja</a></li>
						<li><a href="<?php echo base_url('admin/ArsipSurat/SPK02'); ?>" class="<?php echo ($act=='IzinPenelitian')?'active':'';?>">Surat Perjanjian Kerja Pekerja Lepas</a></li>
					</ul>
				</div>
			</li>
		</ul>
	</nav>
</div>
<!-- END LEFT SIDEBAR -->
