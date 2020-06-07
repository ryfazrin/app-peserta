<?php 	
	$id = $_GET['id'];
	if(! is_null($id))
	{
		$data = $db->get_by_id($id);
	}
	else
	{
		header('location:index.php');
	}
?>
<h3>Update Data</h3>
<hr/>
<form class="row" method="post" action="proses.php?action=update" enctype="multipart/form-data">
	<input type="hidden" name="id" value="<?php echo $data['id']; ?>"/>
	<div class="col-lg-6">
		<div class="form-group">
			<label>Kode</label>
			<input class="form-control" type="text" name="kode" value="<?php echo $data['kode']; ?>"/>
		</div>
		<div class="form-group">
			<label>Nama Peserta</label>
			<input class="form-control" type="text" name="nama_peserta" value="<?php echo $data['nama_peserta']; ?>"/>
		</div>
		<div class="form-group">
			<label>NIP</label>
			<input class="form-control" type="text" name="nip" value="<?php echo $data['NIP']; ?>"/>
		</div>
		<div class="form-group">
			<label>Angkatan</label>
			<input class="form-control" type="text" name="angkatan" value="<?php echo $data['angkatan']; ?>"/>
		</div>
	</div>
	<div class="col-lg-6">
		<div class="form-group">
			<label>Tempat Bertugas</label>
			<input class="form-control" type="text" name="tempat_bertugas" value="<?php echo $data['tempat_bertugas']; ?>"/>
		</div>
		<div class="form-group">
			<label>Asal Kota</label>
			<input class="form-control" type="text" name="asal_kota" value="<?php echo $data['asal_kota']; ?>"/>
		</div>
		<div class="form-group">
			<label>Judul Laporan</label>
			<textarea class="form-control" name="judul_laporan"><?php echo $data['judul_laporan']; ?></textarea>
		</div>
		<div class="form-group custom-file">
			<input type="hidden" name="old-file" value="<?php echo $data['berkas']; ?>">
			<input type="file" class="custom-file-input" id="berkas" name="berkas">
			<label class="form-control custom-file-label" for="berkas"><?php echo $data['berkas']; ?></label>
			<small id="berkas-help" class="form-text text-muted">Kosongkan Jika Tidak Mengganti Gambar.</small>
		</div>
		<div class="form-group">
			<input class="btn btn-warning" type="submit" name="tombol" value="Update"/>
		</div>
	</div>
</form>