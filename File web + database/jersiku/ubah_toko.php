<html>
	<head>
		<link rel="stylesheet" href="css/style4.css">
	</head>
	<body>
		<?php 
		
		include"koneksi.php";
		$id=$_GET['id'];
		$sql	 = "select * from toko  where idtoko = '$id' ";
		$hasil   = mysql_query($sql);
		$row = mysql_fetch_row($hasil);
		if (!$hasil)
			die("gagal query . . . ".mysql_error());
	?>
	<div id="header">
	<h2>.: Ubah Data Toko :.</h2><hr>
</div>
<form action='proses_ubah_toko.php' method='get'>
	<table>
		<tr>
			<?php echo "<td>Nama Toko Buku</td>"."<td><input class='masuk' name='namaToko' type='text' value='".$row[1]."'>"."</td>";?>
		</tr>
		<tr>
			<?php echo "<td>Nama Klub</td>"."<td><input class='masuk' name='namaKlub' type='text' value='".$row[2]."'>"."</td>";?>
		</tr>
		<tr>
			<?php echo "<td>Liga</td>"."<td><input class='masuk' name='liga' type='text' value='".$row[3]."'>"."</td>";?>
		</tr>
		<tr>
			<?php echo "<td>Ukuran</td>"."<td><input class='masuk' name='ukuran' type='text' value='".$row[4]."'>"."</td>";?>
		</tr>
		<tr>
			<?php echo "<td>Harga</td>"."<td><input class='masuk' name='harga' type='text' value='".$row[5]."'>"."</td>";?>
		</tr >
		<tr>
			<?php echo "<td>Stok</td>"."<td><input class='masuk' name='stok' type='text' value='".$row[6]."'>"."</td>";?>
		</tr>
		
		<tr>
			<td>
			 <?php echo "<input  name='id' type='hidden' value='".$row[0]."'>"."</td>";?> </td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td><input id='tombol' type='submit' value="ubah" name="proses"></td>
		</tr>
		
	</table>	
</form>
<div id="footer">
	<h2>.</h2><hr>
</div>
	</body>
</html>