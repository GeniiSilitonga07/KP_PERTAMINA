<?php
	global $koneksi;
	$koneksi = mysqli_connect('localhost','root','','sistemgudang');
 	
	if ($koneksi){
		mysqli_select_db($koneksi, 'sistemgudang');
	}else{
		die('Koneksi ke database gagal !!' . mysqli_connect_error());
	}
?>