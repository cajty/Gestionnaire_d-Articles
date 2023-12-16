<?php
include("db.php");

class Article extends Db {
    public $id;
    public $titre;
    public $contenu;
    public $dateCreation;
    public $userId;

    public function insert($tit, $cont, $use) {
        $this->titre = $tit;
        $this->contenu = $cont;
        $this->userId = $use;
        $con = $this->connect();

        $sql = $con->prepare("INSERT INTO `articles`(`titre`, `contenu`, `user_id`) VALUES (:a, :b, :c)");
        $sql->bindParam(':a', $this->titre);
        $sql->bindParam(':b', $this->contenu);
        $sql->bindParam(':c', $this->userId);

        $sql->execute();
        $this->dbConn = null;
    }

    public function afincherArticle() {
      $con = $this->connect();
      $sql = $con->prepare("SELECT * FROM `articles`");
      $sql->execute();
      $arr = $sql->fetchAll(PDO::FETCH_ASSOC);
      $this->dbConn = null;
      return $arr;
     

        // Implementation for afincherArticle method
    }

    public function modifierArticle($tit, $cont, $use, $articleId) {
        $this->titre = $tit;
        $this->contenu = $cont;
        $this->userId = $use;

        $con = $this->connect();
        $sql = $con->prepare("UPDATE `articles` SET `titre` = :a, `contenu` = :b WHERE `user_id` = :c AND `id` = :d");
        $sql->bindParam(':a', $this->titre);
        $sql->bindParam(':b', $this->contenu);
        $sql->bindParam(':c', $this->userId);
        $sql->bindParam(':d', $articleId);

        $sql->execute();
        $this->dbConn = null;
    }

    public function supprimerArticle( int $idA) {
      $con = $this->connect();
      $sql = $con->prepare("DELETE FROM `articles` WHERE `id` = :d");
      $sql->bindParam(':d',$idA);
      $sql->execute();
      $this->dbConn = null;

        
    }
}
 if(isset($_POST['submit'])){
  $titre = $_POST['titre'];
$contenu = $_POST['contenu'];
  $art = new Article();
 $art->insert($titre, $contenu, 3);

 header("Location:index.php");
 }
  ?>
 

