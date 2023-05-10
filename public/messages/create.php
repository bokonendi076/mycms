<?php require __DIR__ . '/../header.php'; ?>

<?php check_login_or_exit(); ?>

<h2>Bericht aanmaken</h2>

<form action="<?php echo path('backend/messagesController.php'); ?>" method="POST">
  <input type="hidden" name="action" value="create">

  <div>
    <label for="title">Titel</label>
    <input type="text" name="title" id="title">
  </div>
  <div>
    <label for="content">Inhoud</label>
    <textarea type="content" name="content" id="content"></textarea>
  </div>
  <input type="submit" value="Bericht schrijven">
</form>

<?php require __DIR__ . '/../footer.php'; ?>