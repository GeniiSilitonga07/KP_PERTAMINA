<?php
	session_start();
	include_once ('config/database.php');
	include_once ('assets/header.php');
	$query = mysqli_query($koneksi, "SELECT * FROM databarang");
	$no=0;			
?>

	<h1 style="padding-top: 40px; padding-bottom: 10px;"><center>Sistem Informasi Gudang IT PT. PERTAMINA RU IV</center></h1>

	<h3 style="padding-top: 10px; padding-bottom: 10px;"><center>Transaksi Barang Masuk dan Keluar</center></h3>

	<form method="POST" class="text-center">
		<label>Cari Nama Barang :</label>
		<input type="text" name="filter">
		<button class="btn btn-sm btn-primary" type="submit" name="Cari">Cari</button>
	</form>

	<div class="card-body text-center">
			<form method="GET">
				<table class="table table-bordered">
					<thead class="table-primary font-weight-bold">
						<tr>
							<th>No</th>
							<th>ID Barang</th>
							<th>Jenis Barang</th>
							<th>Nama Barang</th>
							<th>Aksi</th>
						</tr>
					</thead>

	<?php if(!empty($_POST['filter'])&&isset($_POST['Cari'])) {
		$text = $_POST['filter'];
		$filter = mysqli_query($koneksi, "SELECT * FROM databarang WHERE NamaBarang LIKE '%".$text."%'");
		if (mysqli_num_rows($filter)==0) { ?>
			<tr><td colspan="12" class="t-data">Barang Tidak Ada !!</td></tr>
		<?php }else {?>
			<?php while ($detail = mysqli_fetch_assoc($filter)) {?>
				<tr class="cross"> 
					<td class="t-data"><center><?php echo(++$no)?></center></td>
					<td class="t-data"><center><?php echo($detail['IDBarang']) ?></i></center></td>
					<td class="t-data"><center><?php echo($detail['JenisBarang']) ?></center></td>
					<td class="t-data"><center><?php echo($detail['NamaBarang']) ?></center></td>
					<td>
						<button type='button' 
						data-a="<?php echo $detail['IDBarang']; ?>" 
						href='#myModal' class='myModal btn btn-success btn-md' 
						data-toggle='modal' 
						data-backdrop='static' 
						data-keyboard='false'>Pilih</button>
					</td>
				</tr>
			<?php } ?>
			</table>
			</form>	
		</div>

		<div class="modal fade" id="myModal" role="dialog">
        	<div class="modal-dialog modal-xl" role="document">
           		<div class="modal-content">
               		<div class="modal-header">
                   		<h4 class="modal-title">Detail Barang</h4>
               		</div>
               		<div class="modal-body">
                   		<div class="fetched-data"></div>
               		</div>
               		<div class="modal-footer">
                   		<button type="button" class="close" data-dismiss="modal">Tutup</button>
               		</div>
           		</div>
        	</div>
    	</div>
    	<script>
			$('.myModal').click(function(){
        		var id=$(this).attr('data-a');
        		$.ajax({
        			url:"proses_transaksi.php?id="+id,
        			cache:false,
        			success:function(result){
            			$(".modal-content").html(result);
        			}
        		});
    		});
		</script>	
		<?php }}
		else {
			$filter = mysqli_query($koneksi, "SELECT * FROM databarang");
			if (mysqli_num_rows($filter)==0) { ?>
				<tr><td colspan="12" class="t-data">Barang Tidak Ada !!</td></tr>
			<?php }else { ?>
				<?php while ($detail = mysqli_fetch_assoc($filter)) {?>
				<tr class="cross"> 
					<td class="t-data"><center><?php echo(++$no)?></center></td>
					<td class="t-data"><center><?php echo($detail['IDBarang']) ?></i></center></td>
					<td class="t-data"><center><?php echo($detail['JenisBarang']) ?></center></td>
					<td class="t-data"><center><?php echo($detail['NamaBarang']) ?></center></td>
					<td>
						<button type='button' 
						data-a="<?php echo $detail['IDBarang']; ?>" 
						href='#myModal' class='myModal btn btn-success btn-md' 
						data-toggle='modal' 
						data-backdrop='static' 
						data-keyboard='false'>Pilih</button>
					</td>
				</tr>
			<?php } ?>
			</table>
			</form>	
		</div>

		<div class="modal fade" id="myModal" role="dialog">
        	<div class="modal-dialog modal-xl" role="document">
           		<div class="modal-content">
               		<div class="modal-header">
                   		<h4 class="modal-title">Detail Barang</h4>
               		</div>
               		<div class="modal-body">
                   		<div class="fetched-data"></div>
               		</div>
               		<div class="modal-footer">
                   		<button type="button" class="close" data-dismiss="modal">Tutup</button>
               		</div>
           		</div>
        	</div>
    	</div>
    	<script>
			$('.myModal').click(function(){
        		var id=$(this).attr('data-a');
        		$.ajax({
        			url:"proses_transaksi.php?id="+id,
        			cache:false,
        			success:function(result){
            			$(".modal-content").html(result);
        			}
        		});
    		});
		</script>
	<?php }} ?>