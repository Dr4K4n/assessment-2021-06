<?php
error_reporting(-1); 
ini_set('display_errors', true);

    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $country = $_POST["country"];
    $subject = $_POST["subject"];
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Contact</title>
    </head>
    <body>
    <div id="header">
        <h1>Contact output</h1>
    </div>
    <div id="navbar">
        <a href="./index.html">Startpage</a>
        <a href="./contact.html">Contact</a>
    </div><br>

    <div class="container">    
        Welcome <?php echo $firstName, " ", $lastName?>.<br>
        As you've choosen you are from <?php echo $country?><br>
        Your subject was "<?php echo $subject?>".<br>
    </div>
    </body>
</html>