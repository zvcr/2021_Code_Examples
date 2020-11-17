<?php
$host = "localhost";
$dbname = "example1a";
$user = "root";
$pass = "";

try{
    // Probeer verbinding te maken met de database
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    echo "Verbinding gelukt!";
} catch(PDOException $ex){
    // Als er iets mis is gegaan met het maken van de connectie
    echo "Verbinding mislukt!";
}
?>