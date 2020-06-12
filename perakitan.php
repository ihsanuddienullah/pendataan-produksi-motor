<?php
  include "koneksi.php";

  $jml_prk  = $_REQUEST['jumlahperakitan'];
  $result = mysqli_query($koneksi,"INSERT INTO perakitan (jumlah) VALUES ('$jml_prk')");
  if ($result) {
    /*header("location:index.php");
    echo "Input berhasil";*/
    echo "<script>alert('Input berhasil di tambahkan!');history.go(-1);</script>";
  } else {
    /*echo "Input gagal";*/
    echo "<script>alert('Input Gagal!');history.go(-1);</script>";
  }
  mysqli_close($koneksi);
?>