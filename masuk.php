<?php 
include 'koneksi.php';
 
$username = $_POST['username'];
$password = $_POST['password'];
$query = "select * from user where username='$username' and password='$password'";
 
$query = mysqli_query($conn,$query);
$cek = mysqli_num_rows($query);
// print_r($cek);die();
 
if($cek > 0){
	session_start();
	$_SESSION['username'] = $username;
	$_SESSION['status'] = 'login';
	header("location:isi_data.php");
}else{
	header("location:login.php"); 
}