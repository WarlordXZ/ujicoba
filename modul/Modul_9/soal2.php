<html>
<head>
<title>
SOAL PRAKTIKUM : DATE TIME , INCLUDE REQUIRE
</title>
<?php
include 'include/datamahasiswa.php';


?>
</head>
<body>
<h1>Soal Praktikum Web</h1>
<h1>Halaman 47</h1>
<button onclick="document.location='index.php'"type="button">KEMBALI</button>
<h2>No.2</h2>
<br><br>
<h2>Berikut data murid<h2>
<table border="10">
<thead>
  <tr>
    <th>NRP</th>
    <th>Nama Mahasiswa</th>
    <th>Tanggal Lahir</th>
  </tr>
</thead>
<tbody>
  <tr>
    <td>2110141040</td>
    <td>Jeni Abdulrokhim</td>
    <td>11-01-1997</td>
  </tr>
  <tr>
    <td>2110141042</td>
    <td>Afif Rusdiawan Akbar</td>
    <td>10-05-1995</td>
  </tr>
  <tr>
    <td>2110141043</td>
    <td>Izzatul Millah</td>
    <td>27-04-1996</td>
  </tr>
  <tr>
    <td>2110141044</td>
    <td>Zharfan Abshar Anantha</td>
    <td>31-05-1996</td>
  </tr>
  <tr>
    <td>2110141045</td>
    <td>Muhamad Taufiqurachman</td>
    <td>03-05-1995</td>
  </tr>
  <tr>
    <td>2110141047</td>
    <td>Labba Awwabi</td>
    <td>17-08-1996</td>
  </tr>
</tbody>
</table>
<br><br>
<h2>Dibawah ini akan ditampilkan data Mahasiswa yang memiliki NRP ganjil berdasarkan data diatas menggunakan program</h2>

<?php 
$Datacount = 0 ;
$counter = count($nrp);
for($i=0;$i<$counter;$i++){

    if($nrp[$i] % 2 != 0){
        $Datacount++;
    
        echo "<br><br>Data ke-". $Datacount;
        echo "<br><br>NRP = " . $nrp[$i];
        echo "<br>Nama = ". $nama[$i];
        echo "<br>Tanggal Lahir= " . $tl[$i];
        echo "<br><br>";

    }


}


?>

</body>

</html>