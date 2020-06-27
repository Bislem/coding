<?php
require "../app/Autoloader.php";

use App\App;
use App\Autoloader;
use App\Config;
use App\Login;

Autoloader::register();


$app = App::getInstance();
session_start();

if(isset($_SESSION['auth'])){
    $acc = Login::getCurrentAcc($_SESSION['auth']);
    if(isset($_GET['p'])){
        $p = $_GET['p'];
    }else{
        $p = "dashbord";
    }    
}else{
    $p = "login";
    $log = "false" ;
}

if($p === "login"){
    unset($_SESSION['auth']);
    require "../pages/login.php";
}else{

    ob_start();
    if( isset(Config::getSettings()['pages'][$p]) ){
    require Config::getSettings()['pages'][$p];
    }else{
        require Config::getSettings()['pages']['error'];
    }
    $content = ob_get_clean();
    require "../pages/templates/default.php";
}





?>