# Kies je missie — PHP Logica 101 in duo's

Drie speelse programmeeropdrachten voor eerstejaars mbo. Kies met je duo **één** missie en werk daar twee uur aan. Je hoeft de andere twee niet te maken.

| Missie | Jullie doel |
| --- | --- |
| Eiland Escape | Controleer of jullie veilig kunnen vertrekken. |
| Snackbar Chaos | Bepaal of een bestelling uitgevoerd kan worden. |
| Heldenkeuring | Beslis of jullie held klaar is voor een reddingsmissie. |

## Beginnen

De eerste keer kopieer je de repository naar je computer. De docent vervangt `JOUW-GITHUBNAAM/JOUW-REPO` door de echte GitHub-eigenaar en repositorynaam, of deelt de URL van jullie eigen Classroom-repo.

```sh
git clone https://github.com/JOUW-GITHUBNAAM/JOUW-REPO.git php-logica-missies
cd php-logica-missies
```

Geen Git? Gebruik op GitHub **Code → Download ZIP**, pak de ZIP uit en open die map in je editor en terminal.

1. Open [instructie.html](instructie.html) in je browser. Dat is de keuze- en uitlegpagina.
2. Kies één opdracht en lees de bijbehorende instructie.
3. Open deze map in je editor. Start in de terminal, vanuit deze map:

   ```sh
   php -S localhost:8000
   ```

4. Open [de instructies via de lokale server](http://localhost:8000/instructie.html). Vanaf daar kun je het PHP-startbestand openen. Stop de server met `Ctrl+C`.
5. Pas het `start.php`-bestand van jullie gekozen opdracht aan. Sla op en vernieuw de browser.

Gebruik een geïnstalleerde PHP-versie, bijvoorbeeld de PHP-installatie van school. Gebruik je XAMPP? Zet deze map onder `htdocs`, start Apache en open `http://localhost/<mapnaam>/instructie.html`. Een PHP-bestand werkt niet door erop te dubbelklikken.

## Wat lever je in?

- Het aangepaste `start.php` van **één** opdracht.
- Het ingevulde `testplan.md` bij die opdracht, inclusief eigen testgevallen.
- Een ingevulde [terugblik.md](terugblik.md) met beide namen, rolwissels en uitleg van jullie logica.

Maak eerst de vijf verplichte stappen: invoer en rekenen → vier controles → één EN-besluit → een losse OF/NIET-melding → testen. Bonusstappen geven verdieping; ze vervangen de basis niet. Er zijn geen formulieren, loops, eigen functies of databases nodig. Jullie veranderen de invoer bovenaan het PHP-bestand.

## Operators: steeds een stap verder

| Niveau | Operators | Wat doe je ermee? |
| --- | --- | --- |
| Stap 1 | `=`, `.`, `+`, `-`, `*` | Waarden bewaren, tekst tonen en rekenen. |
| Stap 2 | `<`, `!==` | Ondergrenzen en verkeerde tekstwaarden herkennen. |
| Stap 3 | `>=`, `===`, `&&` | Vier booleans maken en alle regels tegelijk eisen. |
| Stap 4 | `\|\|`, `!` | Twee alternatieven accepteren en bij géén geschikt alternatief waarschuwen. |
| Bonus | `==`, `!=`, `/`, `%`, `+=`, `>`, `<=` | Typeverschillen, restdeling, scores en extra grenzen onderzoeken. |

Elke HTML-instructie heeft een operatorenkaart met voorbeelden. Bij het testen voorspellen jullie eerst het resultaat. Test daarna precies op de grens, onder de grens, losse fouten en combinaties van fouten.

## Samenwerken en GitHub

Werk met één gedeelde werkversie per duo. De bestuurder typt; de navigator voorspelt uitkomsten, leest en controleert. Wissel elke vijftien minuten.

