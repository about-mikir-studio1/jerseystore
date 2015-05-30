 <?php
	session_start();
	if(!isset($_SESSION['ussername'])) {
		header('location:login.php'); }
	else { 
		$ussername = $_SESSION['ussername']; }
		require_once("koneksi.php");
	$query = mysql_query("SELECT * FROM user WHERE ussername = '$ussername'");
	$hasil = mysql_fetch_array($query);

	include "koneksi.php";
	$sql = "select*from user where ussername = '$ussername' ";
	$hasil = mysql_query($sql);
	if (!$hasil)
		die("gagal query . . . ".mysql_error());
?>
<html>
	<head>
		<title></title>
		<link rel="stylesheet" href='css/style.css'>
	</head>

<body>
	<table border="0px">

	<!--header-->
	<tr>
		<td><img src="images/jerseyku.jpg"></td>
	</tr>
	<!--header-->

	<!--awal navigasi-->

	<tr>
		<td colspan="4">
				
	    <nav>
		<ul>
			<li><a href='index1.php'>Home</a></li>
			<li><a href="#">Liga</a>
				<ul>
					<li><a href="#">Inggris</a></li>
					<li><a href="#">Italia</a></li>
				
				</ul>
			</li>

		    <li>
		         <a href="Riwayat.php">Riwayat</a>
	        </li>
		    <li>
		         <a href="form_toko.php">Buat Toko</a>
				    

		    </li>
			 <li>
		         <a href="logout.php"></a>
	        </li>
			 <li>
		         <a href="logout.php"> </a>
	        </li>
	        <li>
		         <a href="logout.php"> Loguot </a>
	        </li>
	    </ul>
 </nav>

   </td>
</tr>
</div>
	<!--akhir navigasi-->


<!--body artikel-->
<tr>
    <td >
    	<table class='profil' border="1" align='left'>
				<?php
					$no = 0;
					while ($row = mysql_fetch_assoc($hasil)) {
					echo "<tr><td colspan='3' align='center'>.: Profile Anda :.</td></tr>";
					echo "<tr>";
					echo "<td width='3'>Nama</td>"."<td height='15'>".$row['nama']."</td>";
					echo "</tr>";
					echo "<tr>";
					echo "<td>Alamat</td>"."<td>".$row['alamat']."</td>";
					echo "</tr>";
					echo "<tr>";
					echo "<td>kode Pos</td>"."<td>".$row['kodepos']."</td>";
					echo "</tr>";
					echo "<tr>";
					echo "<td>No.Hp</td>"."<td>".$row['nohp']."</td>";
					echo "</tr>";
					echo "<tr>";
					echo "<td>Ussername</td>"."<td>".$row['ussername']."</td>";
					echo "</tr>";
					echo "<tr>";
					echo "<td>Password</td>"."<td>".$row['pass']."</td>";
					echo "</tr>";
					echo "<tr>";
					echo "<td colspan='2'><a href='ubah.php'>Ubah Profile Anda</a></td>";
					echo "</tr>";
					}
 				?>
		</table>
    </td>
    <td>
    	<table class='profil' border='1'>
    		<tr>
    			<td align='center'>.: Foto Profil :.</td>
    		</tr>
    		<tr>
    			<td class='foto'></td>
    		<tr>
    		<tr>
    				 <?php
						require_once("koneksi.php");
						$query = mysql_query("SELECT * FROM user WHERE ussername = '$ussername'");
						$hasil = mysql_fetch_array($query);

						include "koneksi.php";
						$sql = "select*from user where ussername = '$ussername' ";
						$hasil = mysql_query($sql);
						if (!$hasil)
						die("gagal query . . . ".mysql_error());
					?>
    				<?php
						$no = 0;
						while ($row = mysql_fetch_assoc($hasil)) {
							echo "<td align='center'>Ussername : ".$row['ussername']."</td>";	
					    }
 					?>		
    		</tr>
    	</table>
    	
    </td>
    
</tr>
	
<!--body artikel-->

<!--footer-->
<tr>
<td colspan='4'>
	  <div id="footer">
		 <p> </p>
		</div>
	</td>
</tr>
<!--footer-->
</table>
</body>
</html>