<?php


/*:::: calculer le factorielle (La récursivité) :::::::::::::::::::::::::::::::::::::::::::::::::*/

function factorielle($nbr) {              
    if($nbr == 1 ) // condition d'arret 
    return 1;  
    else 
    return $nbr*factorielle($nbr-1); 
}  
$result = factorielle(3);
echo $result .'<br>';



/*::::: fonction pour addition::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::*/

function addition(...$nbrs) {   // si on veut calculer la somme des valeurs (des arguments)

    return  array_sum($nbrs);
    
}  

$result= addition(2,4,20);
echo $result .'<br>';


function somme_argument(){    // si on veut calculer juste le nombre des entrees (nombre des arguments passés par la fonction)
    return func_num_args();


}
$result = somme_argument(1,6,9,'sana');
echo 'nombre des arguments est :' .$result. '<br/';



/*::: fonction verifier si le nombre est premier:::::::::::::::::::::::::::::::::::::::::::::::::*/


function nombre_premier($x){
    for ($i=2; $i < $x ; $i++) { 
        if($x % $i==0){
        $test =1;
        }
    }if (isset($test)) {
        echo "$x n'est pas un nomber premier";
    } else {
        echo "$x est un nomber premier";
    } 
}
nombre_premier(15);




/*::::::::::::::: fonction callable::::::::::::::::::::::::::::::::::::::::*/

echo call_user_func('addition', 1, 2) .'<br>';
echo call_user_func('factorielle', 5) .'<br>';
echo call_user_func('somme_argument','Ahmed','Kamal');
echo call_user_func('nombre_premier', 5) .'<br>';



?>




?>







