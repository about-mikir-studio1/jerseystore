<html>
	<head>
			<link rel="stylesheet" href="css/style4.css">
	</head>
	<body>
		<?php 
		session_start();
		if(!isset($_SESSION['ussername'])) {
		header('location:login.php'); }
		else { 
		$ussername = $_SESSION['ussername']; }
		require_once("koneksi.php");
		
		$sql	 = "select*from user where ussername = '$ussername' ";
		$hasil   = mysql_query($sql);
		$row = mysql_fetch_assoc($hasil);
		if (!$hasil)
			die("gagal query . . . ".mysql_error());
		?>
		<div id="header">
			<h2>.: Form Ubah Data Profile:.</h2><hr>
		</div>
<form action='proses_ubah.php' method='get'>
	<table>
		<tr>
			<?php echo "<td>Nama Penguna</td>"."<td><input name='nama' class='masuk' type='text' value='".$row['nama']."'>"."</td>";?>
		</tr>
		<tr>
			<?php echo "<td>Alamat</td>"."<td><input name='alamat' class='masuk' type='text' value='".$row['alamat']."'>"."</td>";?>
		</tr>
		<tr>
			<?php echo "<td>Kode Pos</td>"."<td><input name='kodepos' class='masuk' type='text' value='".$row['kodepos']."'>"."</td>";?>
		</tr>
		<tr>
			<?php echo "<td>Nama</td>"."<td><input name='nohp' class='masuk' type='text' value='".$row['nohp']."'>"."</td>";?>
		</tr>
		<tr>
			<?php echo "<td><input name='ussername' class='masuk' type='hidden' value='".$row['ussername']."'>"."</td>";?>
		</tr>
		<tr>
			<?php echo "<td><input name='pass' class='masuk' type='hidden' value='".$row['pass']."'>"."</td>";?>
		</tr>
		<tr>
			<?php echo "<td><input name='id' type='hidden' value='".$row['iduser']."'>"."</td>";?>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td><input id='tombol1' type='submit' value="UBAH" name="prosess">
				
			</td>
		</tr>
		
		<tr>
			<td colspan='3'>Ubah Usser Dan Passwd<br><a href="ubah_user.php">
			<input id='tombol1' type='button' value='USSER & PASS' >
			<a href="index1.php">
				<input id='tombol1' type='button' value='KEMBALI' onClick='self.history.back()'>
			</a>
		</td>
</tr>

	</table>	
</form>
<div id="footer">
	<h2><hr> copyright@2014 helloween all reserved </h2>
	</div>
	</body>
</html>