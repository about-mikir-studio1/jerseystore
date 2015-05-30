
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
			<h2>.: Form Ubah Data Ussername Dan Password :.</h2><hr>
		</div>
<form action='proses_ubah_user.php' method='get'>
	<table>
		<tr>
			<?php echo "<td>Ussername :</td>"."<td><input class='masuk' name='ussername' type='text' value='".$row['ussername']."'>"."</td>";?>
		</tr>
		<tr>
			<?php echo "<td>Password :</td>"."<td><input class='masuk' name='passq' type='text' value='".$row['pass']."'>"."</td>";?>
		</tr>
		<tr>
			<?php echo "<td><input name='id' type='hidden' value='".$row['iduser']."'>"."</td>";?>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td><input id='tombol' type='submit' value="ubah" name="prosess">
				<input id='tombol' type='button' value='kembali' onClick='self.history.back()'></td>
			
			<a align='center'>
				"Jika Anda Menggubah Ussername Dan Password Maka Harus Login Ulang Demi Keamanan Data"</a>
	</table>	
</form>
<div id="footer">
	<h2><hr> .</h2>
	</div>
	</body>
</html>
