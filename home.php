<?php 	
	$data = $db->tampil_data();
?>
<a class="btn btn-success float-left" href="export/export_excel.php">Export to Excel</a>
<table id="peserta" class="table table-bordered table-hover display">
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
			<th>Gambar</th>
			<th></th>
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
				<td><img src="files/<?php echo $row['berkas']; ?>" class="rounded" width="100" alt="<?php echo $row['berkas']; ?>"></td>
				<td>
					<a class="btn btn-outline-warning" href="index.php?page=edit&id=<?php echo $row['id']; ?>"><img src="images/pencil-square.svg" width="20" title="edit"></a>
					<a class="btn btn-outline-danger" onclick="return confirm('Anda yakin mau menghapus item ini ?')" href="proses.php?action=delete&id=<?php echo $row['id']; ?>&file=<?php echo $row['berkas']; ?>"><img src="images/trash.svg" width="20" title="hapus"></a>
				</td>
			</tr>
			<?php 
		}
		?>
	</tbody>
</table>