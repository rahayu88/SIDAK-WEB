<?php

 /*

 penulis: Muhammad yusuf
 website: http://www.kodingindonesia.com/

 */

	if($_SERVER['REQUEST_METHOD']=='POST'){

		//Pembuatan Syntax SQL
		$sql = "INSERT INTO karyawan VALUES ('','$_POST[name]','$_POST[no_ktp]','$_POST[add]','$_POST[jk]','$_POST[nope]','$_POST[email]','$_POST[rek]')";

		//Import File Koneksi database
		require_once('koneksi.php');

		//Eksekusi Query database
		if(mysqli_query($con,$sql)){
			echo 'Berhasil Menambahkan Pegawai';
		}else{
			echo 'Gagal Menambahkan Pegawai';
		}

		mysqli_close($con);
	}
?>
