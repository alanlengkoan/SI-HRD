<!-- LEFT SIDEBAR -->
			<div id="sidebar-nav" class="sidebar">
				<nav>
					<ul class="nav" id="sidebar-nav-menu">
						<li><a href="<?php echo base_url('admin/Dashboard'); ?>" class="<?php echo ($act==('Dashboard') or $act == ('dashboard'))?'active':'';?>"><i class="ti-dashboard"></i><span class="title">Dashboard</span></a></li>
						<li class="panel">
							<a href="#dashboards" data-toggle="collapse" data-parent="#sidebar-nav-menu" class="<?php echo ($act=='ProsesKerjaPraktek' or $act=='ProsesAktifKuliah' or $act=="ProsesIzinPenelitian")?'collapsed active':'';?>"><i class="ti-receipt"></i> <span class="title">Proses Surat</span> <i class="icon-submenu ti-angle-left"></i></a>
							<div id="dashboards" class="collapse ">
								<ul class="submenu">
									<li><a href="<?php echo base_url('admin/ProsesKerjaPraktek'); ?>" class="<?php echo ($act=='ProsesKerjaPraktek')?'active':'';?>" >Surat Permohonan KP</a></li>
									<li><a href="<?php echo base_url('admin/ProsesAktifKuliah'); ?>" class="<?php echo ($act=='ProsesAktifKuliah')?'active':'';?>" >SK Aktif Kuliah </a></li>
									<li><a href="<?php echo base_url('admin/ProsesIzinPenelitian'); ?>" class="<?php echo ($act=='ProsesIzinPenelitian')?'active':'';?>" >Surat Izin Penelitian</a></li>
								</ul>
							</div>
						</li>
						<li class="panel">
							<a href="#layouts" data-toggle="collapse" data-parent="#sidebar-nav-menu" class="<?php echo ($act==('KerjaPraktek') or $act==('AktifKuliah') or $act==('IzinPenelitian'))?'collapsed active':'';?>"><i class="ti-layout-grid2"></i> <span clas="title">Arsip Surat</span> <i class="icon-submenu ti-angle-left"></i></a>
							<div id="layouts" class="collapse ">
								<ul class="submenu">
									<li><a href="<?php echo base_url('admin/KerjaPraktek'); ?>" class="<?php echo ($act=='KerjaPraktek')?'collapsed active':'';?>">Surat Permohonan KP</a></li>
									<li><a href="<?php echo base_url('admin/AktifKuliah'); ?>" class="<?php echo ($act=='AktifKuliah')?'active':'';?>">SK Aktif Kuliah</a></li>
									<li><a href="<?php echo base_url('admin/IzinPenelitian'); ?>" class="<?php echo ($act=='IzinPenelitian')?'active':'';?>">Surat Izin Penelitian</a></li>
								</ul>
							</div>
						</li>
						<li class="panel">
							<a href="#riwayat" data-toggle="collapse" data-parent="#sidebar-nav-menu" class="collapsed"><i class="fa fa-history"></i> <span clas="title">Riwayat Surat</span> <i class="icon-submenu ti-angle-left"></i></a>
							<div id="riwayat" class="collapse ">
								<ul class="submenu">
									<li><a href="suratproses.html" >Surat Diproses</a></li>
									<li><a href="suratselesai.html" >Surat Selesai</a></li>
									<li><a href="suratbatal.html" >Surat Dibatalkan</a></li>
								</ul>
							</div>
						</li>
						<li class="panel">
							<a href="#daftar" data-toggle="collapse" data-parent="#sidebar-nav-menu" class="collapsed"><i class="fa fa-list-ul"></i> <span clas="title">Daftar Surat</span> <i class="icon-submenu ti-angle-left"></i></a>
							<div id="daftar" class="collapse ">
								<ul class="submenu">
									<li><a href="dftrsrt-selesai.html" >Daftar Surat Selesai</a></li>
									<li><a href="dftrsrt-prmhnkeluar.html" >Daftar Nomor Surat Permohonan Keluar</a></li>
									<li><a href="dftrsrt-keluar.html" >Daftar Nomor Surat Keluar</a></li>
								</ul>
							</div>
						</li>
						<li><a href="edit-template.html" ><i class="fa fa-pencil"></i> <span class="title">Edit Template Surat </span></a></li>
						<li><a href="<?php echo base_url('admin/TambahMahasiswa'); ?>" class="<?php echo ($act=='TambahMahasiswa')?'active':'';?>"><i class="fa fa-plus"></i> <span class="title">Tambah Mahasiswa</span></a></li>
					</ul>
				</nav>
			</div>
<!-- END LEFT SIDEBAR -->