<?php

use App\Autoloader;

require "../app/Autoloader.php";

Autoloader::register();


use App\App;

$app = new App();