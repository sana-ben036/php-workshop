<?php

$realisateurs = [
    'realisateur1'=> ['Titre11','Titre12','Titre13','Titre14','Titre15'],
    'realisateur2'=> ['Titre21','Titre22','Titre23','Titre24','Titre25'],
    'realisateur3'=> ['Titre31','Titre32','Titre33','Titre34','Titre35'],
    'realisateur4'=> ['Titre41','Titre42','Titre43','Titre44','Titre45'],
    'realisateur5'=> ['Titre51','Titre52','Titre53','Titre54','Titre55']
    
    ];

function showDetails (int $r=5, int $t=5){

    global $realisateurs;                  // pour rendre un variable qui est declaré hors la fonction, accessible ( Portée globale)

    $nbrR = array_rand($realisateurs, $r); //pour determiner le nombre des realisateurs à afficher (note :array_rand() expects parameter 1 to be array)
    $nbrT = array_rand($nbrR, $t);        // pour determiner le nombre de titre à afficher (note: Second argument has to be between 1 and the number of elements in the array)
    
        foreach($nbrR as $cle => $i){
        echo "<b>les films de $i :</b> <br><br>";
    
        foreach ($nbrT as $y){
            echo $realisateurs[$i][$y] .'<br>';
    
        }
    
        echo '<br>';
        }

}showDetails(3,2)





?>