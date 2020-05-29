<?php 
// mengaktifkan session php
session_start();
 
// menghubungkan dengan koneksi
include 'koneksi.php';
 
// menangkap data yang dikirim dari form
$nim = $_POST['nim'];
$username = $_POST['username'];
$password = $_POST['pwd'];
$nama = $_POST['nama'];
$status = "Verifikasi";
$Otoritas = "Mahasiswa";
 
// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($koneksi,"insert into user values('$nim', '$username', '$password', '$nama', '$Otoritas', '$status')");
 
if($data){
	echo "<script>
		alert ('Berhasil.');
		location.href='login.php';
	</script>";	
}else{
	echo "<script>
		alert ('Gagal.');
		location.href='daftar.php';
	</script>";	
}
?>