<?php
$servername = "localhost";
$username = "root";  // Dit is de standaard gebruikersnaam in XAMPP
$password = "";      // Standaard wachtwoord in XAMPP
$dbname = "gebruikersdb"; // Gebruik de naam van je database

// Maak verbinding met de database
$conn = new mysqli($servername, $username, $password, $dbname);

// Controleer of de verbinding is gelukt
if ($conn->connect_error) {
    die("Verbinding mislukt: " . $conn->connect_error);
}
?>

