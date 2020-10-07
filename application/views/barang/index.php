<!DOCTYPE html>
<html>
<head>
	<title><?=$title?></title>
</head>
<body>
	<button><a href="<?= base_url('barang/tambah_barang') ?>">Tambah Barang</a></button>
	<table>
		<THEAD>
			<th>No</th>
			<th>Nama</th>
			<th>Stok</th>
			<th>Harga</th>
			<th>Aksi</th>
		</THEAD>
		<TBODY>
			<?php foreach ($barang as $b) {
			?>

			<tr>
				<td><?=$b->barang_id?></td>
				<td><?=$b->barang_nama?></td>
				<td><?=$b->barang_stok?></td>
				<td><?=$b->barang_harga?></td>
				<td><a href="<?=base_url('barang/edit_barang/'); echo $b->barang_id?>"><button>Edit</button></a></td>
				<td><a href="<?=base_url('barang/hapus_barang/'); echo $b->barang_id?>"><button>Hapus</button></a></td>
			</tr>
			<?php
			} ?>
		</TBODY>
	</table>
</body>
</html>