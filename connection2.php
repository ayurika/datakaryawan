<?php
include ('connection.php');
$query = mysqli_query($connect,"SELECT*FROM data karyawan");
$result = mysqli_fetch_all($squery, MYSQLI_ASSOC);
?>
<html>
<body>
    <a href="add.php">Tambah Data</a>

    <br/><br/>

    <table border="1">
         <tr>
             <th>id</th>
             <th>nama</th>
             <th>alamat</th>
             <th>umur</th>
             <th>jenis kelamin</th>
         </tr>
         <?php foreach($results as $result) :?>
            <tr>
                 <td><?php echo $result['id']?></td>
                 <td><?php echo $result['nama']?></td>
                 <td><?php echo $result['kelas']?></td>
                 <td><?php echo $result['sekolah']?></td>
                 <td><?php echo $result['alamat']?></td>
                 <td><?php echo $result['jurusan']?></td>

            </tr>
    </table>
</body>
</html>