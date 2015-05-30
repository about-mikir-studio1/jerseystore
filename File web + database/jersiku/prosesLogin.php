<?php
	session_start();
	require_once("koneksi.php");
		$ussername = $_GET['ussername'];
		$pass      = $_GET['password'];
		$cekuser   = mysql_query("SELECT * FROM user WHERE ussername = '$ussername'");
		$jumlah    = mysql_num_rows($cekuser);
		$hasil     = mysql_fetch_array($cekuser);

if($jumlah == 0) {
	echo "Username Belum Terdaftar Silahkan Daftar Disini !!!<br/>";
	echo "<a href='daftar.php'>Daftar</a>";
} 
else {
	   if($pass <> $hasil['pass']) {
			echo "Password Salah!<br/>";
			
		    header('location:login.php');
    	} 
    else {
			$_SESSION['ussername'] = $hasil['ussername'];
    		header('location:./index1.php');
    	}
	}
?>