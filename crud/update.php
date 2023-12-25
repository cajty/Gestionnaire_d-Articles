<?php
include("../articl.php");



if (isset($_POST['submit_mod'])) {
  $id = $_GET['id'];
  $titre = $_POST['titre'];
  $contenu = $_POST['contenu'];


  if (!empty($titre) && !empty($contenu)) {
    // Use UPDATE query instead of INSERT
    $art = new Article();
    $art->modifierArticle($titre, $contenu, $id);
  }

  header("Location:../index.php");
}
