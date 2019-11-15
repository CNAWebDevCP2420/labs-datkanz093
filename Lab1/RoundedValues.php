<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0
Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Rounded Values</title>
<meta http-equiv="content-type"
    content="text/html; charset=iso-8859-1" />
</head>

<body>
<?php

$Value = 56.6;

echo "Initial value  = $Value<br /><br />";

$Value = 56.6;
$Value = round($Value);

echo "Rounded value is $Value<br /><br />";

$Value = 56.6;
$Value = ceil($Value);

echo "Rounded with ceil is $Value<br /><br />";

$Value = 56.6;
$Value = floor($Value);

echo "Rounded with floor is $Value<br /><br />";


?>
</body>

</html>