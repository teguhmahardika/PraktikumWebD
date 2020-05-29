<?php 
// mengaktifkan session php
session_start();
 
// menghubungkan dengan koneksi
include 'koneksi.php';
 
// menangkap data yang dikirim dari form
$kode = $_POST['KodeMK'];
$nim = $_POST['nim'];
 
// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($koneksi,"insert into mkmahasiswa values('', '$kode', '$nim')");
 
if($data){
	echo "<script>
		alert ('Berhasil.');
		location.href='pm.php';
	</script>";	
}else{
	echo "<script>
		alert ('Gagal.');
		location.href='pm.php';
	</script>";	
}
?>