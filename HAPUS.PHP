<?php
include 'connect.php';
if(isset($_GET['id_karyawan'])){
	$delete = mysqli_query($conn, "DELETE FROM karyawan WHERE id_karyawan = '".$_GET['id_karyawan']."' ");
	if($delete){
			?>
			<script type="text/javascript">
				alert('Data Berhasil Terhapus')
				document.location.href = "index.php";
			</script>
			<?php
		}else{
			echo 'Data Gagal Terhapus';
		}
	}
	?>