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
                    $kode1 = $data['KodeUser'];

                    $query_max = mysqli_query($koneksi,"SELECT * FROM mkmahasiswa WHERE NIM = '$kode1'");
                    $max = 0;
                    while ($batasmk = mysqli_fetch_array($query_max)) {
                        $max++;
                    }
                    //MAX 5 MATKUL
                    if ($max<5) {
                    $query_mysqli = mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE nim = $kode1")or die(mysql_error());
                    while($data1 = mysqli_fetch_array($query_mysqli)){
                ?>
            <form name="pendaftaranmk" action="prosespm.php" method="POST">
            <table style="margin-top: 15px" align="center">
                <tr>
                    <th align="center" colspan="2" style="font-size: 25px">Pendaftaran Matakuliah</th>
                </tr>
                 <tr>
                    <td style="font-size: 20px; padding-right: 20px">Matakuliah</td>
                    <td>
                        <select name="KodeMK">
                            <option value=""></option>
                            <?php 
                                include "koneksi.php";
                                $sql = mysqli_query($koneksi,"SELECT * FROM matakuliah");

                                while($data=mysqli_fetch_array($sql))
                                {
                                    echo"<option value='$data[0]'> $data[1]</option>";  
                                }
                            ?>
                        </select>
                    </td>
                </tr>
                 <tr>
                    <td style="font-size: 20px; padding-right: 20px"></td>
                    <td><input type="hidden" name="nim" style="width: 350px; height: 25px" value="<?php echo $data1['nim'] ?>"></td>
                </tr>
                <tr>
                    <td></td>
                    <td align="right"><input type="submit" name="prosespm" value="Input"></td>
                </tr>
                <?php } 
                    }else{
                ?>
                    
                <!-- MAX 5 MATKUL -->
                <table style="margin-top: 15px" align="center">
                <tr>
                    <th align="center" style="font-size: 25px">Pendaftaran Matakuliah</th>
                </tr>
                <tr>
                    <td align="center">ANDA SUDAH MENGAMBIL 5 MATAKULIAH.</td>
                </tr>
                <?php
                    }
                ?>
            </table>
            </form>
        </div>
    </body>    
</html>