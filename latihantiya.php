<!DOCTYPE html>
<html lang="en">
<head>
    <title>FORMULIR</title>
    <body style="background: red">
    <h1>FORMULIR PENDAFTARAN</h1> 
    <table border="0">
<form method="post" action="cekformulir.php">
    <table width="523" border="0" cellspacing="5" cellpadding="2">
 <tr>
     <td>NO PENDAFTARAN<td>:<td><input type="text" name="txtpendaftaran"></td>
 </tr>
 <tr>
     <td>NISN<td>:<td><input type="text" name="txtnisn"></td>
 </tr>
 <tr>
     <td>NAMA<td>:<td><input type="text" name="txtnama"></td>
 </tr>
 <tr>
     <td>ALAMAT<td>:<td><input type="text" name="txtalamat"></td>
 </tr>
 <tr>
     <td>TEMPAT LAHIR<td>:<td><input type="text" name="txttempat lahir"></td>
 </tr>
 <tr>
     <td>TANGGAL LAHIR<td>:<td><input type="text" name="txttanggal lahir"></td>
 </tr>
 <tr>
     <td>ASAL SEKOLAH<td>:<td><input type="text" name="txtasal sekolah"></td>
 </tr>
 <tr>
     <td>JENIS KELAMIN<td>:<td>
     <input type="radio" name="jk" value="laki-laki"/>laki-laki<br>
     <input type="radio" name="jk" value="perempuan"/>perempuan<br>
 </tr>
 <tr>
     <td>JURUSAN<td>:<td>
         <select>
             <option>RPL</option>
             <option>TKJ</option>
         </select>
 </tr>
 <tr>
     <td>NAMA AYAH<td>:<td><input type="text" name="nama ayah"></td>
 </tr>
 <tr>
     <td>PEKERJAAN AYAH<td>:<td><input type="text" name="pekerjaan ayah"></td>
 </tr>
 <tr>
     <td>NAMA IBU<td>:<td><input type="text" name="nama ibu"></td>
 </tr>
 <tr>
     <td>PEKERJAAN IBU<td>:<td><input type="text" name="pekerjaan ibu"></td>
 </tr>
 <tr>
     <td>PENGHASILAN ORANG TUA<td>:<td><input type="text" penghasilan orang tua></td>
 </tr>
 <tr>
     <td><input type="submit" name="submit" value="SIMPAN">
    <td><input type="reset" name="reset" value="BATAL">
     </td>
 </tr>
     </table>
 </form>
</body>