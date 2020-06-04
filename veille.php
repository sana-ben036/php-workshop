<?php
// des examples pour le veille
// ::::::::::::::::passage par reference :::::::::::::::::::::::::::::::::::::::::::::::


$moncompte = 2000;
    function interet($taux,&$compte){
        $compte *= 1+ $taux;
    }
    interet(0.02,$moncompte ) .'<br/>';
    echo $moncompte .'<br/>'; //affichera 2040


    $x = 0;
            
    function plus3($p){
        $p = $p + 3;
        echo 'Valeur dans la fonction : ' .$p .'<br/>'; //affichera valeur dans la fonction : 3
    }
    
    plus3($x) .'<br/>';
    echo '<br>Valeur en dehors de la fonction : ' .$x .'<br/>';  //affichera valeur dans la fonction : 0



// ::::::::::::::::   Valeur par défaut :::::::::::::::::::::::::::::::::::::::::::::::

function division($nb1,$nb2=10){
    echo $nb1/$nb2 .'<br/>';
}
division(2) ;


function bonjour($prenom, $role='abonné(e)'){
    echo 'Bonjour ' .$prenom. ' vous êtes un(e) ' .$role. '.<br>';
}

bonjour('Mathilde') .'<br/>';
bonjour('Pierre', 'administrateur') .'<br/>';


// ::::::::::::::::   un nombre de paramètres variables:::::::::::::::::::::::::::::::::::::::::::::::

function dit_bonjour (...$prenoms) { 

    foreach($prenoms as $p){

        echo 'bonjour '  .$p . '<br/>';
    };
}    
dit_bonjour('sana','youssra') .'<br/>';



// ::::::::::::::::  Le typage des arguments:::::::::::::::::::::::::::::::::::::::::::::::


function test($a, $b){
    echo $a. ' + ' .$b. ' = ' .($a + $b). '<br>';
}

function add(float $a, float $b){
    echo $a. ' + ' .$b. ' = ' .($a + $b). '<br>';
}

test(3, 4). '<br>';
test(3, '4Pierre'). '<br>'; //'4Pierre' est converti en 4 par PHP
test(3, 'Pierre'). '<br>'; //'Pierre' est converti en 0 par PHP
echo  '<br>';
add(3, 4). '<br>';
add(3, 4.5). '<br>';
add(3, '4Pierre'). '<br>'; //'4Pierre' est converti en 4 par PHP
add(3, 'Pierre'). '<br>'; //Renvoie une erreur qui termine l'exécution



// ::::::::::::::::  L'instruction return:::::::::::::::::::::::::::::::::::::::::::::::

function multecho(float $a, float $b){
    echo $a. ' * ' .$b. ' = ' .$a * $b. '<br>';
}

function multreturn(float $a, float $b){
    return $a * $b ;
}

multecho(2, 3). '<br>';
$result=  multreturn(4, 5);
echo $result;


// ::::::::::::::::  La portée des variables :::::::::::::::::::::::::::::::::::::::::::::::::::::::::::

$nb = 2;
    function affiche(){    // global:::::
        global $nb;
        echo $nb;              
    }
    affiche() ;
    // affichera 2 (echo $GLOBALS['nb'];)


    function portee2(){    // local ::::::
        $z = 5;
        return $z . '<br>';
    }
    $a= portee2();
    echo 'la valeur de Z est:' .$a ;


    function compteur(){    // static::::::
        static $x = 0;
        echo '$x contient la valeur : ' .$x. '<br>';
        $x++;
    }
    
    compteur();
    compteur();
    compteur();


    
    function direBonjour($prenom){
        static $nbPersonne=0;
        echo "bonjour ".$prenom."<br/>";
        $nbPersonne++;
        echo "je viens de dire bonjour à ".$nbPersonne." personne(s) <br/> ";
    }
    direBonjour("daniel") . '<br/>';
    // affichera 'je viens de dire bonjour à  1 personne(s)'
    direBonjour("roberto") . '<br/>';
    // affichera 'je viens de dire bonjour à  2 personne(s)'

// ::::::::::::::::  fonction variables :::::::::::::::::::::::::::::::::::::::::::::::::::::::::::

function calculInteret($taux,$compte){
    $compte *= 1 + $taux;
}
$funcInteret = 'calculInteret';
$funcInteret(0.2,20000) . '<br/>'; // exécute la fonction calculInteret()


function seLever(){         // example des fonctions stockés dans un tableau 
    echo "je me lève <br>";
}
function travailler(){
    echo "je travaille <br>";
}
function dormir(){
    echo "je dors";
}
$maVie = array('seLever','travailler','dormir');

foreach($maVie as $action){
    $action();
}





// ::::::::::::::::  callable :::::::::::::::::::::::::::::::::::::::::::::::::::::::::::



function plus_3($a){
    echo $a + 3 .'<br>';
}
$x= 5;
call_user_func ('plus_3',$x);


call_user_func ('plus_3',30);

echo call_user_func('gettype','sana');





function cmp($a, $b)
{
    if ($a == $b) {
        return 0;
    }
    return ($a < $b) ? -1 : 1;
}

$a = array(3, 3, 5, 6, 1);

echo usort($a, "cmp") .'<br>'; 

foreach ($a as $key => $value) {
    echo "$key: $value <br>";
}







?>