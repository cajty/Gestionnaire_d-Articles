<?php 
include("db.php"); 
class Article extends Db {
    public $id;
    public $titre;
    public $contenu;
    public $dateCreation;
    public $userId;
    public function insert($tit,$cont,$use) {
     
       
        $this->titre = $tit; 
        $this->contenu = $cont;
        $this->userId = $use;
    
          // Implementation for afincher method
          $sql = $this->connect()->prepare("INSERT INTO `articles`( `titre`,`contenu`,`user_id`) VALUES (:a,:b,:c)");
        // Bind values to placeholders
         $sql->bindParam(':a',$tit);
         $sql->bindParam(':b',$cont);
         $sql->bindParam(':c',$use);
         

        
    
         $sql->execute();
         $this->dbConn = null;
      
      }

    public function afincherArticle() {
        // Implementation for afincherArticle method
    }

    public function modifierArticle($tit,$cont,$use) {
        // Implementation for modifierArticle method
        $this->titre = $tit; 
        $this->contenu = $cont;
        $this->userId = $use;
    
          // Implementation for afincher method
          $sql = $this->connect()->prepare("UPDATE `articles` SET ,`titre`= :a,`contenu`= :b WHERE user_id = :c");
        // Bind values to placeholders
         $sql->bindParam(':a',$tit);
         $sql->bindParam(':b',$cont);
         $sql->bindParam(':c',$use);
         
         $sql->execute();
         $this->dbConn = null;
    }

    public function supprimerArticle() {
        // Implementation for supprimerArticle method
    }
}


?>

?>