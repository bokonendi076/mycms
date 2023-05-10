<?php require __DIR__ . '/init.php';

check_login_or_exit();

if($_POST['action'] === 'create'){
    if (!isset($_POST['title']) || empty($_POST['title'])) {
        die('Voer een geldig titel in! Mag niet leeg zijn.');
    }
    
    if (!isset($_POST['content']) || empty($_POST['content'])) {
        die('Voer een geldig inhoud in! Mag niet leeg zijn.');
    }
    
    query('INSERT INTO messages (title, content, author_id) VALUES (:title, :content, :author_id)', [
        ':title' => $_POST['title'],
        ':content' => $_POST['content'],
        ':author_id' => $_SESSION['author_id'],
    ]);
    
    redirect(path('public/messages/index.php'));
}

if($_POST['action'] === 'edit'){
    if (!isset($_POST['title']) || empty($_POST['title'])) {
        die('Voer een geldig titel in! Mag niet leeg zijn.');
    }
    
    if (!isset($_POST['content']) || empty($_POST['content'])) {
        die('Voer een geldig inhoud in! Mag niet leeg zijn.');
    }
    
    query('UPDATE messages SET title = :title, content = :content WHERE id = :id AND author_id = :author', [
        ':title' => $_POST['title'],
        ':content' => $_POST['content'],
        ':id' => $_POST['id'],
        ':author' => $_SESSION['author_id'],
    ]);
    
    redirect(path('public/messages/single.php?message=' . $_POST['id']));
}

if($_POST['action'] === 'delete'){
    query('DELETE FROM messages WHERE id = :id AND author_id = :author', [
        ':id' => $_POST['id'],
        ':author' => $_SESSION['author_id'],
    ]);
    
    redirect(path('public/messages/index.php'));
}
