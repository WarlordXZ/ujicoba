<!DOCTYPE html>
<html>
<body>
<h1>Praktikum Website Halaman 32-34</h1>
<h1>Mempelajari Cara Pembuatan PHP</h1>
<?php

$viewer = getenv( "HTTP_USER_AGENT" );
 $browser = "An unidentified browser";
 if( preg_match( "/MSIE/i", "$viewer" ) )
 {
 $browser = "Internet Explorer";
 }
 else if( preg_match( "/Chrome/i", "$viewer" ) )
 {
 $browser = "Chrome";
 }
 else if( preg_match( "/Netscape/i", "$viewer" ) )
 {
 $browser = "Netscape";
 }
 else if( preg_match( "/Mozilla/i", "$viewer" ) )
 {
 $browser = "Mozilla";
 }
 $platform = "An unidentified OS!";
 if( preg_match( "/Windows/i", "$viewer" ) )
 {
 $platform = "Windows!";
 }
 else if ( preg_match( "/Linux/i", "$viewer" ) )
 {
 $platform = "Linux!";
 }
 echo("You are using $browser on $platform");
 echo "<br><br><br><br><br><br>";
 echo "Gambar akan random setiap kali refresh!!!"."<br><br>";

 
$num = rand( 1, 4 );
switch( $num )
{
 case 1: $image_file = "img/ritual.gif";
 break;
 case 2: $image_file = "img/umaru.gif";
 break;
 case 3: $image_file = "img/umaru2.gif";
 break;
 case 4: $image_file = "img/umaru.jpg";
 break;

}
 echo "Random Image : <img src=$image_file />";
 echo "<br><br><br>";

?>


<p>Choose a site to visit :</p>
 <form action="<?php $_PHP_SELF ?>" method="POST">
 <select name="location">
 <option value="http://gogoanime.so">
 Gogoanime
 </option>
 <option value="http://www.myanimelist.net">
 MyAnimeList
 </option>
 <option value="http://www.kiss-anime.ws">
 KissAnime
 </option>
 </select>
 <input type="submit" />
 </form>

 <?php 
if(isset( $_POST["location"] ))
{
 $location = $_POST["location"];
 header( "location:$location" );
 exit();
}

?>
 <br><br><br>

<h2>FORM POST</h2>
<br><br>
<?php
 if( isset($_POST["name"]) || isset($_POST["age"] ))

{
 echo "Welcome ". $_POST['name']. "<br />";
 echo "You are ". $_POST['age']. " years old.";
 exit();

}

?>
<form action="<?php $_PHP_SELF ?>" method="POST">
 Name: <input type="text" name="name" />
 Age: <input type="text" name="age" />
 <input type="submit" />
 </form>
<br><br><br><br><br>










</body>
</html>