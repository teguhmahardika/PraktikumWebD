<!DOCTYPE html>
<html>
<head>
	<title>PAGINASI</title>
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
		.pagination {
  			display: inline-block;
  			margin-left: 42%;
		}
		.pagination a {
			margin-top: 10px;
			font-size: 12px;
			background-color: #ffff;
  			color: black;
  			float: left;
  			padding: 8px 16px;
  			text-decoration: none;
  			font-weight: bold;
		}
		.pagination a.active {
  			background-color: #f2672e;
  			color: white;
		}
		.pagination a:hover:not(.active) {background-color: #f2672e;}
	</style>
</head>
<body>
<div class="isi">
<h1>PAGINASI</h1>
<div class="formkot">
<?php

// -----------------------------------------------------------Koneksi------------------------------------------------------------------------
$koneksi = mysqli_connect("localhost","root","","simak") or die(mysqli_error());

// -----------------------------------------------------------Baca------------------------------------------------------------------------
	$halaman = 4;
  	$page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
  	$mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
  	$result = mysqli_query($koneksi, "SELECT * FROM mahasiswa");
  	$total = mysqli_num_rows($result);
  	$pages = ceil($total/$halaman);  
  	$sql = "SELECT * FROM mahasiswa LIMIT $mulai, $halaman";
	$query = mysqli_query($koneksi, $sql);          
	$no =$mulai+1;
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
			</tr>
		<?php
		$no++;
	}
	echo "</table>";

?><div class="pagination">
  <?php for ($i=1; $i<=$pages ; $i++){ ?>
  <a href="?halaman=<?php echo $i; ?>"><?php echo $i; ?></a>
 
  <?php } ?>
 
</div></div></div><br><br>
</body>
</html>