<?php

include ('connect.php');

$query = mysqli_query($connect,"select * FROM pelajar");
$results = mysqli_fetch_all($query, MYSQLI_ASSOC);
?>
<HTMl>
<body>
    <a href="add.php">Tambah Data</a>

    <br/><br/>

    <table border="1">
     <tr>
        <th>id</th>
        <th>nama</th>
        <th>kelas</th>
        <th>jurusan</th>
        <th>alamat</th>
        <th>pilihan</th>
     </tr>
     <?php foreach($results as $result):?>
     <tr>
      <td><?php echo $result['id']?></td>
      <td><?php echo $result['nama']?></td>
      <td><?php echo $result['kelas']?></td>
      <td><?php echo $result['jurusan']?></td>
      <td><?php echo $result['alamat']?></td>
      <td>
        <a href="edit.php?id=<?php echo $result['id']?>">Edit</a>
      </td>
     </tr>
    <?php endforeach; ?>
    </table>
</body>
</HTMl>