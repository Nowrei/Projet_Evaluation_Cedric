<?php

require 'config.php';
require 'insert.php';

$db = new DatabaseConnection;



if(isset($_POST['submit']))
{
    $inputData = [
        'nom' => mysqli_real_escape_string($db->conn,$_POST['nom']),
        'age' => mysqli_real_escape_string($db->conn,$_POST['age']),
        'race' => mysqli_real_escape_string($db->conn,$_POST['race']),
        
    ];

    $chien = new chien;
    $result = $chien->create($inputData);
    
    if($result)
    {
        
        header ("location: index.php?message=succes");
    }
    else
    {
       header ("location: index.php?message=error");
    }
}
?>