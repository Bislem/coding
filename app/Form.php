<?php

namespace App ;

class Form {
    

    /**
     * @param string $type, type="" of the input
     * @param string $name, name="" of the input
     * @return string html tag input 
     */
    public function input($type,$name){
        return '<input type="'. $type .'" name="'. $name .'" autofill=" " class="form-control require form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter '.$name.'...">';
    }
}