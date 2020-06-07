<?php 
	include('koneksi.php');
	$db = new database();
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>App</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/dataTables.bootstrap4.min.css">
</head>
<body>
	<nav class="navbar navbar-light bg-light">
		<div class="container">
			<a class="navbar-brand" href="#">App</a>
			<ul class="navbar-nav mr-auto">
				<li class="nav-item">
					<a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
				</li>
			</ul>
			<a class="btn btn-primary" href="index.php?page=tambah">Tambah Data</a>
		</div>
	</nav>
	<div class="container">
	<?php 
		if(isset($_GET['page'])){
			$page = $_GET['page'];
	 
			switch ($page) {
				case 'index':
					include "home.php";
					break;
				case 'tambah':
					include "tambah_data.php";
					break;
				case 'edit':
					include "edit.php";
					break;	
				default:
					echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
					break;
			}
		}else{
			include "home.php";
		} 
	 ?>
	</div>
	<script src="js/jquery.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/dataTables.bootstrap4.min.js"></script>
	<script>
		$(document).ready( function () {
		    $('#peserta').DataTable();
		} );
	</script>
</body>
</html>