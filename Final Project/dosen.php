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
            <table width="100%" style="color:#fff; margin-top:5px;">
            <table width="100%" style="color:#fff; margin-top:5px;">
                <tr>
                    <td>
                        <b>NIP</b>
                        <select id="nip" class="input-form">
                            <option value="asc">--- sorting by nim</option>
                            <option value="asc">Urutkan ascending</option>
                            <option value="desc">Urutkan descending</option>
                        </select>
                    </td>
                    <td>
                        <b>Nama</b>
                        <select id="nama" class="input-form">
                            <option value="asc">--- sorting by nama</option>
                            <option value="asc">Urutkan dari a-z</option>
                            <option value="desc">Urutkan dari z-a</option>
                        </select>
                    </td>
                    <td>
                        <b>Jenis Kelamin</b>
                        <select id="jk" class="input-form">
                            <option value="all">--- filter by jk</option>
                            <option value="p">Perempuan</option>
                            <option value="l">Laki-laki</option>
                        </select>
                    </td>
                    <td>
                        <b>Jabatan Terakhir</b>
                        <select id="jabatan" class="input-form">
                            <option value="all">--- filter by jabatan</option>
                            <option value="LEKTOR">LEKTOR</option>
                            <option value="LEKTOR KEPALA">LEKTOR KEPALA</option>
                            <option value="ASISTEN AHLI">ASISTEN AHLI</option>
                            <option value="TENAGA PENGAJAR">TENAGA PENGAJAR</option> 
                        </select>
                    </td>
                    <td>
                        <b>Pencarian</b>
                        <input type="text" class="input-form" id="cari" style="width:225px;" placeholder="Cari nama/nim">
                    </td>
                </tr>
            </table>
            <form action="statusdos.php" method="POST" name="statdos">
            <table border="1" width="100%" class="tabel" style="margin-top:5px">
                <thead>
                <tr>
                    <th>No</th>
                    <th>NIP</th>
                    <th>Nama</th>
                    <th>JK</th>
                    <th>Email</th>
                    <th>Jabatan Terakhir</th>
                    <?php 
                      include "koneksi.php";
                      if ($otoritas == "Staff") {
                    ?>
                      <th>Status</th>
                      <th>Opsi</th>
                    
                    <?php
                      }
                    ?>
                </tr>
                </thead>
                <tbody id="tabel">
                <?php 
                    include "koneksi.php";
                    $query_mysqli = mysqli_query($koneksi, "SELECT * FROM dosen")or die(mysql_error());
                    $nomor = 1;
                    while($data = mysqli_fetch_array($query_mysqli)){
                ?>
                <tr>
                    <td align="center"><?php echo $nomor++; ?></td>
                    <td><?php echo $data['nip']; ?></td>
                    <td><?php echo $data['nama']; ?></td>
                    <td align="center"><?php echo $data['jk']; ?></td>
                    <td><?php echo $data['email']; ?></td>
                    <td><?php echo $data['jabatan_terakhir']; ?></td>
                    <?php 
                      include "koneksi.php";
                      if ($otoritas == "Staff") {
                    ?>
                    <td><?php echo $data['Status']; ?></td>

                      <td>
                        <?php
                          echo "<a href='editdose.php?kode=$data[nip]'>Edit</a>";
                        }
                        ?>
                      </td>              
                </tr>
                <?php } ?>
                </tbody>
            </table>
            </form>
        </div>
    </body>
    <script src="js/jquery.js"></script>
    <!-- Pencarian -->
    <script type="text/javascript">
      $(document).ready(function() {
        $("#cari").keyup(function() {
          var cari  = $("#cari").val(); 
          var nip   = $("#nip").val(); 
          var jk    = $("#jk").val();
          var jabatan = $("#jabatan").val();
          var nama  = $("#nama").val();
          if (cari != ""){
            $("#tabel").html("<tr><td colspan=10><img src='img/loading.gif'/></td></tr>") 
            $.ajax({
              type:"get",
              url:"dosenKeyup.php",
              data:"cari="+cari+"&nip="+nip+"&jk="+jk+"&jabatan="+jabatan+"&nama="+nama,
              success: function(data){
                $("#tabel").html(data);
              }
            });
          }
          else
          {
            $.ajax({
              url:"dosenKeyup.php",
              data:"cari="+cari+"&nip="+nip+"&jk="+jk+"&jabatan="+jabatan+"&nama="+nama,
              cache: false,
              success: function(msg){
                $("#tabel").html(msg);
              }
            });
          }
        });
      });
    </script>
    <!-- Filter -->
    <script type="text/javascript">
      $(document).ready(function() {
        $("#jabatan, #jk").change(function() {
          var cari  = $("#cari").val(); 
          var nip   = $("#nip").val(); 
          var jk    = $("#jk").val();
          var jabatan = $("#jabatan").val();
          var nama  = $("#nama").val();
          $("#tabel").html("<tr><td colspan=10><img src='img/loading.gif'/></td></tr>")  
          $.ajax({
              type:"get",
              url:"dosenChangeFilter.php",
              data:"cari="+cari+"&nip="+nip+"&jk="+jk+"&jabatan="+jabatan+"&nama="+nama,
              success: function(data){
                $("#tabel").html(data);
              }
            });
          });
      });
    </script>
    <!-- Sorting Nama -->
    <script type="text/javascript">
      $(document).ready(function() {
        $("#nama").change(function() {
          var cari  = $("#cari").val(); 
          var nip   = $("#nip").val(); 
          var jk    = $("#jk").val();
          var jabatan = $("#jabatan").val();
          var nama  = $("#nama").val();
          $("#tabel").html("<tr><td colspan=10><img src='img/loading.gif'/></td></tr>")  
          $.ajax({
              type:"get",
              url:"dosenOrderNama.php",
              data:"cari="+cari+"&nip="+nip+"&jk="+jk+"&jabatan="+jabatan+"&nama="+nama,
              success: function(data){
                $("#tabel").html(data);
              }
            });
          });
      });
    </script>
    <!-- Sorting Nip -->
    <script type="text/javascript">
      $(document).ready(function() {
        $("#nip").change(function() {
          var cari  = $("#cari").val(); 
          var nip   = $("#nip").val(); 
          var jk    = $("#jk").val();
          var jabatan = $("#jabatan").val();
          var nama  = $("#nama").val();
          $("#tabel").html("<tr><td colspan=10><img src='img/loading.gif'/></td></tr>")  
          $.ajax({
              type:"get",
              url:"dosenOrderNip.php",
              data:"cari="+cari+"&nip="+nip+"&jk="+jk+"&jabatan="+jabatan+"&nama="+nama,
              success: function(data){
                $("#tabel").html(data);
              }
            });
          });
      });
    </script>
</html>