<?php 
class database{

	var $host = "localhost";
	var $username = "root";
	var $password = "";
	var $database = "peserta";
	var $koneksi = "";
	function __construct(){
		$this->koneksi = mysqli_connect($this->host, $this->username, $this->password,$this->database);
		if (mysqli_connect_errno()){
			echo "Koneksi database gagal : " . mysqli_connect_error();
		}
	}

	function tampil_data()
	{
		$data = mysqli_query($this->koneksi,"select * from tb_peserta");
		while($row = mysqli_fetch_array($data)){
			$hasil[] = $row;
		}
		return $hasil;
	}

	function tambah_data($kode,$nama_peserta,$nip,$angkatan,$tempat_bertugas,$asal_kota,$judul_laporan,$berkas)
	{
		mysqli_query($this->koneksi,"insert into tb_peserta values ('','$kode','$nama_peserta','$nip','$angkatan','$tempat_bertugas','$asal_kota','$judul_laporan', '$berkas')");
	}

	function get_by_id($id)
	{
		$query = mysqli_query($this->koneksi,"select * from tb_peserta where id='$id'");
		return $query->fetch_array();
	}

	function update_data($id,$kode,$nama_peserta,$nip,$angkatan,$tempat_bertugas,$asal_kota,$judul_laporan, $berkas = NULL)
	{
		if ($berkas == NULL) {
			$query = mysqli_query($this->koneksi,"update tb_peserta set kode='$kode',nama_peserta='$nama_peserta',NIP='$nip',angkatan='$angkatan',tempat_bertugas='$tempat_bertugas',asal_kota='$asal_kota',judul_laporan='$judul_laporan' where id='$id'");
		}else {
			$query = mysqli_query($this->koneksi,"update tb_peserta set kode='$kode',nama_peserta='$nama_peserta',NIP='$nip',angkatan='$angkatan',tempat_bertugas='$tempat_bertugas',asal_kota='$asal_kota',judul_laporan='$judul_laporan',berkas='$berkas' where id='$id'");
		}
	}
	function delete_data($id)
	{
		$query = mysqli_query($this->koneksi,"delete from tb_peserta where id='$id'");
	}
}
?>