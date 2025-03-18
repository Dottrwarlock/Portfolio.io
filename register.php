<?php

    if (isset($_SESSION['fout'])) {
    echo "<div class='foutbericht'>" . $_SESSION['fout'] . "</div>";
    unset($_SESSION['fout']);
    }

    if (isset($_SESSION['succes'])) {
    echo "<div class='succesbericht'>" . $_SESSION['succes'] . "</div>";
    unset($_SESSION['succes']);
    }
// Zorg ervoor dat je een sessie start, voor eventuele foutmeldingen of succesberichten
session_start();
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registreren - Mijn Portfolio</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <?php include('includes/header.php'); ?>

    <h1>Registreer een nieuw account</h1>

    <form action="verwerk_registratie.php" method="POST">
        <label for="naam">Naam:</label>
        <input type="text" id="naam" name="naam" required>
        
        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" required>
        
        <label for="wachtwoord">Wachtwoord:</label>
        <input type="password" id="wachtwoord" name="wachtwoord" required>
        
        <label for="wachtwoord_herhalen">Herhaal Wachtwoord:</label>
        <input type="password" id="wachtwoord_herhalen" name="wachtwoord_herhalen" required>
        
        <input type="submit" value="Registreren">
    </form>

    <?php include('includes/footer.php'); ?>

</body>
</html>

