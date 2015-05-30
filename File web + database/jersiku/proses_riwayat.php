<html>
		<head>
			<title></title>
			<link rel="stylesheet" href="css/style4.css">
		</head>
		<body>
			<div id="header">
	<h2>.</h2><hr>
</div>
		<form>
			<table border='1'>
				<tr>
					<td align='center'>Foto</td>
					<td>Nama Toko</td>
					<td>Nama Klub</td>
					<td width='4'>Liga</td>
					<td>Ukuran</td>
					<td>Harga</td>
					<td>Stock</td>
					<td>No.Telp Toko</td>
					<td colspan='4' align='center'>Keterangan</td>
				</tr>
				<?php

$toko = " ";
if (isset($_POST['toko']))
	$toko = $_POST['toko'];

if (strlen(trim($toko))==0){
		header("location: Riwayat.php");
	}

 
	include "koneksi.php";
	$sql = "select*from toko where namaToko like '".$toko."%'
			order by idtoko ";


	$hasil = mysql_query($sql);

	if (!$hasil)
		die("gagal query . . . muahahahahaha :v :v ".mysql_error());


		
	
	while ($row = mysql_fetch_row($hasil)) {
		echo "<tr>
				<td> <a href ='pict/ $row[8] '/>
		           <img src='thumb/$row[8]' width='100' />
		      	</a> </td>
				<td>$row[1]</td>
				<td>$row[2]</td>
				<td>$row[3]</td>
				<td>$row[4]</td>
				<td>$row[5]</td>
				<td>$row[6]</td>
				<td>$row[7]</td>
				
				<td>&nbsp;<a href='ubah_toko.php?id=$row[0]'>Ubah || </a>
				     &nbsp;<a href='hapus_toko.php?id=$row[0]'>Hapus</a></td>
			</tr>";
	}
 ?>
			</table>
		</form>
		<div id="footer">
	<h2>   </h2><hr>
</div>
	</body>
</html>