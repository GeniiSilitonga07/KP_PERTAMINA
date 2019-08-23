<?php
	session_start();
	include 'config/database.php';
	$username = $_POST['username'];
	$password = md5($_POST['password']);

    $sql = mysqli_query($koneksi, "SELECT * FROM datapengguna WHERE Username = '$username' AND Password = '$password' ");

    $cek = mysqli_num_rows($sql);

    if ($cek == 1) {
    	$detail = mysqli_fetch_assoc($sql);
		$_SESSION['username'] = $detail['Username'];
		$_SESSION['isLoggedIn'] = true;
		$_SESSION['role'] = $detail['Role'];

		if ($detail['Role'] == 1) {
			echo "<script>window.location = 'data_barang.php' </script>";
		} else {
			echo "<script>window.location = 'data_barang.php' </script>";
		}
	} else {
		echo "<script>alert('Email/Password Salah!'); location.href='index.php';</script>";
	}
?>