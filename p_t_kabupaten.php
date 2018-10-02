<?php
include "koneksi.php";

if
 (
	($_POST['nama_kabupaten']=="")or

	($_POST['ibukota_kabupaten']=="")
 )
 {
	echo"<script language='javascript'>
		alert('Data Belum Lengkap!');
		window.open('t_kabupaten.php','_top');
		</script>";
 }
 else{

	$nama_kabupaten =$_POST['nama_kabupaten'];

	$ibukota_kabupaten =$_POST['ibukota_kabupaten'];


$sql = "INSERT INTO kabupaten
	(
		id_kabupaten,
		nama_kabupaten,
		ibukota_kabupaten

		
	)
VALUES
	(
		null,
		'$nama_kabupaten',

		'$ibukota_kabupaten'

	
	)";
	
$hasil=mysql_query($sql);
	if($hasil){
		echo "<script language='javascript'>
		alert ('Proses Simpan Data Berhasil');
		window.open('d_kabupaten.php','_top')
		</script>";
		
	}
	else{
		echo "<script language='javascript'>
		alert ('Proses Simpan Data Gagal');
		window.open('d_kabupaten.php','_top')
		</script>";
	}
}
?>