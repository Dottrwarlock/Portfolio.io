<?php
session_start();
include('includes/db_connect.php');

// Controleer of het formulier is verzonden
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $naam = htmlspecialchars(trim($_POST['naam']));
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $wachtwoord = trim($_POST['wachtwoord']);
    $wachtwoord_herhalen = trim($_POST['wachtwoord_herhalen']);

    // Controleer of wachtwoorden overeenkomen
    if ($wachtwoord !== $wachtwoord_herhalen) {
        $_SESSION['fout'] = "De wachtwoorden komen niet overeen!";
        header("Location: register.php");
        exit();
    }

    // Has het wachtwoord voor veilige opslag
    $hashed_wachtwoord = password_hash($wachtwoord, PASSWORD_DEFAULT);

    // Controleer of de gebruiker al bestaat op basis van email
    $sql = "SELECT * FROM gebruikers WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('s', $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $_SESSION['fout'] = "E-mail is al in gebruik!";
        header("Location: register.php");
        exit();
    }

    // Voeg de gebruiker toe aan de database
    $sql = "INSERT INTO gebruikers (naam, email, wachtwoord) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('sss', $naam, $email, $hashed_wachtwoord);

    if ($stmt->execute()) {
        $_SESSION['gebruiker_id'] = $stmt->insert_id;
        $_SESSION['gebruiker_email'] = $email;
        header("Location: welkom.php");
        exit();
    } else {
        $_SESSION['fout'] = "Er is iets misgegaan, probeer het opnieuw!";
        header("Location: register.php");
        exit();
    }
}
?>

