<?php

namespace App\Tables;
use App\Tables\Tables;

class Users extends Tables{
    
    public function get($key){
        if($this->$key === null){
            return "NULL";
        }
        else return $this->$key;
    }


}