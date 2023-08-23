<?php
$t = $_COOKIE['theme'];

if($t == "light")
$clas = "";
else
$clas = "dark-theme";

print "<body id=body class=\"$clas\">";

?>
