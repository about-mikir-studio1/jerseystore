<html>
   
   	<head>
   		<link rel="stylesheet" href="css/style4.css">
   	</head>
   	<body>

<?php
	
	$id    = $_GET['id'];
	include "koneksi.php";
	$sql   = "select*from toko where  idtoko = '$id' ";


	$hasil = mysql_query($sql);
	if (!$hasil)
		die("gagal query . . . muahahahahaha :v :v ".mysql_error());

?>
<table border="1">
</table>
<div id="header">
	<h2>.: Detail Informasi :.</h2><hr>
</div>
<?php
	$no = 0;
	while ($row = mysql_fetch_assoc($hasil)) {
	echo "<table border='2' align='center'>
	    	<tr>
				<td align='center' colspan='3'> 
				<img src='thumb/"  .$row['foto']."' width='100' height='100'/></td>				
			</tr>
				<tr>
					<td>Nama Toko</td>
					<td width='10'>".$row['namaToko']."</td>
				</tr>
					<tr>
						<td>Nama Klub</td>
						<td  width='10'>".$row['namaKlub']."</td>
					</tr>
						<tr>
							<td>Liga</td>
							<td  width='10'>".$row['liga']."</td>
						</tr>
							<tr>
								<td>Ukuran</td>
								<td  width='10'>".$row['ukuran']."</td>
							</tr>
								<tr>
									<td>Harga</td>
									<td  width='10'>".$row['harga']."</td>
							</tr>
								<tr>
									<td>Stok</td>
									<td  width='10'>".$row['stok']."</td>
								</tr>
									<tr>
										<td>No.Telepon Toko</td>
										<td  width='200'>".$row['nohptoko']."</td>
									</tr>
										<tr>
											<td colspan='2'><a href ='index.php'><input id='tombol' type='button' value='kembali' ></a>
											</td>
										</tr>
	     </table>";
	  }
?>
<div id="footer">
	<h2><hr> .</h2>
	</div>
</body>
</html>