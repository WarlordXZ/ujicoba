<!DOCTYPE html>
<html>
<head>
    <title>Soal praktikum Web</title>
</head>
<body>
<h1>Soal Praktikum Web</h1>
<h1>Halaman 35-36</h1>
<button onclick="document.location='index.html'"type="button">KEMBALI</button>
<h2>No.1</h2>
<br>
<form action="<?php $_PHP_SELF ?>" method="POST">
  <label>Masukan Nilai N</label><br>
  <input type="text" id="nilain" name="nilain"><br>
  <label>Pilih Ganjil/Genap</label><br>
  <input type="radio" id="ganjil" name="jenis">
  <label>Ganjil</label>
  <input type="radio" id="genap" name="jenis">
  <label>Genap</label><br>
  <label>Masukan Angka</label><br>
  <input type="text" id="bilangan" name="bilangan"><br><br>
  <input type="submit" value="Submit">
</form>



</body>


</html>