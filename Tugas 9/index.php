<!DOCTYPE html>
<html>
<head>
	<title>BIODATA</title>
	<style>
    	body {
			margin: 0;
			padding: 0;
		}
		h1 {
			font-family: Poppins;
			color: black;
			font-style: bold;
			font-size: 38px;
			text-align: center;
		}
		h2 {
			font-family: Poppins;
			color: rgba(255,255,255,1);
			font-style: bold;
			text-align: center;
			font-size: 20px;
			margin-top: 1px;
		}
		a {
			font-family: Poppins;
			font-size: 20px;
			color: rgba(255,255,255,1);
		}
		.header {
			height:50px;
			background-color:rgba(2,2,2,0.8);
			padding-top:10px;
			padding-right: 20px;
			text-align: right;
		}
		.isi {
			height:552px;
		}
		.formkot {
			width:75%;
			padding:20px;
			margin-left:150px;
			border-radius: 20px;
			background-color:rgba(2,2,2,0.8);
		}
		#kotak {
			opacity: 1;
			color: rgba(255,255,255,1);
			padding: 8px;
			margin: 8px;
		}
		.kotak::-webkit-input-placeholder{
			text-align: center;
			font-family: Poppins;
			font-style: normal;
			font-weight: normal;
			font-size: 20px;
			color: rgba(2,2,2,1);
			letter-spacing: 0.35px;
		}
		.kotak {
			width: 98%;
			height: 10px;
			border:0px;
			border-radius: 9px;
			text-align: center;
			font-family: Poppins;
			font-style: normal;
			font-weight: normal;
			font-size: 20px;
			color: rgba(2,2,2,1);
			background-color: rgba(255,255,255,1);
			padding: 8px;
		}

		#kecil {
			opacity: 1;
			color: rgba(255,255,255,1);
			padding: 8px;
			margin: 8px;
		}
		.kecil::-webkit-input-placeholder{
			white-space: nowrap;
			text-align: center;
			font-family: Poppins;
			font-style: normal;
			font-weight: normal;
			font-size: 20px;
			color: rgba(2,2,2,1);
			letter-spacing: 0.35px;
		}
		.kecil {
			width: 70%;
			height: 10px;
			border:0px;
			border-radius: 9px;
			text-align: center;
			font-family: Poppins;
			font-style: normal;
			font-weight: normal;
			font-size: 20px;
			color: rgba(2,2,2,1);
			background-color: rgba(255,255,255,1);
			padding: 8px;
		}
		.btn {
			margin-top: 5px;
			width: 80%;
			height:30px;
			margin-left: 10%;
			text-align: center;
			font-size: 14px;
			font-family: 'Open Sans',sans-serif;
			font-weight: bold;
			letter-spacing: 0;
			-webkit-box-shadow: inset 0px 0px 0px 0px rgba(204,86,15,1);
			-moz-box-shadow: inset 0px 0px 0px 0px rgba(204,86,15,1);
			box-shadow: inset 0px 0px 0px 0px rgba(204,86,15,1);
			color: #fff;
			background-color: #f2672e;
			text-shadow: none;
			text-transform: uppercase;
			border: none;
			cursor: pointer;
			position: relative;
			margin-bottom: 20px;
			-webkit-animation: shadowFadeOut 0.4s;
			-moz-animation: shadowFadeOut 0.4s;
			border-radius: 9px;
		}
		.btn:hover,.btn:focus{
  			color: #fff;
  		-webkit-box-shadow: inset 0px 54px 0px 0px rgba(204,86,15,1);
  		-moz-box-shadow:    inset 0px 54px 0px 0px rgba(204,86,15,1);
  		box-shadow:         inset 0px 54px 0px 0px rgba(204,86,15,1);
  		-webkit-animation: shadowFade 0.4s;
  		-moz-animation: shadowFade 0.4s;
		}
		#select {
			opacity: 1;
			color: rgba(255,255,255,1);
			padding: 8px;
			margin: 8px;
		}
		.select::-webkit-input-placeholder{
			text-align: center;
			font-family: Poppins;
			font-style: normal;
			font-weight: normal;
			font-size: 20px;
			color: rgba(2,2,2,1);
			letter-spacing: 0.35px;
		}
		.select {
			width: 100%;
			height: 50px;
			border:0px;
			border-radius: 9px;
			text-align: center;
			font-family: Poppins;
			font-style: normal;
			font-weight: normal;
			font-size: 20px;
			color: rgba(2,2,2,1);
			background-color: rgba(255,255,255,1);
			padding: 8px;
		}	
		.tabel{
			width: 100%;
		}
		.tabel th {
			background-color: rgba(66,62,62,1);
			color: rgba(255,255,255,1);
			padding: 1em;
			text-align: left;
			text-transform: uppercase;
			font-family: Poppins;
			font-size: 10px;
		}
		.tabel td {
			border-bottom: 1px solid #ddd;
			padding: 1em;
			font-family: Poppins;
			font-size: 10px;
		}
		.tabel tr:nth-child(even) {
			background-color: rgba(173,173,173,1);
			font-family: Poppins;
			font-size: 10px;
		}
		.tabel tr:nth-child(odd) {
			background-color: rgba(255,255,255,1);
			font-family: Poppins;
			font-size: 10px;
		}
	</style>
</head>
<body>
<div class="isi">
<h1>FORMULIR BIODATA MAHASISWA</h1>
<div class="formkot">
<?php

// koneksi
$koneksi = mysqli_connect("localhost","root","","simak") or die(mysqli_error());

// tambah
function tambah($koneksi){
	
	if (isset($_POST['btn_simpan'])){
       		$namalengkap  = $_POST['namalengkap'];
 			$namauser  = $_POST['namauser'];
  			$nim  = $_POST['nim'];
  			$kelamin  = $_POST['kelamin'];
  			$tempat  = $_POST['tempat'];
  			$tanggal  = $_POST['tanggal'];
  			$asal  = $_POST['asal'];
  			$jurusan  = $_POST['jurusan'];
  			$pass  = $_POST['pass'];
  			$jam=date('h:i:sa');
  			$id = time();
		
		if(!empty($namalengkap) && !empty($namauser) && !empty($nim) && !empty($kelamin) && !empty($tempat) && !empty($tanggal) && !empty($asal) && !empty($jurusan) && !empty($pass)){
			$sql = "INSERT INTO mahasiswa (id, namalengkap, namauser, nim, kelamin, tempat, tanggal, asal, jurusan, pass,jam) VALUES ('$id', '$namalengkap', '$namauser', '$nim', '$kelamin', '$tempat', '$tanggal', '$asal', '$jurusan', '$pass', '$jam')";
			$simpan = mysqli_query($koneksi, $sql);
			if($simpan && isset($_GET['aksi'])){
				if($_GET['aksi'] == 'create'){
					echo '<script language="javascript">alert("INPUT BERHASIL");document.location="index.php";</script>';
				}
				else{
					echo '<script language="javascript">alert("INPUT GAGAL");</script>';
				}
			}
		} else {
			$pesan = "Tidak dapat menyimpan, data belum lengkap!";
		}
	}

	?> 
		<a><b><center>FORMULIR</center></a></b><hr><br>
		<form action="" method="post">
        	<input class="kotak" type="text" name="namalengkap" placeholder="Nama Lengkap..." required/><br><br>
       		<input class="kotak" type="text" name="namauser" placeholder="Nama User..." required/><br><br>
        	<input class="kotak" type="text" name="nim" placeholder="NIM..." required/><br><br>
        	<input type="radio" name="kelamin" value="Laki-Laki" required checked="checked"/><a>Laki - Laki &nbsp;&nbsp;</a><input type="radio" name="kelamin" value="Perempuan" required/><a>Perempuan&nbsp;&nbsp;</a><input class="kecil" type="text" name="tempat" placeholder="Tempat Lahir..." required/><br><br>
        	<label><a>Tanggal Lahir: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></label><input class="kecil" type="date" name="tanggal" placeholder="Tanggal Lahir..." required/><br><br>
        	<input class="kotak" type="text" name="asal" placeholder="Asal Sekolah..." required/><br><br>
        	<select class="select"  name="jurusan" />
        		<option value="" hidden>Jurusan...</option>
        		<option value="Teknik Informatika">Teknik Informatika</option>
        		<option value="Matematika">Matematika</option>
        		<option value="Fisika">Fisika</option>
        		<option value="Biologi">Biologi</option>
        		<option value="Farmasi">Farmasi</option>
        		<option value="Kimia">Kimia</option>
       		</select><br><br>
        	<input class="kotak" type="Password" name="pass" placeholder="Password..." required/><br><br>
			<input class="btn" type="submit" name="btn_simpan" value="REGISTRASI"><br>
    	</form><hr><a><b><center>DATA MAHASISWA</center></a></b><hr><br>
	<?php

}

// read
function tampil_data($koneksi){
	$sql = "SELECT * FROM mahasiswa";
	$query = mysqli_query($koneksi, $sql);
	$no = 1;
	echo "<table class='tabel'>";
	echo "<tr>
			<th>NO</th>
			<th>ID</th>
			<th>NAMA LENGKAP</th>
			<th>NAMA USER</th>
			<th>NIM</th>
			<th>JENIS KELAMIN</th>
			<th>TEMPAT LAHIR</th>
			<th>TANGGAL LAHIR</th>
			<th>ASAL SEKOLAH</th>
			<th>JURUSAN</th>
			<th>PASSWORD</th>
			<th>ACTION</th>
		  </tr>";
	
	while($data = mysqli_fetch_array($query)){
		?>
			<tr>
				<td><?php echo $no ?></td>
				<td><?php echo $data['id']; ?></td>
				<td><?php echo $data['namalengkap']; ?></td>
				<td><?php echo $data['namauser']; ?></td>
				<td><?php echo $data['nim']; ?></td>
				<td><?php echo $data['kelamin']; ?></td>
				<td><?php echo $data['tempat']; ?></td>
				<td><?php echo $data['tanggal']; ?></td>
				<td><?php echo $data['asal']; ?></td>
				<td><?php echo $data['jurusan']; ?></td>
				<td><?php echo $data['pass']; ?></td>
				<td>
					<a href="index.php?aksi=update&id=<?php echo $data['id']; ?>"><img src='image/edit.png' width='30px'></a> |
					<a href="index.php?aksi=delete&id=<?php echo $data['id']; ?>"><img src='image/delete.png' width='30px'></a>
				</td>
			</tr>
		<?php
		$no++;
	}
	echo "</table>";
}

// edit
function ubah($koneksi){
	$id = $_GET['id'];
	// ubah data
	if(isset($_POST['btnubah'])){
			$namalengkap  = $_POST['namalengkap'];
  			$namauser  = $_POST['namauser'];
  			$nim  = $_POST['nim'];
  			$kelamin  = $_POST['kelamin'];
  			$tempat  = $_POST['tempat'];
  			$tanggal  = $_POST['tanggal'];
  			$asal  = $_POST['asal'];
  			$jurusan  = $_POST['jurusan'];
  			$pass  = $_POST['pass'];
  			$jam=date('h:i:sa');
		
		if(!empty($id) &&!empty($namalengkap) && !empty($namauser) && !empty($nim) && !empty($kelamin) && !empty($tempat) && !empty($tanggal) && !empty($asal) && !empty($jurusan) && !empty($pass)){
			$sql_update = "UPDATE `mahasiswa` SET `namalengkap`='$namalengkap',`namauser`='$namauser',`nim`='$nim',`kelamin`='$kelamin' ,`tempat`='$tempat',`tanggal`='$tanggal',`asal`='$asal',`jurusan`='$jurusan',`pass`='$pass',`jam`='$jam' WHERE `id`='$id'";
            $update = mysqli_query($koneksi, $sql_update);
			if($update && isset($_GET['aksi'])){
				if($_GET['aksi'] == 'update'){
					echo '<script language="javascript">alert("UPDATE BERHASIL");document.location="index.php";</script>';
				}
				else{
					echo '<script language="javascript">alert("UPDATE GAGAL");</script>';
				}
			}
		} else {
			$pesan = "Data tidak lengkap!";
		}
	}
	$sql = "SELECT * FROM mahasiswa WHERE id='$id'";
	$query = mysqli_query($koneksi, $sql);
	$data = mysqli_fetch_array($query);
	// tampilkan form ubah
	if(isset($_GET['id'])){
		?>
			<a href="index.php"> &laquo; Home</a> | 
			<a href="index.php?aksi=create"> (+) Tambah Data</a>
			<hr><a><b>EDIT</a></b><hr><br>
			
			<form action="" method="post">
        		<input class="kotak" type="text" name="namalengkap" placeholder="Nama Lengkap..." value="<?php echo $data['namalengkap']; ?>" required/><br><br>
        		<input class="kotak" type="text" name="namauser" placeholder="Nama User..." value="<?php echo $data['namauser']; ?>"required/><br><br>
        		<input class="kotak" type="text" name="nim" placeholder="NIM..." value="<?php echo $data['nim']; ?>"required/><br><br>
        		<?php
          			if($data['kelamin']=="Laki-Laki")
          			{
            			echo "<input type='radio'  name='kelamin'  value='Laki-Laki' checked=''><a>
            			Laki-laki &nbsp&nbsp</a>
            			<input type='radio' name='kelamin'value='Perempuan' >
            			<a>Perempuan </a>"; 
          			}else{ 
          				echo "<input type='radio'  name='kelamin'  value='Laki-Laki' >
            			<a>Laki-laki  &nbsp&nbsp </a>
            			<input type='radio' name='kelamin' value='Perempuan' checked='' >
            			<a>Perempuan  </a>"; 
          			}
          		?>
        		<input class="kecil" type="text" name="tempat" placeholder="Tempat Lahir..." value="<?php echo $data['tempat']; ?>" required/><br><br>

        		<label><a>Tanggal Lahir: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></label>
        		<input class="kecil" type="date" name="tanggal" placeholder="Tanggal Lahir..." value="<?php echo $data['tanggal']; ?>" required/><br><br>

        		<input class="kotak" type="text" name="asal" placeholder="Asal Sekolah..." value="<?php echo $data['asal']; ?>"required/><br><br>
        		<select class="select" name="jurusan" />
        			<option hidden><?php echo $data['jurusan']; ?></option>
        			<option value="Teknik Informatika">Teknik Informatika</option>
        			<option value="Matematika">Matematika</option>
        			<option value="Fisika">Fisika</option>
        			<option value="Biologi">Biologi</option>
        			<option value="Farmasi">Farmasi</option>
        			<option value="Kimia">Kimia</option>
        		</select><br><br>
        		<input class="kotak" type="Password" name="pass" value="<?php echo $data['pass']; ?>"placeholder="Password..." required/><br><br>
				<input class="btn" type="submit" name="btnubah" value="Simpan Perubahan"><br>
    		</form><hr><a><b>DATA</a></b><hr><br>
		<?php
	}
	
}

// hapus
function hapus($koneksi){

	if(isset($_GET['id']) && isset($_GET['aksi'])){
		$id = $_GET['id'];
		$sql_hapus = "DELETE FROM mahasiswa WHERE id=" . $id;
		$hapus = mysqli_query($koneksi, $sql_hapus);
		
		if($hapus){
			if($_GET['aksi'] == 'delete'){
				echo '<script language="javascript">alert("DELETE BERHASIL");document.location="index.php";</script>';
			}
			else{
				echo '<script language="javascript">alert("DELETE GAGAL");</script>';
			}
		}
	}
	
}

// home
if (isset($_GET['aksi'])){
	switch($_GET['aksi']){
		case "create":
			echo '<a href="index.php"> &laquo; Home</a>';
			tambah($koneksi);
			break;
		case "read":
			tampil_data($koneksi);
			break;
		case "update":
			ubah($koneksi);
			tampil_data($koneksi);
			break;
		case "delete":
			hapus($koneksi);
			break;
		default:
			echo "<h3>Aksi <i>".$_GET['aksi']."</i> tidaka ada!</h3>";
			tambah($koneksi);
			tampil_data($koneksi);
	}
} else {
	tambah($koneksi);
	tampil_data($koneksi);
}

?></div></div><br><br>
</body>
</html>