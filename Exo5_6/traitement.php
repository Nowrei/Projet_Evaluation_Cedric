<?php

extract($_POST);
if (isset($nom) && empty($nom)) {

    echo '<div class="alert alert-danger d-flex align-items-center" role="alert"> 
    Entrez un nom.</div>';
}elseif (isset($prenom) && empty($prenom)) {

    echo '<div class="alert alert-danger d-flex align-items-center" role="alert"> 
    Entrez un prenom.</div>';
}elseif (isset($email) && empty($email)) {

    echo '<div class="alert alert-danger d-flex align-items-center" role="alert"> 
    Entrez un email.</div>';
}else{

    echo '<div class="alert alert-success" role="alert">
    Tout a bien été pris en compte
  </div>';
}