<?php

class chien {
 
    public $nom;
    public $age;
    public $race;
  
    
    public function __construct($nom,$age,$race){

        $this->nom = $nom;
        $this->age = $age;
        $this->race = $race;
    }   

   public function affiche(){

    echo'Bonjour, je suis ' .$this->nom ." j'ai " .$this->age ." ans et je suis de la race des " .$this->race ."</br>";
   }

 

}   