<?php
echo"<br><br>COOKIE1<br>";
$cookie_name = "user";
$cookie_value = "John Doe";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
?>
<html>
<body>
<?php
if(!isset($_COOKIE[$cookie_name])) {
 echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
 echo "Cookie '" . $cookie_name . "' is set!<br>";
 echo "Value is: " . $_COOKIE[$cookie_name];
}
?>
</body>
</html>


<?php
echo "<br><br>MODIFIY COOKIE<br>";
$cookie_name = "user";
$cookie_value = "Alex Porter";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
?>
<html>
<body>
<?php
if(!isset($_COOKIE[$cookie_name])) {
 echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
 echo "Cookie '" . $cookie_name . "' is set!<br>";
 echo "Value is: " . $_COOKIE[$cookie_name];
}
?>
</body>
</html>


<?php
echo "<br><br> DELETE COOKIE<br>";
// set the expiration date to one hour ago
setcookie("user", "", time() - 3600);
?>
<html>
<body>
<?php
echo "Cookie 'user' is deleted.";
?>
</body>
</html>


<?php
echo "<br><br>CHECK COOKIE<br>";
setcookie("test_cookie", "test", time() + 3600, '/');
?>
<html>
<body>
<?php
if(count($_COOKIE) > 0) {
 echo "Cookies are enabled.";
} else {
 echo "Cookies are disabled.";
}
?>
</body>
</html>


<?php
echo "<br><br> DEMMO_SESSION1<br>";
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>
<?php
// Set session variables
$_SESSION["favcolor"] = "green";
$_SESSION["favanimal"] = "cat";
echo "Session variables are set.";
session_destroy();
?>
</body>
</html>

<?php
echo "<br><br>GET SESSION VALUE <br>";

?>
<!DOCTYPE html>
<html>
<body>
<?php
// Echo session variables that were set on previous page
echo "Favorite color is " . $_SESSION["favcolor"] . ".<br>";
echo "Favorite animal is " . $_SESSION["favanimal"] . ".";

?>
</body>
</html>

<?php
echo "<br><br>DISPLAYALLSESSION<br>";
session_start();
?>
<!DOCTYPE html>
<html>
<body>
<?php
print_r($_SESSION);
session_destroy();
?>
</body>
</html>


<?php
echo "<br><br>MODIFY SESSION<br>";
session_start();
?>
<!DOCTYPE html>
<html>
<body>
<?php
// to change a session variable, just overwrite it
$_SESSION["favcolor"] = "yellow";
print_r($_SESSION);
session_destroy();
?>
</body>
</html>


<?php
echo "<br><br>DESTROY SESSION<br>";
session_start();
?>
<!DOCTYPE html>
<html>
<body>
<?php
// remove all session variables
session_unset();
// destroy the session
session_destroy();
?>
</body>
</html>