<?php
include('database.php');
$nama = $_POST['nama'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];
$hp = $_POST['hp'];
$username = $_POST['username'];
$pass = $_POST['pass'];

$id = $_POST['id'];
//Menulis query sql
$sql = "UPDATE `users` SET
`nama`='".$nama. "',`email`='".$email. "',
`alamat`='".$alamat. "', `hp`='".$hp. "',
`username`='".$username. "', `pass`='".$pass. "'
 WHERE `id`=".$id;
//Pengecekan dan eksekusi query
if ($db->query($sql) === TRUE) {
    // echo "Insert berhasil";
    header('location:pelajar3.php');
} else {
    echo "Insert gagal";
  }
