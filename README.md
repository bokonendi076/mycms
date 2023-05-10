# PHP Starter Template

Dit project dient als beginpunt voor het maken van een CRUD-applicatie met PHP.

Dit voorbeeld laat zien hoe je:
* registreren en inloggen kunt implementeren
* gebruikers berichten kunt laten aanmaken
* gebruikers hun eigen berichten kunt laten bewerken
* gebruikers hun eigen berichten kunt laten verwijderen

## Installatie

1. Kopieer deze hele map naar je `htdocs/` map en geef de map een nette naam
2. Start en maak een database aan
3. Pas de configuratie gegevens aan in `backend/config.php`:
    * `$dbHost`: Server waar de database staat (vaak localhost)
    * `$dbName`: Naam van de database
    * `$dbUser`: Gebruikersnaam om met de database te verbinden
    * `$dbPass`: Wachtwoord om met de database te verbinden
    * `$baseUrl`: Link naar de root van de website (vaak http://localhost/{projectnaam}, waar `{projectnaam}` de mapnaam is die je in stap 1 gekozen hebt)
4. Benader de site via http://localhost/{projectnaam}/public (vervang `{projectnaam}` met de naam van de map gekozen bij stap 1)

## Gebruik van dit PHP Starter Template

### Front-end:
* Alle front-end code gaat in `public/`
* Alle afbeeldingen, javascript en css gaat in `public/assets`
* Require op iedere front-end pagina boven aan de header:
    ```php
    <?php require __DIR__ . '/header.php'; ?>
    ```
* Require op iedere front-end pagina onderaan aan de footer:
    ```php
    <?php require __DIR__ . '/footer.php'; ?>
    ```
* Als je in een sub-map (bijv.: `messages/`) zit moet het pad naar de header of footer een of meerdere /../ bevatten (zie `public/messages/index.php` voor een voorbeeld)
* Gebruik de `path` functie om een link te maken relatief aan de root. Deze functie zet de `$baseUrl` voor de link. Enkele voorbeelden:
    *   ```php
        <a href="<?php echo path('public/index.php'); ?>">Home</a>
        ```
    *   ```php
        <form action="<?php echo path('backend/messagesController.php'); ?>" method="POST">
        ```


### Back-end:
* Alle backend code gaat in `backend/`
* Require op iedere back-end pagina boven aan de init (om de database en functies te laden):
    ```php
    <?php require __DIR__ . '/init.php'; ?>
    ```
* Maak gebruik van de database functies om snel gegevens uit de database te halen