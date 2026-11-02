<?php
require_once __DIR__ . '/functions.php';

$pageTitle = $pageTitle ?? 'Meeple Space';
$active    = $active ?? 'home';
$overlay   = $overlay ?? false; // true = navbar transparan di atas hero (halaman Home)

$links = [
    'home'      => ['index.php', 'Home'],
    'boardgame' => ['boardgame.php', 'Board Game'],
    'menu'      => ['menu.php', 'Menu'],
    'about'     => ['index.php#tentang', 'About'],
];
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= h($pageTitle) ?> - Meeple Space</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>

<nav class="nav<?= $overlay ? ' nav-overlay' : '' ?>">
    <div class="container">
        <a href="index.php" class="logo"><span class="logo-mark">♟</span>Meeple Space</a>
        <ul>
            <?php foreach ($links as $key => [$href, $label]): ?>
                <li><a href="<?= h($href) ?>"<?= $key === $active ? ' class="active"' : '' ?>><?= h($label) ?></a></li>
            <?php endforeach; ?>
        </ul>
        <a href="#booking" class="btn btn-sm">Booking</a>
    </div>
</nav>
