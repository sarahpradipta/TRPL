<?php
include('database.php');

$id = $_GET['id'];

//Menulis query sql
$sql = "DELETE FROM `pelajaran` WHERE `id`= $id";

//Pengecekan dan eksekusi query
if ($db->query($sql) === TRUE) {
    header('location:kelas3.php');
} else {
    echo "Hapus gagal";
}
