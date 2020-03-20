<?php
class EtudiantInfos {

    private $num_mat;
    private $nom;
    private $prenom;
    private $note;


public function __construct(string $nom,string $prenom, int $note) {
        $this->nom=$nom;
        $this->prenom=$prenom;
        $this->note=$note;

}

public function getNom()
{
    return $this->nom;
}
public function setNom($nom)
{
   $this->nom=$nom;
}

public function getPrenom()
{
    return $this->prenom;
}

public function setPrenom($prenom)
{
    $this->prenom=$prenom;
   
}

public function getNote()
{
    return $this->note;
}

public function setNote($note)
{
    if (empty($note)){
        echo"Entrez la note s'il vous plaît";
    }
}
public function Ajouter () {
    include ('connexion.php');
    $req= $bdd -> prepare ('INSERT INTO etudiants(nom, prenom,note) VALUES (:nom , :prenom,:note) ');
    $answer= $req->execute(array(
        'nom' => $this->nom,
        'prenom' =>  $this->prenom,
        'note' => $this->note,
        ));
        echo "Un étudiant a bien été inséré";
    //var_dump($answer);
    
}

function Modify($nom, $num_mat)
{
    $Modifier=Connect()->prepare("UPDATE etudiants SET nom=:nom WHERE num_mat=".$num_mat."");
    $Modifier->execute(array('nom' => $nom));
    echo'Personne bien modifiée !';
}

function Del($num_mat)
{
    $suppr=Connect()->execute('DELETE FROM etudiants WHERE num_mat="'.$num_mat.'"');
    echo'Suppression bien effectuée !';
}
public static function afficher()
{
    include ('connexion.php');
    $reponse = $bdd->query('SELECT * FROM etudiants');
    return $reponse;
}
}