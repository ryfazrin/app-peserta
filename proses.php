<?php 
include('koneksi.php');
$koneksi = new database();

$action = $_GET['action'];
if($action == "add")
{
	// ambil data file
	$namaFile = explode(".", $_FILES["berkas"]["name"]);//untuk mengambil nama file gambarnya saja tanpa format gambarnya
	$nama_baru = round(microtime(true)) . '.' . end($namaFile);//fungsi untuk membuat nama acak
	$namaSementara = $_FILES['berkas']['tmp_name'];

	// lokasi file akan dipindahkan
	$dirUpload = "files/";

	// pindahkan file
	$terupload = move_uploaded_file($namaSementara, $dirUpload.$nama_baru);
	// tambah data
	$koneksi->tambah_data(
						  $_POST['kode'],
						  $_POST['nama_peserta'],
						  $_POST['nip'],
						  $_POST['angkatan'],
						  $_POST['tempat_bertugas'],
						  $_POST['asal_kota'],
						  $_POST['judul_laporan'], 
						  $nama_baru
						);
	header('location:index.php');
}
elseif($action=="update")
{
	if ($_FILES["berkas"]["name"] != NULL) {
		// ambil data file
		$namaFile = explode(".", $_FILES["berkas"]["name"]);//untuk mengambil nama file gambarnya saja tanpa format gambarnya
		$nama_baru = round(microtime(true)) . '.' . end($namaFile);//fungsi untuk membuat nama acak
		$namaSementara = $_FILES['berkas']['tmp_name'];

		// lokasi file akan dipindahkan
		$dirUpload = "files/";

		// pindahkan file
		$terupload = move_uploaded_file($namaSementara, $dirUpload.$nama_baru);
		// print_r($_FILES);

		// ambil dan hapus file sebelumnya
		if (file_exists("files/".$_POST['old-file'])) {
			unlink("files/".$_POST['old-file']);
			echo "berhasil";
		}
	}
	$koneksi->update_data(
						  $_POST['id'],
						  $_POST['kode'],
						  $_POST['nama_peserta'],
						  $_POST['nip'],
						  $_POST['angkatan'],
						  $_POST['tempat_bertugas'],
						  $_POST['asal_kota'],
						  $_POST['judul_laporan'],
						  $nama_baru
						);
	header('location:index.php');
}
elseif($action=="delete")
{
	$id = $_GET['id'];
	$file = $_GET['file'];
	$koneksi->delete_data($id);
	// hapus file
	if (file_exists("files/".$file)) {
		unlink("files/".$file);
		echo "berhasil";
	}
	header('location:index.php');
}
?>