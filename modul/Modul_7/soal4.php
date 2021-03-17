<!DOCTYPE html>
<html>
<head>
    <title>Soal praktikum Web</title>
</head>
<body>
<h1>Soal Praktikum Web</h1>
<h1>Halaman 42</h1>
<button onclick="document.location='index.php'"type="button">KEMBALI</button>
<h2>No.4</h2>
<br>
<form action="<?php $_PHP_SELF ?>" method="POST">
  <label>Masukan NRP</label><br>
  <input type="text" id="nrp" name="nrp"><br>
  <input type="submit" name="submitbtn"value="Submit">
</form>

<h3>NRP yang terdaftar =</h3>
<?php
$filename = "data/nrp.txt";
$file = fopen( $filename, "r" );
if( $file == false )
{
echo ( "Error in opening file" );
exit();
}
$filesize = filesize( $filename );
$filetext = fread( $file, $filesize );
fclose( $file );
echo ( "File size : $filesize bytes" );
echo ( "<pre>$filetext</pre>" );


if(isset($_POST['submitbtn'])) {
$NRP = NULL;

if( isset($_POST["nrp"] ))
{
    $NRP = $_POST["nrp"];

}
if($NRP == NULL){
echo "<script type='text/javascript'>alert('Tidak bisa input - pastikan terisi');</script>";
}
else {


$files = fopen( $filename, "w" );
if( $files == false )
{
echo ( "Error in opening new file" );
exit();
}
fwrite($files, $filetext);
fwrite( $files, "\n$NRP" );
fclose( $files );
header('Refresh: 0');



}
}
?>



</body>


</html>