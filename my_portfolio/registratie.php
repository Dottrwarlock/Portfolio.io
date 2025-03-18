<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registreren</title>
</head>
<body>
    <h2>Registreren</h2>
    <form action="verwerk_registratie.php" method="POST">
        <label for="naam">Naam:</label>
        <input type="text" name="naam" id="naam" required><br><br>

        <label for="email">E-mail:</label>
        <input type="email" name="email" id="email" required><br><br>

        <label for="wachtwoord">Wachtwoord:</label>
        <input type="password" name="wachtwoord" id="wachtwoord" required><br><br>

        <input type="submit" value="Registreren">
    </form>
</body>
</html>
