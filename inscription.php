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
        <li><a href="profil.php">Profils</a></li>
      </ul>
     
<form action="traitement.php" method="post" style="text-align:center; margin-top: 250px;padding: 50px; margin-right: 20px; margin: auto;">
<div class="form-row">
    <div class="col-md-12">
     <h2>Nom</h2>
      <input type="text" class="form-control" name="name_etu" id="name" placeholder="Entrez le nom" required="required"> 
    </div>
    <div class="col-md-12">
      <h2><p>Prenom</p></h2>
      <input type="text" class="form-control" name="prenom_etu" id="name" placeholder="Entrez le prenom" required="required">
    </div>
    <div class="col-md-12">
      <h2><p>Note</p></h2>
      <input type="number" class="form-control" name="note_etu" id="name" placeholder="Entrez la note" required="required"> 
    </div>
    <div>
    <button class="btn waves-effect blue" type="submit" >Soumettre
                <i class="material-icons right">send</i>
     </div>
</form>
</body>
</html>


