<?php

class Professeur{
    private $_nom;
    private $_titre = 'Prof';
    private $_list_etudiants;


    public function __construct($n,Etudiant $etudiant){
        $this->_nom = $n;
        $this->_list_etudiants = $etudiant;

    }

    public function imprimer (){
        echo $this->_titre . $this->_nom .'<br/>';
        echo $this->_list_etudiants .'<br/>';
    }





}



?>