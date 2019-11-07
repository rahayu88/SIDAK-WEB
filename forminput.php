<!DOCTYPE html>
<html>
<head>
	<title>Input Data</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
	<link rel="shortcut icon" type="icon" href="back 1.jpg">

</head>

<style type="text/css">
	body{
 background: #2e3339;
 margin-right: 20%;
 margin-left: 20%;
}

.login-background{
	
 font-family: arial;
 background: #35455f;
 padding: 10px;
 box-shadow: 0px 0px 15px #222;
 border-radius: 3px;
 width: 300px;
  margin-top: 50px;
 color: #999;
 height: auto;
 margin: 50px auto;
 text-align: center;

}
input[type="text"],input[type="password"]{
  border: none;
 border-bottom: 1px solid #999;
 margin-bottom: 15px;
 color: #999;
 width: 100%;
 padding: 15px 0px;
 background: none;

}


input[type="submit"]{
 background: #0eb7cc;
 color: #fff;
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


img{
	width: 200px;
	margin-top: 25px;
	height: 200px;
	margin-left: 70px;

	
}

#kiri{
	background: #95a5a6;
	height: 1000px;
	width: 320px;
	margin-left: -296px;
	margin-top: -10px;
	
}
#kanan{
	background: #bdc3c7;
	height: 1002px;
	width: 1055px;
	margin-left: 25px;
	margin-top: -1005px;
}

.menu{
	color: white;
	background:#16a085;
	width: 320px;
	height: 255px;
	margin-top: -5px
}

#menulagi li{
	font-size: 15pt;
	margin-top: 45px;
	text-align: center;
	text-decoration: none;
	list-style: none;
	
}

.header{
	background: #27ae60;
	width: 1035px;
	height: 25px;
	color: white;
	margin-top: 3px;
	padding: 10px;
}

#tiga{
	color: white;
	font-size: 18px;
	margin-left: 900px;
	

}


#empat{
	color: white;
	font-size: 18px;
	margin-left: 910px;
}


#empat:hover, #datakry:hover{
	color: #f1c40f;
}


#section{
	text-align: center;
	margin-top: 20px;
}


p{
	width: 290px;
	margin-left: 10px;
	margin-top: 70px;

}


.menubawah{
	width: 277px;
	margin-left: -1px;
	background: #e67e22;
	margin-top: 1000px;
	padding: 20px;
}

.menubawah li a{
	color: black;
}
 
.menubawah li{
	text-align: center;
	list-style: none;
	text-decoration: none;
}

.menubawah li a:hover, .menubawah li a:active{
	color: white;
	
}

 
table {
  font-family: Arial, Helvetica, sans-serif;
  color: #666;
  text-shadow: 1px 1px 0px #fff;
  background: #eaebec;
  border: #ccc 1px solid;
}
 
table tr {
  text-align: center;
  padding-left: 20px;
}
 

table td {
  padding: 15px 35px;
  border-top: 1px solid #ffffff;
  border-bottom: 1px solid #e0e0e0;
  border-left: 1px solid #e0e0e0;
  background: #fafafa;
  background: -webkit-gradient(linear, left top, left bottom, from(#fbfbfb), to(#fafafa));
  background: -moz-linear-gradient(top, #fbfbfb, #fafafa);
}


</style>

<body>
	<div id="kiri">		
		<div class="menu">
			<img src="logo.png">
		</div>
	</div>
	
	<div id="kanan">
		<div class="header">
         	<a id="empat" href="logout.php" class="fas fa-sign-out-alt"> Logout</a>			
		</div>
		<div id="section"><br>
			<h2>FORM INPUT DATA</h2><br><br><br><br>
			
	<form action="" method="post">
		<table>
			<a id="datakry" href="index.php" style="background-color: #27ae60;color: #fff;border-radius: 3px;padding: 12px;text-decoration: none;margin-left: -725px;">Data Karyawan</a><br><br><br>
		
		Nama Lengkap :
		<input style="width: 700px; background: white;color: black;margin-left:5px; padding-left: 1.8em" type="text" name="nama lengkap" placeholder=" Masukkan Nama Lengkap" required>
		<br>Nomor KTP :
		<input style="width: 700px;height: 40px; margin-left:25px;margin-left:27px;padding-left: 1.8em" type="number" name="no ktp" placeholder=" Masukkan No KTP" required></td>
		<br>Alamat :
		<input style="width: 700px;background: white;margin-top: 16px;color: black;margin-left:60px;padding-left: 1.8em" type="text" name="alamat" placeholder=" Masukkan  Alamat" required></td>
		<br>Jenis Kelamin :
		<input style="width: 700px; background: white;color: black;margin-left:15px;padding-left: 1.8em" type="text" name="jenis kelamin" placeholder=" Masukkan Jenis Kelamin" required>	
		<br>Nomor HP :
		<input style="width: 700px;height: 40px;  background: white;margin-left:40px;color: black;padding-left: 1.8em" type="number" name="no hp" placeholder=" Masukkan No HP" required>	
		<br>Email :
		<input style="width: 700px;margin-top: 15px;background: white;color: black;margin-left:70px;padding-left: 1.8em" type="text" name="email" placeholder="Masukkan  Email" required>
		<br>No Rekening :
		<input style="width: 700px;height: 40px ;margin-top: 20px;background: white;margin-top: 10px;color: black;margin-left:25px;padding-left: 1.8em" type="number" name="no rekening" placeholder=" Masukkan No Rekening" required></td>
		<input style="width: 725px;height: 40px;margin-top: 20px;background: #2ecc71;color: black;margin-left:120px;" type="submit" name="simpan" value="Simpan"></td>
		</table>
	</form>
	<?php 
	include 'connect.php';
	if(isset($_POST['simpan'])){
		$insert = mysqli_query($conn, "INSERT INTO karyawan VALUES(NULL, '".$_POST['nama_lengkap']."','".$_POST['no_ktp']."','".$_POST['alamat']."','".$_POST['jenis_kelamin']."','".$_POST['no_hp']."', '".$_POST['email']."', '".$_POST['no_rekening']."')");
		if($insert){
			?>
			<script type="text/javascript">
				alert('Data Berhasil Tersimpan')
				document.location.href = "index.php";
			</script>
			<?php
		}else{
			echo 'Data Gagal Tersimpan';
		}
	}
	?>
	</div></div>
	
</body>
</html>

