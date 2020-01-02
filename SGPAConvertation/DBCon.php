<?php
    class DBCon{
        private $host = "localhost";
        private $username = "root";
        private $password = "";
        private $database = "SGPA_Calculation";

        protected $connection;

        public function __construct()
        {
            if(!isset($this->connection)){
                $this->connection = new mysqli($this->host, $this->username, $this->password, $this->database);
                if(!$this->connection){
                    echo "connection problem!";
                    exit;
                }
            }
            return $this->connection;
        }
    }
?>