<?php

class Etudiant{
    private $_nom;
    private $_titre = 'Student';
    public function __construct($n){
        $this->_nom = $n;
    }
    // methode getter to get name of student
    public function getNom() {
        return $this->_nom;
    }
    // methode to show instance
    public function afficherE(){
        echo  $this->_titre .' ' .$this->_nom . '<br/>';


    }
}



?>