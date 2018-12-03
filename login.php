<?php
require_once 'database.php';

/* PROSES LOGIN */
if(isset($_POST['submit'])) {
   $username = $_POST['username'];
   $pass = $_POST['pass'];
   // $sql = mysqli_query($db, "SELECT * FROM users WHERE username = '$username' AND pass = '$pass'");

$sql = "SELECT * FROM users WHERE username = '$username' AND pass = '$pass'";
$query = mysqli_query($db,$sql);
$get = mysqli_fetch_array($query);
$level = $get['level'];

   if(mysqli_num_rows($query)>0) {
     if($level=="3"){
         $_SESSION['nama']=$get['nama'];
          $_SESSION['login']='admin';
.
          header("location:level3.php?id=$id");
      }else if($level=="1" && $status=="aktif" ){
          $_SESSION['id'] = $get['id'];
           $_SESSION['nama']=$get['nama'];

           header("location:level1.php?id=$id&username=$username");
       }
        else($level=="2" && $status=="aktif" );{
          $_SESSION['id'] = $get['id'];
           $_SESSION['nama']=$get['nama'];
               header("location:level2.php?id=$id&username=$username");
}
} else {
          header("location:index.php");
           // echo ('Gagal Masuk! Anda belum menerima verifikasi oleh admin');
   }
//    else{
//    header("location:index.php");
// }
?>
<?php
}
 ?>
