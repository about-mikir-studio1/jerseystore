<?php
error_reporting(E_ALL ^ E_DEPRECATED);
$host   = "localhost";
$user   = "root";
$pass   = "root";
$dbName = "jersey";

$kon = mysql_connect($host,$user,$pass);
if (!$kon)
	die("Gagal koneksi. . . .. . :v :v ");

$hasil = mysql_select_db($dbName);
	if(!$hasil) {
		$hasil = mysql_query("CREATE DATABASE $dbName");
		if (!$hasil)
			die ("GAGAL KONEKSI DATABASE. . . .  :v :v ");
		else
			$hasil = mysql_select_db($dbName);
			if (!$hasil) die ("Gagal koneksi database");
	}

//echo"KONEKSI DATABASE BERHASIL. . . . <br>";
$sqlUser = "create table if not exists user(
						iduser int(11) auto_increment not null primary key,
						nama varchar(15) not null,
						alamat varchar(15) not null,
						kodepos varchar(8) not null,
						nohp varchar(15) not null,
						ussername varchar(12) not null,
						pass varchar(11) not null
			             )";

$sqlAdmin = "create table if not exists admin(
						idadmin int(11) auto_increment not null primary key,
						ussername varchar(10) not null,
						pass int(10) not null
			             )";


$sqlToko = "create table if not exists toko(
						idtoko int(11) auto_increment not null primary key,
						namaToko varchar(15) not null,
						namaKlub varchar(15) not null,
						liga varchar(10) not null,
						ukuran varchar(8) not null,
						harga int(12) not null,
						stok int(11) not null,
						nohptoko varchar(15) not null,
						foto varchar(40) not null default ''
			             )";

mysql_query($sqlUser)  or die("Gagal Buat Tabel user");
mysql_query($sqlAdmin) or die("Gagal Buat Tabel admin");
mysql_query($sqlToko)  or die("Gagal Buat Tabel toko");
?>