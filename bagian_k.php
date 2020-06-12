<?php
  include "koneksi.php";

  $jml_bk  = $_REQUEST['keuntungan'];
  $result = mysqli_query($koneksi,"INSERT INTO bagian_k (keuntungan) VALUES ('$jml_bk')");
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