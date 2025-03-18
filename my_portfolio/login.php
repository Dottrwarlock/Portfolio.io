<?php
session_start();

// Als de gebruiker al ingelogd is, direct doorsturen naar de welkomstpagina
if (isset($_SESSION['gebruiker_id'])) {
    header("Location: welkom.php");
    exit();
}

$foutmelding = isset($_SESSION['fout']) ? $_SESSION['fout'] : '';
unset($_SESSION['fout']);
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inloggen - Mijn Portfolio</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
        .login-box {
            max-width: 500px;
            margin: auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .login-box label {
            display: block;
            margin-bottom: 5px;
        }
        .login-box input[type="email"],
        .login-box input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .login-box input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .login-box input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

    <?php include('includes/header.php'); ?>

    <h1>Inloggen</h1>

    <?php if ($foutmelding): ?>
        <div class="foutbericht"><?php echo htmlspecialchars($foutmelding); ?></div>
    <?php endif; ?>

    <div class="login-box">
        <form action="verwerk_inloggen.php" method="POST">
            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email" required>
            
            <label for="wachtwoord">Wachtwoord:</label>
            <input type="password" id="wachtwoord" name="wachtwoord" required>
            
            <input type="submit" value="Inloggen">
        </form>
    </div>

    <?php include('includes/footer.php'); ?>

</body>
</html>

