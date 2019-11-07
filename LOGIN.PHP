 <?php
        session_start();
        if(isset($_SESSION['username'])) {
        header('location:index.php'); }

        require_once("koneksi.php");

        if(isset($_GET['logout'])){
          echo '<script>alert("Berhasil Logout.....!!!")</script>';
        }
        if(isset($_GET['login'])){
          echo '<script>alert("Silahkan Login terlebih dahulu.....!!!")</script>';
        }
        ?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
  <link rel="shortcut icon" type="icon" href="back 1.jpg">


    
    

	</head>

<style type="text/css">
body{
 background: #95a5a6;
 margin-right: 20%;
 margin-left: 20%;
 

}

.login-background{
 
 font-family: arial;
 background: white;
 padding: 10px;
 box-shadow: 0px 0px 15px #222;
 border-radius: 3px;
 width: 300px;
 color: #999;
 height: auto;
 margin: 50px auto;
 text-align: center;

}
input[type="text"],input[type="password"]{
  border: none;
 border-bottom: 1px solid #bdc3c7;
 margin-bottom: 15px;
 color: black;
 width: 100%;
 padding: 15px 0px;
 background: none;
 padding-left: 1.8em;

}


input[type="submit"]{
 background: #2ecc71;
 color: black;
 border-radius: 3px;
 padding: 15px;
 width: 100%;
 border: none;
}
.img-logo{
 height: 100px;
 width: 100px;
}

a,a:hover,a:visited,a:active{
 text-decoration: none;
 color: #999;
}




</style>

<body>
	<div class="login-background">
     <div class="login-header">
     <img src="logo.png" class="img-logo">
     <p>ADMIN</p>      
    </div>

    <div class="login-body">
        <form action="proseslogin.php" method="post">
        <input name="username" placeholder=" Masukkan Username" type="text"></td></tr>
        <input name="password" placeholder=" Masukkan Password" type="password"></td></tr>
        <input type="submit" name="login" value="LOGIN"><br>
        </form>    
    </div>  

</div>
</body>
</html>