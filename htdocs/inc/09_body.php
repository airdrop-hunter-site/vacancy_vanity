<?php
print "<body class=dark-theme>";
$t = $_COOKIE['theme'];

if($t == "")
$clas = "";
else
$clas = "dark-theme";

print "<body id=body class=\"$clas\">";

?>
