<?php
include('database.php');

if (isset($_POST['submit'])) {
	$nama = $_POST['name'];
	$email = $_POST['email'];
	$alamat = $_POST['alamat'];
	$hp = $_POST['hp'];
	$username = $_POST['username'];
	$pass = $_POST['pass'];
	$level = $_POST['level'];

	$sql = "INSERT INTO `users` (`nama`, `email`, `alamat`, `hp`, `username`, `pass`, `level`)
  VALUES ( '$nama', '$email', '$alamat', '$hp', '$username', '$pass', '$level')";

  if($db -> query ($sql) === TRUE){
    header('location:level1.php');
  } else {
    echo "Pendaftaran Gagal";
  }
}
