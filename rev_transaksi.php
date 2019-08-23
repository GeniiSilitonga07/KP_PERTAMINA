<?php
	session_start();
	include_once ('config/database.php');
	include_once ('assets/header.php');
	$no=0;
?>

	
	<h1 style="padding-top: 40px; padding-bottom: 10px;"><center>Sistem Informasi Gudang IT PT. PERTAMINA RU IV</center></h1> 

	<h3 style="padding-top: 10px; padding-bottom: 10px;"><center>Daftar Barang di Gudang IT</center></h3>

	<div class="card-body text-center">
		<form method="POST">
			<input type="date" name="tanggal">
			<button class="btn btn-primary" type="submit" name="Cari">Cari
		</form>
	</div>
	
	<div class="card-body text-right">
		<?php if(!empty($_POST['tanggal'])){ ?>
			<?php $tt = $_POST['tanggal'];?>
			<form action="export_transaksibarang.php?tgltransaksi=<?php echo $tt ?>" method="POST">
				<button class="btn btn-sm btn-success" type="submit">Print To Excel</button>
			</form>	
		<?php } else { ?>
			<form action="export_transaksibarang.php">
				<button class="btn btn-sm btn-success" type="submit">Print To Excel</button>
			</form>	
		<?php } ?>
	</div>

	<div class="card-body text-center">
		<table class="table table-bordered">
			<thead class="table-primary font-weight-bold">
				<tr>
					<th>ID Transaksi</th>
					<th>ID Barang</th>
					<th>Nama Barang</th>
					<th>Jenis Barang</th>
					<th>Tanggal Transaksi</th>
					<th>Jumlah</th>
					<th>Satuan</th>
					<th>Keterangan</th>
					<th>Status</th>

				</tr>
			</thead>
			<?php if (isset($_POST['tanggal'])){
				$tgl = $_POST['tanggal'];
				$sql_tgl = mysqli_query($koneksi, "SELECT * FROM transaksibarang WHERE TanggalTransaksi = '$tgl'");
				while ($detail = mysqli_fetch_assoc($sql_tgl)) {?>
					<tr class="cross">
						<td class="t-data"><center><?php echo('#TRBG'. $detail['IDTransaksi'] )?></center></td>
						<td class="t-data"><center><?php echo($detail['IDBarang']) ?></center></td>
						<td class="t-data"><center><?php echo($detail['NamaBarang']) ?></center></td>
						<td class="t-data"><center><?php echo($detail['JenisBarang']) ?></center></td>
						<td class="t-data"><center><?php echo($detail['TanggalTransaksi']) ?></center></td>
						<td class="t-data"><center><?php echo($detail['JumlahTransaksi']) ?></center></td>
						<td class="t-data"><center><?php echo($detail['SatuanStok']) ?></center></td>
						<td class="t-data"><center><?php echo($detail['Keterangan']) ?></center></td>
						<td class="t-data"><center><?php echo($detail['Status']) ?></center></td>
					</tr>
				<?php }
			}else{
				$query = mysqli_query($koneksi, "SELECT * FROM transaksibarang");
				while ($detail = mysqli_fetch_assoc($query)) {?>
					<tr class="cross">
						<td class="t-data"><center><?php echo('#TRBG'. $detail['IDTransaksi'] )?></center></td>
						<td class="t-data"><center><?php echo($detail['IDBarang']) ?></center></td>
						<td class="t-data"><center><?php echo($detail['NamaBarang']) ?></center></td>
						<td class="t-data"><center><?php echo($detail['JenisBarang']) ?></center></td>
						<td class="t-data"><center><?php echo($detail['TanggalTransaksi']) ?></center></td>
						<td class="t-data"><center><?php echo($detail['JumlahTransaksi']) ?></center></td>
						<td class="t-data"><center><?php echo($detail['SatuanStok']) ?></center></td>
						<td class="t-data"><center><?php echo($detail['Keterangan']) ?></center></td>
						<td class="t-data"><center><?php echo($detail['Status']) ?></center></td>
					</tr>
				<?php }
			} ?>
		</table>
	</div>

<?php
include_once ('assets/footer.php');
?>