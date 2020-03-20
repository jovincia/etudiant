<?php
class database{
    private $data;

public function __construct(){
    $this->data=new PDO("mysql:host=localhost;dbname=testdb","root","");
    $this->data->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $this->data->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FECTH_OBJ);

}
public function fonction_query($requete,$param=false){
 if($param){
     $requete->$this->data->prepare($requete);
     $requete->execute($param);
 }
 else {
    $requete->$this->data->query($requete);
 }
 return $requete;

 }

}








?>