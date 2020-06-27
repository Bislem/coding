<?php 

namespace App;

use App\dataBase;
use App\Config;



class App {

    private static $_instance ;
    private static $_db;

    public const URL = "http://localhost:3000/PABN.php?p=";




    /** no parameters.
     * @return App static instance, this instance is generated one time and used many times, (singlton). 
     */
    public static function getInstance(){
        if(self::$_instance === null){
            self::$_instance = new App();
        }
        return self::$_instance;
    }
    /** no parameters.
     * @return dataBase static instance, this instance is generated one time and used many times, (singlton). 
     */
    public function getDb(){
        if(self::$_db === null){
            self::$_db = new dataBase(Config::getSettings()['db']);
        }
        return self::$_db;
    }

    /**
     * @param string $page name of the page to get
     * @return string 
     */
    public static function getPage($page){
        return self::URL . $page;
    }


    public static function getTable($table){
        $table = strtolower($table);
        $table = ucfirst($table);
        $class = "\\".__NAMESPACE__."\\Tables\\".$table;
        return new $class();
    }


    public static function error404(){
        header("HTML/1.0 404 Eror404 page not found");
        header("Location: http://localhost:3000/PABN.php?p=error");
    }


}