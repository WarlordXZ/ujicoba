<!DOCTYPE html>
<html>
<head>
    <title>Soal praktikum Web</title>
</head>
<body>
<h1>Soal Praktikum Web</h1>
<h1>Halaman 35-36</h1>
<button onclick="document.location='index.html'"type="button">KEMBALI</button>
<h2>No.2</h2>
<br>
<form action="<?php $_PHP_SELF ?>" method="POST">
  <label>Masukan NRP</label><br>
  <input type="text" id="nrp" name="nrp"><br>
  <input type="submit" value="Submit">
</form>
<br><br>
<?php 
$NRP = "";
if( isset($_POST["nrp"] ))
{
    $NRP = $_POST["nrp"];

}

$num = rand( 1, 3 );


if ($NRP == 2110141037) {

    switch( $num )
    {
    case 1: $image_file = "mobil/mobil1.jpg";
    break;
    case 2: $image_file = "mobil/mobil2.jpg";
    break;
    case 3: $image_file = "mobil/mobil3.jpg";
    break;
    }
    echo "<img height=150 src=$image_file />";
    echo "<br><br><br>";
    }
else if ($NRP == 2110141038) {

    switch( $num )
    {
     case 1: $image_file = "motor/motor1.jpg";
     break;
     case 2: $image_file = "motor/motor2.jpg";
     break;
     case 3: $image_file = "motor/motor3.jpg";
     break;
    }
     echo "<img height=150 src=$image_file />";
     echo "<br><br><br>";
    }
else if ($NRP == 2110141039) {

    switch( $num )
    {
    case 1: $image_file = "hp/hp1.jpg";
     break;
     case 2: $image_file = "hp/hp2.jpg";
     break;
     case 3: $image_file = "hp/hp3.jpg";
     break;
    }
     echo "<img height=150 src=$image_file />";
     echo "<br><br><br>";
    }   



?>


</body>


</html>