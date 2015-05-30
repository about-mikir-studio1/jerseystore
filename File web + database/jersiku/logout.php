<?php
session_start();
unset($_SESSION['ussername']);
?>
  <?php
	include "koneksi.php";
	$sql = "select*from toko";
	$hasil = mysql_query($sql);
	if (!$hasil)
		die("gagal query . . . muahahahahaha :v :v ".mysql_error());
?>
<html>
	<head>
		<title></title>
		<link rel="stylesheet" href="css/style.css">
	</head>

<body>
	 <div id="header">
				</div>
	<table border="0px">

	<!--header-->
	<tr>
		<td><img src="images/jerseyku.jpg"></td>
	</tr>
	<!--header-->

	<!--awal navigasi-->

	<tr>
		<td colspan='4'>
				
	    <nav>
		<ul>
			<li><a href="index.php">Beranda</a></li>
			<li><a href="#"> </a>
				<ul>
					<li><a href="#"> </a></li>
					<li><a href="#"> </a></li>
				
				</ul>
			</li>

		    <li>
		         <a href="tentang.php">FAQ</a>
	        </li>
		    <li>
		         <a href="#">Kontak</a>
				    <ul>
					   <li><a href="#">Blog</a></li>
						<li><a href="#">Twiter</a></li>
						  <li><a href="#">Facebook</a></li>
					   </ul>

		    </li>
			 <li>
		         <a href="login.php">Login</a>
	        </li>
			<li><form action="cari.php" method="post">
                  <input id='cari' type="text" name="liga" placeholder='Cari Berdasarkan Liga. . . .' /> 
                  <input id="tombol" type="submit" value='cari'>
                </form>
		   </li>
	    </ul>
 </nav>

   </td>
</tr>
</div>
	<!--akhir navigasi-->


<!--body artikel-->
<table border='1'>
<tr class='form'>
				<td><b>Foto</b></td>
				<td><b>Nama Klub</b></td>
				<td><b>Harga</b></td>
				<td><b>Stok</b></td>
				<td><b>Selengkapnya</b></td>
</tr>
<tr>
 <?php
	$no = 0;
	while ($row = mysql_fetch_row($hasil)) {
		echo "<tr>";
		echo "<td width='4'><a href ='pict/$row[8]'/>
		           <img src='thumb/$row[8]' />
		      </a></td>";
		echo "<td>".$row[2]."</td>";
		echo "<td>Rp.".$row[5]."</td>";
		echo "<td>".$row[6]." Pcs</td>";
		echo "<td>
				&nbsp;<a href='detail_barang.php?id=$row[0]'>   Lihat Detail </a>
		     </td>";
		echo "</tr>";
	}
 ?>
</tr>
</table>
	
<!--body artikel-->

<!--footer-->
<tr>
<td colspan='4'>
	  <div id="footer">
		 <p> copyright@2014 helloween all reserved </p>
		</div>
	</td>
</tr>
<!--footer-->
</table>
</body>
</html>