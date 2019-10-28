<?php

 /*

 penulis: Muhammad yusuf
 website: http://www.kodingindonesia.com/

 */
	if($_SERVER['REQUEST_METHOD']=='POST'){
		//MEndapatkan Nilai Dari Variable
		$id = $_POST['id'];
		

		//import file koneksi database
		require_once('koneksi.php');

		//Membuat SQL Query
		$sql = "UPDATE karyawan SET nama_lengkap 		= '$_POST[name]', 
									  no_ktp 			= '$_POST[no_ktp]', 
									  alamat 			= '$_POST[add]', 
									  jenis_kelamin		= '$_POST[jk]', 
									  no_hp 			= '$_POST[nope]', 
									  email 			= '$_POST[email]', 
									  no_rekening 		= '$_POST[rek]' 
								  WHERE id_karyawan 	= $id";

		//Meng-update Database
		if(mysqli_query($con,$sql)){
			echo 'Berhasil Update Data Pegawai';
		}else{
			echo 'Gagal Update Data Pegawai';
		}

		mysqli_close($con);
	}
?>
