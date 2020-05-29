<?php
	include "koneksi.php";
	$kode = $_GET['kode'];
	
	$Status = "Tidak Tersedia";
	$sql=mysqli_query($koneksi,"UPDATE kelas SET Status = '$Status' WHERE KodeKelas = '$kode'");
	
	
	if($sql){
			echo "<script>alert ('Kelas Berhasil Di Stop');
			location.href='jadwal.php';
			</script>";
		}
?>