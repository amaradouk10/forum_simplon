<?php
    class Database {

        private $pdo;
        public function __construct ($login, $password, $database_name, $host = 'localhost') {
            $this->pdo = new PDO("mysql:host=$host;dbname=$database_name", $login, $password);
    
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
        }
    
        public function request($query, $params = false) {
            if ($params) {
                $req = $this->pdo->prepare($query);
                $req->execute($params);
            } else {
                $req = $this->pdo->query($query);
            }
    
            return $req;
        }
    }
?>