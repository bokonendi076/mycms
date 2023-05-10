<?php require __DIR__ . '/header.php'; ?>


<?php
$messages = select("SELECT * FROM messages");
$authors = select("SELECT * FROM authors");
// $pages = select("SELECT * FROM pages");
$page = getPage();
?>



<header>

</header>

<main>
  <div class="page-wrapper">
    <?php
      echo '<div class="page-title"> '. $page['pageName'] . '</div>';
    ?> 
  </div>
 
</main>
<?php require __DIR__ . '/footer.php'; ?>