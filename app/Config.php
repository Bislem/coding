<?php

namespace App;

class Config {

    private static $_instance;
    private static $_settings;

    public function __construct(){
        self::$_settings = require "../config/config.php";        
    }


    /** no parameters.
     * @return Config static instance, this instance is generated one time and used many times, (singlton). 
     */
    public static function getInstance(){
        if(self::$_instance === null){
            self::$_instance = new  Config();
        }
        return self::$_instance;
    }

    /** no parameters.
     * @return array $_settings static instance, this instance is generated one time and used many times, (singlton). 
     * contains the settings... db_*...
     */
    public static function getSettings(){
        self::getInstance();
        return self::$_settings;
    }



}