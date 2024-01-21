<?php

class DatabaseConnection{
    private $server="localhost";
    private $username="root";
    private $password="";
    private $database="bite";

    public function startConnection(){
        if(!$conn = mysqli_connect($this->server,
        $this->username, $this->password,
        $this->database)){
            echo "Error";
            return null;
        } else {
            echo "Success";
            return $conn;
        }
    }
}

?>