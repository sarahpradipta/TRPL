<?php

ob_start();
session_start();
include "database.php";

/* PROSES LOGIN */
if(isset($_POST['submit'])) {
   $username = $_POST['username'];
   $pass = $_POST['pass'];
   $sql = mysqli_query($db, "SELECT * FROM users WHERE username = '$username' AND pass = '$pass'");

   if(mysqli_num_rows($sql)>0) {
      $db = mysqli_fetch_assoc($sql);
      // $_SESSION['username'] = $username['username'];
      // $_SESSION['pass'] = $pass['pass'];
      // $_SESSION['level'] = $level['level'];
      $level = $db['level'];
      if ($level =="1") {
        header('location: level1.php');
   }else if ($level=="2") {
     header('location:level2.php');
   }else if($level=="3"){
     header('location:level3.php');
   } else{
      ?>
      <script language="JavaScript">
      alert('Username atau Password tidak sesuai. Silahkan diulang kembali!');
      document.location='index.php';
      </script>
         <?php
     }
   }else {
  header('location:index.php');
}}
?>
