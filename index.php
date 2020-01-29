<?php
include('koneksi.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap.css">
    <title>LASMI MAHASISWA</title>
</head>

<body>
  <nav class="navbar nav-expand-lg navbar-light bg-light">
    <div class="container">
         <a href="#" class="navbar-brand">CRUD KARYAWAN</a>
         <button class="navbar-toggler" type="button" data-toggle="navkonten" aria-expanded="false" aria-label="Toggle navigation">
             <span class="navbar-toggler-icon"></span>
         </button>
    </div>
  </nav>
  <div class="container">
       <h2>Daftar karyawan</h2>
       <hr>
       <table class="table striped table-hover table-sm table-bordered">
           <thead class="thead-dark">
               <tr>
                   <th>ID</th>
                   <th>NAMA</th>
                   <th>ALAMAT</th>
                   <th>UMUR</th>
                   <th>JENIS_KELAMIN</th>
            
               </tr>
           </thead>
           <tbody>
               <tr>
                   <td></td>
                   <td></td>
                   <td></td>
                   <td></td>
                   <td></td>
                   <td></td>
               </tr>
           </tbody>
       </table>
  </div>  
</body>
</html>