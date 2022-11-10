<?php
function dbconnect() {
    $servername = "sql571.main-hosting.eu";
    $username = "u627428193_ani";
    $password = "Nathanlove44@@";
    $dbname = "u627428193_ani";
    
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection 
    if(!$conn) {
        die("Connexion Failed: ". mysqli_connect_error());
    }

    return $conn;
}