<?php
echo $_GET['id'];

$id = $_GET['id'];
include ('koneksi.php');

$query = mysqli_query($connect,"SELECT * FROM karyawan WHERE id='$id' LIMIT 1");
$result =mysqli_fetch_all($query, MYSQLI_ASSOC);


?>

<html>
    <form action="update.php" method="post">
    <input type="hidden" name="id" value=<?php echo $result[0]['id']?>>

    <label>Nama</label><br/>
    <input type="text" name="nama" value="<?php echo $result[0]['nama']?>"/>
    <br/><br/>

    <label>jabatan</label><br/>
    <input type="text" name="jabatan" value="<?php echo $result[0]['jabatan']?>"/>
    <br/><br/>

    <label>Alamat</label><br/>
    <textarea name="alamat" cols="30" rows="10"><?php echo $result[0]['alamat']?></textarea>
    <br/><br/>

    <label>umur</label><br/>
    <input type="text" name="umur" value="<?php echo $result[0]['umur']?>"/>
    <br/><br/>

    <label>jenis kelamin</label><br/>
    <select name="jenis_kelamin">
          <option value="pria"<?php echo ($result[0]['jenis_kelamin']=='pria')
          ? 'selected':'';?>>pria</option>
          <option value="wanita"<?php echo ($result[0]['jenis_kelamin']=='wanita')
          ? 'selected':'';?>>wanita</option>
    </select>
    

    <button type="submit">perbaharui</button>

  </form>
</html>