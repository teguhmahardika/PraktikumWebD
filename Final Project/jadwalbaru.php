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
                <br><br>
                <a href="jadwalbaru.php">Jadwal Baru</a>
                <form action="buatjadwal.php" method="post" name="editkelas">
                <table id="tabel" style="padding-top: 20px" align="center">
                    <tr>
                      <th align="center" colspan="3" style="font-size: 25px;">Input Jadwal Kelas</th>
                    </tr>
                        <tr>
                            <td style="font-size: 20px; padding-right: 20px">Matakuliah</td>
                            <td>
                                <select name="KodeMK" style="width: 216px">
                                    <option value=""></option>
                                    <?php 
                                        include "koneksi.php";
                                        $nip = $data['KodeUser'];
                                        $sql = mysqli_query($koneksi,"SELECT * FROM matakuliah WHERE Dosen = '$nip'");

                                        while($data=mysqli_fetch_array($sql))
                                        {
                                            echo"<option value='$data[0]'> $data[1]</option>";  
                                        }
                                    ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td style="font-size: 20px; padding-right: 20px">Jam</td>
                            <td><input type="text" name="jam" style="width: 216px; height: 25px"></td>
                            <td># 08:00/13:00</td>
                        </tr>
                        <tr>
                            <td style="font-size: 20px; padding-right: 20px">Hari</td>
                            <td>
                                <select name="Hari" style="width: 216px">
                                    <option value="">---</option>
                                    <option value="Senin">Senin</option>
                                    <option value="Selasa">Selasa</option>
                                    <option value="Rabu">Rabu</option>
                                    <option value="Kamis">Kamis</option>
                                    <option value="Jumat">Jumat</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                          <td></td>
                          <td align="right"><input type="submit" name="Input" value="Input"></td>
                        </tr>
                </tbody>
                </form>
            </table>
        </div>
    </body>
    
</html>