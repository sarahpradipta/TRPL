<?php
include('database.php');

if (isset($_POST['submit'])) {
	$judulmateri = $_POST['judulmateri'];
	$isi = $_POST['isi'];
	$link = $_POST['link'];

	$sql = "INSERT INTO `materi` (`judul materi`, `isi`, `link`)
  VALUES ( '$judulmateri', '$isi', '$link')";

  if($db -> query ($sql) === TRUE){
    header('location:uploadmateri.php');
  } else {
    echo "Materi gagal di upload";
  }
}
