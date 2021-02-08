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

			<!-- Sidebar Toggler (Sidebar) -->
			<div class="text-center d-none d-md-inline">
				<button class="rounded-circle border-0" id="sidebarToggle"></button>
			</div>
		</ul>
		<!-- End of Sidebar -->

		<!-- Content Wrapper -->
		<div id="content-wrapper" class="d-flex flex-column">

			<!-- Main Content -->
			<div id="content">

				<!-- Topbar -->
				<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

					<!-- Sidebar Toggle (Topbar) -->
					<form class="form-inline">
						<button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
							<i class="fa fa-bars"></i>
						</button>
					</form>

					<!-- Topbar Navbar -->
					<ul class="navbar-nav ml-auto">

						<!-- Nav Item - Search Dropdown (Visible Only XS) -->
						<li class="nav-item dropdown no-arrow d-sm-none">
							<a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
								data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="fas fa-search fa-fw"></i>
							</a>
							<!-- Dropdown - Messages -->
							<div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
								aria-labelledby="searchDropdown">
								<form class="form-inline mr-auto w-100 navbar-search">
									<div class="input-group">
										<input type="text" class="form-control bg-light border-0 small"
											placeholder="Search for..." aria-label="Search"
											aria-describedby="basic-addon2">
										<div class="input-group-append">
											<button class="btn btn-primary" type="button">
												<i class="fas fa-search fa-sm"></i>
											</button>
										</div>
									</div>
								</form>
							</div>
						</li>
						<div class="topbar-divider d-none d-sm-block"></div>

						<!-- Nav Item - User Information -->
						<li class="nav-item dropdown no-arrow">
							<a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
								data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<span class="mr-2 d-none d-lg-inline text-gray-600 small"> <i class="fa fa-user-circle"
										aria-hidden="true"></i> Profile</span>

							</a>
							<!-- Dropdown - User Information -->
							<div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
								aria-labelledby="userDropdown">
								<a class="dropdown-item" href="#">
									<i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
									Profile
								</a>

								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="Auth/logout/" data-toggle="modal"
									data-target="#logoutModal">
									<i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
									Logout
								</a>
							</div>
						</li>

					</ul>

				</nav>
				<!-- End of Topbar -->

				<!-- Begin Page Content -->
				<div class="container-fluid">
					<!-- Collapsable Card Example Filter Data-->
					<div class="card shadow mb-2">
						<!-- Card Header - Accordion -->
						<a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse" id="id="
							multiCollapseExample1" role="button" aria-expanded="true"
							aria-controls="collapseCardExample">
							<h6 class="m-0 font-weight-bold text-primary"> <i class="fa fa-print"
									aria-hidden="true"></i>
								Filter Data</h6>
						</a>

						<?php echo $this->session->flashdata('flash-data') ?>
						<form action="<?php echo base_url('C_Data/exportLaporanPDF') ?>" method="GET">
							<div class="row">

								<div class="form-group col-md-3">
									<label for="kategori">Lihat berdasarkan</label>
									<input type="date" class="form-control" name="start">
								</div>
								<div class="form-group col-md-2">
									<div style="margin-top: 40px">Sampai</div>
								</div>
								<div class="form-group col-md-3">
									<input type="date" class="form-control" name="end" style="margin-top: 35px">
								</div>
								<div class="col-md-2"><button type="submit" style="margin-top: 35px"
										class="btn btn-primary">Cetak</button></div>
								<div class="col-md-2"><a href="<?php echo base_url('C_Data') ?>"
										style="margin-top: 35px; margin-left:-30px; " class="btn btn-default">Reset</a>
								</div>
							</div>

						</form>

					</div>

					<!-- Collapsable Card Example -->
					<div class="card shadow mb-4">
						<!-- Card Header - Accordion -->
						<a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse"
							role="button" aria-expanded="true" aria-controls="collapseCardExample">
							<h6 class="m-0 font-weight-bold text-primary"> <i class="fas fa-clipboard-list    "></i>
								Data Pelaporan Kondisi Wilayah</h6>
						</a>


						<?php echo $this->session->flashdata('flash-data') ?>

						<!-- Card Content - Collapse -->
						<div class="collapse show" id="collapseCardExample">
							<div class="card-body">
								<div class="table-responsive">
									<a href="<?= base_url();?>C_report/tambah/" class="btn btn-primary btn-sm mb-3">
										<i class="fa fa-plus" aria-hidden="true"></i> Tambah Data</a>
									<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
										<thead style=" text-align: center;">
											<tr>
												<th>No</th>
												<th>Nama</th>
												<th>Tanggal</th>
												<th>Kategori</th>
												<th>Kecamatan</th>
												<th>Action</th>
											</tr>
										</thead>
										<tbody style=" text-align:center;">
											<?php $no=1;
                                         foreach ($lapor->result_array() as $lpr){?>
											<tr>
												<td> <?= $no++; ?></td>
												<td><?= $lpr["nama_lapor"];?></td>
												<td><?= $lpr["tgl_tragedi"];?></td>
												<td><?= $lpr["nama_kategori"];?></td>
												<td><?= $lpr["kecamatan"]?></td>
												</td>
												<td>
													<!-- detail -->
													<a href="<?= base_url();?>C_Data/detail/<?= $lpr['id_lapor'];?>"
														class="badge badge-primary"> <i class="fa fa-eye"
															aria-hidden="true"></i></a></a>

													<a href="<?= base_url();?>C_Data/edit/<?= $lpr['id_lapor'];?>"
														class="badge badge-success"><i class="fa fa-edit "></i> </a>
													<!-- cetak -->

													<a href="<?= base_url();?>C_Data/getCetakById/<?=$lpr['id_lapor'];?>"
														class="badge badge-secondary " target="_blank"> <i
															class="fa fa-print"></i></a>
													<!-- hapus -->
													<a href="<?= base_url();?>C_Data/hapus/<?=$lpr['id_lapor'];?>"
														class="badge badge-danger "> <i class="fa fa-trash"
															aria-hidden="true"></i></a>
												</td>
												</td>
												<?php 
                                        }
                                         ?>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>


				</div>
				<!-- /.container-fluid -->

			</div>
			<!-- End of Main Content -->

			<!-- Footer -->
			<footer class="sticky-footer bg-white">
				<div class="container my-auto">
					<div class="copyright text-center my-auto">
						<span>Copyright &copy; Your Website 2020</span>
					</div>
				</div>
			</footer>
			<!-- End of Footer -->

		</div>
		<!-- End of Content Wrapper -->

	</div>
	<!-- End of Page Wrapper -->

	<!-- Scroll to Top Button-->
	<a class="scroll-to-top rounded" href="#page-top">
		<i class="fas fa-angle-up"></i>
	</a>

	<!-- Logout Modal-->
	<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
		aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
					<button class="close" type="button" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
				</div>
				<div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
				<div class="modal-footer">
					<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
					<a class="btn btn-primary" href="<?= base_url();?>Auth/logout/ ">Logout</a>
				</div>
			</div>
		</div>
	</div>

</body>
