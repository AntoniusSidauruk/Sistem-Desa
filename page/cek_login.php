<?php

	session_start();
	include "../config/koneksi.php";

	$username = $_POST['username'];
	$password = sha1($_POST['password']);

	$query = "SELECT * FROM user WHERE username='$username' AND password='$password'";
	$con = mysqli_query($con,$query);
	$cek = mysqli_num_rows($con);

	


	if ($cek > 0){

		$data = mysqli_fetch_assoc($con);
		if($data['level'] == "admin"){
			$_SESSION['username'] = $username;
			$_SESSION['level'] = "admin";
			header("location:../index.php");
		}else if($data['level'] == "rt"){
			$_SESSION['username'] = $username;
			$_SESSION['level'] = "rt"; 
			header("location:../index.php");
		}else{
			header("location:../login.php?pesan=gagal");
		}
	}else{
		header("location:../login.php?pesan=gagal");
	}