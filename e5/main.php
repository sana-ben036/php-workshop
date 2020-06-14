<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<pre>
<h1>Espace d'etudiant</h1>
        <form action='main.php' method='post'>
            <label for='nom'>Nom  : </label>
            <input type='text' name='nom' id='nom'><br>
            <input type='submit' value='Envoyer'>
        </form>
        <?php
            require 'Etudiant.class.php';
            //+ Vérification des données reçues (regex + filtres)
            //+ Stockage des données (base de données)
        ?>

<h1>Espace de professeur</h1>
        <form action='main.php' method='post'>
            <label for='nom'>Nom  : </label>
            <input type='text' name='nom' id='nom'><br>
            <label for='etudiant'>Nom d'etudiant  : </label>
            <input type='text' name='etudiant' id='etudiant'><br>
            <input type='submit' value='Envoyer'>
        </form>
        <?php
            require 'Professeur.class.php';
            //+ Vérification des données reçues (regex + filtres)
            //+ Stockage des données (base de données)
        ?>
</body>
</html>