<?php
include('database.php');

if (isset($_POST['submit'])) {
	$nama = $_POST['nama'];
	$email = $_POST['email'];
	$alamat = $_POST['alamat'];
	$hp = $_POST['hp'];
	$username = $_POST['username'];
	$pass = $_POST['pass'];


	$sql = "INSERT INTO `users` (`nama`, `email`, `alamat`, `hp`, `username`, `pass`, `level`)
  VALUES ( '$nama', '$email', '$alamat', '$hp', '$username', '$pass', '1')";

  if($db -> query ($sql) === TRUE){
    header('location:index.php');
  } else {
    echo "Pendaftaran Gagal";
  }
}
