<?php
  include "koneksi.php";

  $jml_mrkt  = $_REQUEST['jumlahmarketing'];
  $result = mysqli_query($koneksi,"INSERT INTO marketing (jumlah) VALUES ('$jml_mrkt')");
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