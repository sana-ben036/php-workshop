<?php

class Etudiant{
    private static $titre;
    private $nom;
    public function __construct($n){
        self :: $titre = 'Student';
        $this->nom = $n;
    }
    // methode getter to get name of student
    public function getNom() {
        return $this->nom;
    }
    // methode to show instance
    public function afficherE(){
        echo  self :: $titre  .' ' .$this->nom . '<br/>';


    }
}



?>