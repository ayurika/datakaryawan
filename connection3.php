<?php
echo $_GET['id'];

$id = $_GET['id'];
include('connection.php');

$query = mysqli_query($connect,"SELECT*FROM pelajar WHERE id='$id' LIMIT 1");
$result =mysqli_fetch_all($query,MYSQLI_ASSOC);


?>

<html>
    <form action="update.php" methon="post">

    <input type="hidden" name="id" value=<?php echo $result[0]['id']?>/>

    <label>Nama</label><br/>
    <input type="text" name="nama" value="<?php echo $result[0]['nama']?>"/>
    <br/><br/>

    <label>Kelas</label><br/>
    <input type="text" name="kelas" value="<?php echo $result[0]['kelas']?>"/>
    <br/><br/>

    <label>jurusan</label><br/>
    <input type="text" name="jurusan" value="<?php echo $result[0]['jurusan']?>"/>
    <br/><br/>

    <label>Alamat</label><br/>
    <textarea name="alamat" cols="30" rows="10"><?php echo $result[0]['alamat']?></textarea>
    <br/><br/>

    <button type="submit">perbaharui</button>

  </form>
</html>