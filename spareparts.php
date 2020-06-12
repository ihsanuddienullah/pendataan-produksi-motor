<?php
  include "koneksi.php";

  
  $merek  = $_REQUEST['merek'];
  $harga  = $_REQUEST['harga'];
  $jml_mrk  = $_REQUEST['jumlahmerek'];
  $result = mysqli_query($koneksi,"INSERT INTO sparepart (merek, harga, jumlah) VALUES ('$merek', '$harga', '$jml_mrk')");
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