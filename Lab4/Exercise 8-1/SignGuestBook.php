<!DOCTYPE html>
<html>
<head>
<title>Sign Guest Book</title>

</head>

<?php

if(empty($_POST['first_name']) || empty($_POST['last_name'])){
    echo "<p>You must enter your first and last name! 
          Click your browser's Back button to return to the
          Guest Book.</p>";
}
else {
    $DBConnect = @mysqli_connect("localhost", "root", "");
        if ($DBConnect === FALSE)
        {
            echo "<p>Unable to connect to the database server.</p>" . 
            "<p>Error code " . mysqli_connect_errno() . ": " . mysqli_connect_error() . "</p>";
            exit();
        }
        else {
            $DBName = "guestbook";
            if(!@mysqli_select_db($DBConnect, $DBName))
            {
                $SQLString = "CREATE DATABASE $DBName";
                $queryResult = mysqli_query($DBConnect, $SQLString);
 
                if($queryResult === false)                
                {
                    echo "<p>Unable to execute the query.</p>" . "<p>Error code " . mysqli_connect_errno() . ": " . mysqli_connect_error() . "</p>";
                    exit();
                }
                else                
                {
                    echo "You are the first visitor!";
                    mysqli_select_db($DBConnect, $DBName);
                }
            }
        }
    }

    $TableName = "visitors";
    $SQLString = "SHOW TABLES LIKE '$TableName'";
    $QueryResult = @mysqli_query($DBConnect, $SQLString);
    if (mysqli_num_rows($QueryResult) == 0) {
        $SQLString = "CREATE TABLE $TableName
        (countID SMALLINT
        NOT NULL AUTO_INCREMENT PRIMARY KEY,
        last_name VARCHAR(40), first_name VARCHAR(40))";
        $QueryResult = @mysqli_query($DBConnect, $SQLString);

        if ($QueryResult === FALSE)
        {
            echo "<p>Unable to create the table.</p>" . "<p>Error code " . mysqli_connect_errno() . ": " . mysqli_connect_error() . "</p>";
            exit();
        }
    }

    $LastName = stripslashes ($_POST['last_name']);
    $FirstName = stripslashes ($_POST['first_name']);
    $SQLString = "INSERT INTO $TableName VALUES (NULL, '$LastName', '$FirstName')";
    $QueryResult = @mysqli_query($DBConnect, $SqlString);
    if ($QueryResult === FALSE) 
    {
        echo "<p>Unable to execute query.</p>" . "<p>Error code " . mysqli_connect_errno() . ": " . mysqli_connect_error() . "</p>";
        exit();
    }
    else
    {
        echo "<h1>Thank you for signing our guest book!</h1>";
    }
    mysqli_close($DBConnect);
    
?>

</html>