<?php 
// mengaktifkan session php
session_start();
 
// menghubungkan dengan koneksi
include 'koneksi.php';
 
// menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = $_POST['pwd'];
 
// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($koneksi,"select * from user where Username='$username' and Pwd='$password'");
 
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);
 
if($cek > 0){
	$data1=mysqli_fetch_array($data);
	$user=$data1['Username'];
	$Otoritas=$data1['Otoritas'];
	$_SESSION['Username']=$user;
	$_SESSION['Otoritas']=$Otoritas;
		if($Otoritas == 'Dosen'){
			echo "<script>
				alert ('Hallo Dosen.');
				location.href='dosen.php';
			</script>";	
		
		}else if($Otoritas == 'Mahasiswa'){
			echo "<script>
				alert ('Hallo Mahasiswa.');
				location.href='mahasiswa.php';
			</script>";	
		}
}else{
	echo "<script>
		alert ('Login Gagal.');
		location.href='login.php';
	</script>";	
}
?>