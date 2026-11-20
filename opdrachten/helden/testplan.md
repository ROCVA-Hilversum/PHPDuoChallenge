# Testplan — Heldenkeuring

Namen: … en …

## Eerst voorspellen

Onze voorspelling voor de beginwaarden: …

Waarom: …

## Beginwaarden (voor ELKE test herstellen)

- `$kracht = 60;`
- `$energie = 40;`
- `$missie = "redden";`
- `$uitrusting = ["schild", "cape", "telefoon"];`

Verander daarna alleen de waarden die bij de test staan. Bij de snackbar blijft de bestelling één van elk product, zonder korting. De acht basistests gaan over de vier hoofdregels; de losse melding van stap 4 verandert dat oordeel niet.

Verwacht en Redenen zijn de testopdracht. Schrijf bij Voorspelling vooraf wat jullie eigen code volgens jullie gaat doen en waarom. Vul daarna Werkelijk in: oordeel én redenen. Noteer in de laatste kolom of het klopt, wat is gerepareerd en het resultaat van de hertest. Er verschijnt altijd precies één eindoordeel.

| Test | Wijziging na herstellen | Verwacht oordeel | Verwachte afwijsredenen | Onze voorspelling + waarom | Werkelijk oordeel + redenen | Klopt / reparatie / hertest |
| --- | --- | --- | --- | --- | --- | --- |
| 1. Precies beide grenzen | Geen | HELD MAG VERTREKKEN | Geen | … | … | … |
| 2. Boven beide grenzen | kracht = 61; energie = 41 | HELD MAG VERTREKKEN | Geen | … | … | … |
| 3. Te weinig kracht | kracht = 59 | EERST VOORBEREIDEN | Kracht | … | … | … |
| 4. Te weinig energie | energie = 39 | EERST VOORBEREIDEN | Energie | … | … | … |
| 5. Geen bescherming | uitrusting[0] = "kussen" | EERST VOORBEREIDEN | Bescherming | … | … | … |
| 6. Andere missie | missie = "trainen" | EERST VOORBEREIDEN | Missie | … | … | … |
| 7. Twee fouten | kracht = 59; energie = 39 | EERST VOORBEREIDEN | Kracht én energie | … | … | … |
| 8. Eerste fout, rest goed | kracht = 0; andere beginwaarden herstellen | EERST VOORBEREIDEN | Kracht | … | … | … |
| 9. Eigen combinatie van fouten | … | … | … | … | … | … |
| 10. Eigen grensgeval | … | … | … | … | … | … |

## Losse OF/NIET-melding (stap 4)

Herstel de beginwaarden. Verander alleen de signaal- of codewaarde uit stap 4. Het eindoordeel van de basis blijft daardoor gelijk. Noteer bij Werkelijk of dat inderdaad zo is.

| Waarde | Verwachte melding | Onze voorspelling + waarom | Werkelijk + eindoordeel | Klopt / reparatie / hertest |
| --- | --- | --- | --- | --- |
| `telefoon` | Geen waarschuwing | … | … | … |
| `portofoon` | Geen waarschuwing | … | … | … |
| `koekje` | Wel waarschuwing | … | … | … |

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
