<?php require __DIR__ . '/init.php';

if (!isset($_POST['name'])) {
    die('Voer een geldige naam in!');
}

if (!isset($_POST['email']) || !is_email($_POST['email'])) {
    die('Voer een geldig e-mailadres in!');
}

if (!isset($_POST['password']) || empty($_POST['password'])) {
    die('Voer een geldig wachtwoord in! Mag niet leeg zijn.');
}

if (!isset($_POST['password_repeat']) || $_POST['password'] !== $_POST['password_repeat']) {
    die('Voer ter bevestiging twee keer uw wachtwoord naar keuze in!');
}

query('INSERT INTO authors (name, email, password) VALUES (:name, :email, :password)', [
    ':name' => $_POST['name'],
    ':email' => $_POST['email'],
    ':password' => password_hash($_POST['password'],  PASSWORD_DEFAULT),
]);

redirect(path('public/index.php'));
