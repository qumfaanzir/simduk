<?php
require "koneksi.php";

	$id=$_GET['id'];
	
	$sql="DELETE from penduduk WHERE id_pen ='$id'";
	$hasil=mysql_query($sql);
 
 if($hasil){
	echo"<script language='javascript'>
		alert('Proses Hapus Data Berhasil');
		window.open('d_penduduk.php','_top');
		</script>";
 }
 else{		
	echo "<script language='javascript'>
		alert ('Proses Hapus Data Gagal);
		window.open('d_penduduk.php','_top')
		</script>";
	}
?>