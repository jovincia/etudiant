<?php
 include_once('Etudiant.php');
extract($_POST);
if (isset($submit)) {
    $nom = $name_etu;
    $prenom = $prenom_etu;
    $note = $note_etu;
   $etudiant = new EtudiantInfos($nom,$prenom,$note);
    $etudiant->Ajouter();
}



?>