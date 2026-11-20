# Docentenhandleiding

## Doel en doelgroep

Twee lesuren van samen ongeveer 120 minuten voor eerstejaars mbo die variabelen, arrays en if-statements kennen. Duo's kiezen één van drie gelijkwaardige contexten. De leerdoelen zijn: regels vertalen naar voorwaarden, meerdere controles combineren tot één besluit, grenswaarden onderzoeken en uitkomsten vooraf voorspellen.

De basis vraagt geen loops, eigen functies, formulieren, sessies of zoekfuncties voor arrays. Arrayposities zijn bewust vastgelegd: studenten lezen `$rugzak[0]` in plaats van een array te doorzoeken. Booleans en `&&`, `||`, `!` worden stapsgewijs geïntroduceerd. De startbestanden bevatten alleen invoer en uitvoer, nog geen oplossing. HTML-opmaak staat klaar. Er wordt vertrouwd op lokaal, door studenten aangepast bronmateriaal; voeg geen externe formulierinvoer toe binnen deze les.

## Voorbereiding

- Controleer dat PHP werkt op de schoolcomputers. Test `php -S localhost:8000` vanuit deze map en bezoek `/instructie.html`.
- Open de algemene HTML-instructie voor de klas. De HTML-pagina's werken ook zonder PHP; de startbestanden hebben een PHP-server nodig.
- Deel de repo met elk duo via de bestaande schoolwerkwijze. GitHub Classroom en een Projects-bord zijn optioneel; zie `projectbord.md`.
- Laat duo's één missie kiezen. Alle drie hebben vier noodzakelijke voorwaarden en vergelijkbare testbelasting.
- Spreek af waar het werk wordt ingeleverd. De repository bevat bewust geen volledige uitwerkingen die studenten kunnen kopiëren.

## Lesindeling

| Minuten | Activiteit |
| --- | --- |
| 0–10 | Keuze, teamnaam, rollen en verhaal. |
| 10–25 | Invoer begrijpen, vier regels voorspellen en eerste uitvoer. |
| 25–50 | Afzonderlijke voorwaarden programmeren; rollen wisselen. |
| 50–55 | Tussencheck: één succes en één mislukking demonstreren. |
| 55–85 | Stap 3: vier booleans combineren met EN. Stap 4: losse melding met OF en NIET. Snelle duo's beginnen bonus. |
| 85–105 | Acht vaste tests, drie meldingtests, twee eigen tests en controle door een ander duo. |
| 105–120 | Fouten herstellen, terugblik en inleveren. |

Laat elke vijftien minuten van bestuurder en navigator wisselen. Beide studenten formuleren ten minste één voorwaarde en leggen één grensgeval uit. Testtijd blijft verplicht, ook als de basis meer tijd kost; bonus kan vervallen.

## Verwachte logica van de basis

Elke rij hieronder bevat vier voorwaarden die **allemaal** moeten gelden. Elke mislukte voorwaarde geeft een eigen afwijsreden; daarna verschijnt één eindoordeel. Bij twee fouten moeten beide redenen zichtbaar zijn. De basis kent alleen de expliciet gegeven invoerwaarden; het afvangen van onbekende tekst is een bonus.

| Missie | Voorwaarde 1 | Voorwaarde 2 | Voorwaarde 3 | Voorwaarde 4 |
| --- | --- | --- | --- | --- |
| Eiland | Energie ≥ 50 | Weer is rustig | Rugzak[0] is touw | Rugzak[1] is water |
| Snackbar | Budget ≥ totaalprijs | Voorraad is ja | Allergie is geen | Keuken is open |
| Helden | Kracht ≥ 60 | Energie ≥ 40 | Uitrusting[0] is schild | Missie is redden |

Snackbar: precies één burger van €3, één friet van €2 en één water van €1; totaal €6. Dit menu bevat melk. Bij invoer `melk` voor de allergie wordt de hele bestelling afgewezen. De oefening is een fictieve vaste spelregel, geen echte allergenencontrole.

Mogelijke aanpak bij vastlopen: laat studenten eerst één losse foutcontrole maken. In stap 3 bewaren ze daarna de vier positieve voorwaarden als booleans en verbinden die met `&&`. Die combinatie gaat in één `if / else` voor het eindoordeel. Een geslaagde tussencontrole mag een eerdere fout nooit ongedaan maken.

Stap 4 is bewust een losse melding: eiland accepteert een zaklamp of fluitje in rugzak[2]; snackbar accepteert afhaalcode A of B; helden accepteert een telefoon of portofoon in uitrusting[2]. Studenten gebruiken `||` voor de twee alternatieven en `!` voor de waarschuwing bij geen van beide. Deze oefening wijzigt het eindoordeel van de vier hoofdregels niet. Bij ieder alternatief blijft de waarschuwing uit; bij de ongeschikte waarde verschijnt hij.

## Differentiatie en begeleiding

- **Extra steun:** laat één variabele tegelijk veranderen. Vraag: 'Welke regel is nu onwaar?' Gebruik de syntaxkaart in de instructie en wijs op array-index 0. Geef eerst feedback op de voorspelling.
- **Basis:** rekenen met `+`, `-`, `*`; vier controles met `<` en `!==`; positieve booleans met `>=` en `===`; één eindoordeel met `&&`; losse melding met `||` en `!`; acht gegeven tests, drie meldingtests, twee eigen tests en een gezamenlijke terugblik.
- **Verdieping:** `==` tegenover `===` onderzoeken, `/`, `%`, `+=`, `>` en `<=` gebruiken; twee eigen routes met expliciete regels; onbekende invoer afvangen. De HTML-instructie legt operatoren kort uit. Studenten schrijven eerst hun extra regels en testen beide takken.
- **Verder:** een eigen moeilijkheidsstand, met aantoonbaar andere drempels en tests precies op en onder elke grens. Geen extra techniek nodig.

## Beoordeling / formatieve feedback

| Onderdeel | Nog oefenen | Basis behaald | Verdieping |
| --- | --- | --- | --- |
| Regels | Er ontbreken controles of voorwaarden kloppen niet. | Vier controles volgen de opgegeven regels. | Extra routes volgen vooraf vastgelegde eigen regels. |
| Eindoordeel | Een fout kan later worden overschreven. | Elke fout leidt betrouwbaar tot afwijzing; precies één oordeel. | Ook gecombineerde en onbekende invoer is doordacht afgehandeld. |
| Testen | Vooral standaardinvoer geprobeerd. | Acht gegeven tests, drie meldingtests en twee eigen tests met voorspelling, resultaat en herstel. | Nieuwe routes, grenzen en combinaties hebben extra tests. |
| Uitleg en duo | Eén student kan de code niet toelichten. | Beiden leggen een voorwaarde en grensgeval uit; rolwissels zichtbaar. | Beiden kunnen alternatieve voorwaarden en hun gevolgen uitleggen. |

Een sterke basis is een volledig resultaat. Bonus is geen voorwaarde voor het behalen van de basis. Gebruik geen beoordeling op visuele aankleding: de focus ligt op logica.

## Handige controlevragen

- Waarom is precies 50 energie bij het eiland voldoende?
- Wat gebeurt er als de eerste controle mislukt en de laatste slaagt?
- Zie je bij twee fouten ook twee redenen, maar toch maar één eindoordeel?
- Hebben jullie voor elke test eerst alle beginwaarden hersteld?
- Kunnen jullie elkaars voorwaarde uitleggen zonder de code uit te voeren?

## Technische controle

De PHP-startbestanden kunnen gecontroleerd worden met `php -l opdrachten/eiland/start.php` (en hetzelfde voor snackbar en helden). De starters zijn bewust onaf: het oordeel blijft `nog niet beoordeeld` totdat studenten hun logica toevoegen. Een syntaxcontrole controleert niet of hun spelregels kloppen; daarvoor zijn de testplannen.
