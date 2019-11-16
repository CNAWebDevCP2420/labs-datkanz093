<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0
Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Box Array</title>
<meta http-equiv="content-type"
    content="text/html; charset=iso-8859-1" />
</head>

<body>

<?php

$BoxForSmall = array("length" => 12, "width" => 10, "depth" => 2.5);
$BoxForMedium= array("length" => 30, "width" => 20, "depth" => 4);
$BoxForLarge = array("length" => 60, "width" => 40, "depth" => 11.5);
$BoxSizes = array("small" => $BoxForSmall, "medium" => $BoxForMedium, "large" => $BoxForLarge);

echo "The volume of a small box is " . $BoxSizes['small']['length']*$BoxSizes['small']['width']*$BoxSizes['small']['depth'] . " Inches cubed.<br>";
echo "The volume of a medium box is " . $BoxSizes['medium']['length']*$BoxSizes['medium']['width']*$BoxSizes['medium']['depth'] . " Inches cubed.<br>";
echo "The volume of a large box is " . $BoxSizes['large']['length']*$BoxSizes['large']['width']*$BoxSizes['large']['depth'] . " Inches cubed.";
?>

</body>

</html>