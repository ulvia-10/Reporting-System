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

		<div class="container" style="margin-left: 160px; margin-top: 25px;">
			<div class="row-mt-8">
				<div class="col-md-7">
					<div class="card">
						<div class="card-header">
							<strong style="margin-left: 80px;"> <i class="fa fa-user-plus" style="color:blue;"
									aria-hidden="true"></i> Form
								Tambah Data Lapor</strong>
						</div>
						<div class="cara body p-3">
							<?php if (validation_errors()):?>
							<div class="alert alert-danger" role="alert">
								<?= validation_errors();?>
							</div>
							<?php endif ?>
							<form action="" method="post" enctype="multipart/form-data">

								<div class="form-group">
									<label for="nama_lapor">Nama</label>
									<input type="text" class="form-control" id="nama_lapor" name="nama_lapor" required>
								</div>

								<div class="form-group">
									<label for="judul">Judul</label>
									<input type="text" class="form-control" id="judul" name="judul" required>
								</div>

								<div class="form-group">
									<label for="nama_kategori">Nama Kategori</label>
									<select class="form-control" name="nama_kategori" id="nama_kategori">
										<option value="1">Ideologi</option>
										<option value="2">Politik</option>
										<option value="3">Ekonomi</option>
										<option value="4">Sosial</option>
										<option value="5">Budaya</option>
										<option value="6">Pertahanan</option>
										<option value="7">Keamanan</option>
										<option value="8">Covid 19</option>
									</select>
								</div>

								<div class="form-group">
									<label for="tgl_tragedi">Tanggal Tragedi</label>
									<input type="date" class="form-control" id="tgl_tragedi" name="tgl_tragedi">
								</div>

								<div class="form-group">
									<label for="kecamatan">Pilih Kecamatan</label>
									<select class="form-control" id="kecamatan" name="kecamatan">
										<option>Lowokwaru</option>
										<option>Kedungkandang</option>
										<option>Blimbing</option>
										<option>Klojen</option>
										<option>Sukun</option>
									</select>
								</div>

								<div class="form-group">
									<label for="alamat">Alamat</label>
									<textarea class="form-control" name="alamat" id="alamat" rows="4"></textarea>
								</div>

								<div class="form-group">
									<label for="keterangan">Deskripsi Kejadian</label>
									<textarea class="form-control" name="keterangan" id="keterangan"
										rows="3"></textarea>
								</div>

								<div class="form-group">
									<label for="foto_tragedi">Foto</label>
									<input type="file" class="form-control" id="foto_tragedi" name="foto_tragedi">
								</div>

								<button type="submit" name="submit" class="btn btn-primary float-right"> <i
										class="fa fa-plus-circle" aria-hidden="true"></i> Input</button>
							</form>
						</div>
					</div>
				</div>
			</div>
			<!-- End of Page Wrapper -->

			<!-- Scroll to Top Button-->
			<a class="scroll-to-top rounded" href="#page-top">
				<i class="fas fa-angle-up"></i>
			</a>


</body>
