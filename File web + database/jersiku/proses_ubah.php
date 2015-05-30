<?php

 	$nama      = $_GET['nama'     ];
	$alamat    = $_GET['alamat'   ];
	$kodepos   = $_GET['kodepos'  ];
	$nohp      = $_GET['nohp'     ];
	$ussername = $_GET['ussername'];
	$pass      = $_GET['pass'     ];
	$id        = $_GET['id'       ];
	$prosess   = $_GET['prosess'  ];
	
include "koneksi.php";

if ($prosess == "UBAH"){
		$sql = "UPDATE user set nama='$nama' , alamat='$alamat' , kodepos='$kodepos' ,
		        nohp='$nohp' where iduser='$id' " ;	

$hasil = mysql_query($sql);
if(!$hasil){
	echo "Gagal Simpan , Silahkan Diulangi! </br>".mysql_error();
	echo "<input type='button' value='Kembali' onClick='self.history.back()'>";
	exit;
	}

header("location:./index1.php");
}



?>