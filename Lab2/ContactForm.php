<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0
Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Contact Me</title>
<meta http-equiv="content-type"
    content="text/html; charset=iso-8859-1" />
</head>


<?php
function validateInput($data, $fieldName) {
    global $errorCount;
    if (empty($data)) {
        echo "\"$fieldName\" is a required field. <br />\n";
        ++$errorCount;
        $retval = "";
    }
    else { // only clean up the input if it isnt empty 
        $retval = trim($data);
        $retval = stripslashes($retval);
    }
    return($retval);
}

function validateEmail($data, $fieldName) {
    global $errorCount;
    if (empty($data)) {
        echo "\"$fieldName\" is a required field. <br />\n";
        ++$errorCount;
        $retval = "";
    }
    else { // only clean up the input if it isnt empty 
        $retval = trim($data);
        $retval = stripslashes($retval);
        $pattern = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i";
        // i cant get the above preg_match to work, but i commented out the lower part and tried it, and everything else works fine.
        // appreciate it if you could let me know what was done wrong! :)
        if (preg_match($pattern, $retval) == 0){
            echo "\"$fieldName\" is not a valid e-mail address <br />\n";
            ++$errorCount;
        }
}
return($retval);
}

function displayForm($Sender, $Email, $Subject, $Message){
    ?>
    <h2 style = "text-align:center">Contact Me</h2>
    <form name="contact" action="ContactForm.php" method="post">
    <p>Your Name: <input type="text" name="Sender" value="<?php echo $Sender; ?>" /></p>
    <p>Your E-Mail: <input type="text" name="Email" value="<?php echo $Email; ?>" /></p>
    <p>Subject: <input type="text" name="Subject" value="<?php echo $Subject; ?>" /></p>
    <p>Message:<br />
    <textarea name="Message"><?php echo $Message; ?></textarea></p>
    <p><input type="reset" value="Clear Form" />&nbsp;
        &nbsp;<input type="submit" name="Submit" value="Send Form" /></p>
    </form>
    <?php
}

$ShowForm = True;
$errorCount= 0;
$Sender = "";
$Email = "";
$Subject = "";
$Message = "";

if (isset($_POST['Submit'])) {
    $Sender = validateInput($_POST['Sender'], "Your Name");
    $Email = validateEmail($_POST['Email'], "Your E-mail");
    $Subject = validateInput($_POST['Subject'], "Subject");
    $Message = validateInput($_POST['Message'], "Message");

    if ($errorCount == 0)
        $ShowForm = FALSE;
    else 
        $ShowForm = TRUE;
}

if ($ShowForm == TRUE) {
    if ($errorCount > 0) // if there were errors
        echo "<p>Please re-enter the form information below.</p>\n";
    displayForm($Sender, $Email, $Subject, $Message);
}
else {
    $SenderAddress = "Sender <$Email>";
    $Headers = "From: $SenderAddress\nCC:$SenderAddress\n";

    $result = mail("datkanz093@gmail.com",$Subject, $Message, $Headers);

    if ($result)
        echo "<p>Your message has been sent. Thank You, " .  $Sender . ".</p>\n";
    else    
        echo "<p>There was an error in sending your message, " .  $Sender . ".</p>\n";
}

?>

</html>