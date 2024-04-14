<?php

require_once(dirname(__FILE__, 2) . '/src/config/config.php');
// require_once(CONTROLLER_PATH . '/login.php');
// require_once(CONTROLLER_PATH . '/day_records.php');

$uri = urldecode(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

if($uri === '/' or $uri === '' or $uri === '/index.php'){
    $uri = '/login.php';
}

require_once(CONTROLLER_PATH . "/{$uri}");
