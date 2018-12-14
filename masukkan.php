<?php
include('database.php');

if (isset($_POST['submit'])) {
	$judul_materi = $_POST['judul_materi'];
	$isi = $_POST['isi'];
	$link = $_POST['link'];
	// $id_pelajaran = $_GET['id_pelajaran'];
	$id_pelajaran = $_POST['id'];

	$sql = "INSERT INTO `materi` (`id_pelajaran`,`judul_materi`, `isi`, `link`)
  VALUES ( '$id_pelajaran','$judul_materi', '$isi', '$link')";

  if($db -> query ($sql) === TRUE){
    header("location:uploadmateri.php?id=$id_pelajaran");
		// header(uploadmateri.php?id=.$id_pelajaran.);
		// require_once(uploadmateri.php?id=.$id_pelajaran.);

  } else {
    echo "Materi gagal di upload";
  }
}
