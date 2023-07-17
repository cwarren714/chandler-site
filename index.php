<?php

$request = $_SERVER['REQUEST_URI'];

switch ($request) {
  case '/':
  case '':
    require __DIR__ . '/views/home.php';
    break;
  case '/about':
    require __dir__ . '/views/about.php';
    break;
  case '/cards-or-diablo':
    require __dir__ . '/views/cod.php';
    break;
  case '/blog':
    require __dir__ . '/views/blog.php';
    break;

  default:
    http_response_code(404);
    require __DIR__ . '/views/404.php';
    break;
}
