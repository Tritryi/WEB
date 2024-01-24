<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Résultat du formulaire</title>
</head>
<body>

<h1>Résultat du formulaire</h1>

  
<h1>Informations concernants la candidature d'un élève souhaitant un stage</h1>

<p>
 <?php
          echo 'Nom du candidat : ' . htmlentities($_POST['nom']);
       ?>
</p>
<p>
 <?php
          echo 'Prénom du candidat : ' . htmlentities($_POST['prenom']);
       ?>
</p>
<p>
 <?php
          echo 'Âge du candidat : ' . htmlentities($_POST['age']);
       ?>
</p>
<p>
 <?php
          echo 'Adresse e-mail du candidat : ' . htmlentities($_POST['mail']);
       ?>
</p>
<p>
 <?php
          echo 'Adresse postale du candidat : ' . htmlentities($_POST['adresse']) . ','  . htmlentities($_POST['cp']);
       ?>
</p>
<p>
 <?php
          echo 'Établissement scolaire du candidat : ' . htmlentities($_POST['ecole']);
       ?>
</p>
<p>
 <?php
          echo 'Métier souhaité par le candidat : ' . htmlentities($_POST['metiers']);
       ?>
</p>
<p>
 <?php
          echo 'Études envisagées par le candidat : ' . htmlentities($_POST['etude']);
       ?>
</p>

</body>
</html>
