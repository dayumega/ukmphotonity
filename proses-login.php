<?php

include ('koneksi.php');

if(isset($_POST['kirim'])){

	$user 		= $_POST['user'];
	$pass		= md5($_POST['pass']);


	$login = mysqli_query($conn, "SELECT * FROM user WHERE username='$user' AND password='$pass'") or die(mysqli_error($conn));


	$rows = mysqli_num_rows($login);

	if ($rows==1) {
		# code...
		$_SESSION['username'] = $user;
		header("location:index.php");

	}else{

		echo "<script>alert('login gagal!');window.location='login.php';</script>";
	}

}

?>