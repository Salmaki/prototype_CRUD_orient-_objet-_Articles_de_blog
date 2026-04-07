<?php
require_once "Database.php";
class Article{
    private $conn;
    public $id;
    public $titre;
    public $contenu;
     
public function __construct($connection){
   $this->conn=$connection;
}
public function readAll(){
    $sql = "SELECT * from Articles";
    $stmt= $this->conn->query($sql);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);

}





}
?>