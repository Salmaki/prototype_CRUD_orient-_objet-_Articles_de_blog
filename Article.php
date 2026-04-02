<?php 
require_once "Database.php";

class Article {
     private $conn;
     public $id;
     public $titre;
     public $contenu;

    public function __construct($db){
     $this->conn=$db;    
    }

   public function create() {
   $sql= "INSERT INTO articles (titre,contenu) VALUES (:titre,:contenu)";
   $stmt= $this->conn->prepare($sql);
   return $stmt->execute([
    "titre" => $this->titre,
    "contenu" => $this->contenu
   ]);
 }
 public function read(){
    $sql= "SELECT * from articles";
    $stmt= $this->conn->query($sql);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
 }
 public function update(){
    $sql= "UPDATE articles set titre=:titre ,contenu=:contenu WHERE id=:id";
    $stmt= $this->conn->prepare($sql);
    return $stmt->execute([
        "titre"=>$this->titre,
        "contenu"=>$this->contenu,
        "id"=>$this->id
    ]);
 }
 public function delete(){
    $sql= "DELETE from articles WHERE id=:id";
    $stmt= $this->conn->prepare($sql);
    return $stmt->execute([
        "id"=>$this->id
    ]);
 }








}



















