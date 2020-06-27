<?php

namespace App\Tables;
use App\App;

class Tables{

    private function getClassName(){
        $class_name = get_called_class();
        $class_name = str_replace(__NAMESPACE__."\\","",$class_name);
        $class_name = strtolower($class_name);
        return $class_name;
    }
    /**
     * this function returns the columns feild names, as a html tag or as a json array...
     * @param boolean $json default false, if false returns html tag else json array (string)
     * @return string html tag|json array  
     */
    public function getColumns($json = false){
        $class = $this->getClassName();
        $db = App::getInstance()->getDb();
        $results = $db->query("show columns from ". $class, null);
        $tableFeilds = [];
        if($json === false){
            foreach($results as $column){
                array_push($tableFeilds , $column->Field );
            }
            return $tableFeilds;
        }else{
            foreach($results as $column){
                array_push($tableFeilds,["data" => $column->Field,"title" => $column->Field]);
            }
            return json_encode($tableFeilds);
        }
        

    }

    public function getRows(){
        $results = $this->getAll();
        $tableContent = "";
        foreach($results as $column){
        $tableContent .= '<tr role="row" class="odd">';
            foreach($column as $key => $content){
                $tableContent .= '<td>'. $content .'</td>';
            }
            $tableContent .= '</tr>';
        }

        return $tableContent;
    }



    public function getAll(){
        $class = $this->getClassName();
        $db = App::getInstance()->getDb();
        $results = $db->query("select * from ". $class, get_called_class());
        return $results;
    }
    /**
     * this function converts a class object into an array in json format [{"key" => "value"},...].
     * @return array 
     */
    public function getAll_JSON(){
        $results = $this->getAll();
        $columns = json_decode($this->getColumns(true));
        $json = [];
        foreach($results as $result){
            $temp = [];
            foreach($columns as $column){
                $str = $column->data;
                $temp[$str] = $result->$str;
            }
            array_push($json,$temp);
        }
        return json_encode($json,JSON_PRETTY_PRINT);
        
    }
    
}