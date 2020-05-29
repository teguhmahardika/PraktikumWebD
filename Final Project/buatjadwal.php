<?php 
// mengaktifkan session php
session_start();
 
// menghubungkan dengan koneksi
include 'koneksi.php';
 
// menangkap data yang dikirim dari form
$kodemk = $_POST['KodeMK'];
$jam = $_POST['jam'];
$hari = $_POST['Hari'];
$status = "Tersedia";
 
// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($koneksi,"insert into kelas values('', '$kodemk', '$jam', '$hari', '$status')");
 
if($data){
	echo "<script>
		alert ('Berhasil.');
		location.href='jadwal.php';
	</script>";	
}else{
	echo "<script>
		alert ('Gagal.');
		location.href='jadwal.php';
	</script>";	
}
?>