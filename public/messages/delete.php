<?php require __DIR__ . '/../header.php'; ?>

<?php check_login_or_exit(); ?>

<?php
if (!isset($_GET['message'])) {
  die('Kan bericht niet laden! Geen id meegegeven. Ga terug en probeer het opnieuw');
}

$message = selectOne("
    SELECT *, 
      messages.id AS message_id
    FROM messages
    WHERE messages.id = :id
  ", [
    ':id' => $_GET['message']
  ]);

if (!$message) {
  die('Kan bericht niet laden! Ongeldig id meegegeven. Ga terug en probeer het opnieuw');
}
?>

<h2>Bericht verwijderen</h2>

<p>Weet u zeker dat u dit bericht wilt verwijderen?</p>

<form action="<?php echo path('backend/messagesController.php'); ?>" method="POST">
  <input type="hidden" name="action" value="delete">
  <input type="hidden" name="id" value="<?php echo $message['message_id']; ?>">
  <input type="submit" value="Ja, verwijderen">
</form>

<?php require __DIR__ . '/../footer.php'; ?>