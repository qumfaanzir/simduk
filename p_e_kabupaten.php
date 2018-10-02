<?php
include "koneksi.php";

$id=$_POST['id_kabupaten'];
$nama_kabupaten=$_POST['nama_kabupaten'];

$ibukota_kabupaten=$_POST['ibukota_kabupaten'];

	

$hasil=mysql_query("update kabupaten set nama_kabupaten='$nama_kabupaten',  ibukota_kabupaten='$ibukota_kabupaten' where 
					id_kabupaten='$id'");


 
 if ($hasil)
{
echo "<script language='javascript'>
alert('Proses Ubah Data Berhasil');
window.open('d_kabupaten.php?mod=d_kabupaten','_top')
</script>";
}else{
echo "<script language='javascript'>
alert('Proses Ubah data gagal');
window.open('d_kabupaten.php?mod=d_kabupaten','_top')
</script>";
}

?>