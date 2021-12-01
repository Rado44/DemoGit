<?php
    class DBConnection
    {
        private $hostName = "127.0.0.1";
        private $userName = "root";
        private $password = "";
        private $dbName = "invoicedb";
        private $conn;
        
        public function db_connect()
        {
            $this->conn = new mysqli($this->hostName, $this->userName, $this->password, $this->dbName);
            if (!$this->conn) {
                die("Connection failed: " . mysqli_connect_error());
            }
            echo 'Connected successfully';
            return $this->conn;
        }
    }
?>