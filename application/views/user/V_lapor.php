<div class="container">

	<!-- Card -->
	<h3 styl>Tambah Laporan baru</h3>
	<p>Isi form dibawah ini untuk menambahkan laporan</p>

	<hr>

	<div class="card">
		<div class="card-body">
			<h5>Form Laporan</h5>


			<form action="" method="POST">

				<div class="form-group">
					<label for="exampleFormControlInput1">Nama </label>
					<input type="nama" class="form-control" id="exampleFormControlInput1"
						placeholder="Masukkan nama Anda   ">
				</div>

				<div class="form-group">
					<label for="exampleFormControlSelect1">Pilih Kategori </label>
					<select class="form-control" id="exampleFormControlSelect1">
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

				<div class="form-group">
					<label for="exampleFormControlInput1">Email address</label>
					<input type="email" class="form-control" id="exampleFormControlInput1"
						placeholder="name@example.com">
				</div>

				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label for="">Date</label>
							<input class="form-control" type="date" value="2011-08-19" id="example-date-input">
							<small>Pilih tanggal</small>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="">Waktu</label>
							<input class="form-control" type="time" value="13:45:00" id="example-time-input">
							<small>Pilih waktu</small>
						</div>
					</div>
				</div>

				<div class="form-group">
					<label for="exampleFormControlSelect1">Pilih Kecamatan</label>
					<select class="form-control" id="exampleFormControlSelect1">
						<option>Lowokwaru</option>
						<option>Kedungkandang</option>
						<option>Blimbing</option>
						<option>Klojen</option>
						<option>Sukun</option>
					</select>
				</div>

				<div class="form-group">
					<label for="exampleFormControlTextarea1">Alamat</label>
					<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
				</div>

				<div class="form-group">
					<label for="exampleFormControlTextarea1">Deskripsi Kejadian</label>
					<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
				</div>

				<div class="form-group">
					<div class="input-group mb-3">
						<div class="input-group-prepend">
							<span class="input-group-text">Upload</span>
						</div>
						<div class="custom-file">
							<input type="file" class="custom-file-input" id="inputGroupFile01">
							<label class="custom-file-label" for="inputGroupFile01">Choose file</label>
						</div>
					</div>
				</div>

				<div class="form-group">
					<button type="button" class="btn btn-primary">Tambah dan Simpan </button>
				</div>

			</form>
		</div>
	</div>
</div>