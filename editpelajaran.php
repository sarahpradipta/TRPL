<?php
include('database.php');
$nama_pelajaran = $_POST['nama_pelajaran'];
$deskripsi = $_POST['deskripsi'];
$tentang = $_POST['tentang'];

$id = $_POST['id'];
//Menulis query sql
$sql = "UPDATE `pelajaran` SET
`nama_pelajaran`='".$nama_pelajaran. "',`deskripsi`='".$deskripsi. "',
`tentang`='".$tentang. "' WHERE `id`=".$id;
//Pengecekan dan eksekusi query
if ($db->query($sql) === TRUE) {
    // echo "Insert berhasil";
    header('location:kelas3.php');
} else {
    echo "Insert gagal";
}
