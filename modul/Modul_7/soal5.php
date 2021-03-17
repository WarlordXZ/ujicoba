<!DOCTYPE html>
<html>
<head>
    <title>Soal praktikum Web</title>
</head>
<body>
<h1>Soal Praktikum Web</h1>
<h1>Halaman 42</h1>
<button onclick="document.location='index.php'"type="button">KEMBALI</button>
<h2>No.5</h2>
<br>
<form action="<?php $_PHP_SELF ?>" method="POST">
  <label>Masukan Angka Pertama</label><br>
  <input type="text" id="pertama" name="pertama"><br>
  <label>Masukan Angka Kedua</label><br>
  <input type="text" id="kedua" name="kedua"><br>
  <input checked="checked" type="radio" id="hitungan" name="hitungan" value="plus">
  <label>Penjumlahan</label>
  <input type="radio" id="hitungan" name="hitungan" value="minus">
  <label>Pengurangan</label><br>
  <input type="submit" name="submitbtn"value="Submit">
</form>
<br><br>

<?php
echo "Berikut riwayat operasi yang tercatat dalam file <br><br>";
        $filename = "data/hasil.txt";

        $file = fopen( $filename, "r" );
        if( $file == false )
        {
        echo ( "Error in opening file" );
        exit();
        }
        $filesize = filesize( $filename );
        $filetext = fread( $file, $filesize );
        fclose( $file );
        echo ( "Ukuran File : $filesize bytes" );
        echo ( "<pre>$filetext</pre>" );



if(isset($_POST['submitbtn'])) {
$Pertama = NULL;
$Kedua = NULL;
$Hitungan = Null;
if( isset($_POST["pertama"] ) || isset($_POST["kedua"]) ||isset($_POST["hitungan"]))
{
    $Pertama = $_POST["pertama"];
    $Kedua = $_POST["kedua"];
    $Hitungan = $_POST["hitungan"];

}
if($Pertama == NULL || $Kedua == NULL){
echo "<script type='text/javascript'>alert('ERROR - Field Angka harus diisi keduanya');</script>";
}
else if($Hitungan == NULL){
    echo "<script type='text/javascript'>alert('ERROR - Operasi Penjumlahan / Pengurangan belum dipilih');</script>";    
}
else {
if ($Hitungan == "plus"){
    $lambang = "+";
    $hasil = $Pertama + $Kedua;
}
else if ($Hitungan == "minus"){
    $lambang = "-";
    $hasil = $Pertama - $Kedua;
}
    









    $file = fopen( $filename, "w" );
    if( $file == false )
    {
    echo ( "Error in opening new file" );
    exit();
    }
    fwrite( $file, "Hasil Pengurangan atau penjumlahan\n\n" );
    fwrite( $file, "$Pertama $lambang $Kedua = $hasil" );
    fclose( $file );

    
    header('Refresh: 0');



}
}
?>



</body>


</html>