<?php
session_start();
?>
<header>
    <nav>
        <ul>
            <li><a href="index.php"><img src="images/logo.png" alt="Logo" class="logo"></a></li>
            <li><a href="index.php" class="button">Home</a></li>
            <?php if (isset($_SESSION['gebruiker_id'])): ?>
                <li><a href="portfolio.php" class="button">Portfolio</a></li>
                <li><a href="uitloggen.php" class="button">Uitloggen</a></li>
            <?php else: ?>
                <li><a href="login.php" class="button">Login</a></li>
                <li><a href="register.php" class="button">Registreren</a></li>
            <?php endif; ?>
        </ul>
    </nav>
</header>
