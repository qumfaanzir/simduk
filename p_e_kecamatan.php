<?php
include "koneksi.php";

$id=$_POST['id_kecamatan'];
$nama_kecamatan=$_POST['nama_kecamatan'];
$jumlah_desa=$_POST['jumlah_desa'];
$id_kab=$_POST['id_kab'];
	

$hasil=mysql_query("update kecamatan set nama_kecamatan='$nama_kecamatan',  jumlah_desa='$jumlah_desa', id_kab='$id_kab' where id_kecamatan='$id'");


 
 if ($hasil)
{
echo "<script language='javascript'>
alert('Proses Ubah Data Berhasil');
window.open('d_kecamatan.php?mod=d_kecamatan','_top')
</script>";
}else{
echo "<script language='javascript'>
alert('Proses Ubah data gagal');
window.open('d_kecamatan.php?mod=d_kecamatan','_top')
</script>";
}

?>