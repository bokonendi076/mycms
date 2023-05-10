<?php require __DIR__ . '/header.php'; ?>

<h2>Registreren</h2>

<form action="<?php echo path('backend/registerController.php'); ?>" method="POST">
  <div>
    <label for="name">Naam</label>
    <input type="text" name="name" id="name">
  </div>
  <div>
    <label for="email">E-mailadres</label>
    <input type="email" name="email" id="email">
  </div>
  <div>
    <label for="password">Wachtwoord</label>
    <input type="password" name="password" id="password">
  </div>
  <div>
    <label for="password_repeat">Herhaal wachtwoord</label>
    <input type="password_repeat" name="password_repeat" id="password_repeat">
  </div>
  <input type="submit" value="Registreren">
</form>

<?php require __DIR__ . '/footer.php'; ?>