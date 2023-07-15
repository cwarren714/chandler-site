<?php

$request = $_SERVER['REQUEST_URI'];

switch ($request) {
  case '/':
  case '':
    require __DIR__ . '/pages/home.php';
    break;
  case '/about':
    require __dir__ . '/pages/about.php';
    break;
  case '/cards-or-diablo':
    require __dir__ . '/pages/cod.php';
    break;
  case '/blog':
    require __dir__ . '/pages/blog.php';
    break;

  default:
    http_response_code(404);
    require __DIR__ . '/pages/404.php';
    break;
}
