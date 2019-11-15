<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0
Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Is Even</title>
<meta http-equiv="content-type"
    content="text/html; charset=iso-8859-1" />
</head>

<body>
<?php

$Value = 55;

echo "The number being checked is $Value <br /><br />";

if (is_numeric($Value)) { echo "The value is a number."; } else { echo "The value is not a number."; }

if($Value % 2 == 0){ 
    echo " The number is Even.";  
} 
else{ 
    echo " The number is odd"; 
} 

?>
</body>

</html>