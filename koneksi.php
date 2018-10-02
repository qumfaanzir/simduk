<?php
mysql_connect("localhost", "root", "")
or die(mysql_error());
//echo "Terkoneksi dengan MySQL <br />";

mysql_select_db("sik")
or die(mysql_error());
//echo "Koneksi database berhasil <br />";
?>