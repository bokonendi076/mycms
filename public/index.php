<?php require __DIR__ . '/header.php'; ?>

<?php
$messages = select("SELECT * FROM messages");
$authors = select("SELECT * FROM authors");
$pages = select("SELECT * FROM pages"); 
?>
<header>

</header>

<main>
    <div class="page-wrapper">
    <h2>All pages</h2>
        <?php 
        echo"<ul>";
            foreach($pages as $page) {
                echo '<li><a href="page.php?pageid='. $page['id'] .'">' . $page['pageName']  . '</a></li>';
            }
        echo"</ul>"
    ?>
    </div>
</main>
<?php require __DIR__ . '/footer.php'; ?><q></q>