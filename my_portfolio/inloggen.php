<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inloggen</title>
</head>
<body>
    <h2>Inloggen</h2>
    <form action="verwerk_inloggen.php" method="POST">
        <label for="email">E-mail:</label>
        <input type="email" name="email" id="email" required><br><br>

        <label for="wachtwoord">Wachtwoord:</label>
        <input type="password" name="wachtwoord" id="wachtwoord" required><br><br>

        <input type="submit" value="Inloggen">
    </form>
</body>
</html>

