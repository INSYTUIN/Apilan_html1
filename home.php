<!DOCTYPE html>
<?php
$name = $_POST["name"];
$email = $_POST["email"];
$password = $_POST["password"];
$birthdate = $_POST["birthdate"];
$gender = $_POST["gender"];
$status = $_POST["status"];
$number = $_POST["number"];
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styling.css">
</head>
<body>

    <div class="homebackground">

    <div class="container">
        <div class="title">
            <p>
            WELCOME <?= $name ?>
            </p>
        </div>
            <p><h4>
            email: <?= $email ?>
            </p></h4>
            <p><h4>
            password: <?= $password ?>
            </p></h4>
        
            <h4>Hello User <?= $name ?></h4>
            <h4>Welcome to your dashboard!</h4>
    </div>
    <br><br>

    <div class="bodycontainer">
        <p><h4>Additional User details: </h4></p>
        <div class="subcontainer">
            <p><h4>Birth Date: <?= $birthdate ?></h4></p>
            <p><h4>Gender: <?= $gender ?></h4></p>
            <p><h4>Status: <?= $status ?></h4></p>
            <p><h4>User Number: <?= $number ?></h4></p>
        </div>
    </div>

    <div class="bodycontainer">
        <p><h4>A single cumulus cloud can weigh over 1 million pounds. Despite floating effortlessly, 
            a typical 1-cubic-kilometer cloud contains roughly 500,000 kg of water droplets.
        </h4></p>
        <p><h4>Venus has a longer day than its year. It takes Venus 243 Earth days to complete one full
             rotation on its axis, but only 225 Earth days to orbit the Sun.
        </h4></p>
    </div>

    </div>

    
</html>