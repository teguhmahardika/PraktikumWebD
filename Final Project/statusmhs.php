<?php

  session_start();
  include 'koneksi.php';

  $nim = $_POST['NIM'];
  $Status = $_POST['Status'];

  $data = mysqli_query($koneksi,"UPDATE mahasiswa set Status='$Status' WHERE nim='$nim'");
  if($data) {
    echo "<script>
    alert ('Berhasil.');
    location.href='mahasiswa.php';
  </script>"; 
  }else{
    echo "<script>
      alert ('Gagal.');
      location.href='mahasiswa.php';
    </script>"; 
  }

?>