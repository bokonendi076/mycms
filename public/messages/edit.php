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

<h2>Bericht bewerken</h2>

<form action="<?php echo path('backend/messagesController.php'); ?>" method="POST">
  <input type="hidden" name="action" value="edit">
  <input type="hidden" name="id" value="<?php echo $message['message_id']; ?>">

  <div>
    <label for="title">Titel</label>
    <input type="text" name="title" id="title" value="<?php echo $message['title']; ?>">
  </div>
  <div>
    <label for="content">Inhoud</label>
    <textarea type="content" name="content" id="content"><?php echo $message['content']; ?></textarea>
  </div>
  <input type="submit" value="Bericht aanpassen">
</form>

<?php require __DIR__ . '/../footer.php'; ?>