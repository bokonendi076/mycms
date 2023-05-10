<?php require __DIR__ . '/init.php';

if (!isset($_POST['email']) || !is_email($_POST['email'])) {
    die('Voer een geldig e-mailadres in!');
}

if (!isset($_POST['password']) || empty($_POST['password'])) {
    die('Voer een geldig wachtwoord in! Mag niet leeg zijn.');
}

$author = selectOne('SELECT * FROM authors WHERE email = :email', [
    ':email' => $_POST['email'],
]);

if (!$author || password_verify($_POST['password'], $author->password)) {
    die('Geen geldige email of wachtwoord combinatie!');
}

$_SESSION['author_id'] = $author['id'];

redirect(path('public/index.php'));
