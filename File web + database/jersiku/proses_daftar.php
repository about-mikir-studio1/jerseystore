<?php
	$nama      = $_GET['nama'];
	$alamat    = $_GET['alamat'];
	$kodepos   = $_GET['kodepos'];
	$nohp      = $_GET['nohp'];
	$ussername = $_GET['ussername'];
	$passw 	   = $_GET['passw'];
	$proses    = $_GET['proses'];

	$dataValid="YA";

	if (strlen(trim($nama))==0){
		echo"Nama Harus Diisi !! <br>";
		$dataValid = "TIDAK";
	}

	if (strlen(trim($alamat)) ==0) {
		echo "Alamat Harus Diisi !! <br>";
		$dataValid = "TIDAK";
	}

	if (strlen(trim($kodepos))==0) {
		echo"Kode Pos Harus Diisi !! <br>";
		$dataValid = "TIDAK";
	}

	if (strlen(trim($nohp))==0) {
	    echo "Nomer HP Harus Diisi !! <br>";
		$dataValid = "TIDAK";
	}

	if (strlen(trim($ussername))==0) {
		echo "Ussername Harus Diisi !!<br>";
		$dataValid = "TIDAK";
	}

	if (strlen(trim($passw))==0) {
		echo "Password Harus Diisi !!<br>";
		$dataValid = "TIDAK";
	}

	if ($dataValid == "TIDAK") {
		echo "Masih Ada Kesalahan , Silahkan Perbaiki !! <br>";
		echo "<input type='button' value='Kembali' 
		      onClick='self.history.back()'>";
		      exit;
	}

	

	include "koneksi.php";

	
   $cekuser = mysql_query("SELECT * FROM user WHERE ussername = '$ussername'");
	if(mysql_num_rows($cekuser) <> 0) {
 	echo "<center><h3>Username Sudah Terdaftar!</h3>
    <a href='daftar.php'>Kembali</a></center>";
  	 }

    else if ($proses == "Daftar"){
		$sql = "insert into user
				(nama,alamat,kodepos,nohp,ussername,pass)
				   values 
				('$nama','$alamat','$kodepos','$nohp','$ussername','$passw')";
	  }

		$hasil = mysql_query($sql);
		    if(!$hasil){
		     	echo "Gagal,Simpan Silahkan Diulanggi !!! <br>".mysql_error();
				echo "<input type='button' value='Kembali' onClick='self.history.back()'>";
				exit;
				}
			else {
				
				header("location: login.php");
			}
?>