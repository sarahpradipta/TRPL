<?php
include('koneksi.php');

$id = $_GET['id_user'];

//Menulis query sql
$query = "DELETE FROM `user` WHERE `id_user`=" . $id;

//Pengecekan dan eksekusi query
if ($db->query($query) === TRUE) {
    header('location:tampilkan.php');
} else {
    echo "Hapus gagal";
}
