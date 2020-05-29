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
                    $kode1 = $_GET['kode'];
                    $query_mysqli = mysqli_query($koneksi, "SELECT * FROM kelas WHERE KodeMK ='$kode1'");
                    while($data1 = mysqli_fetch_array($query_mysqli)){
                      $query_nama = mysqli_query($koneksi,"SELECT * FROM matakuliah WHERE KodeMK ='$kode1'");
                      $nama = mysqli_fetch_array($query_nama);
                ?>
                <form action="editkls.php" method="post" name="editkelas">
                <table id="tabel" style="padding-top: 20px" align="center">
                    <tr>
                      <th align="center" colspan="2" style="font-size: 25px;">Edit Jadwal Kelas</th>
                    </tr>
                        <tr>
                            <td><input type="hidden" name="kodemk" style="width: 350px; height: 25px" value="<?php echo $data1['1'] ?>"></td>
                            <td><input type="hidden" name="kode" style="width: 350px; height: 25px" value="<?php echo $data1['0'] ?>"></td>
                        </tr>
                        <tr>
                            <td style="font-size: 20px; padding-right: 20px">Matakuliah</td>
                            <td><input type="text" name="nama" readonly style="width: 350px; height: 25px" value="<?php echo $nama['1'] ?>"></td>
                        </tr>
                        <tr>
                            <td style="font-size: 20px; padding-right: 20px">Jam</td>
                            <td><input type="text" name="jam" style="width: 350px; height: 25px" value="<?php echo $data1['Jam'] ?>"></td>
                        </tr>
                        <tr>
                            <td style="font-size: 20px; padding-right: 20px">Hari</td>
                            <td><input type="text" name="hari" style="width: 350px; height: 25px" value="<?php echo $data1['Hari'] ?>"></td>
                        </tr>
                        <tr>
                          <td></td>
                          <td align="right"><input type="submit" name="Edit" value="Edit"></td>
                        </tr>
                <?php
                  }
                ?>
                </tbody>
                </form>
            </table>
        </div>
    </body>
    
</html>