<?php


$r1 = ['Titre1','Titre2','Titre3','Titre4','Titre5'];
$r2 = ['Titre1','Titre2','Titre3','Titre4','Titre5'];
$r3 = ['Titre1','Titre2','Titre3','Titre4','Titre5'];
$r4 = ['Titre1','Titre2','Titre3','Titre4','Titre5'];
$r5 = ['Titre1','Titre2','Titre3','Titre4','Titre5'];
$r = array ($r1,$r2,$r3,$r4,$r5);

$realisateurs = [
'realisateur1'=> ['Titre1','Titre2','Titre3','Titre4','Titre5'],
'realisateur2'=> ['Titre1','Titre2','Titre3','Titre4','Titre5'],
'realisateur3'=> ['Titre1','Titre2','Titre3','Titre4','Titre5'],
'realisateur4'=> ['Titre1','Titre2','Titre3','Titre4','Titre5'],
'realisateur5'=> ['Titre1','Titre2','Titre3','Titre4','Titre5']

];

function ShowDetails($nbrR,$nbrT){





}


foreach($realisateurs as $cle => $realisateur){
    echo 'les films de ' .$cle. ':<br>';

    foreach ($realisateur as $titre){
        echo $titre .'<br>';
    }
    echo '<br>';


}























?>