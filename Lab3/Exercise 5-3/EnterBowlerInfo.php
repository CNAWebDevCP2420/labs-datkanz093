<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0
Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Enter Bowler Info</title>
<meta http-equiv="content-type"
    content="text/html; charset=iso-8859-1" />
</head>

<body>

<?php
if (empty($_POST['bowler_name']) || empty($_POST['bowler_age']) || empty($_POST['bowler_average']))
    echo "<p>You must enter the Bowler's Name, Age, and Average. Please press your broswers back button to return to the previous page.</p>\n";
else {
    $BowlerName = addslashes($_POST['bowler_name']);
    $BowlerAge = addslashes($_POST['bowler_age']);
    $BowlerAverage = addslashes($_POST['bowler_average']);
    $BowlerInfo = fopen("bowlerinfo.txt", "ab");
    if (is_writeable("bowlerinfo.txt")){
        if (fwrite($BowlerInfo, $BowlerName . ", " . $BowlerAge . ", " . $BowlerAverage . "\n"))
            echo "<p>Bowler information successfully added to file.</p>\n";
        else echo "<p>Cannot add bowler information to file.</p>\n";
    }
    else echo "<p> Cannot write to the file.</p>\n";
    fclose($BowlerInfo);
}
?>

</body>

</html>