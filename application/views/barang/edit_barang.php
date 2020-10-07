<!DOCTYPE html>
<html>
<head>
	<title><?=$title?></title>
</head>
<body>
	<form method="POST">
		<?php foreach ($barang as $b) {
			# code...
		} ?>
		<input type="" name="kode_barang" placeholder="Kode Barang" value="<?=$b->barang_id?>">
		<input type="" name="nama_barang" placeholder="Nama Barang" value="<?=$b->barang_nama?>">
		<input type="" name="stok_barang" placeholder="Stok Barang" value="<?=$b->barang_stok?>">
		<input type="" name="harga_barang" placeholder="Harga Barang" value="<?=$b->barang_harga?>">
		<input type="submit" name="submit" value="SUBMIT">
	</form>
</body>
</html>