<html>
<head>
<title>
PHP: Date-Time, Include-Require
</title>
</head>
<body>




<h1>Halaman 43-46</h1>


<h2>Date System</h2>

<?php
 $date_array = getdate();

 foreach ( $date_array as $key => $val ){
 print "$key = $val<br />";
 }
 $formated_date = "Today's date: ";
 $formated_date .= $date_array['mday'] . "/";
 $formated_date .= $date_array['mon'] . "/";
 $formated_date .= $date_array['year'];

 print $formated_date;
?>
<h2>Convert Time</h2>
<?php
 print date("m/d/y G.i:s<br>", time());
 print "Today is ";
 print date("j of F Y, \a\\t g.i a", time());
?>
<h2>Get Date</h2>
<?php
echo "Today is " . date("Y/m/d") . "<br>";
echo "Today is " . date("Y.m.d") . "<br>";
echo "Today is " . date("Y-m-d") . "<br>";
echo "Today is " . date("l");
?>

<h2>Get Time</h2>
<?php
echo "The time is " . date("h:i:sa");
?>
<h2>Get Time Zone</h2>

<?php
date_default_timezone_set("America/New_York");
echo "The time is " . date("h:i:sa");
?>
<h2>Str2Time</h2>
<?php
$d=strtotime("10:30pm April 15 2014");
echo "Created date is " . date("Y-m-d h:i:sa", $d);
?>
<h2>ConvertString2Date</h2>
<?php
$d=strtotime("tomorrow");
echo date("Y-m-d h:i:sa", $d) . "<br>";
$d=strtotime("next Saturday");
echo date("Y-m-d h:i:sa", $d) . "<br>";
$d=strtotime("+3 Months");
echo date("Y-m-d h:i:sa", $d) . "<br>";
?>
<h2>GetNumberOfDays</h2>
<?php
$d1=strtotime("July 04");
$d2=ceil(($d1-time())/60/60/24);
echo "There are " . $d2 ." days until 4th of July.";
?>
<h2>Footer</h2>
<?php
echo "<p>Copyright &copy; 1999-" . date("Y") ."</p>";
?>




</body>

</html>