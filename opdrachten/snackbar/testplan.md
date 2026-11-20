# Testplan — Snackbar Chaos

Namen: … en …

## Eerst voorspellen

Onze voorspelling voor de beginwaarden: …

Waarom: …

## Beginwaarden (voor ELKE test herstellen)

- `$budget = 6;`
- `$voorraad = "ja";`
- `$allergie = "geen";`
- `$keuken = "open";`
- `$producten = ["burger", "friet", "water"];`
- `$prijzen = [3, 2, 1];`

Verander daarna alleen de waarden die bij de test staan. Bij de snackbar blijft de bestelling één van elk product, zonder korting. De acht basistests gaan over de vier hoofdregels; de losse melding van stap 4 verandert dat oordeel niet.

Verwacht en Redenen zijn de testopdracht. Schrijf bij Voorspelling vooraf wat jullie eigen code volgens jullie gaat doen en waarom. Vul daarna Werkelijk in: oordeel én redenen. Noteer in de laatste kolom of het klopt, wat is gerepareerd en het resultaat van de hertest. Er verschijnt altijd precies één eindoordeel.

| Test | Wijziging na herstellen | Verwacht oordeel | Verwachte afwijsredenen | Onze voorspelling + waarom | Werkelijk oordeel + redenen | Klopt / reparatie / hertest |
| --- | --- | --- | --- | --- | --- | --- |
| 1. Precies genoeg | Geen | BESTELLING MAG DOOR | Geen | … | … | … |
| 2. Boven de grens | budget = 7 | BESTELLING MAG DOOR | Geen | … | … | … |
| 3. Onder de grens | budget = 5 | BESTELLING AFGEWEZEN | Budget | … | … | … |
| 4. Geen voorraad | voorraad = "nee" | BESTELLING AFGEWEZEN | Voorraad | … | … | … |
| 5. Allergie | allergie = "melk" | BESTELLING AFGEWEZEN | Allergie | … | … | … |
| 6. Keuken gesloten | keuken = "dicht" | BESTELLING AFGEWEZEN | Keuken | … | … | … |
| 7. Twee fouten | budget = 5; keuken = "dicht" | BESTELLING AFGEWEZEN | Budget én keuken | … | … | … |
| 8. Eerste fout, rest goed | budget = 0; andere beginwaarden herstellen | BESTELLING AFGEWEZEN | Budget | … | … | … |
| 9. Eigen combinatie van fouten | … | … | … | … | … | … |
| 10. Eigen grensgeval | … | … | … | … | … | … |

## Losse OF/NIET-melding (stap 4)

Herstel de beginwaarden. Verander alleen de signaal- of codewaarde uit stap 4. Het eindoordeel van de basis blijft daardoor gelijk. Noteer bij Werkelijk of dat inderdaad zo is.

| Waarde | Verwachte melding | Onze voorspelling + waarom | Werkelijk + eindoordeel | Klopt / reparatie / hertest |
| --- | --- | --- | --- | --- |
| `A` | Geen waarschuwing | … | … | … |
| `B` | Geen waarschuwing | … | … | … |
| `C` | Wel waarschuwing | … | … | … |

## Controle door een ander duo

- Namen van het testduo:
- Hun test met succes:
- Hun grensgeval:
- Hun combinatie van fouten:
- Gevonden fout, reparatie en hertest:

## Bonus (optioneel)

Schrijf extra regels in `terugblik.md`. Voeg per bonus minstens twee tests toe. Bij twee routes: één succes en één afwijzing per route.

| Bonus | Invoer | Voorspelling + waarom | Werkelijk | Klopt / reparatie / hertest |
| --- | --- | --- | --- | --- |
| … | … | … | … | … |
| … | … | … | … | … |
