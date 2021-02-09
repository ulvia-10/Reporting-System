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
				<a class="nav-link" href="<?= base_url();?>C_data/index/ ">
					<i class="fa fa-clipboard" aria-hidden="true"></i>
					<span>Data Kondisi Wilayah</span></a>
			</li>


			<!-- Nav Item - Tables -->
			<li class="nav-item">
				<a class="nav-link" href="<?= base_url();?>C_data/indexuser/ ">
					<i class="fa fa-clipboard" aria-hidden="true"></i>
					<span>Data User</span></a>
			</li>

			<!-- Divider -->
			<hr class="sidebar-divider d-none d-md-block">
			<li class="nav-item">
				<a class="nav-link" href="<?= base_url();?>C_login/index ">
					<i class="fa fa-power-off" aria-hidden="true"></i>
					<span> Log Out</span></a>

			</li>
			<!-- Sidebar Toggler (Sidebar) -->
			<div class="text-center d-none d-md-inline">
				<button class="rounded-circle border-0" id="sidebarToggle"></button>
			</div>
		</ul>
		<!-- End of Sidebar -->

		<div class="container" style="margin-top: 50px;">
			<div class="row-mt-3">
				<div class="col-md-10 offset-1">
					<div class="card">
						<div class="card-header">
							<i class="fas fa-edit"></i> Form Edit Data Kondisi
						</div>
						<div class="card-body">

							<?php if (validation_errors()):?>
							<div class="alert alert-danger" role="alert">
								<?= validation_errors();?>
							</div>
							<?php endif ?>

							<?php echo $this->session->flashdata('flash-data') ?>
							<form action="" method="post" enctype="multipart/form-data">

								<input type="hidden" name="id_lapor" value="<?= $lapor['id_lapor'];?>">
								<div class="form-group">
									<label for="nama">Nama Lapor </label>
									<input type="text" class="form-control" id="nama_lapor" name="nama_lapor"
										value="<?= $lapor['nama_lapor'] ;?>">
								</div>
								<div class="form-group">
									<label for="judul">Judul </label>

									<input type="text" class="form-control" id="judul" name="judul"
										value="<?php echo $lapor['judul'] ?>">
								</div>
								<div class="form-group">
									<label for="nama_kategori">Pilih Kategori</label>
									<select name="nama_kategori" class="form-control" id="nama_kategori">
										<?php if ( $dataCategory->num_rows() > 0 ) {
							
												foreach ( $dataCategory->result() AS $rowCategory ) {
													
													$status_selected = '';
													if ( $rowCategory->id_kategori == $lapor['id_kategori'] ) {

														$status_selected = 'selected="selected"';
													}

													echo '<option value="'.$rowCategory->id_kategori.'" '.$status_selected.'>'.ucfirst($rowCategory->nama_kategori).'</option>';
												}
											}
										?>
									</select>
								</div>
								<div class="form-group">
									<label for="kecamatan">Pilih Kecamatan</label>
									<select class="form-control" id="kecamatan" name="kecamatan">

										<option value="Lowokwaru"
											<?php if ( $lapor['kecamatan'] == "Lowokwaru" ) echo 'selected="selected"'; ?>>
											Lowokwaru</option>
										<option value="Kedungkandang"
											<?php if ( $lapor['kecamatan'] == "Kedungkandang" ) echo 'selected="selected"'; ?>>
											Kedungkandang</option>
										<option value="Blimbing"
											<?php if ( $lapor['kecamatan'] == "Blimbing" ) echo 'selected="selected"'; ?>>
											Blimbing</option>
										<option value="Klojen"
											<?php if ( $lapor['kecamatan'] == "Klojen" ) echo 'selected="selected"'; ?>>
											Klojen</option>
										<option value="Sukun"
											<?php if ( $lapor['kecamatan'] == "Sukun" ) echo 'selected="selected"'; ?>>
											Sukun</option>
									</select>
								</div>
								<div class="form-group">
									<label for="tgl_tragedi">Tanggal Tragedi</label>
									<input type="date" class="form-control" id="tgl_tragedi" name="tgl_tragedi"
										value="<?= date('Y-m-d', strtotime($lapor ['tgl_tragedi'])) ;?>">
								</div>
								<div class="form-group">
									<label for="alamat">Alamat</label>
									<input type="text" class="form-control" id="alamat" name="alamat"
										value="<?= $lapor ['alamat'] ;?>">
								</div>
								<div class="form-group">
									<label for="keterangan">Keterangan</label>
									<textarea name="keterangan"
										class="form-control"><?= $lapor ['keterangan'] ;?></textarea>
								</div>


								<div class="row">
											<div class="col-md-4" style="border-right: 1px solid #e0e0e0">
												<!-- Element Files -->
												<div class="form-group">
													<label for="">Tambah Gambar</label>
													<input type="file" name="foto_tragedi" class="form-control" />
												</div>
											</div>
											<div class="col-md-8">
											
												<h5>Galeri Foto</h5>

												<table class="table" style="font-size: 12px">
													<tr>
														<th>No</th>
														<th>Nama File</th>
														<th>Aksi</th>
													</tr>
													<?php
													
														$data_foto = array();
														if ( $lapor['foto_tragedi'] ) { // dia ada fotonya ?

															$data_foto = explode(',', $lapor['foto_tragedi']);
														}

														if ( count($data_foto) > 0 ) {
															$nomor = 0;
															foreach ( $data_foto AS $foto ) {

																$link = base_url('C_data/onRemovePhotoTragedi?id_lapor='. $lapor['id_lapor'].'&index='. $nomor);
													?>
													<tr>
														<td><?php echo ($nomor + 1) ?></td>
														<td>
															<a target="_blank" href="<?php echo base_url('assets/images/'. $foto) ?>"><?php echo $foto ?></a>
														</td>
														<td><a href="<?php echo $link ?>" onclick="return confirm('Apakah anda yakin ingin menghapus foto <?php echo $foto ?>')"><i class="fa fa-trash"></i></a></td>
													</tr>

													<?php $nomor++; } } else echo '<tr><td colspan="2" align="center">Tidak memiliki foto</td></tr>'; ?>
												</table>
											</div>
								</div>
								
								
								<button type="submit" name="edit" class="btn btn-primary float-right"> <i
										class="fas fa-edit"></i> Edit</button>
							</form>
						</div>
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
