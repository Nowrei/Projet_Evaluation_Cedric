<?php

class insert
{
    public function __construct()
    {
        $db = new DatabaseConnection;
        $this->conn = $db->conn;
    }

    public function create($inputData)
    {
        $nom = $inputData['nom'];
        $prenom = $inputData['prenom'];
        $tel = $inputData['tel'];
        $email = $imputData['email'];

        $clientQuery = "INSERT INTO client (nom_client,prenom_client,tel_client,mail_client) VALUES ('$nom','$prenom','$tel,'$email')";
        $result = $this->conn->query($chienQuery);
        if($result){
            return true;
        }else{
            return false;
        }
    }
}
