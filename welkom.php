<?php
session_start();

// Controleer of de gebruiker is ingelogd, anders doorsturen naar loginpagina
if (!isset($_SESSION['gebruiker_id'])) {
    header("Location: login.php");
    exit();
}

// Fallback voor ontbrekende gebruiker_email
$gebruiker_email = isset($_SESSION['gebruiker_email']) ? $_SESSION['gebruiker_email'] : 'Gast';
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welkom - Mijn Portfolio</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <?php include('includes/header.php'); ?>

    <h1>Welkom, <?php echo htmlspecialchars($gebruiker_email); ?>!</h1>
    <p>Je hebt toegang tot mijn portfolio. Hier kun je al mijn projecten bekijken en meer over mij leren.</p>
    <p><a href="portfolio.php" class="button">Bekijk mijn portfolio</a></p>

    <a href="uitloggen.php">Uitloggen</a>

    <?php include('includes/footer.php'); ?>

</body>
</html>

