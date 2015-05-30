<?php

	$namaToko     = $_GET['namaToko' ];
	$namaKlub     = $_GET['namaKlub' ];
	$liga   	  = $_GET['liga'     ];
	$ukuran       = $_GET['ukuran'   ];
	$harga 		  = $_GET['harga'    ];
	$stok         = $_GET['stok'     ];
	$id           = $_GET['id'       ];
	$proses       = $_GET['proses'   ];


	include"koneksi.php";
	if ($proses == "ubah"){
		$sql = "UPDATE toko set namaToko='$namaToko' , namaKlub='$namaKlub' , liga='$liga' ,
		        ukuran='$ukuran' , harga='$harga' , stok='$stok' where idtoko='$id' " ;	

$hasil = mysql_query($sql);
if(!$hasil){
	echo "Gagal Simpan , Silahkan Diulangi! </br>".mysql_error();
	echo "<input type='button' value='Kembali' onClick='self.history.back()'>";
	exit;
}
header("location:./riwayat.php");
}

?>