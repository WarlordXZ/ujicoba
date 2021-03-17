<!DOCTYPE html>

<html>
<head>
    <title>Soal praktikum Web</title>
    <style type="text/css">
    .tbl  {border-collapse:collapse;border-spacing:0;}
    .tbl .tbljdl{color:#fe0000;text-align:left;vertical-align:top}
</style>
</head>
<body>
<h1>Soal Praktikum Web</h1>
<h1>Halaman 35-36</h1>
<button onclick="document.location='index.html'"type="button">KEMBALI</button>
<h2>No.3</h2>
<br>
<form action="<?php $_PHP_SELF ?>" method="POST">
<table class="tbl" border="10">
<tbody>
  <tr>
    <td class="tbljdl"colspan="3">Pendaftaran Mahasiswa Berprestasi</td>
  </tr>
  <tr>
    <td>NRP</td>
    <td>:</td>
    <td><input type="text" id="nrp" name="nrp"></td>
  </tr>
  <tr>
    <td>Nama Mahasiswa</td>
    <td>:</td>
    <td><input type="text" id="nama" name="nama"></td>
  </tr>
  <tr>
    <td>Kelas</td>
    <td>:</td>
    <td><input type="text" id="kelas" name="kelas"></td>
  </tr>
  <tr>
    <td>Prodi</td>
    <td>:</td>
    <td><input type="text" id="prodi" name="prodi"></td>
  </tr>
  <tr>
    <td>Prestasi</td>
    <td>:</td>
    <td><input type="text" id="prestasi" name="prestasi"></td>
  </tr>
  <tr>
    <td colspan="2"></td>
    <td><input type="submit" value="Submit"></td>
  </tr>
</tbody>
</table>
</form>


<?php
$NRP = "";
$Nama = "";
$Kelas = "";
$Prodi = "";
$Prestasi = "";
if( isset($_POST["nrp"]) || isset($_POST["nama"] ) || isset($_POST["kelas"] ) || isset($_POST["prodi"] ) || isset($_POST["prestasi"] )    )
{
    $NRP = $_POST["nrp"];
    $Nama = $_POST["nama"];
    $Kelas = $_POST["kelas"];
    $Prodi = $_POST["prodi"];
    $Prestasi = $_POST["prestasi"];
}
echo "<br><br><br>";

echo "
<pre>
              Pendaftaran Siswa Berprestasi



    NRP                 : $NRP 


    Nama Mahasiswa      : $Nama 


    Kelas               : $Kelas 


    Prodi               : $Prodi


    Prestasi            : $Prestasi</pre>" ;


echo"<br><br><br><br>"


?>


</body>


</html>




