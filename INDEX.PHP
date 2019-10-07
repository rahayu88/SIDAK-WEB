<?php 
session_start();
if(empty($_SESSION['username'])){
	header('location:login.php?login');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Data Karyawan | SIDAK</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
	<link rel="shortcut icon" type="icon" href="back 1.jpg">


    <script>
    //alert("selamat datang di website kami")
    </script>
    
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
	background: ##2c3e50;
	height: 710px;
	width: 320px;
	margin-left: -295px;
	
}
#kanan{
	background: #bdc3c7;
	height: 1315px;
	width: 1175px;
	margin-left: 25px;
	margin-top: -713px;
}

.menu{
	color: white;
	background:#566892;
	width: 317px;
	height: 255px;
	margin-top: -5px
}

p{
	width: 290px;
	margin-left: 10px;
	margin-top: 70px;

}

.header{
	background: #566892;
	width: 1155px;
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
	margin-left: 50px;
}


#empat:hover{
	color: red;
}


#section{
	text-align: center;
	margin-top: 20px;

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
  padding: 7px 11px;
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
		<div style="padding-top:100px;padding-right:100px;float:right;display:inline-block">
			<form id="cari"><input name="filter" type="text" placeholder="Cari disini" <?php if(isset($_GET['filter'])){ echo "value='$_GET[filter]'"; }?> onChange="submit()"></form>
		</div>
		<div id="section">
		
			<br>
			<h2>DATA KARYAWAN</h2><br><br><a class="add" style="background-color: #27ae60;color: white;border-radius:3px;margin-left: -750px;padding: 12px; " href="forminput.php">Tambah Data</a><br><br>
			<table align="center">
				<tr style="text-align: center;">
					<td><b>No</b></td>
					<td><b>Nama Lengkap</b></td>
					<td><b>No KTP</b></td>
					<td><b>Alamat</b></td>
					<td><b>Jenis Kelamin</b></td>
					<td><b>No Hp</b></td>
					<td><b>Email</b></td>
					<td><b>No Rekening</b></td>
					<td><b>Opsi</b></td>
				</tr>

				<?php
				include 'connect.php';
				$no = 1;
				$select = mysqli_query($conn, "SELECT * FROM karyawan");
				if(isset($_GET['filter'])){
					$select = mysqli_query($conn, "SELECT * FROM karyawan WHERE (nama_lengkap LIKE '%$_GET[filter]%' OR no_ktp LIKE '%$_GET[filter]%')");
				}
				while($hasil = mysqli_fetch_array($select)){
				?>

				<tr>
					<td><?php echo $no++ ?></td>
					<td><?php echo $hasil['nama_lengkap']; ?></td>
					<td><?php echo $hasil['no_ktp']; ?></td>
					<td><?php echo $hasil['alamat']; ?></td>
					<td><?php echo $hasil['jenis_kelamin']; ?></td>
					<td><?php echo $hasil['no_hp']; ?></td>
					<td><?php echo $hasil['email']; ?></td>
					<td><?php echo $hasil['no_rekening']; ?></td>
					<td >
						<a class="opsi" style="background-color: #2980b9;color:white;border-radius: 3px;padding: 4px 5px;" href="edit.php?id_karyawan=<?php echo $hasil['id_karyawan'] ?>">Ubah</a> 
						<a style="background-color:#c0392b;color:white;border-radius: 3px;padding:4px;margin-top:20px;" href="hapus.php?id_karyawan=<?php echo $hasil['id_karyawan'] ?>">Hapus</a>
					</td>
				</tr>

				<?php 
					} 
				?>

			</table>
		</div>
	
</body>
</html>
<script>
function submit() {
  document.getElementById("cari").submit();
}
</script>