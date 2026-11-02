<?php

$page = $_GET['page'] ?? 'home';

$allowedPages = [
    'home',
    'e-menu',
    'digital-badge',
    'ranking',
    'fav-list',
    'recommend-quiz'
];

if (!in_array($page, $allowedPages)) {
    $page = 'home';
}

include 'components/navbar.php';

if ($page == 'home') {
    include 'pages/home.php';
} elseif ($page == 'e-menu') {
    include 'pages/e-menu.php';
} elseif ($page == 'digital-badge') {
    include 'pages/digital-badge.php';
} elseif ($page == 'ranking') {
    include 'pages/ranking.php';
} elseif ($page == 'fav-list') {
    include 'pages/fav-list.php';
} elseif ($page == 'recommend-quiz') {
    include 'pages/recommend-quiz.php';
}

?>