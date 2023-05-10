<?php require __DIR__ . '/../backend/init.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ons Blog</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo path('./public/assets/style.css'); ?>">
</head>

<body>
    <header>
        <div class="header-wrapper">
        <a href="<?php echo path('public/index.php'); ?>" class="logo">mycms</a>
        <div class="">
            <nav>
                <!-- <a href="<?php echo path('public/index.php'); ?>">Home</a></li>
                <a href="<?php echo path('public/messages/index.php'); ?>">Alle berichten</a></li>
                <a href="<?php echo path('public/messages/create.php'); ?>">Schrijf bericht</a></li> -->

                <?php if (isset($_SESSION['author_id'])) : ?>
                    <a href="<?php echo path('public/logout.php'); ?>">Uitloggen</a></li>
                <?php else : ?>
                    <a href="<?php echo path('public/login.php'); ?>">Inloggen</a></li>
                    <a href="<?php echo path('public/register.php'); ?>">Registreer</a></li>
                <?php endif; ?>
                </ul>
            </nav>
        </div>
        </div>
        
        
    </header>
    <main>