<?php 
	$ussername = $_GET['ussername'];
	$passq     = $_GET['passq'    ];
	$id        = $_GET['id'       ];
	$prosess   = $_GET['prosess'  ];
	
include "koneksi.php";

if ($prosess == "ubah"){
		$sql = "UPDATE user set ussername='$ussername' , pass='$passq' where iduser='$id' " ;	

$hasil = mysql_query($sql);
if(!$hasil){
	echo "Gagal Simpan , Silahkan Diulangi! </br>".mysql_error();
	echo "<input type='button' value='Kembali' onClick='self.history.back()'>";
	exit;
}
	header("location:./login.php");
}
?>
