<!DOCTYPE html>
<?php 
require 'config.php';
require 'select.php';


?>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
    
    
    
</head>

<body>
<h2>Exercice 8-9 </h2>
  <br>
  <br>
<form method="post" action="traitement.php" id="form">
<?php

if (isset($_GET['message'])) {
    if ($_GET['message'] == "succes") {

    echo "Chien entrée en bdd";
    }
}

if (isset($_GET['message'])) {
    if ($_GET['message'] == "error") {

    echo "Chien non entrée en bdd";
    }
}
?>
    <div class="mb-3">
     <label for="exampleInputRace1" class="form-label">Nom</label>
    <input type="nom" class="form-control" id="Nom" aria-describedby="nomHelp" name=nom>
  </div>
  <div class="mb-3">
    <label for="exampleInputRace1" class="form-label">Age</label>
    <input type="age" class="form-control" id="age" aria-describedby="age" name=age>
  </div>
  <div class="mb-3">
    <label for="exampleInputRace1" class="form-label">Race</label>
    <input type="race" class="form-control" id="race" aria-describedby="race" name=race>
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>

<table id="table_id" class="display">
    <thead>
        <tr>
            <th>Nom</th>
            <th>Age</th>
            <th>Race</th>
        </tr>
    </thead>
    <tbody>
        <tr>
        <?php
            $chien = new chien;
            $result = $chien->index();
          foreach($result as $row)
            {
          ?>
        <tr>
          <td><?= $row['nom'] ?></td>
          <td><?= $row['age'] ?></td>
          <td><?= $row['race'] ?></td>
          <?php
            }
            ?>
        </tr>
    </tbody>
</table>
<script>
  $(document).ready( function () {
    $('#table_id').DataTable();
} );
</script>
</body>
</html>

