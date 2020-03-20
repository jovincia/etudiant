<?php
include_once("Etudiant.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Starter Template - Materialize</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
  <nav class="light-blue lighten-1" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="index.php" class="brand-logo">Gestion des notes</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="inscription.php">Inscription</a></li>
      </ul>
      <br></br>
      </nav>

<table class="striped">
        <thead>
          <tr>
              <th>Nom</th>
              <th>Prenom</th>
              <th>Note</th>
          </tr>
        </thead>
        <tbody>
        <?php
           $allEtudiant = EtudiantInfos::afficher();
           while($donnees = $allEtudiant->fetch()){
            ?>
             <tr>
             <td >
                <?= $donnees['nom']?>
            </td>
             <td  >
             <?= $donnees['prenom']?>       
            </td>
              <td >
              <?= $donnees['note']?>

              </td>
          </tr>
          <?php
         } 
           ?>
        </tbody>
      </table>
      <br></br>
     <a  href="inscription.php"> <button class="btn waves-effect blue" type="submit" center>Ajouter un etudiant
                    <i class="material-icons right">add</i>
                  </button></a>

</body>
</html>