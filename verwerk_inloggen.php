<?php
session_start();
include('includes/db_connect.php');

// Controleer of het formulier is verzonden
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $wachtwoord = trim($_POST['wachtwoord']);

    // Zoek gebruiker in de database
    $sql = "SELECT * FROM gebruikers WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('s', $email);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        // Controleer het wachtwoord
        if (password_verify($wachtwoord, $row['wachtwoord'])) {
            // Inloggen geslaagd, zet sessie variabelen
            $_SESSION['gebruiker_id'] = $row['id'];
            $_SESSION['gebruiker_email'] = $row['email'];

            // Doorsturen naar de welkomstpagina
            header("Location: welkom.php");
            exit();
        } else {
            $_SESSION['fout'] = "Ongeldig wachtwoord!";
            header("Location: login.php");
            exit();
        }
    } else {
        $_SESSION['fout'] = "Geen gebruiker gevonden met dat e-mailadres!";
        header("Location: login.php");
        exit();
    }

    // Sluit de verbinding
    $stmt->close();
    $conn->close();
}
?>

