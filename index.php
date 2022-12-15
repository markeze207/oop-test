<?php



ini_set('display_errors', 1);
error_reporting(E_ALL);

define('ROOT', dirname(__FILE__));
require_once('components/Router.php');
require_once('components/db.php');

$router = new Router();
$router->run();

