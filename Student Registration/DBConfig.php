<?php


class DBConfiguration
{
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $Database = "Student_Registration";

    protected $connection;

    public function __construct()
    {
        if(!isset($this->connection)){
            $this->connection = new mysqli($this->host, $this->username, $this->password, $this->Database);
                if(!$this->connection){
                    echo "Connection Problem";
                    exit;
                }
        }
        return $this->connection;
    }


}