<?php
require_once "Database.php";
class Article{
    private $conn;
    public $id;
    public $titre;
    public $contenu;
     
public function __construct($db){
   $this->conn=$db;
}
public function readAll(){
    $sql = "SELECT * from Articles";
    $stmt= $this->conn->query($sql);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);

}
public function readbyid($id){
    $sql= "SELECT * from articles WHERE id = :id";
    $stmt=$this->conn->prepare($sql);
    $stmt->execute([
        "id"=>$id
    ]);
    return  $stmt->fetch(PDO::FETCH_ASSOC);
}
}
?>