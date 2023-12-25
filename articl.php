<?php
include("db.php");

class Article extends Db
{


  public function insert($tit, $cont, $use)
  {

    $con = $this->connect();

    $sql = $con->prepare("INSERT INTO `articles`(`titre`, `contenu`, `user_id`) VALUES (:a, :b, :c)");
    $sql->bindParam(':a', $tit);
    $sql->bindParam(':b', $cont);
    $sql->bindParam(':c', $use);

    $sql->execute();
    $this->dbConn = null;
  }

  public function afincherArticle()
  {
    $con = $this->connect();
    $sql = $con->prepare("SELECT * FROM `articles`");
    $sql->execute();
    $arr = $sql->fetchAll(PDO::FETCH_ASSOC);
    $this->dbConn = null;
    return $arr;
  }


  public function modifierArticle($tit, $cont, int  $articleId)
  {
    $con = $this->connect();
    $sql = $con->prepare("UPDATE `articles` SET `titre` = :a, `contenu` = :b WHERE  `id` = :d");
    $sql->bindParam(':a', $tit);
    $sql->bindParam(':b', $cont);
    $sql->bindParam(':d', $articleId);

    $sql->execute();
    $this->dbConn = null;
  }

  public function supprimerArticle(int $idA)
  {
    $con = $this->connect();
    $sql = $con->prepare("DELETE FROM `articles` WHERE `id` = :d");
    $sql->bindParam(':d', $idA);
    $sql->execute();
    $this->dbConn = null;
  }
}
