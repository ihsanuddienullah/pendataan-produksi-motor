<?php
  include "koneksi.php";

  $jml_gp  = $_REQUEST['jumlahgp'];
  $result = mysqli_query($koneksi,"INSERT INTO gudang_p (jumlah) VALUES ('$jml_gp')");
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