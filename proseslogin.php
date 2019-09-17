<?php
   session_start();
   require_once("koneksi.php");
   $username = $_POST['username'];
   $pass = md5($_POST['password']);   
   $sql = "SELECT * FROM user WHERE username = '$username'";
   $query = $db->query($sql);
   $hasil = $query->fetch_assoc();
   if($query->num_rows == 0) {
     echo "<div align='center'>Username salah! <a href='login.php'> Back </a> Untuk login kembali</div>";
   } else {
     if($pass <> $hasil['password']) {
       echo "<div align='center'>Password salah! <a href='login.php'> Back </a> Untuk login kembali</div>";
     } else {
       $_SESSION['username'] = $hasil['username'];
       header('location:index.php');
       
     }
   }
   
?>
