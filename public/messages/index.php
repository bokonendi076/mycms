<?php require __DIR__ . '/../header.php'; ?>

<?php
$messages = select("
    SELECT *, 
      messages.id AS message_id, 
      authors.name AS author 
    FROM messages
    INNER JOIN authors
    ON messages.author_id = authors.id
  ");
?>

<h2>Berichten</h2>

<?php if (count($messages) == 0) : ?>
  <p>
    <strong>Er zijn geen berichten.</strong>
  </p>
<?php endif; ?>

<?php foreach ($messages as $message) : ?>
  <article>
    <h3><a href="<?php echo path('public/messages/single.php?message=' . $message['message_id']); ?>"><?php echo $message['title']; ?></a></h3>
    <span class="author">Geschreven door <?php echo $message['author']; ?></span>
    <p><?php echo $message['content']; ?></p>
  </article>
<?php endforeach; ?>

<?php require __DIR__ . '/../footer.php'; ?>