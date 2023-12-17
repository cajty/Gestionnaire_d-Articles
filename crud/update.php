<?php 
include("../articl.php");
header("Location:../index.php");
session_start();
$$titre =  '';
$contenu = '';

$id = $_GET['id'];
$art = new Article();
$art->modifierArticle($titre, $contenu, $id);


?>
<?php
require ('db.php');

 






$result = mysqli_query($conn, "SELECT * FROM contats WHERE id = $id");


$resultData = mysqli_fetch_assoc($result);

$name =  $resultData['nom_c'];
$lastname = $resultData['prénom_c'];
$email = $resultData['email_c'];
$mobile = $resultData['tel_c'];

if (isset($_POST['submit'])) {
   

    if (!empty($name) && !empty($lastname) && !empty($email) && !empty($mobile)) {
        // Use UPDATE query instead of INSERT
        $sql = "UPDATE contats SET `nom_c`='$name', `prénom_c`='$lastname', `tel_c`='$mobile', `email_c`='$email' WHERE id = $id";
        $query = mysqli_query($conn, $sql);

        if ($query) {
            echo "Record updated successfully.";
        } else {
            echo "Error updating record: " . mysqli_error($conn);
        }
    }
    header("Location:cont.php");
}

mysqli_close($conn);


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>edit</title>

<body>
<?php
include("navbar.php");
?>
  <div class="container mt-5">
    <h1>Create Article</h1>
    <form action="crud/insert.php" method="post">


      <div class="form-group">
        <label for="titre">Title:</label>
        <input type="text" class="form-control" name="titre" value="<?php echo $titre; ?>"required>
      </div>

      <div class="form-group">
        <label for="contenu">Content:</label>
        <textarea class="form-control" name="contenu" value="<?php echo $contenu; ?>" required></textarea>
      </div>


      <button type="submit" class="btn btn-primary" name="submit_form">Create</button>
    </form>
  </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>

</html>