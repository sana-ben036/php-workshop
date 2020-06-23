<?php


    class Professeur{

        private static $titre;
        private $nom;
        private $etudiants;
    
        public function __construct($n){
            self :: $titre = 'Prof';
            $this-> nom = $n;
            $this-> etudiants = array() ;
    
        }
    
        public function addEtudiant(Etudiant $e){
            $this -> etudiants[$e-> getNom()] = $e;
            
    
        }
    
        public function imprimer (){
            echo self:: $titre  .' ' .   $this->nom .'<br/>';
            echo  print_r ($this->etudiants) .'<br/>';
    
        }

        public static function changerTitre(){
                self :: $titre = 'Dr';
        }


        


    }







?>