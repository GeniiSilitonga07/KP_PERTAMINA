<?php
	session_start();
	include 'config/database.php';
	$id=$_GET['id'];

	$query = mysqli_query($koneksi, "SELECT JenisBarang, NamaBarang FROM databarang WHERE IDBarang = '$id'");
	$data = mysqli_fetch_assoc($query);
	
	$no=0;
?>
<form action="simpan_transaksi.php?id=<?php echo($id)?>" method="POST">
	<div class="modal-header">
   		<h2 class="modal-title">Detail Barang</h2>
	</div>

	<div class="modal-body">
		<div class="card-body text-center">
			<table class="table table-bordered">
				<thead class="table-primary font-weight-bold">
					<tr>
						<th>ID Barang</th>
						<th>Jenis Barang</th>
						<th>Nama Barang</th>
						<th>Jumlah Barang</th>
						<th>Keterangan</th>
					</tr>
				</thead>
					<tr class="cross">
						<td class="t-data"><center><?php echo($id)?></center></td>
						<td class="t-data"><center><?php echo($data['JenisBarang']) ?></center></td>
						<td class="t-data"><center><?php echo($data['NamaBarang']) ?></center></td>
						<td><input type="text" name="jumlah" required autofocus></td>
						<td><input type="text" name="keterangan" required autofocus></td>
					</tr>
			</table>
		</div>
    </div>

    <div class="modal-footer">
        <button class="btn btn-primary" type="submit" name="masuk">Masuk
        <button class="btn btn-success" type="submit" name="keluar">Keluar
        <button class="btn btn-secondary" data-dismiss="modal" value="tutup">Tutup
    </div>

</form>