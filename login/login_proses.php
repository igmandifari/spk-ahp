<?php
session_start();
include"conn.php";
$password=md5($_POST['password']);
$tampil=mysqli_query($koneksi,"SELECT * FROM users WHERE name='$_POST[name]' AND password='$password'");
$data=mysqli_fetch_array($tampil);

if (!empty($data['name'])) {
	$_SESSION['name']=$data['name'];
	$_SESSION['password']=$data['password'];
	header('Location:../index.php');
}else{
	echo "<script>alert('Login Gagal Username dan Password Tidak Cocok');
	windows.location = 'login_form.php'</script>";
}

?>