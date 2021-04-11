<?php

$request = $_SERVER['REQUEST_URI'];

switch ($request) {
    // Basic routing
    case '/':
        require __DIR__ . '/views/index.php';
        break;
    case '':
        require __DIR__ . '/views/index.php';
        break;
    case '/stats':
        require __DIR__ . '/views/stats.php';
        break;
    case '/faq':
        require __DIR__ . '/views/faq.php';
        break;
    case '/contact':
        require __DIR__ . '/views/contact.php';
        break;
    case '/privacypolicy':
        require __DIR__ . '/views/privacypolicy.php';
        break;
    case '/privacycookie':
        require __DIR__ . '/phpscripts/privacycookie.php';
        break;
    case '/sendmail':
        require __DIR__ . '/phpscripts/sendmail.php';
        break;    
    case '/randomperks':
        require __DIR__ . '/views/randomperks.php';
        break;
}