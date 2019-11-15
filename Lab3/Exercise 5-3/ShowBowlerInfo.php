<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0
Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Show Bowler Info</title>
<meta http-equiv="content-type"
    content="text/html; charset=iso-8859-1" />
</head>

<body>

<?php
echo "Listed below is the bolwer information that has been inputted so far <br>";
echo "<pre>";
readfile('bowlerinfo.txt');
echo "</pre>";
?>

</body>

</html>