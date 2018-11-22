<?php
include('database.php');

if (isset($_POST['submit'])) {
	$nama_pelajaran = $_POST['nama_pelajaran'];
	$deskripsi = $_POST['deskripsi'];
	$tentang = $_POST['tentang'];


	$sql = "INSERT INTO `pelajaran` (`nama_pelajaran`, `deskripsi`,`tentang`)
  VALUES ( '$nama_pelajaran', '$deskripsi', '$tentang')";

  if($db -> query ($sql) === TRUE){
    header('location:kelas3.php');
  } else {
    echo "Kelas gagal ditambahkan";
  }
}
