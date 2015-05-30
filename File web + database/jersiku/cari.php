<html>
   
   	<head>
   		<link rel="stylesheet" href="css/style4.css">
   	</head>
   	<body>
<?php

$jbuku = " ";
if (isset($_POST['liga']))
	$liga = $_POST['liga'];

if (strlen(trim($liga))==0) {
		 header("location: index.php");
	}

	include "koneksi.php";
	$sql = "select*from toko where liga like '%".$liga."%'
			order by idtoko desc";

	$hasil = mysql_query($sql);

	if (!$hasil)
		die("gagal query . . . muahahahahaha :v :v ".mysql_error());
?>

<div id="header" >
	<h2>.: Detail Informasi :.</h2><hr>
</div>
<table border='1'>
<tr class='form'>
				<td><b>Foto</b></td>
				<td><b>Nama Toko</b></td>
				<td><b>Nama Klub</b></td>
				<td><b>Liga</b></td>
				<td><b>Selengkapnya</b></td>
</tr>
<tr>
 <?php
	$no = 0;
	while ($row = mysql_fetch_row($hasil)) {
		echo "<tr>";
		echo "<td width='4'><a href ='pict/".$row[8]." '/>
		           <img src='thumb/".$row[8]."' />
		      </a></td>";
		echo "<td>".$row[1]."</td>";
		echo "<td width='100'>".$row[2]."</td>";
		echo "<td width='100'>".$row[3]."</td>";
		echo "<td>&nbsp;
				&nbsp;<a href=\"detail_barang.php?id=$row[0]\">   Lihat Detail </a>
		     </td>";
		echo "</tr>";
	}
 ?>
</tr>
<tr>
	<td>
		 <input type='button' value='KEMBALI' onClick='self.history.back()'>
	</td>
</tr>
</table>
</table>
<div id="footer">
	<h2><hr> .</h2>
	</div>
</body>
</html>