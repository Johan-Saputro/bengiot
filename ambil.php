<?php
include ('koneksi.php');
$menu = array();
$query = mysqli_query($koneksi, "SELECT * FROM penjualanbarang"); 
while ($data = mysqli_fetch_assoc($query)) {
$menu[]=$data['jumlah'];}
$a=join(",",$menu);
?>