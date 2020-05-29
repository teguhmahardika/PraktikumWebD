<?php 
// mengaktifkan session php
session_start();
 
// menghubungkan dengan koneksi
include 'koneksi.php';
 
// menangkap data yang dikirim dari form
$nip = $_POST['NIP'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$jk = $_POST['jk'];
$jabatan = $_POST['jabatan'];
$Status = "Verifikasi";
 
// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($koneksi,"insert into dosen values('$nip', '$nama', '$email', '$jk', '$jabatan', '$Status')");
 
if($data){
	echo "<script>
		alert ('Berhasil.');
		location.href='home.php';
	</script>";	
}else{
	echo "<script>
		alert ('Gagal.');
		location.href='home.php';
	</script>";	
}
?>