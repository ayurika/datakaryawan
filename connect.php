<?php
$connect = mysqli_connect ('localhost','root','','siswa');
if ($connect)
   echo "berhasil";
else
   echo "maaf koneksi gagal";

?>
