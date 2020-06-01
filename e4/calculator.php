<?php

/*
:::: calculer le factorielle:::::::::::::::::::::::::::::::::::::::::::

function factorielle($nbr) { 
    if($nbr === 0) // condition d'arret 
    return 1;  
    else 
    return $nbr*factorielle($nbr-1); 
}  
$result = factorielle(3);
echo $result;

*/
/* 
::: fonction pour addition:::::::::::::::::::::::::::::::::::::::::::::::::

function addition(...$nbrs) { 

  echo  array_sum($nbrs);
    
}  

$result = addition(2,3,4,20);
echo $result;
*/
/*
function addition(...$nbrs) { 

    foreach($nbrs as $i){

        echo 'bonjour '  .$i;
        echo'<br>';
    };
}    
  
  
  $result = addition('sana','youssra');
  echo $result;
*/



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
    echo 'ce nombre est un nombre premier';

}else {
    echo 'ce nombre n\'est pas un nombre premier';
}







?>








