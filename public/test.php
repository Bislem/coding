<?php
require "../app/Autoloader.php";
use App\Autoloader;
Autoloader::register();
use App\App;



$app = App::getInstance();
$table = $app->getTable('infraction')->getAll_JSON();
$columns = $app->getTable('infraction')->getColumns(true); 


require "../pages/test.php";

