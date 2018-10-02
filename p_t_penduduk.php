<?php
include "koneksi.php";

if
 (
	($_POST['nik']=="")or
	($_POST['nama']=="")or
	($_POST['tempat_lahir']=="")or
	($_POST['tanggal_lahir']=="")or
	($_POST['alamat']=="")or
	($_POST['jk']=="")or
	($_POST['agama']=="")or
	($_POST['id_kabu']=="")or
	($_POST['id_keca']=="")or
	($_POST['id_des']=="")
 )
 {
	echo"<script language='javascript'>
		alert('Data Belum Lengkap!');
		window.open('t_penduduk.php','_top');
		</script>";
 }
 else{

	$nik =$_POST['nik'];
	$nama =$_POST['nama'];
	$tempat_lahir =$_POST['tempat_lahir'];
	$tanggal_lahir =$_POST['tanggal_lahir'];
	$alamat =$_POST['alamat'];
	$jk =$_POST['jk'];
	$agama =$_POST['agama'];
 	$id_kabu =$_POST['id_kabu'];
 	$id_keca =$_POST['id_keca'];
 	$id_des =$_POST['id_des'];



$sql = "INSERT INTO penduduk
	(
		id_pen,
		nik,
		nama,
		tempat_lahir,
		tanggal_lahir,
		alamat,
		jk,
		agama,
		id_kabu,
		id_keca,
		id_des

		
	)
VALUES
	(
		null,
		'$nik',
		'$nama',
		'$tempat_lahir',
		'$tanggal_lahir',
		'$alamat',
		'$jk',
		'$agama',
		'$id_kabu',
		'$id_keca',
		'$id_des'

	
	)";
	
$hasil=mysql_query($sql);
	if($hasil){
		echo "<script language='javascript'>
		alert ('Proses Simpan Data Berhasil');
		window.open('d_penduduk.php','_top')
		</script>";
		
	}
	else{
		echo "<script language='javascript'>
		alert ('Proses Simpan Data Gagal');
		window.open('d_penduduk.php','_top')
		</script>";
	}
}
?>