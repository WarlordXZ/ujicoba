<!DOCTYPE html>
<html>

<head>
    <title>Praktikum Bagian 6</title>
</head>
<body>
<h1>Praktikum halaman 37-41</h1>
<h2>Dibawah ini hasil dari program untuk membaca isi file</h2>
<?php
$filename = "data/tmp.txt";
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
?>
<h2>Write File(Begitu Website terbuka akan membuat sebuah file pada directory /data/)</h2>
<?php
$filename = "data/test.txt";
$file = fopen( $filename, "w" );
if( $file == false )
{
echo ( "Error in opening new file" );
exit();
}
fwrite( $file, "This is a simple test\n" );
fclose( $file );
?>
<?php

 $filesize = filesize( $filename );
 $msg = "File created with name $filename ";
 $msg .= "containing $filesize bytes";
echo ($msg ); 

?>

<h2>Menggunakan fungsi dalam PHP</h2>
<br>
<?php
function pesan() {
echo "Tulisan ini dibuat dan dipanggi didalam functiom"; }


pesan();
?>

<h2>Pemanggilan fungsi dengan menggunakan parameter</h2>
<?php
function addFunction($num1, $num2) {
 $sum = $num1 + $num2;
echo "Sum of the two numbers is : $sum";
}
addFunction(10, 20);
?>

<h2>Membuat default Parameter pada fungsi</h2>
<?php
function printMe($param = "HOAHOA")
{
print $param;
}
printMe("Hellooooo aku ian");
echo "<br>";
printMe();
?>
<h2>Spilt Words</h2>
<?php
// split the phrase by any number of commas or space characters,
// which include " ", \r, \t, \n and \f
$keywords = preg_split("/[\s,]+/", "hypertext language, programming");
print_r($keywords);
?>




</body>
</html>