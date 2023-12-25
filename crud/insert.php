<?php
include("../articl.php");

if (isset($_POST['submit_form'])) {
  $titre = $_POST['titre'];
  $contenu = $_POST['contenu'];
  $art = new Article();
  $art->insert($titre, $contenu, 1);


  header("Location:../index.php");
}
