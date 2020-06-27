<?php

namespace App;

use App\App; 

class Login {

    public static function login($user,$password,$table){
        $db = App::getInstance()->getDb();
        $acc = $db->Prepare("select * from ".$table." where user = ? ",[$user],null);
        $pass = $acc->password;
        if($password === $pass){
            $_SESSION["auth"] = $acc->id;
            return true;
        }else{

            return false;
        }
    }


    public static function getCurrentAcc($id){
        $db = App::getInstance()->getDb();
        $acc = $db->Prepare("select * from police where id = ? ",[$id],"\App\Tables\Users");
        if(isset($acc)){
            return $acc;
        }else{
            return false;
        }
    }

    public static function logged(){
        return isset($_SESSION['auth']);
    }



}