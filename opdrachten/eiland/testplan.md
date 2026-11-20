# Testplan — Eiland Escape

Namen: … en …

## Eerst voorspellen

Onze voorspelling voor de beginwaarden: …

Waarom: …

## Beginwaarden (voor ELKE test herstellen)

- `$energie = 70;`
- `$weer = "rustig";`
- `$rugzak = ["touw", "water", "zaklamp"];`

Verander daarna alleen de waarden die bij de test staan. Bij de snackbar blijft de bestelling één van elk product, zonder korting. De acht basistests gaan over de vier hoofdregels; de losse melding van stap 4 verandert dat oordeel niet.

Verwacht en Redenen zijn de testopdracht. Schrijf bij Voorspelling vooraf wat jullie eigen code volgens jullie gaat doen en waarom. Vul daarna Werkelijk in: oordeel én redenen. Noteer in de laatste kolom of het klopt, wat is gerepareerd en het resultaat van de hertest. Er verschijnt altijd precies één eindoordeel.

| Test | Wijziging na herstellen | Verwacht oordeel | Verwachte afwijsredenen | Onze voorspelling + waarom | Werkelijk oordeel + redenen | Klopt / reparatie / hertest |
| --- | --- | --- | --- | --- | --- | --- |
| 1. Alles goed | Geen | VERTREKKEN | Geen | … | … | … |
| 2. Op de grens | energie = 50 | VERTREKKEN | Geen | … | … | … |
| 3. Onder de grens | energie = 49 | BLIJVEN | Energie | … | … | … |
| 4. Slecht weer | weer = "storm" | BLIJVEN | Weer | … | … | … |
| 5. Verkeerd materiaal | rugzak[0] = "banaan" | BLIJVEN | Bouwmateriaal | … | … | … |
| 6. Geen drinken | rugzak[1] = "limonade" | BLIJVEN | Drinken | … | … | … |
| 7. Twee fouten | energie = 49; weer = "storm" | BLIJVEN | Energie én weer | … | … | … |
| 8. Eerste fout, rest goed | energie = 0; andere beginwaarden herstellen | BLIJVEN | Energie | … | … | … |
| 9. Eigen combinatie van fouten | … | … | … | … | … | … |
| 10. Eigen grensgeval | … | … | … | … | … | … |

## Losse OF/NIET-melding (stap 4)

Herstel de beginwaarden. Verander alleen de signaal- of codewaarde uit stap 4. Het eindoordeel van de basis blijft daardoor gelijk. Noteer bij Werkelijk of dat inderdaad zo is.

| Waarde | Verwachte melding | Onze voorspelling + waarom | Werkelijk + eindoordeel | Klopt / reparatie / hertest |
| --- | --- | --- | --- | --- |
| `zaklamp` | Geen waarschuwing | … | … | … |
| `fluitje` | Geen waarschuwing | … | … | … |
| `banaan` | Wel waarschuwing | … | … | … |

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
