<!DOCTYPE html>
<html>
<body>
<h1>Praktikum Website Halaman 21-31</h1>
<h1>Mempelajari Cara Pembuatan PHP</h1>
<?php
echo "TULISAN INI DIBUAT DENGAN BAHASA PHP \n";
//INI ADALAH COMMENT
/*
ini juga comment
hehheheheh
*/
$A = "ANDA SEORANG JUARA";
$X = 15;
$Y = 25;
$Z = $X + $Y;

echo "Mari membuat hitungan \n";
echo "<br>";
echo "X = 15, Y=25, Z= X + Y \n";
echo "<br>";


echo "Berdasarkan penghitungan dalam php nilai Z adalah ->";
echo $Z;
echo "<br>";


function panggilx() {
    global $X;
    echo "Function telah dipanggil kami memberikan output X = ";
    echo $X; 
    echo "<br>";


    }
function panggilA() {
    global $A;
    echo "Function telah dipanggil kami memberikan output A = ";
    echo $A; 
    echo "<br>";
    
    
    }
    
panggilx();
panggilA();

$namadepan = "Sebastian";
$namabelakang = "Reinard";

echo $namadepan." ". $namabelakang."<br><br><br>";

echo "Sekarang kita akan mencoba membuat penghitungan matematika"."<br>";
?>
<table border="15">
	<tbody>
		<tr>
			<td style="width: 62px;">Nilai ke-;</td>
			<td style="width: 15px;">1</td>
			<td style="width: 15px;">2</td>
			<td style="width: 15px;">3</td>
			<td style="width: 15px;">4</td>
			<td style="width: 15px;">5</td>
			<td style="width: 15px;">6</td>
		</tr>
		<tr>
			<td style="width: 62px;">Nilai</td>
			<td style="width: 15px;">60</td>
			<td style="width: 15px;">70</td>
			<td style="width: 15px;">100</td>
			<td style="width: 15px;">90</td>
			<td style="width: 15px;">80</td>
			<td style="width: 15px;">60</td>
		</tr>
	</tbody>
</table>
<?php

$nilai = array(60,70,100,90,80,60);

function checkgrade($grade){

if ($grade > 100){
    echo " Nilai Tidak Valid";
}
else if  ($grade > 80 ){
    echo "A";
}
else if  ($grade > 60){
    echo "B";
}
else if  ($grade > 50){
    echo "C";
}
else if  ($grade > 40){
    echo "D";
}
else if  ($grade >= 0){
    echo "E";
}
else {
    echo " Nilai Tidak Valid";
}

}

for($i=0;$i<6;$i++) {
    echo "Nilai ke-".$i+1;
    echo " adalah = ";
    echo $nilai[$i]."<br>";

}
for($i=0;$i<6;$i++) {
    echo "Grading untuk Nilai ke-".$i+1;
    echo " adalah = ";
    checkgrade($nilai[$i]);
    echo "<br>";

}
echo "<br><br>";

echo "Nilai RATA-RATA anda adalah ";
$ratarata = 0;
for($i=0;$i<6;$i++){
 
    $ratarata += $nilai[$i];
}
$ratarata = $ratarata/6;
echo $ratarata . "<br><br>";
echo "Grade akhir anda adalah = ";
checkgrade($ratarata);










?>





</body>
</html>