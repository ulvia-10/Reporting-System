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
					<h4 style="color:black;margin-left:350px;">Hi! Welcome Admin! </h4>
					<!-- Sidebar Toggle (Topbar) -->
					<button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
						<i class="fa fa-bars"></i>
					</button>


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

					


						<!-- Dropdown - Messages -->
						<div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
							aria-labelledby="messagesDropdown">
							<h6 class="dropdown-header">
								Message Center
							</h6>
							<a class="dropdown-item d-flex align-items-center" href="#">
								<div class="dropdown-list-image mr-3">
									<img class="rounded-circle" src="img/undraw_profile_1.svg" alt="">
									<div class="status-indicator bg-success"></div>
								</div>
								<div class="font-weight-bold">
									<div class="text-truncate">Hi there! I am wondering if you can help me with a
										problem I've been having.</div>
									<div class="small text-gray-500">Emily Fowler · 58m</div>
								</div>
							</a>
							<a class="dropdown-item d-flex align-items-center" href="#">
								<div class="dropdown-list-image mr-3">
									<img class="rounded-circle" src="img/undraw_profile_2.svg" alt="">
									<div class="status-indicator"></div>
								</div>
								<div>
									<div class="text-truncate">I have the photos that you ordered last month, how
										would you like them sent to you?</div>
									<div class="small text-gray-500">Jae Chun · 1d</div>
								</div>
							</a>
							<a class="dropdown-item d-flex align-items-center" href="#">
								<div class="dropdown-list-image mr-3">
									<img class="rounded-circle" src="img/undraw_profile_3.svg" alt="">
									<div class="status-indicator bg-warning"></div>
								</div>
								<div>
									<div class="text-truncate">Last month's report looks great, I am very happy with
										the progress so far, keep up the good work!</div>
									<div class="small text-gray-500">Morgan Alvarez · 2d</div>
								</div>
							</a>
							<a class="dropdown-item d-flex align-items-center" href="#">
								<div class="dropdown-list-image mr-3">
									<img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60"
										alt="">
									<div class="status-indicator bg-success"></div>
								</div>
								<div>
									<div class="text-truncate">Am I a good boy? The reason I ask is because someone
										told me that people say this to all dogs, even if they aren't good...</div>
									<div class="small text-gray-500">Chicken the Dog · 2w</div>
								</div>
							</a>
							<a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
						</div>
						</li>

						<div class="topbar-divider d-none d-sm-block"></div>

						<!-- Nav Item - User Information -->
						<li class="nav-item dropdown no-arrow">
							<a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
								data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<span class="mr-2 d-none d-lg-inline text-gray-600 small"> <i class="fa fa-user-circle"
										aria-hidden="true"></i> Profile</span>
								<!-- <img class="img-profile rounded-circle" src="img/undraw_profile.svg"> -->
							</a>
							<!-- Dropdown - User Information -->
							<div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
								aria-labelledby="userDropdown">
								<a class="dropdown-item" href="#">
									<i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
									Profile
								</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="Auth/logout/" data-toggle="modal" data-target="#logoutModal">
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

					<!-- Page Heading -->
					<div class="d-sm-flex align-items-center justify-content-between mb-4">
						<h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
					</div>

					<!-- Content Row -->
					<div class="row">


						

						
						
						<!-- Earnings (Monthly) Card Example -->
						<div class="col-xl-3 col-md-6 mb-4">
							<div class="card border-left-primary shadow ">
								<div class="card-body">
									<div class="row no-gutters align-items-center">
										<div class="col mr-2">
											<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
												Total User</div>
											<div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $getUser?>
											</div>
										</div>
										<div class="col-auto">
											<i class="fas fa-user fa-2x text-gray-300"></i>
										</div>
									</div>
								</div>
							</div>
						</div>

						<!-- Earnings (Monthly) Card Example -->
						<div class="col-xl-3 col-md-6 mb-4">
							<div class="card border-left-success shadow">
								<div class="card-body">
									<div class="row no-gutters align-items-center">
										<div class="col mr-2">
											<div class="text-xs font-weight-bold text-success text-uppercase mb-1">
												Total Laporan</div>
											<div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $getLapor?>
											</div>
										</div>
										<div class="col-auto">
											<i class="fas fa-clipboard fa-2x text-gray-300"></i>
										</div>
									</div>
								</div>
							</div>
						</div>

				</div>
				<!-- /.container-fluid -->

			</div>
	

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

	<script lang="text/javascript">
		var span = document.getElementByid('span');

		function time() {
			var d = new Date();
			var s = d.getSecond();
			var m = d.getMinutes();
			var h = getHours();
			span.textContent = h + ":" + m + ":" + s;

		}
		setInterval(time, 1000);

	</script>
	<script>
		data = {
			datasets: [{
				data: [10, 20, 30]
			}],
			labels: [
				'Red',
				'Yellow',
				'Blue'

			]
		};

	</script>
</body>
