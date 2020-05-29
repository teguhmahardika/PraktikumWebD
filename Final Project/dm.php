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
            
            <table border="1" width="100%" class="tabel" style="margin-top:5px">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Matakuliah</th>
                    <th>Nama Dosen</th>
                </tr>
                </thead>
                <tbody id="tabel">
                <?php 
                    include "koneksi.php";
                    $query_mysqli = mysqli_query($koneksi, "SELECT * FROM matakuliah")or die(mysql_error());
                    $nomor = 1;
                    while($data = mysqli_fetch_array($query_mysqli)){

                      
                ?>
                <tr>
                    <td align="center"><?php echo $nomor++; ?></td>
                    <td><?php 
                          echo $data['NamaMK'];
                        ?></td>
                    <td><?php 
                          $nip = $data['Dosen'];
                          $query_dosen = mysqli_query($koneksi, "SELECT nama FROM dosen WHERE nip = $nip");
                          while ($nipd = mysqli_fetch_array($query_dosen)) {
                            echo $nipd['nama'];
                          }
                        ?></td>
                </tr>
                <?php } ?>
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
    <!-- Filter -->
    <script type="text/javascript">
      $(document).ready(function() {
        $("#agama, #jk").change(function() {
          var cari  = $("#cari").val(); 
          var nim   = $("#nim").val(); 
          var jk    = $("#jk").val();
          var agama = $("#agama").val();
          var nama  = $("#nama").val();
          $("#tabel").html("<tr><td colspan=10><img src='img/loading.gif'/></td></tr>")  
          $.ajax({
              type:"get",
              url:"mhsChangeFilter.php",
              data:"cari="+cari+"&nim="+nim+"&jk="+jk+"&agama="+agama+"&nama="+nama,
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
          var nim   = $("#nim").val(); 
          var jk    = $("#jk").val();
          var agama = $("#agama").val();
          var nama  = $("#nama").val();
          $("#tabel").html("<tr><td colspan=10><img src='img/loading.gif'/></td></tr>")  
          $.ajax({
              type:"get",
              url:"mhsOrderNama.php",
              data:"cari="+cari+"&nim="+nim+"&jk="+jk+"&agama="+agama+"&nama="+nama,
              success: function(data){
                $("#tabel").html(data);
              }
            });
          });
      });
    </script>
    <!-- Sorting Nim -->
    <script type="text/javascript">
      $(document).ready(function() {
        $("#nim").change(function() {
          var cari  = $("#cari").val(); 
          var nim   = $("#nim").val(); 
          var jk    = $("#jk").val();
          var agama = $("#agama").val();
          var nama  = $("#nama").val();
          $("#tabel").html("<tr><td colspan=10><img src='img/loading.gif'/></td></tr>")  
          $.ajax({
              type:"get",
              url:"mhsOrderNim.php",
              data:"cari="+cari+"&nim="+nim+"&jk="+jk+"&agama="+agama+"&nama="+nama,
              success: function(data){
                $("#tabel").html(data);
              }
            });
          });
      });
    </script>
    
</html>