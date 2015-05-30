<html>
   
   	<head>
   		<link rel="stylesheet" href="css/style4.css">
   	</head>
   	<body>

           

<div id="header">
	<h2>.: INPUT JERSEY :.</h2><hr>
</div>
<form action='proses_toko.php' method='post' enctype='multipart/form-data'>
	<table>
		<tr>
			<td>
				Nama Toko      
			</td>
			<td>
				<input class="masuk" type='text' placeholder='Nama Toko...' name='toko' maxlength='40' size='40'>
			</td>
		</tr>
		<tr>
			<td>
				Nama Klub
			</td>
			<td>
				<input class="masuk" type='text' placeholder='Nama Klub...' name='klub' maxlength='40' size='40'>
			</td>
		</tr>
		<tr>
			<td>
				Liga
			</td>
			<td>.
				<input class="masuk" type='text' placeholder='Liga Lokal atau NonLokal...' name='liga' maxlength='40' size='40'>
			</td>
		</tr>
		<tr>
			<td>
				Ukuran
			</td>
			<td>
				<input class="masuk" type='text' placeholder='Ukuran S / M / L / XL...' name='ukuran' maxlength='40' size='40'>
			</td>
		</tr>
		<tr>
			<td>
				Harga
			</td>
			<td>
				<input class="masuk" type='text' placeholder='harga...' name='harga' maxlength='11' size='10'>
			</td>
		</tr>
		<tr>
			<td>
				Stock
			</td>
			<td>
				<input class="masuk" type='text' placeholder='Stok..' name='stok' maxlength='11' size='10'>
			</td>
		</tr>
		<tr>
			<td>
				No.Telp.Toko
			</td>
			<td>
				<input class="masuk" type='text' placeholder='Nohptoko..' name='nohp' maxlength='11' size='10'>
			</td>
		</tr>
		<tr>
			<td>
				Foto Sampul
			</td>
			<td>
				<input id="tombol1"  type='file' name='foto' size='50'>
			</td>
		</tr>
	</table>
	<hr>
	<hr>
	<input id="tombol" type='submit' value='Simpan' name='proses'>
	<input id="tombol" type='reset' value='Hapus' name='reset'><br>
	<a href="index1.php"><input id="tombol" type='button' value='Kembali' ></a>
	<a href ='Riwayat.php'><input id='tombol' type='button' value='Lihat' ></a>

</form>

<div id="footer">
	<h2><hr>   </h2>
	</div>
</body>
</html>