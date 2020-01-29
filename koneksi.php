<?php
// koneksi kedatabase mysql
$connect = mysqli_connect("localhost","root","","latihan");

// cek jika koneksi gagal ke mysql,maka tampil pesan berikut
if(mysqli_connect_error()){
    echo "gagal melakukan koneksi ke MYSQL:" . mysqli_connect_error();
}
?>