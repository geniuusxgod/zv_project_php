<?php

    class Database{

        private $host = 'localhost';
        private $db_name = 'project.shop';
        private $user_name = 'root';
        private $password = '';
    
        protected $connection;
       
        protected function db_connection(){
            try {
                $connection = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name . 
                                      ";charset=utf8", 
                                      $this->user_name, 
                                      $this->password);
                $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
                $connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
                return $connection;
                
            }catch(PDOException $e){
                die("Chyba pripojenia k databáze: " . $e->getMessage());
            }
        }
    }

?>