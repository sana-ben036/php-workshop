<?php


class Professeur{
    private $_nom;
    private $_titre = 'Prof';
    private $_etudiants;


    public function __construct($n){
        $this->_nom = $n;
        $this->_etudiants = array();

    }

    public function addEtudiant(Etudiant $e){
        $this ->_etudiants[$e-> getNom()] = $e;
        

    }

    public function imprimer (){
        echo $this->_titre  .' ' .   $this->_nom .'<br/>';
        echo $this->_etudiants .'<br/>';
        foreach($_etudiants as $cle=>$i ){
            
        }
    }
}


?>