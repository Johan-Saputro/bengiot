<?php
include 'koneksi.php';
$brand = $_POST['brand'];
$jumlah = $_POST['jumlah'];
$edit = "UPDATE penjualanbarang set jumlah='$jumlah' WHERE brand='$brand'";
$eksekusi = mysqli_query($koneksi, $edit);
header("location:update.php");
?>