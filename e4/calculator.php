<?php


/*:::: calculer le factorielle:::::::::::::::::::::::::::::::::::::::::::::::::*/

function factorielle($nbr) { 
    if($nbr === 0) // condition d'arret 
    return 1;  
    else 
    return $nbr*factorielle($nbr-1); 
}  
$result = factorielle(3);
echo $result .'<br>';





/*::: fonction pour addition:::::::::::::::::::::::::::::::::::::::::::::::::*/

function addition(...$nbrs) { 

  echo  array_sum($nbrs);
    
}  

$result = addition(2,3,4,20);
echo $result .'<br>';





function addition_String(...$prenoms) { 

    foreach($prenoms as $p){

        echo 'bonjour '  .$p;
        echo'<br>';
    };
}    

$result = addition_String('sana','youssra');
echo $result .'<br>';




/*::: fonction verifier si le nombre est premier:::::::::::::::::::::::::::::::::::::::::::::::::*/


function Nombre_Premier(int $number){

    if ($number < 2){
        return false;
    }elseif($number >= 2 && $number % 2 == 0){
        return false;
    }else{
        return true;
        
    }
}
$result = Nombre_Premier(21);
if($result){
    echo 'ce nombre est un nombre premier' .'<br>';

}else {
    echo 'ce nombre n\'est pas un nombre premier' .'<br>';;
}


/*::::::::::::::: fonction callable::::::::::::::::::::::::::::::::::::::::*/

echo call_user_func('factorielle', 4);



?>








