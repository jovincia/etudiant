<?php

try
{
    $bdd=new PDO('mysql:host=localhost;dbname=etudiant','root','');

}
catch(Exception $e)
{
    echo'ERREUR DE CONNEXION...'.$e->getMessage();
}


?>