<?php
$selected_section = isset($_GET['section']) ? $_GET['section'] : 'over';
?>
<!doctype html>
<html lang="nl">
<head>
    <meta charset="utf-8">
    <title>Over mij</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div id="cv">

        <!-- Dropdown menu voor secties -->
        <header>
            <h1>Over mij</h1>
            <p>Welkom bij mijn digitale Voorstelling in PHP!</p>
            <form method="get" action="portfolio.php">
                <label for="section-select">Navigatie:</label>
                <select id="section-select" name="section" onchange="this.form.submit()">
                    <option value="over" <?= $selected_section === 'over' ? 'selected' : '' ?>>Over Mij</option>
                    <option value="gegevens" <?= $selected_section === 'gegevens' ? 'selected' : '' ?>>Contact Gegevens</option>
                    <option value="portfolio" <?= $selected_section === 'portfolio' ? 'selected' : '' ?>>Portfolio</option>
                </select>
            </form>
        </header>

        <!-- Dynamisch geladen secties -->
        <?php if ($selected_section === 'over'): ?>
            <section id="over">
                <h3>Hoi Wereld!</h3>
                <p>Ik ben Jens, een 31-jarige man die al een tijdje zijn skills test in de wereld van codering en websiteontwikkeling.</p>
                <h4>Motivatie</h4>
                <p>Mijn passie is ontstaan uit mijn fascinatie voor de wereld van logica, creatie en probleemoplossing. Wat ik zo leuk vind aan programmeren, is dat het vaak draait om het vinden van de juiste oplossing voor een specifiek probleem. Het gaat soms om iets kleins – een haakje, een slash of zelfs een letter die verkeerd staat – maar die kleine fout kan het hele systeem verstoren. Het is bijna als een puzzel die je moet oplossen, en het geeft me zoveel voldoening om te ontdekken waar de fout zit, deze te corrigeren en de code weer werkend te krijgen.</p>
                <p>Soms moet je iets visualiseren om een beter begrip te krijgen van de structuur, of moet je met verschillende technieken experimenteren om te ontdekken wat het beste werkt. Ik vind het geweldig om een idee en concept langzaam aan vorm te geven, en steeds meer functionaliteiten toe te voegen tot het eindresultaat is bereikt.</p>
                <p>Iemand zei me ooit wat me altijd is bijgebleven, iedereen kan wat ingeven dat de computer begrijpt, het is de kunst om het zo te doen dat het ook voor een mens begrijpelijk is.</p>
                <p>Elke dag bied ik mezelf de kans om mijn vaardigheden verder te ontwikkelen, te verbeteren en nieuwe tools en technieken te leren. Ik verveel me nooit wanneer het gaat om het ontwikkelen, verbeteren en optimaliseren van websites of programma’s. Er is altijd ruimte voor het verfijnen van het proces en voor het creëren van iets dat gebruikers echt helpt en vereenvoudigt. Mijn ambitie is om verder te groeien in de wereld van coderen, nieuwe dingen te leren, en ideeën te realiseren die waarde toevoegen. Ik kijk er enorm naar uit om mijn kennis te verdiepen en te blijven creëren in deze boeiende en dynamische wereld van technologie.</p>
            </section>
        <?php elseif ($selected_section === 'gegevens'): ?>
            <section id="gegevens">
                <h2>Contact</h2>
                <p>Naam: <span id="cv-name">Jens Haneveir</span></p>
                <p>Telefoonnummer: <span id="cv-phone">+31 6 2514 5344</span></p>
                <p>Email: <span id="cv-email">jeha.totus@outlook.com</span></p>
            </section>
        <?php elseif ($selected_section === 'portfolio'): ?>
            <section id="portfolio">
                <h2>Portfolio</h2>
                <p><a href="https://cloudmeta.wordpress.com" target="_blank" id="portfolio-link">CloudMeta - Mijn website(sandbox)</a></p>
                <p id="portfolio-description">Mijn portfolio website waar ik mijn projecten en blogs op deel.</p>
            </section>
        <?php endif; ?>

    </div>
</body>
</html>