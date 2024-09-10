<?php
    include "functions.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        
    print_r($_GET); //show what's inside your super global variable - an ARRAY with everything from form

    if($_GET) //if empty will be false and not run, if has value will be true and run
    {
        echo ("Data received by the Server");
    }

    if (isset($_GET['fName']) && isset($_GET['email']))
    {
        echo($_GET['fName']);
        echo ($_GET['email']); 

        $isNameValid = validateName($_GET['fName']); //t or f based on name input
        if ($isNameValid)
        {
            $enteredName = $_GET['fName'];
            echo("Your name is $enteredName");
        } else {
            echo("No Valid Name");
        }
        
        $isPhoneValid = validatePhone($_GET['phone']);
        if ($isPhoneValid)
        {
            $enteredPhone = $_GET['phone'];
            echo("Your phone number is $enteredPhone");
        } else {
            echo("No Valid Phone Number");
        }
    }

    
    ?>
    <form action="" method="get">
        <input type="text" name="fName" placeholder="Enter Your Name">
        <input type="text" name="email" placeholder="Enter Your Email">
        <input type="text" name="phone" placeholder="Format: 123-456-7890">
        <input type="submit" value="Submit the Information">

    </form>
 
</body>
</html>