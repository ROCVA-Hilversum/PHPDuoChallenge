<?php
// PHP Logica 101 — Eiland Escape
// Namen: ... en ...
// Verander hier de invoer. Houd de drie vaste arrayposities aan.
$teamnaam = "Vul jullie teamnaam in";
$energie = 70;
$weer = "rustig";
$rugzak = ["touw", "water", "zaklamp"];

// STAP 1: voeg hier berekeningen toe. Verander de oorspronkelijke invoer niet.

// STAP 3: maak hier vier booleans en combineer ze met &&.
// De vergelijkingen ontbreken bewust: jullie bouwen de logica zelf.
?>
<!doctype html>
<html lang="nl"><head><meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1"><title>Eiland Escape — ons duo</title><link rel="stylesheet" href="../../assets/stijl.css"></head>
<body><main>
    <nav class="nav"><a href="instructie.html">Terug naar de missie</a></nav>
    <header class="hero"><div class="eyebrow">Eiland Escape</div><h1><?= $teamnaam ?></h1><p>Verander de invoer in de code. Voorspel, sla op en vernieuw.</p></header>
    <section class="panel"><h2>Onze invoer</h2><ul>
        <li>Energie: <?= $energie ?></li>
        <li>Weer: <?= $weer ?></li>
        <li>Vak 0: <?= $rugzak[0] ?></li>
        <li>Vak 1: <?= $rugzak[1] ?></li>
        <li>Vak 2: <?= $rugzak[2] ?></li>
    </ul>
    <?php
    // STAP 1: toon jullie berekeningen met echo.
    // Gebruik minstens één keer een punt om tekst en een waarde te verbinden.
    ?>
    </section>
    <section class="panel"><h2>De vier controles</h2>
    <?php
    // STAP 2: vier losse if-statements met een afwijsreden per fout.
    // Test steeds één fout. Daarna twee fouten tegelijk.
    echo "De controles zijn nog niet gebouwd.";
    ?>
    </section>
    <section class="panel"><h2>Eindoordeel</h2>
    <?php
    // STAP 3: vervang de melding door één if / else.
    // Gebruik jullie combinatie van vier booleans.
    echo "Nog niet beoordeeld: programmeer eerst de regels.";
    ?>
    </section>
    <section class="panel"><h2>Losse melding: OF en NIET</h2>
    <?php
    // STAP 4: maak hier de OF-controle en NIET-melding.
    // Deze melding staat los van het eindoordeel hierboven.
    echo "De extra melding is nog niet gebouwd.";
    ?>
    </section>
</main></body></html>
