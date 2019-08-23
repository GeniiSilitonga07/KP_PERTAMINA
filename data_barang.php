<?php
	session_start();
	include_once ('config/database.php');
	include_once ('assets/header.php');
	$query = mysqli_query($koneksi, "SELECT * FROM databarang");
	$no=0;
?>

	
	<h1 style="padding-top: 40px; padding-bottom: 10px;"><center>Sistem Informasi Gudang IT PT. PERTAMINA RU IV</center></h1> 

	<h3 style="padding-top: 10px; padding-bottom: 10px;"><center>Daftar Barang di Gudang IT</center></h3>

	<div class="card-body text-center">
		<h5>Filter Barang :</h5>
		<form method="POST">
			<select name="filter_jenis">
				<option></option>
  				<option value="Accessories Computer">Accessories Computer</option>
  				<option value="Alat Komunikasi">Alat Komunikasi</option>
  				<option value="Accessories Operasi Komunikasi">Accessories Operasi Komunikasi</option>
  				<option value="Accessories Operasi Radio">Accessories Operasi Radio</option>
  				<option value="Accessories Printer">Accessories Printer</option>
  				<option value="Battery">Battery</option>
  				<option value="Disk Drive">Disk Drive</option>
  				<option value="Ribbon Catridge Printer">Ribbon Catridge Printer</option>
  				<option value="Ribbon Pack Printer">Ribbon Pack Printer</option>
  				<option value="Toner cartridge HP laserjet Q7516A for 5200 black">Toner cartridge HP laserjet Q7516A for 5200 black</option>
  				<option value="Toner Cartridge Printer Laser Jet">Toner Cartridge Printer Laser Jet</option>
  				<option value="Tinta Cartr. Printer Desk Jet">Tinta Cartr. Printer Desk Jet</option>
			</select>
			<select name="filter_status">
				<option></option>
				<option value="Aman">Aman</option>
  				<option value="Menipis">Menipis</option>
  				<option value="Habis">Habis</option>
			</select>
			<button class="btn btn-sm btn-primary" type="submit" name="Cari">Cari</button>
		</form>
	</div>

	<div class="card-body text-center">
		<?php if(!empty($_POST['filter_jenis'])||!empty($_POST['filter_status'])){ ?>
			<?php $jb = $_POST['filter_jenis']; $sb = $_POST['filter_status'];?>
			<form action="export_databarang.php?jnsbarang=<?php echo $jb ?>&stsbarang=<?php echo $sb ?>" method="GET">
				<button class="btn btn-sm btn-success" type="submit">Print To Excel</button>
			</form>	
		<?php } else { ?>
			<form action="export_databarang.php">
				<button class="btn btn-sm btn-success" type="submit">Print To Excel</button>
			</form>	
		<?php } ?>
	</div>

	<div class="card-body text-center">
		<table class="table table-bordered">
			<thead class="table-primary font-weight-bold">
				<tr>
					<th>No</th>
					<th>ID Barang</th>
					<th>Jenis Barang</th>
					<th>Nama Barang</th>
					<th>Stok Barang</th>
					<th>Satuan</th>
					<th>Status</th>
				</tr>
			</thead>
			<?php if (isset($_POST['filter_jenis'])||isset($_POST['filter_status'])&&isset($_POST['Cari'])){
				$jenis = $_POST['filter_jenis'];
				$stat = $_POST['filter_status'];
				if (!empty($jenis)||!empty($stat)){
					$sql_fil = mysqli_query($koneksi, "SELECT * FROM databarang WHERE JenisBarang = '$jenis' AND Status = '$stat'");?>
					<?php while ($detail = mysqli_fetch_assoc($sql_fil)) {?>
						<tr class="cross">
							<td class="t-data"><center><?php echo(++$no)?></center></td>
							<td class="t-data"><center><?php echo($detail['IDBarang']) ?></center></td>
							<td class="t-data"><center><?php echo($detail['NamaBarang']) ?></center></td>
							<td class="t-data"><center><?php echo($detail['JenisBarang']) ?></center></td>
							<td class="t-data"><center><?php echo($detail['StokBarang']) ?></center></td>
							<td class="t-data"><center><?php echo($detail['SatuanStok']) ?></center></td>
							<td class="t-data"><center><?php echo($detail['Status']) ?></center></td>
						</tr>
					<?php } ?>
				<?php } else{ ?>
					<?php $query = mysqli_query($koneksi, "SELECT * FROM databarang");?>
					<?php while ($detail = mysqli_fetch_assoc($query)) {?>
						<tr class="cross">
							<td class="t-data"><center><?php echo(++$no)?></center></td>
							<td class="t-data"><center><?php echo($detail['IDBarang']) ?></center></td>
							<td class="t-data"><center><?php echo($detail['NamaBarang']) ?></center></td>
							<td class="t-data"><center><?php echo($detail['JenisBarang']) ?></center></td>
							<td class="t-data"><center><?php echo($detail['StokBarang']) ?></center></td>
							<td class="t-data"><center><?php echo($detail['SatuanStok']) ?></center></td>
							<td class="t-data"><center><?php echo($detail['Status']) ?></center></td>
						</tr>
					<?php } 
				}?>
			<?php } else{ ?>
				<?php $query = mysqli_query($koneksi, "SELECT * FROM databarang");?>
				<?php while ($detail = mysqli_fetch_assoc($query)) {?>
					<tr class="cross">
						<td class="t-data"><center><?php echo(++$no)?></center></td>
						<td class="t-data"><center><?php echo($detail['IDBarang']) ?></center></td>
						<td class="t-data"><center><?php echo($detail['NamaBarang']) ?></center></td>
						<td class="t-data"><center><?php echo($detail['JenisBarang']) ?></center></td>
						<td class="t-data"><center><?php echo($detail['StokBarang']) ?></center></td>
						<td class="t-data"><center><?php echo($detail['SatuanStok']) ?></center></td>
						<td class="t-data"><center><?php echo($detail['Status']) ?></center></td>
					</tr>
				<?php }
			} ?>
		</table>
	</div>

<?php
include_once ('assets/footer.php');
?>