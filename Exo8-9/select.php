<?php

class chien
{
    public function __construct()
    {
        $db = new DatabaseConnection;
        $this->conn = $db->conn;
    }

    public function index()
    {
        $chienQuery = "SELECT * FROM chien";
        $result = $this->conn->query($chienQuery);
        if($result->num_rows > 0){
            return $result; 
        }else{
            return false;
        }
    }
}
