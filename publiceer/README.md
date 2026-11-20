# Clone-instructie voor je GitHub Pages-site

- `clone-instructie.html` is een zelfstandige HTML-pagina, inclusief opmaak. Kopieer deze naar je bestaande site.
- `clone-fragment.html` is dezelfde instructie als HTML-sectie voor de inhoud van een bestaande pagina. Het fragment is geen volledige pagina.
- Vervang **JOUW-GITHUBNAAM/JOUW-REPO** door de echte eigenaar en repositorynaam in beide bestanden en in de hoofd-README. De lokale doelmap `php-logica-missies` mag blijven staan.
- Gebruik bij Classroom de eigen groepsrepo; laat studenten niet allemaal naar dezelfde docent-repo pushen.
- De HTML-instructies kunnen ook vanaf de root van deze repo via Pages worden getoond. PHP werkt daar niet; lokaal starten blijft nodig.
- Er is nog geen online repository of Pages-site aangemaakt/gepubliceerd.

## De voorbereide lokale repo publiceren

De lokale repo heeft branch `main`. Na aanmelden in GitHub CLI kun je deze vanuit de projectmap publiceren. Onderstaand voorbeeld maakt een **openbare** repository; kies `--private` als het materiaal besloten moet blijven.

```sh
gh auth login
gh repo create php-logica-missies --public --source=. --remote=origin --push
```

Na het publiceren vind je het adres met `git remote -v`. Vervang de voorbeeld-URL in de clone-instructies door dat echte adres, commit die aanpassing en push opnieuw.

Wil je de hele repo als instructiesite aanbieden? Selecteer in de Pages-instellingen branch `main` en map `/ (root)`. De `index.html` verwijst door naar de keuze-instructie. Voor je bestaande site hoef je alleen de zelfstandige clone-pagina of het fragment te kopiëren.
