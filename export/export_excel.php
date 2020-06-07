<?php 
	include('../koneksi.php');
	$db = new database();
	$data = $db->tampil_data();
	header("Content-type: application/vnd-ms-excel");
	header("Content-Disposition: attachment; filename=Data Peserta.xlsx");
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Export Data Peserta</title>
</head>
<body>
	<style type="text/css">
	body{
		font-family: sans-serif;
	}
	table{
		margin: 20px auto;
		border-collapse: collapse;
	}
	table th,
	table td{
		border: 1px solid #3c3c3c;
		padding: 3px 8px;

	}
	a{
		background: blue;
		color: #fff;
		padding: 8px 10px;
		text-decoration: none;
		border-radius: 2px;
	}
	</style>
	<center>
		<h1>Data Peserta</h1>
	</center>

	<table border="1">
		<thead class="thead-dark">
		<tr>
			<th>No</th>
			<th>kode</th>
			<th>Nama Peserta</th>
			<th>NIP</th>
			<th>Angkatan</th>
			<th>Tempat Bertugas</th>
			<th>Asal Kota</th>
			<th>Judul Laporan</th>
		</tr>
	</thead>
	<tbody class="table-striped">
		<?php 
		$no = 1;
		foreach($data as $row){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $row['kode']; ?></td>
				<td><?php echo $row['nama_peserta']; ?></td>
				<td><?php echo $row['NIP']; ?></td>
				<td><?php echo $row['angkatan']; ?></td>
				<td><?php echo $row['tempat_bertugas']; ?></td>
				<td><?php echo $row['asal_kota']; ?></td>
				<td><?php echo $row['judul_laporan']; ?></td>
			<?php 
		}
		?>
	</tbody>
	</table>
</body>
</html>