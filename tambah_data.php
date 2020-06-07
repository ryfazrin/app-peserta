<h3>Tambah Data</h3>
<hr/>
<form class="row" method="post" action="proses.php?action=add" enctype="multipart/form-data">
	<div class="col-lg-6">
		<div class="form-group">
			<label>Kode</label>
			<input class="form-control" type="text" name="kode"/>
		</div>
		<div class="form-group">
			<label>Nama Peserta</label>
			<input class="form-control" type="text" name="nama_peserta"/>
		</div>
		<div class="form-group">
			<label>NIP</label>
			<input class="form-control" type="text" name="nip"/>
		</div>
		<div class="form-group">
			<label>Angkatan</label>
			<input class="form-control" type="text" name="angkatan"/>
		</div>
	</div>
	<div class="col-lg-6">
		<div class="form-group">
			<label>Tempat Bertugas</label>
			<input class="form-control" type="text" name="tempat_bertugas"/>
		</div>
		<div class="form-group">
			<label>Asal Kota</label>
			<input class="form-control" type="text" name="asal_kota"/>
		</div>
		<div class="form-group">
			<label>Judul Laporan</label>
			<textarea class="form-control" name="judul_laporan"></textarea>
		</div>
		<div class="form-group custom-file">
			<label>Upload</label>
			<input type="file" class="custom-file-input" id="berkas" name="berkas" required>
  			<label class="form-control custom-file-label" for="berkas">Tambah Gambar</label>
		</div>
		<input class="btn btn-primary" type="submit" name="tombol" value="Simpan"/>
	</div>
</form>