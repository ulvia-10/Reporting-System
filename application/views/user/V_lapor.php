<div class="container">

	<!-- Card -->
	<br><br>
	<h3>Tambah Laporan baru</h3>
	<p>Isi form dibawah ini untuk menambahkan laporan</p>

	<hr>

	<div class="card">
		<div class="card-body">
			<?php if (validation_errors()):?>
			<div class="alert alert-danger" role="alert">
				<?= validation_errors();?>
			</div>
			<?php endif ?>
			<h5>Form Laporan</h5>


			<form action="<?php echo site_url('C_report/tambah')?>" method="POST">

				<div class="form-group">
					<label for="nama_lapor">Nama </label>
					<input type="text" class="form-control" name="nama_lapor" id="nama_lapor"
						placeholder="Masukkan nama Anda">
				</div>

				<div class="form-group">
					<label for="kategori">Pilih Kategori </label>
					<select class="form-control" name="kategori" id="kategori">
						<option>Ideologi</option>
						<option>Politik</option>
						<option>Ekonomi</option>
						<option>Sosial</option>
						<option>Budaya</option>
						<option>Pertahanan</option>
						<option>Keamanan </option>
						<option>Covid 19</option>
					</select>
				</div>

				<div class="row">
					<div class="col-md-6">

						<div class="form-group">
							<label for="tgl_tragedi">Date</label>
							<input class="form-control" type="date" value="2011-08-19" name="tgl_tragedi"
								id="tgl_tragedi">
							<small>Pilih tanggal</small>
						</div>
					</div>
					<!-- <div class="col-md-6">
						<div class="form-group">
							<label for="">Waktu</label>
							<input class="form-control" type="time" value="13:45:00" id="example-time-input">
							<small>Pilih waktu</small>
						</div>
					</div> -->
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
					<textarea class="form-control" name="keterangan" id="keterangan" rows="3"></textarea>
				</div>

				<div class="form-group">
					<label for="foto">Foto</label>
					<input type="file" class="form-control" id="foto" name="foto" required>
				</div>

				<div class="form-group" style="margin-left:75%">
					<button type="submit" name="submit" class="btn btn-primary"> <i class="fa fa-plus-circle"
							aria-hidden="true"></i> Tambah dan Simpan </button>
				</div>

			</form>
		</div>
	</div>
</div>
