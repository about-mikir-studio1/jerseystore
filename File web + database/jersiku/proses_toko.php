<?php

	$toko      = $_POST ['toko'  ];
	$klub      = $_POST ['klub'  ];
	$liga	   = $_POST ['liga'  ];
	$ukuran    = $_POST ['ukuran'];
	$harga     = $_POST ['harga' ];
	$stok      = $_POST ['stok'  ];
	$nohp	   = $_POST ['nohp'  ];
	$proses    = $_POST ['proses'];

	$foto 	   = $_FILES ['foto']['name'    ];
	$tmpName   = $_FILES ['foto']['tmp_name'];
	$size      = $_FILES ['foto']['size'    ];
	$type	   = $_FILES ['foto']['type'    ];

	$maxsize         = 500000;
	$typeYgBolh		 = array ("image/jpeg","image/png","image/pjeg");

	$dirFoto         = "pict";
	if (!is_dir($dirFoto))
	    mkdir  ($dirFoto) ;
	$fileTujuanFoto = $dirFoto."/".$foto;


	$dirThumb         = "thumb";
	if (!is_dir($dirThumb))
	    mkdir($dirThumb) ;
	$fileTujuanThumb = $dirThumb."/".$foto;

	$dataValid="YA";

    if ($size > 0){
		if ($size > $maxsize) {
			echo "Ukuran File Terlalu Besar </br>";
			$dataValid="TIDAK";
		}
		if (!in_array($type, $typeYgBolh)) {
			echo "Type File Tidak Dikenal. . . .<br>";
			$dataValid="TIDAK";
		}
    }

	if (strlen(trim($toko))==0){
		echo"Nama Harus Diisi !! <br>";
		$dataValid = "TIDAK";
	}

	if (strlen(trim($klub)) ==0) {
		echo "Nama Klub Harus Diisi !! <br>";
		$dataValid = "TIDAK";
	}

	if (strlen(trim($liga))==0) {
		echo"Liga Harus Diisi !! <br>";
		$dataValid = "TIDAK";
	}

	if (strlen(trim($ukuran))==0) {
	    echo "Ukuran Baju Yang Tersedia !! <br>";
		$dataValid = "TIDAK";
	}

	if (strlen(trim($harga))==0) {
		echo "Harga Harus Diisi !!<br>";
		$dataValid = "TIDAK";
	}

	if (strlen(trim($stok))==0) {
		echo "Jumlah Stok Harus Diisi !!<br>";
		$dataValid = "TIDAK";
	}

	if (strlen(trim($nohp))==0) {
		echo "Nohp Harus Diisi !!<br>";
		$dataValid = "TIDAK";
	}

	if ($dataValid == "TIDAK") {
		echo "Masih Ada Kesalahan , Silahkan Perbaiki !! <br>";
		echo "<input type='button' value='Kembali' 
		      onClick='self.history.back()'>";
		      exit;
	}

	include "koneksi.php";

	if ($proses == "Simpan"){
		$sql = "insert into toko
				(namaToko,namaKlub,liga,ukuran,harga,stok,foto,nohptoko)
				values 
				('$toko','$klub','$liga','$ukuran','$harga','$stok','$foto','$nohp')";
	}

	$hasil = mysql_query($sql);
	if(!$hasil){
		echo "Gagal,Simpan Silahkan Diulanggi !!! <br>".mysql_error();
		echo "<input type='button' value='Kembali' onClick='self.history.back()'>";
		exit;
	}
	

	if ($size > 0) 
		$perUpload = TRUE;
	else
		$perUpload = FALSE;

	if ($perUpload) {
		if (!move_uploaded_file($tmpName, $fileTujuanFoto)) {
			echo "Gagal Upload Gambar. . . . <br>";
			exit;
	}
	else{
			buat_thumbnail($fileTujuanFoto,$fileTujuanThumb);
		}
	}
		echo "Data  Sudah Disimpan dan file berhasil diupload. .. .. . .!!!!!!<br>";

	function buat_thumbnail($file_src,$file_dst){
		list($w_src,$h_src,$type) = getImagesize($file_src);

		switch ($type) {
			case 1: //gif ==> jpg
				$img_src = imagecreatefromgif($file_src);
				break;
			case 2: //jpeg ==> jpg
				$img_src = imagecreatefromjpeg($file_src);
				break;
			
			case 3: //png ==> jpg
				$img_src = imagecreatefrompng($file_src); 
				break;
						}

		$thumb = 100 ;
		if ($w_src > $h_src) {
			$w_dst = $thumb ; 
			$h_dst = round($thumb / $w_src * $h_src);
							}
		else
		{
			$w_dst = round($thumb / $h_src * $w_src);
			$h_dst = $thumb;
		}

		$img_dst = imagecreatetruecolor($w_dst, $h_dst);

		imagecopyresampled($img_dst, $img_src, 0, 0, 0, 0, 
			$w_dst, $h_dst, $w_src, $h_src);
		imagejpeg($img_dst , $file_dst);
		imagedestroy($img_src);
		imagedestroy($img_dst);
	}   
	 header("location: proses_toko2.php");
?>