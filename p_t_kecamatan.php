<?php
include "koneksi.php";

if
 (
	($_POST['nama_kecamatan']=="")or
	($_POST['jumlah_desa']=="")or
	($_POST['id_kab']=="")
 )
 {
	echo"<script language='javascript'>
		alert('Data Belum Lengkap!');
		window.open('t_kecamatan.php','_top');
		</script>";
 }
 else{

	$nama_kecamatan =$_POST['nama_kecamatan'];
	$jumlah_desa =$_POST['jumlah_desa'];
	$id_kab =$_POST['id_kab'];



$sql = "INSERT INTO kecamatan
	(
		id_kecamatan,
		nama_kecamatan,
		jumlah_desa,
		id_kab

		
	)
VALUES
	(
		null,
		'$nama_kecamatan',
		'$jumlah_desa',
		'$id_kab'

	
	)";
	
$hasil=mysql_query($sql);
	if($hasil){
		echo "<script language='javascript'>
		alert ('Proses Simpan Data Berhasil');
		window.open('d_kecamatan.php','_top')
		</script>";
		
	}
	else{
		echo "<script language='javascript'>
		alert ('Proses Simpan Data Gagal');
		window.open('d_kecamatan.php','_top')
		</script>";
	}
}
?>