<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0
Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Perfect Palindrome</title>
<meta http-equiv="content-type"
    content="text/html; charset=iso-8859-1" />
</head>

<body>
<h1>Perfect Palindrom Tester</h1><hr />

<?php
$testPhrase = "racecar";


$test = strrev($testPhrase);
if ($testPhrase == $test)
echo "<p>The phrase " . $testPhrase . " is a palindrome.";
else echo "<p>The phrase " . $testPhrase . " is not a palindrome.";

?>


</body>

</html>