<?php
$servername = 'database:3306'; 
$username = 'root'; 
$password = 'root'; 
$dbname = 'users'; 

// Create connections
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn){
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connection successfully";
?>
<!DOCTYPE html>
<html langr="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/normalize.css">
    <link rel="stylesheet" href="./css/style.css"/>
</head>

<body>
    <div class="container">
        <h2>Bienvenido!</h2>
        <div class="login"></div>
        <div class="register"></div>
    </div>
</body>