<body id="page-top">

	<!-- Page Wrapper -->
	<div id="wrapper">

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
				<a class="nav-link" href="<?php echo base_url()?>C_lapor_Admin/index">
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
					<span>Data Kondisi Wilayah</span></a>
			</li>


			<!-- Nav Item - Tables -->
			<li class="nav-item">
				<a class="nav-link" href="<?= base_url();?>C_Data/indexuser/ ">
					<i class="fa fa-clipboard" aria-hidden="true"></i>
					<span>Data User</span></a>
			</li>




			<!-- Divider -->
			<hr class="sidebar-divider d-none d-md-block">
			<li class="nav-item">
				<a class="nav-link" href="<?= base_url();?>C_Login/index ">
					<i class="fa fa-power-off" aria-hidden="true"></i>
					<span> Log Out</span></a>

			</li>
			<!-- Sidebar Toggler (Sidebar) -->
			<div class="text-center d-none d-md-inline">
				<button class="rounded-circle border-0" id="sidebarToggle"></button>
			</div>
		</ul>
		<!-- End of Sidebar -->

		<div class="container" style="margin-left: 200px;">
			<div class="row mt-3">
				<div class="col-md-6">
					<div class="card">
						<div class="card-header" style="text-align:center;">
							<i class="fa fa-user" aria-hidden="true" style="color:blue"></i> Detail Data Kondisi Wilayah
						</div>
						<div class="card-body">
							<center>
								<h5 class="card-title"><strong><?= $lapor['nama_lapor']; ?></strong></h5>
							</center>

							<?php
							$src = 'https://pertaniansehat.com/v01/wp-content/uploads/2015/08/default-placeholder.png';

							if ( $lapor['foto_tragedi'] ) {

								$src = base_url('assets/images/'). $lapor['foto_tragedi'];
							}
					
							?>

							<div class="" style="text-align: center">
								<img height="150px;" width="150px;" src="<?= $src ;?>">
							</div>
							<p class="card-text">
								<label for="nama_lapor"><b> Nama Lapor: </b></label>
								<?= $lapor['nama_lapor']; ?></p>
								<p class="card-text">
								<label for="judul"><b> Judul: </b></label>
								<?= $lapor['judul']; ?></p>
							<p class="card-number">
								<label for="nama_kategori"><b> Kategori : </b></label>
								<?= $lapor['nama_kategori']; ?></p>
							<p class="card-text">
								<label for="kecamatan"><b> Kecamatan : </b></label>
								<?= $lapor['kecamatan']; ?></p>
							<p class="card-text">
								<label for="tgl_tragedi"><b> Tanggal Tragedi: </b></label>

								<?php
						
							$dayOfName = ["Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jum'at", "Sabtu"];
							$requestDay = date('N', strtotime($lapor['tgl_tragedi']));
						?>
								<?= $dayOfName[$requestDay] .' '. date('d F Y H.i A', strtotime($lapor['tgl_tragedi'])); ?>
							</p>
							<p class="card-text">
								<label for="alamat"><b> Alamat : </b></label>
								<?= $lapor['alamat']; ?></p>
							<p class="card-text">
								<label for="keterangan"><b> Keterangan : </b></label>
								<?= $lapor['keterangan']; ?></p>

							<a href="<?= base_url();?>C_Data/index/" class="btn btn-primary"> Kembali</a>
						</div>
					</div>
				</div>
			</div>


			<!-- Scroll to Top Button-->
			<a class="scroll-to-top rounded" href="#page-top">
				<i class="fas fa-angle-up"></i>
			</a>


</body>
