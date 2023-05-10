<?php require __DIR__ . '/../header.php'; ?>

<?php
if (!isset($_GET['message'])) {
  die('Kan bericht niet laden! Geen id meegegeven. Ga terug en probeer het opnieuw');
}

$message = selectOne("
    SELECT *, 
      messages.id AS message_id, 
      authors.name AS author 
    FROM messages
    INNER JOIN authors
    ON messages.author_id = authors.id
    WHERE messages.id = :id
  ", [
    ':id' => $_GET['message']
  ]);

if (!$message) {
  die('Kan bericht niet laden! Ongeldig id meegegeven. Ga terug en probeer het opnieuw');
}
?>

<article>
  <h2><?php echo $message['title']; ?></h2>
  <span class="author">Geschreven door <?php echo $message['author']; ?></span>
  <p><?php echo $message['content']; ?></p>
  <?php if($message['author_id'] == $_SESSION['author_id']): ?>
    <a href="<?php echo path('public/messages/edit.php?message=' . $message['message_id']); ?>">(bericht bewerken)</a>
    <a href="<?php echo path('public/messages/delete.php?message=' . $message['message_id']); ?>">(bericht verwijderen)</a>
  <?php endif; ?>
</article>

<?php require __DIR__ . '/../footer.php'; ?>