<?php

include 'DBConfig.php';
class CrudFunction extends DBConfiguration
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getData($query){
        $output = $this->connection->query($query);
        if(!$output){
            return false;
        }
        $rows = array();
        while ($row = $output->fetch_assoc()){
            $rows[]=$row;
        }
        return $rows;
    }
    public function execute($query){
        $output = $this->connection->query($query);
        if($output == false){
            return false;
        }
    }
    public function delete($id, $tableName){
        $query = "Delete from $tableName WHERE id = $id";
        $output = $this->connection->query($query);
        if($output == false){
            return false;
        }
        else{
            return true;
        }
    }

}