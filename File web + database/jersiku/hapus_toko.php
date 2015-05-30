<?php
	include"koneksi.php";
	$id=$_GET['id'];
	$hapus ="DELETE from toko where idtoko='$id' ";
	$hasil =mysql_query($hapus);
	if ($hasil) {
		echo "Data Berhasil Dihapus";
	
	}
	else
	{
		echo "gagal hapus data";
		
	}
	header("location:./riwayat.php");

?>
