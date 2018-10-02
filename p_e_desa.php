<?php
include "koneksi.php";

$id=$_POST['id_desa'];
$nama_desa=$_POST['nama_desa'];
$kades=$_POST['kades'];
$jumlah_kk=$_POST['jumlah_kk'];
$id_katen=$_POST['id_katen'];
$id_ketan=$_POST['id_ketan'];
	

$hasil=mysql_query("update desa set nama_desa='$nama_desa', kades='$kades',  jumlah_kk='$jumlah_kk', id_katen='$id_katen', id_ketan='$id_ketan' where id_desa='$id'");


 
 if ($hasil)
{
echo "<script language='javascript'>
alert('Proses Ubah Data Berhasil');
window.open('d_desa.php?mod=d_desa','_top')
</script>";
}else{
echo "<script language='javascript'>
alert('Proses Ubah data gagal');
window.open('d_desa.php?mod=d_desa','_top')
</script>";
}

?>