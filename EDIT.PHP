<?php
include 'connect.php';
$ubah = $_GET['id_karyawan'];
$back = mysqli_query($conn, "SELECT * FROM karyawan WHERE id_karyawan='$ubah' ");
$data = mysqli_fetch_array($back);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Ubah Data</title>
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
	margin-left: 50px;

	
}

#kiri{
	background: #95a5a6;
	height: 1000px;
	width: 320px;
	margin-left: -296px;
	
}
#kanan{
	background: #bdc3c7;
	height: 1000px;
	width: 1055px;
	margin-left: 25px;
	margin-top: -1003px;
}

.menu{
	color: white;
	background:#16a085;
	width: 320px;
	height: 270px;
	margin-top: -10px
}

#menulagi li{
	font-size: 15pt;
	margin-top: 45px;
	text-align: center;
	text-decoration: none;
	list-style: none;
	
}

.header{
	background: #2ecc71;
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
	margin-left: 920px;
}


#empat:hover{
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

input{
	color: black;
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
			<h2>FORM EDIT DATA </h2><br><br><br><br>

	<form action="" method="post">
		<table>
		<a id="datakry" href="index.php" style="background-color: #27ae60;color: #fff;border-radius: 3px;padding: 12px;text-decoration: none;margin-left: -725px;">Data Karyawan</a><br><br><br>
		

		Nama Lengkap :
		<input style="width: 700px; background: white;color: black; margin-left:5px; padding-left: 1.8em " type="text" name="nama_lengkap"  value="<?php echo $data['nama_lengkap'] ?>">
		<br>Nomor KTP :
		<input style="width: 700px;height: 40px; margin-left:25px; padding-left: 1.8em " type="number" name="no_ktp" value="<?php echo $data['no_ktp'] ?>">
		<br>Alamat :
		<input style="width: 700px;background: white;margin-top: 16px;color: black; margin-left:55px; padding-left: 1.8em " type="text" name="alamat" value="<?php echo $data['alamat'] ?>">
		<br>Jenis Kelamin :
		<input style="width: 700px;background: white;color: black; margin-left:11px; padding-left: 1.8em " type="text" name="jenis_kelamin" value="<?php echo $data['jenis_kelamin'] ?>">
		<br>Nomor HP :
		<input style="width: 700px; background: white;color: black; margin-left:34px; padding-left: 1.8em " type="text" name="no_hp"  value="<?php echo $data['no_hp'] ?>">
		<br>Email :
		<input style="width: 700px;height: 40px; margin-left:68px; padding-left: 1.8em " type="email" name="email" value="<?php echo $data['email'] ?>">
		<br>No Rekening :
		<input style="width: 700px; height: 40px; background: white;margin-top: 16px;color: black; margin-left:25px; padding-left: 1.8em " type="number" name="no_rekening" value="<?php echo $data['no_rekening'] ?>">
	    <br><br>
		<input style="width: 725px;height: 40px;background: #2ecc71; margin-left:122px; padding-left: 1.8em " type="submit" name="edit" value="Simpan">
		</table>
	</form>

<?php 
	
      if(isset($_POST['edit'])){
      	$nama = $_POST['nama_lengkap'];
      	$noktp = $_POST['no_ktp'];
      	$alamat = $_POST['alamat'];
		$jenis_kelamin = $_POST['jenis_kelamin'];
	    $no_hp = $_POST['no_hp'];
      	$email = $_POST['email'];
      	$no_rekening = $_POST['no_rekening'];
        if(!empty(trim($nama))){
			if(!empty(trim($noktp))){
				if(!empty(trim($alamat))){
					if(!empty(trim($jenis_kelamin))){
						if(!empty(trim($no_hp))){
							if(!empty(trim($email))){
								if(!empty(trim($no_rekening))){
									//
									$rubah = mysqli_query($conn, "UPDATE karyawan SET nama_lengkap = '$nama',no_ktp = '$noktp', alamat = '$alamat',jenis_kelamin = '$jenis_kelamin',no_hp = '$no_hp', email = '$email', no_rekening = '$no_rekening' WHERE id_karyawan = '$_GET[id_karyawan]'");     
									if($rubah){
										?>
										<script type="text/javascript">
											alert('Data Berhasil Terubah')
											document.location.href = "index.php";
										</script>
										<?php
									}else{
										echo 'Data Gagal Terubah';
									}

								}else{ echo "<script>alert('Masukan Nomor Rekening')</script>";}
							}else{ echo "<script>alert('Masukan Email')</script>";}
						}else{ echo "<script>alert('Masukan Nomor HP')</script>";}
					}else{ echo "<script>alert('Masukan Jenis Kelamin')</script>";}
				}else{ echo "<script>alert('Masukan Alamat')</script>";}
			}else{ echo "<script>alert('Masukan Nomor KTP')</script>";}
		}else{ echo "<script>alert('Masukan Nama')</script>";}
	}
	?>
	
</body>
</html>


