<?php
	include 'config/database.php';

	$id=$_GET['id'];
	$jumlah=$_POST['jumlah'];
	$keterangan=$_POST['keterangan'];
	$sql = mysqli_query($koneksi, "SELECT * FROM databarang WHERE IDBarang = '$id'");
	$data = mysqli_fetch_assoc($sql);
	$jenis= $data['JenisBarang'];
	$nama= $data['NamaBarang'];
	$stok= $data['StokBarang'];
	$satuan= $data['SatuanStok'];
	$status_stok= $data['Status'];
	date_default_timezone_set("Asia/Jakarta");
	$date = date("Y-m-d h:i:s");
	if (isset($_POST['masuk'])) {
		$status = "Masuk";
		$sql_insert_masuk = mysqli_query($koneksi, "INSERT INTO transaksibarang VALUES ($id', '$nama', '$jenis', '$date', '$jumlah', '$satuan', '$keterangan', '$status')");
		if ($sql_insert_masuk){
			$update_stok = $stok + $jumlah;
			if($update_stok<=5){
				$status = "Habis";
			}else if($update_stok<=10 && $update_stok>5){
				$status = "Menipis";
			}else{
				$status = "Aman";
			}
			$update_data_barang = mysqli_query($koneksi, "UPDATE databarang SET StokBarang='$update_stok', Status ='$status' WHERE IDBarang = '$id'");
			echo("<script>alert('Transaksi Berhasil!')</script>");
    		echo("<script>window.location = 'rev_transaksi.php';</script>");
		} else {
    		echo("<script>alert('Transaksi Gagal!')</script>");
    		echo("<script>window.location = 'transaksi.php';</script>");
		}
	}else if (isset($_POST['keluar'])) {
		if($status_stok=='Habis'){
			echo("<script>alert('Transaksi Gagal, Stok Barang Habis!')</script>");
    		echo("<script>window.location = 'transaksi.php';</script>");
		}else if ($status_stok=='Menipis') {
			if($jumlah>$stok){
				echo("<script>alert('Transaksi Gagal, Jumlah Transaksi Terlalu Besar!')</script>");
    			echo("<script>window.location = 'transaksi.php';</script>");
			}else{
				$status = "Keluar";
				$sql_insert_keluar = mysqli_query($koneksi, "INSERT INTO transaksibarang VALUES ($id', '$nama', '$jenis', '$date', '$jumlah', '$satuan', '$keterangan', '$status')");
				if ($sql_insert_keluar){
					$update_stok = $stok - $jumlah;
					if($update_stok<=5){
						$status = "Habis";
					}else if($update_stok<=10 && $update_stok>5){
						$status = "Menipis";
					}else{
						$status = "Aman";
					}
					$update_data_barang = mysqli_query($koneksi, "UPDATE databarang SET StokBarang='$update_stok', Status ='$status' WHERE IDBarang = '$id'");
					echo("<script>alert('Transaksi Berhasil!')</script>");
    				echo("<script>window.location = 'rev_transaksi.php';</script>");
				}
			}
		}else{
			$status = "Keluar";
			$sql_insert_keluar = mysqli_query($koneksi, "INSERT INTO transaksibarang VALUES ($id', '$nama', '$jenis', '$date', '$jumlah', '$satuan', '$keterangan', '$status')");
			if ($sql_insert_keluar){
				$update_stok = $stok - $jumlah;
				if($update_stok<=5){
					$status = "Habis";
				}else if($update_stok<=10 && $update_stok>5){
					$status = "Menipis";
				}else{
					$status = "Aman";
				}
				$update_data_barang = mysqli_query($koneksi, "UPDATE databarang SET StokBarang='$update_stok', Status ='$status' WHERE IDBarang = '$id'");
				echo("<script>alert('Transaksi Berhasil!')</script>");
    			echo("<script>window.location = 'rev_transaksi.php';</script>");
			} else {
    			echo("<script>alert('Transaksi Gagal!')</script>");
    			echo("<script>window.location = 'transaksi.php';</script>");
			}
		}
	}
?>