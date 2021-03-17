<html>
<head>
<title>
SOAL PRAKTIKUM : DATE TIME , INCLUDE REQUIRE
</title>
<?php
include 'include/bilangan.php';
include 'include/operation.php';
include 'include/footer.php'

?>
</head>
<body>
<h1>Soal Praktikum Web</h1>
<h1>Halaman 47</h1>
<button onclick="document.location='index.php'"type="button">KEMBALI</button>
<h2>No.1</h2>
<?php




?>
<form action="<?php $_PHP_SELF ?>" method="POST">
<table border="10">
<tbody>
  <tr>
    <td>Data Operasi Penghitungan</td>
  </tr>
  <tr>
    <td>Bilangan1</td>
    <td>
      <?php
      echo $bilangan1;
      ?>
    </td>
  </tr>
  <tr>
    <td>Bilangan2</td>
    <td>
      <?php
      echo $bilangan2;
      ?>
    </td>
  </tr>
</tbody>
</table>







    <input type="submit" name="plus" value="plus"  />
    <input type="submit" name="minus" value="minus"  />
    <input type="submit" name="perkalian" value="perkalian"  />
    <input type="submit" name="pembagian" value="pembagian" />
</form>


<?php
if(isset($_POST['plus'])) {
plus($bilangan1,$bilangan2);
}
if(isset($_POST['minus'])) {
minus($bilangan1,$bilangan2);
}
if(isset($_POST['perkalian'])) {
perkalian($bilangan1,$bilangan2);
}
if(isset($_POST['pembagian'])) {
pembagian($bilangan1,$bilangan2);
}


?>
<?php
echo "<br><br>";

footer();

?>

</body>

</html>