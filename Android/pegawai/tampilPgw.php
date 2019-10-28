<?php

 /*

 penulis: Muhammad yusuf
 website: http://www.kodingindonesia.com/

 */

	//Mendapatkan Nilai Dari Variable ID Pegawai yang ingin ditampilkan
	$id = $_GET['id'];

	//Importing database
	require_once('koneksi.php');

	//Membuat SQL Query dengan pegawai yang ditentukan secara spesifik sesuai ID
	$sql = "SELECT * FROM karyawan WHERE id_karyawan=$id";

	//Mendapatkan Hasil
	$r = mysqli_query($con,$sql);

	//Memasukkan Hasil Kedalam Array
	$result = array();
	$row = mysqli_fetch_array($r);
	array_push($result,array(
			"id"=>$row['id_karyawan'],
			"name"=>$row['nama_lengkap'],
			"no_ktp"=>$row['no_ktp'],
			"add"=>$row['alamat'],
			"jk"=>$row['jenis_kelamin'],
			"nope"=>$row['no_hp'],
			"email"=>$row['email'],
			"rek"=>$row['no_rekening']
		));

	//Menampilkan dalam format JSON
	echo json_encode(array('result'=>$result));

	mysqli_close($con);
?>
