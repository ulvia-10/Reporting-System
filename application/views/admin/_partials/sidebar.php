<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

	<!-- Sidebar - Brand -->
	<a class="sidebar-brand d-flex align-items-center justify-content-center">
		<div class="sidebar-brand-icon rotate-n-2">
			<i class="fas fa-building"></i>
		</div>
		<div class="sidebar-brand-text mx-3">Bakesbangpol</div>
	</a>

	<!-- Divider -->
	<hr class="sidebar-divider my-0">

	<!-- Nav Item - Dashboard -->
	<li class="nav-item active">
		<a class="nav-link" href="index.html">
			<i class="fas fa-fw fa-tachometer-alt"></i>
			<span>Dashboard</span></a>
	</li>

	<!-- Divider -->
	<hr class="sidebar-divider">

	<!-- Nav Item - Pages Collapse Menu -->
	<!-- Nav Item - Tables -->
	<li class="nav-item">
		<a class="nav-link" href="<?= base_url();?>C_Data/index/ ">
			<i class="fa fa-clipboard" aria-hidden="true"></i>
			<span>Data</span></a>
	</li>
	<li class="nav-item">
		<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true"
			aria-controls="collapseTwo">
			<i class="fa fa-print" aria-hidden="true"></i>
			<span>Laporan</span>
		</a>

		<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
			<div class="bg-white py-2 collapse-inner rounded">
				<h6 class="collapse-header">Custom Report:</h6>
				<a class="collapse-item" href="buttons.html">Lowokwaru</a>
				<a class="collapse-item" href="cards.html">Klojen</a>
				<a class="collapse-item" href="utilities-other.html">Sukun</a>
				<a class="collapse-item" href="utilities-other.html">KedungKandang</a>
				<a class="collapse-item" href="utilities-other.html">Blimbing</a>
			</div>
		</div>
	</li>

	<!-- Nav Item - Utilities Collapse Menu -->
	<li class="nav-item">
		<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true"
			aria-controls="collapseUtilities">
			<i class="fa fa-list-alt" aria-hidden="true"></i>
			<span>Category</span>
		</a>
		<div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
			<div class="bg-white py-2 collapse-inner rounded">
				<h6 class="collapse-header">Kategori:</h6>
				<a class="collapse-item" href="utilities-color.html"> Ideologi</a>
				<a class="collapse-item" href="utilities-border.html">Politik</a>
				<a class="collapse-item" href="utilities-animation.html">Ekonomi</a>
				<a class="collapse-item" href="utilities-other.html">Sosial</a>
				<a class="collapse-item" href="utilities-other.html">Budaya</a>
				<a class="collapse-item" href="utilities-other.html">Pertahanan</a>
				<a class="collapse-item" href="utilities-other.html">Keamanan </a>
				<a class="collapse-item" href="utilities-other.html">Covid 19</a>
			</div>
		</div>

	</li>


	<!-- Divider -->
	<hr class="sidebar-divider d-none d-md-block">

	<!-- Sidebar Toggler (Sidebar) -->
	<div class="text-center d-none d-md-inline">
		<button class="rounded-circle border-0" id="sidebarToggle"></button>
	</div>
</ul>
<!-- End of Sidebar -->