<?php

require_once __DIR__ . '/vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader(__DIR__ . '/templates');
$twig = new \Twig\Environment($loader);

if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = 'home';
}

switch ($page) {
    case 'home':
        echo $twig->render('index.twig');
        break;
    case 'menu':
        echo $twig->render('MenuPage.twig');
        break;
    case 'booking':
        echo $twig->render('BookingPage.twig');
        break;
}