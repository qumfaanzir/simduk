<?php
include ("koneksi.php");
date_default_timezone_set('Asia/Jakarta');

session_start();

$username = $_POST['username'];
$password = $_POST['password'];

$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);

if (empty($username) && empty($password)) {
	header('location:index.php?error1');
	break;
} else if (empty($username)) {
	header('location:index.php?error=2');
	break;
} else if (empty($password)) {
	header('location:index.php?error=3');
	break;
}

$q = mysql_query("select * from admin where username='$username' and password='$password'");
$row = mysql_fetch_array ($q);

if (mysql_num_rows($q) == 1) {
    $_SESSION['user_id'] = $row['user_id'];
	$_SESSION['username'] = $username;
	$_SESSION['fullname'] = $row['fullname'];
    $_SESSION['gambar'] = $row['gambar'];	

	header('location:utama.php');
} else {
	header('location:index.php?error=4');
}
?>