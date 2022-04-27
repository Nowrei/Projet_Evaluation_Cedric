<?php 
require 'chien.php';


$gena = new chien ("Gena","9","Bobtail");
$ouchka = new chien ("Ouchka","3","Bouvier bernois");
$orphea = new chien ("Orphéa","3","Mastiff anglais");


$gena->affiche();
$ouchka->affiche();
$orphea->affiche();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    
    
    
</head>

<body>
<h2>Exercice 7 </h2>
  <br>
  <br>
<form method="post" action="traitement.php" id="form">
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

  <div class="mb-3">
     <label for="exampleInputRace1" class="form-label">Nom</label>
    <input type="nom" class="form-control" id="Nom" aria-describedby="nomHelp" name=nom1>
  </div>
  <div class="mb-3">
    <label for="exampleInputRace1" class="form-label">Age</label>
    <input type="age" class="form-control" id="age" aria-describedby="age" name=age1>
  </div>
  <div class="mb-3">
    <label for="exampleInputRace1" class="form-label">Race</label>
    <input type="race" class="form-control" id="race" aria-describedby="race" name=race1>
  </div>

  <div class="mb-3">
     <label for="exampleInputRace1" class="form-label">Nom</label>
    <input type="nom" class="form-control" id="Nom" aria-describedby="nomHelp" name=nom2>
  </div>
  <div class="mb-3">
    <label for="exampleInputRace1" class="form-label">Age</label>
    <input type="age" class="form-control" id="age" aria-describedby="age" name=age2>
  </div>
  <div class="mb-3">
    <label for="exampleInputRace1" class="form-label">Race</label>
    <input type="race" class="form-control" id="race" aria-describedby="race" name=race2>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

</body>
</html>

