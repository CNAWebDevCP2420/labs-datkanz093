<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0
Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Credit Card</title>
<meta http-equiv="content-type"
    content="text/html; charset=iso-8859-1" />
</head>

<body>
<h1>Validate Credit Card</h1><hr />

<?php
$CreditCard = array(
    "",
    "8910-1234-5678-6543",
    "OOOO-9123-4567-0123");

    foreach ($CreditCard as $CardNumber) {
        if (empty($CardNumber))
            echo "<p>This Credit Card Number is invalid because it contains an empty string</p>";
            else {
                $CreditCardNumber = $CardNumber;
                $CreditCardNumber = str_replace("-","", $CreditCardNumber);
                $CreditCardNumber = str_replace(" ", "", $CreditCardNumber);
                if (!is_numeric($CreditCardNumber))
                echo "<p>Credit Card Number " . $CreditCardNumber . " is not a valid Credit Card number because it contains a non-numeric character. </p>";
                else
                    echo "<p>Credit Card Number " . $CreditCardNumber . " is a valid Credit Card Number.</p>";
            }
    }
?>


</body>

</html>