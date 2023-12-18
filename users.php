<?php
include("db.php"); 
class  Users extends Db   {
   
   
  
    public function insert($firstname,$lastname,$username,$paword,$email,$roleId) {
     
        // Implementation for afincher method
        $sql = $this->connect()->prepare("INSERT INTO `utilisateurs`( `firstname`, `lastname`, `username`, `paword`, `email`, `role_id`)
    VALUES (:a,:b,:c,:d,:e,:f)");
      // Bind values to placeholders
       $sql->bindParam(':a',$firstname);
       $sql->bindParam(':b',$lastname);
       $sql->bindParam(':c',$username);
       $sql->bindParam(':d',$paword);
       $sql->bindParam(':e',$email);
       $sql->bindParam(':f',$roleId);
  
       $sql->execute();
       $this->dbConn = null;
    
    }
  
  }
  $a ="ayoub1";
  $b  ="ayoub1";
  $c  ="ayoub";
  $d ="ayoub";
  $e ="ayoub@email.com";
  $f = 2;
  
  $det = new Users();
   $det->insert($a,$b,$c,$d,$e,$f);
  
   echo "<table style='border: solid 1px black;'>";
   echo "<tr><th>Id</th><th>Firstname</th><th>Lastname</th></tr>";
   
   
   ?>
