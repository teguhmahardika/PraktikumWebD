<!DOCTYPE html>
<html>
<head>
	<title>Universitas Udayana</title>
	<style type="text/css">
		.bagkiri{
			width: 15%;
			height: 50%;
			float: left;
			border-style: solid;
			border-color: #e6e6e6;
			padding: 20px;
			border-radius: 30px 0 0 0;
		}
		.bagkanan{
			width: 77%;
			height: 50%;
			float: right;
			background-image: url(rektorat.jpg);
			border-style: solid;
			padding-top: 11%;
			padding-right: 15px;
			border-color: #e6e6e6;
			color: white;
			border-radius: 0 0 30px 0;
		}
		.menu{
			height: 30px;
			width: 78%;
			background-color: #696967;
			float: right;
			margin-top: 10px;
			margin-right: 7px;
			color: white;
			padding-top: 10px;
		}
		.konten{
			width: 76.5%;
			height: 50%;
			float: right;
			padding-left: 10px;
			padding-right: 10px;
			border-style: solid;
			border-color: #e6e6e6;
			margin-top: 10px;
			margin-bottom: 10px;
			padding-bottom: 85px;
		}
		.footer{
			width: 98%;
			height: 50%;
			float: right;
			padding-left: 10px;
			padding-right: 10px;
			border-style: solid;
			border-color: #e6e6e6;
			background-color: #696967;
			border-radius: 30px 0 30px 0;
			color: white;
		}
		th{
			text-align: left;
		}
	</style>
</head>
<body>

<div class="bagkiri">
	<img src="unud.png" width="200px" height="220px">
	<table>
		<tr>
			<td colspan="3" align="center">Logo Universitas Udayana</td>
		</tr>
		<tr>
			<th>Moto</th>
			<td>&nbsp;&nbsp;</td>
			<td>Takitakining Sewaka Guna Widya (Bali)</td>
		</tr>
		<tr>
			<th>Moto dalam bahasa Indonesia</th>
			<td>&nbsp;&nbsp;</td>
			<td>Orang yang menuntut ilmu wajib mengejar pengetahuan dan kebajikan</td>
			
		</tr>
		<tr>
			<th>Situs web</th>
			<td>&nbsp;&nbsp;</td>
			<td><a href="http://www.unud.ac.id/">www.unud.ac.id</a></td>
		</tr>
	</table>

</div>

<div class="bagkanan">
	<h1 align="right">Sistem Informasi Kampus</h1>
	<h4 align="right">Universitas Udayana - Ilmu Komputer</h4>
</div>

<div class="menu">
	<center>
		<a href="index.html" style="text-decoration: none; color: white">Home</a>&nbsp;&nbsp;|&nbsp;&nbsp;
		<a href="tentang.html" style="text-decoration: none; color: white">Tentang Kampus</a>&nbsp;&nbsp;|&nbsp;&nbsp;
		<a href="pengajar.html" style="text-decoration: none; color: white">Profil Pengajar</a>&nbsp;&nbsp;|&nbsp;&nbsp;
		<a href="kami.html" style="text-decoration: none; color: white">Tentang Kami</a>&nbsp;&nbsp;|&nbsp;&nbsp;
		<a href="login.php" style="text-decoration: none; color: white">Login</a>
	</center>
</div>

<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "gagal"){
			echo "Login gagal! username dan password salah!";
		}else if($_GET['pesan'] == "logout"){
			echo "Anda telah berhasil logout";
		}else if($_GET['pesan'] == "belum_login"){
			echo "Anda harus login untuk mengakses halaman admin";
		}
	}
?>
<div class="konten">
	<center>
		<form action="proseslogin.php" method="post">
			<h2>LOGIN</h2>
				<table>
					<tr>
						<td>Username</td>
						<td>:</td>
						<td><input type="text" name="username" id="username"></td>
					</tr>
					<tr>
						<td>Password</td>
						<td>:</td>
						<td><input type="password" name="pwd" id="pwd"></td>
					</tr>
					<tr>
						<td></td>
						<td align="right"></td>
						<td align="right">
							<input type="submit" value="Login">
							<a href="daftar.php"><input type="button" value="Daftar"><a href="daftar.php"></a></td>
					</tr>
				</table>
		</form>
	</center>
</div>

<div class="footer">
	<center>
		&copy; Copyright 2020. All Right Reserved <br>
		Fakultas Matematika dan Ilmu Pengetahuan Alam <br>
		Jurusan Ilmu Komputer <br>
		Universitas Udayana
	</center>
</div>

</body>
</html>