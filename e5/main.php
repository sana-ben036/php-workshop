<?php



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<pre>
<h1>Espace des etudiants</h1>


<?php

spl_autoload_register(function($classe){
    require 'classes/' .$classe. '.class.php';
});


$e1 = new Etudiant('sana');
echo $e1->afficherE();
$e2 = new Etudiant('sara');
echo $e2->afficherE();
$e3 = new Etudiant('kamal');
echo $e3->afficherE();
$e4 = new Etudiant('samir');
echo $e4->afficherE();
$e5 = new Etudiant('khalid');
echo $e5->afficherE();

?>

<h1>Espace des professeurs</h1>

<?php

$p1 = new Professeur ('youssef');
    $p1 -> addEtudiant($e1);
    $p1 -> addEtudiant($e2);
    $p1 -> addEtudiant($e3);
    echo $p1->imprimer();
    
$p2 = new Professeur ('hanan');
    $p2 -> addEtudiant($e4);
    $p2 -> addEtudiant($e5);
    echo $p2->imprimer();

Professeur::changerTitre();
    echo $p1->imprimer();
    echo $p2->imprimer();
    


    




?>

    
</body>
</html>