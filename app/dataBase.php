<?php

namespace App ;
use \PDO;

class dataBase {

    private $db_name;
    private $db_user;
    private $db_pass;
    private $db_host;
    private $pdo;
    /**
     * @param array $settings db_user db_name db_pass db_host
     * @return dataBase instance
     */
    public function __construct($settings){
        // __construct begin
        $this->db_user = $settings['db_user'];
        $this->db_name = $settings['db_name'];
        $this->db_pass = $settings['db_pass'];
        $this->db_host = $settings['db_host'];
    }

    private function getPDO(){
        if($this->pdo == null){
            $this->pdo = new PDO('mysql:dbname='.$this->db_name.';host='.$this->db_host, $this->db_user, $this->db_pass);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        }
        return $this->pdo;
    }
     /**
     * this function uses PDO class
     * @param string $statment (sql statment)
     * @param string|null $class (class name to fetch the results in), $class accepts null as a value to return an array of fetched elements.
     * @return object of $class, takes fetched elements from the query. or an array in case the $class = null.
     *  
     */
    public function query($statment,$class){
        $PDO = $this->getPDO();
        $results = $PDO->query($statment);
        if($class === null){
            $results->setFetchMode(PDO::FETCH_OBJ);
        }else{
            $results->setFetchMode(PDO::FETCH_CLASS,$class);
        }
        $results = $results->fetchAll();
        return $results;
    }
    /**
     * this function uses PDO class
     * @param string $statment, (sql statment).
     * @param string|int $attr, attributes to take in the query statment.
     * @param string|null $class, (class name to fetch the results in), $class accepts null as a value to return an array of fetched elements.
     * @param boolean $one, by default true, true to fetch only one element, false to fetch more then one element.
     * @return object of $class, takes fetched elements from the query. or an array in case the $class = null.
     *  
     */
    public function Prepare($statment,$attr,$class,$one = true){
        $req = $this->getPDO()->prepare($statment);
        $req->execute($attr);
        if($class === null){
            $req->setFetchMode(PDO::FETCH_OBJ);
        }else{
            $req->setFetchMode(PDO::FETCH_CLASS,$class);
        }
        if($one){
            $results = $req->fetch();
        }else{
            $results = $req->fetchAll();
        }

        return $results;
    }


}