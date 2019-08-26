<?php
	include_once ('config/database.php');
	header("Content-Type: application/force-download");
 	header("Cache-Control: no-cache, must-revalidate");
 	header("Expires: Sat, 31 Des 2010 00:00:00 GMT"); 
 	header("content-disposition: attachment;filename=laporantransaksibarang.xls");
 	$no=0;
?>

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
			<?php $query = mysqli_query($koneksi, "SELECT * FROM transaksibarang");
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
			<?php } ?>
		</table>
	</div>