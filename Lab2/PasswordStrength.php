<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0
Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Password Strength</title>
<meta http-equiv="content-type"
    content="text/html; charset=iso-8859-1" />
</head>

<body>
<h1>Validate Password Strength</h1><hr />

<?php
$password = array(
    "PassWord0!",
    "password0!",
    "Pass Word0!",
    "PassWord0",
    "PassWord!",
    "PassWord0000000000000!",
    "PaWd0!",
    "ThisIsG00d!",
    "DTaylorOO7",
    "G00DP455W0rd!"
    );

foreach ($password as $passwordStrength){
    echo "The password &ldquo;" . $passwordStrength . "&rdquo; ";
    if((preg_match("#.*^(?=.{8,16})(?!.* )(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W).*$#",$passwordStrength)==1)) 
    echo " is a strong enough password. <br \>";
    else
        echo " is NOT a strong enough password. <br \>";
}
?>