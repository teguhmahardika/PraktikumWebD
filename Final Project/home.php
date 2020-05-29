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

                <!-- DOSEN -->
                    <form name="edit" action="prosesdaftardosen.php" method="POST">
                    <table style="margin-top: 15px" align="center">
                        <tr>
                            <th align="center" colspan="2" style="font-size: 25px">Form Pendaftaran Dosen</th>
                        </tr>
                        <tr>
                            <td style="font-size: 20px; padding-right: 20px">NIP</td>
                            <td><input type="text" name="NIP" style="width: 350px; height: 25px"></td>
                        </tr>
                        <tr>
                            <td style="font-size: 20px; padding-right: 20px">Nama</td>
                            <td><input type="text" name="nama" style="width: 350px; height: 25px" ></td>
                        </tr>
                        <tr>
                            <td style="font-size: 20px; padding-right: 20px">Email</td>
                            <td><input type="text" name="email" style="width: 350px; height: 25px"></td>
                        </tr>
                        <tr>
                            <td style="font-size: 20px; padding-right: 20px">JK</td>
                            <td>
                                <input type='radio' name='jk' value='L' checked='checked'>Laki-laki
                                <input type="radio" name="jk" value="P">Perempuan
                            </td>
                        </tr>
                        <tr>
                            <td style="font-size: 20px; padding-right: 20px">Jabatan Terakhir</td>
                            <td><input type="text" name="jabatan" style="width: 350px; height: 25px" ></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td align="right"><input type="submit" name="edit" value="Daftar"></td>
                        </tr>
                       
            </table>
            </form>
        </div>
    </body>    
</html>