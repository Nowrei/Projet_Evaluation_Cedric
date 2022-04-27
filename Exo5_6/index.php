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

<h2>Exercice 5-6 </h2>
  <br>
  <br>
<form method="post" action="" id="form">
<script src="alert.js"></script> 

    <div class="mb-3">
     <label for="exampleInputEmail1" class="form-label">Nom</label>
    <input type="nom" class="form-control" id="Nom" aria-describedby="nomHelp" name=nom>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Prenom</label>
    <input type="prenom" class="form-control" id="Prenom" aria-describedby="prenomHelp" name=prenom>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email</label>
    <input type="email" class="form-control" id="Email" aria-describedby="emailHelp" name=email>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
<script>
  var personne = {
  "personne": [
    { "nom": ce,
      "prénom": $_POST['prenom'],
      "email":$_POST['email'], 
    },
   
  ],

};
console.log(personne);
</script>
</body>
</html>