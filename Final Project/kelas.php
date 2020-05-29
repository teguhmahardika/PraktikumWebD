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
              $otoritas = $data['Otoritas'];
              if ($otoritas == "Mahasiswa") {
            ?>
            
            <table border="1" width="100%" class="tabel" style="margin-top:5px">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Matakuliah</th>
                    <th>Nama Dosen</th>
                    <th>Nama Mahasiswa</th>
                </tr>
                </thead>
                <tbody id="tabel">
                <?php 
                    include "koneksi.php";
                    $query_mysqli = mysqli_query($koneksi, "SELECT * FROM mkmahasiswa WHERE nim = '$kode1'")or die(mysql_error());
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
                          $nim = $data['NIM'];
                          $query_mhs = mysqli_query($koneksi, "SELECT nama FROM mahasiswa WHERE nim = $nim");
                          while ($nimhs = mysqli_fetch_array($query_mhs)) {
                            echo $nimhs['nama'];
                          }
                        ?></td>
                </tr>
                <?php } 
                }elseif ($otoritas=="Dosen") {
                  ?>
                    <table border="1" width="100%" class="tabel" style="margin-top:5px">
                      <thead>
                      <tr>
                          <th>No</th>
                          <th>Nama Matakuliah</th>
                          <th>Nama Dosen</th>
                          <th>Nama Mahasiswa</th>
                      </tr>
                      </thead>
                      <tbody id="tabel">
                      <?php 
                          include "koneksi.php";
                          $query_mysqli = mysqli_query($koneksi, "SELECT matakuliah.KodeMK, mkmahasiswa.NIM FROM matakuliah INNER JOIN mkmahasiswa ON matakuliah.KodeMK = mkmahasiswa.KodeMK WHERE matakuliah.Dosen = '$kode1'");
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
                                $nim = $data['NIM'];
                                $query_mhs = mysqli_query($koneksi, "SELECT nama FROM mahasiswa WHERE nim = $nim");
                                while ($nimhs = mysqli_fetch_array($query_mhs)) {
                                  echo $nimhs['nama'];
                                }
                              ?></td>
                      </tr>
                      <?php
                        }
                       }
                       ?>
                    </tbody>
            </table>
        </div>
    </body>
    <script src="js/jquery.js"></script>
    <!-- Pencarian -->
    <script type="text/javascript">
      $(document).ready(function() {
        $("#cari").keyup(function() {
          var cari  = $("#cari").val(); 
          var nim   = $("#nim").val(); 
          var jk    = $("#jk").val();
          var agama = $("#agama").val();
          var nama  = $("#nama").val();
          if (cari != ""){
            $("#tabel").html("<tr><td colspan=10><img src='img/loading.gif'/></td></tr>") 
            $.ajax({
              type:"get",
              url:"mhsKeyup.php",
              data:"cari="+cari+"&nim="+nim+"&jk="+jk+"&agama="+agama+"&nama="+nama,
              success: function(data){
                $("#tabel").html(data);
              }
            });
          }
          else
          {
            $.ajax({
              url:"mhsKeyup.php",
              data:"cari="+cari+"&nim="+nim+"&jk="+jk+"&agama="+agama+"&nama="+nama,
              cache: false,
              success: function(msg){
                $("#tabel").html(msg);
              }
            });
          }
        });
      });
    </script>
    
</html>