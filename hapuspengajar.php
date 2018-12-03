<?php
include('database.php');

$id = $_GET['id'];

//Menulis query sql
$sql = "DELETE FROM `users` WHERE `id`=" . $id;

//Pengecekan dan eksekusi query
if ($db->query($sql) === TRUE) {
    header('location:pengajar3.php');
} else {
    echo "Hapus gagal";
}
