<!DOCTYPE html>
<html>
<head>
    <title>Soal praktikum Web</title>
</head>
<body>
<h1>Soal Praktikum Web</h1>
<h1>Halaman 42</h1>
<button onclick="document.location='index.php'"type="button">KEMBALI</button>
<h2>No.7</h2>
<br>


<?php
// split the phrase by any number of commas or space characters,
// which include " ", \r, \t, \n and \f
$Nama = "Institut Teknologi dan Bisnis Kalbis";
echo  "Data yang tersimpan adalah => ". $Nama;
$keywords = preg_split("/[\s,]+/", $Nama);

echo "<br>";
$arraycount = count($keywords);


echo "<br><br>Didalam Program Diproses dan diubah menjadi<br><br>";
for ( $i=0; $i < $arraycount; $i++ ){


    echo $keywords[$i]." <br>";


}


?>





</body>


</html>