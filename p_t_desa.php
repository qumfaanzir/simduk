<?php
include "koneksi.php";

if
 (
	($_POST['nama_desa']=="")or
	($_POST['kades']=="")or
	($_POST['jumlah_kk']=="")or
	($_POST['id_katen']=="")or
	($_POST['id_ketan']=="")

 )
 {
	echo"<script language='javascript'>
		alert('Data Belum Lengkap!');
		window.open('t_kecamatan.php','_top');
		</script>";
 }
 else{

	$nama_desa =$_POST['nama_desa'];
	$kades =$_POST['kades'];
	$jumlah_kk =$_POST['jumlah_kk'];
	$id_katen =$_POST['id_katen'];
	$id_ketan =$_POST['id_ketan'];


$sql = "INSERT INTO desa
	(
		id_desa,
		nama_desa,
		kades,
		jumlah_kk,
		id_katen,
		id_ketan
		
	)
VALUES
	(
		null,
		'$nama_desa',
		'$kades',
		'$jumlah_kk',
		'$id_katen',
		'$id_ketan'
	
	)";
	
$hasil=mysql_query($sql);
	if($hasil){
		echo "<script language='javascript'>
		alert ('Proses Simpan Data Berhasil');
		window.open('d_desa.php','_top')
		</script>";
		
	}
	else{
		echo "<script language='javascript'>
		alert ('Proses Simpan Data Gagal');
		window.open('d_desa.php','_top')
		</script>";
	}
}
?>