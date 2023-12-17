<?php 
include("../articl.php");
$id = $_GET['id'];
$art = new Article();
$art->supprimerArticle($id);
header("Location:../index.php");



?>