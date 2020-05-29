<?php
  session_start();//untuk membuka sesi
  if(!isset($_SESSION['Username']))
  {
    //Menegecek Apakah sesi masih ada
    header('location:index.html');
    exit(); 
  }
?>
<html>
    <head>
        <title>SIMAK</title>
        <link type="text/css" rel="stylesheet" href="css/style.css">
    </head>
    <body>            
        <div class="container">
            <h2>SIMAK</h2>
            <?php 
                include "koneksi.php";
                $User=$_SESSION['Username'];
                $kode=mysqli_query($koneksi,"select * from user where Username = '$User'");
                $data=mysqli_fetch_array($kode);
                $otoritas = $data['Otoritas'];
            ?>
            <h3 style="color: black">
              <?php echo $data['Nama']; ?> : <?php echo $data['Otoritas']; ?>
            </h3>    
            <?php 
              if ($otoritas == "Mahasiswa") {
                ?>
                  <a href='mahasiswa.php'>Mahasiswa</a> 
                  <a href='dosen.php'>Dosen</a>
                  <a href='edit.php'>Edit Profil</a>
                  <a href='pembimbing.php'>Pembimbing</a>
                  <a href='dm.php'>Daftar Matakuliah</a>
                  <a href="pm.php">Pendaftaran Matakuliah</a>
                  <a href="kelas.php">Kelas</a>
                  <a href="jadwal.php">Jadwal</a>
                  <a href="logout.php" style="float: right;">Logout</a>
                <?php
              }elseif ($otoritas == "Dosen") {
                ?>
                  <a href='mahasiswa.php'>Mahasiswa</a> 
                  <a href='dosen.php'>Dosen</a>
                  <a href='edit.php'>Edit Profil</a>
                  <a href='pembimbing.php'>Pembimbing</a>
                  <a href='dm.php'>Daftar Matakuliah</a>
                  <a href="kelas.php">Kelas</a>
                  <a href="jadwal.php">Jadwal</a>
                  <a href="logout.php" style="float: right;">Logout</a>
                <?php
              }elseif ($otoritas== "Staff") {
                ?>
                  <a href='mahasiswa.php'>Mahasiswa</a> 
                  <a href='dosen.php'>Dosen</a>
                  <a href='edit.php'>Edit Profil</a>
                  <a href="home.php">Daftar Dosen</a>
                  <a href="logout.php" style="float: right;">Logout</a>
                <?php
              }
            ?>
            <?php 
                    include "koneksi.php";
                    $otoritas = $data['Otoritas'];
                    if ($otoritas == "Mahasiswa") {
                ?>
            <table border="1" width="100%" class="tabel" style="margin-top:5px">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Matakuliah</th>
                    <th>Nama Dosen</th>
                    <th>Jam</th>
                    <th>Hari</th>
                </tr>
                </thead>
                <tbody id="tabel">
                <?php 
                    include "koneksi.php";
                    $kode1 = $data['KodeUser'];
                    $query_mysqli = mysqli_query($koneksi, "SELECT mkmahasiswa.KodeMK, kelas.Jam, kelas.Hari FROM mkmahasiswa INNER JOIN kelas ON mkmahasiswa.KodeMK = kelas.KodeMK WHERE mkmahasiswa.nim = '$kode1'");
                    $nomor = 1;
                    while($data = mysqli_fetch_array($query_mysqli)){
                ?>
                <tr>
                    <td align="center"><?php echo $nomor++; ?></td>
                    <td><?php 
                          $mk = $data['KodeMK'];
                          $query_mk = mysqli_query($koneksi, "SELECT NamaMK FROM matakuliah WHERE KodeMK = $mk");
                          while ($dmk = mysqli_fetch_array($query_mk)) {
                            echo $dmk['NamaMK'];
                          }
                        ?></td>
                    <td><?php 
                          $kmk = $data['KodeMK'];
                          $query_dosen = mysqli_query($koneksi, "SELECT Dosen FROM matakuliah WHERE KodeMK = $kmk");
                          while ($nipd = mysqli_fetch_array($query_dosen)) {
                            $nip = $nipd['Dosen'];
                            $query_nip = mysqli_query($koneksi, "SELECT nama FROM dosen WHERE nip = $nip");
                            while ($nd =mysqli_fetch_array($query_nip)) {
                              echo $nd['nama'];
                            }
                          }
                        ?></td>
                    <td><?php 
                          echo $data['Jam'];
                        ?></td>
                    <td><?php 
                          echo $data['Hari'];
                        ?></td>
                </tr>
                <?php } ?>
                </tbody>
            </table>
            <?php 
              }elseif ($otoritas =="Dosen") {
                ?>
                <br><br>
                <a href="jadwalbaru.php">Jadwal Baru</a>
                  <table border="1" width="100%" class="tabel" style="margin-top:5px">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Matakuliah</th>
                    <th>Nama Dosen</th>
                    <th>Jam</th>
                    <th>Hari</th>
                    <th>Opsi</th>
                </tr>
                </thead>
                <tbody id="tabel">
                <?php 
                    include "koneksi.php";
                    $kode1 = $data['KodeUser'];
                    $query_mysqli = mysqli_query($koneksi, "SELECT kelas.KodeKelas, matakuliah.KodeMK, kelas.Jam, kelas.Hari, kelas.Status FROM matakuliah INNER JOIN kelas ON matakuliah.KodeMK = kelas.KodeMK WHERE matakuliah.Dosen = '$kode1'");
                    $nomor = 1;
                    while($data = mysqli_fetch_array($query_mysqli)){
                      if ($data['Status'] == "Tersedia") {
                    ?>
                <tr>
                    <td align="center"><?php echo $nomor++; ?></td>
                    <td><?php 
                          $mk = $data['KodeMK'];
                          $query_mk = mysqli_query($koneksi, "SELECT NamaMK FROM matakuliah WHERE KodeMK = $mk");
                          while ($dmk = mysqli_fetch_array($query_mk)) {
                            echo $dmk['NamaMK'];
                          }
                        ?></td>
                    <td><?php 
                          $kmk = $data['KodeMK'];
                          $query_dosen = mysqli_query($koneksi, "SELECT Dosen FROM matakuliah WHERE KodeMK = $kmk");
                          while ($nipd = mysqli_fetch_array($query_dosen)) {
                            $nip = $nipd['Dosen'];
                            $query_nip = mysqli_query($koneksi, "SELECT nama FROM dosen WHERE nip = $nip");
                            while ($nd =mysqli_fetch_array($query_nip)) {
                              echo $nd['nama'];
                            }
                          }
                        ?></td>
                    <td><?php 
                          echo $data['Jam'];
                        ?></td>
                    <td><?php 
                          echo $data['Hari'];
                        ?></td>
                    <td align="center">
                        <?php echo "<a href='editkelas.php?kode=$data[KodeKelas]'>Edit</a> | <a href='hapuskelas.php?kode=$data[KodeKelas]'>Hapus</a>"; ?>
                    </td>
                </tr>
                <?php } }}?>
                </tbody>
            </table>
        </div>
    </body>
    
</html>