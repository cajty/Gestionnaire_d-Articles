<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Article</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>
  <div class="container mt-5">
    <h1>Create Article</h1>
    <form action="crud/insert.php" method="post">


      <div class="form-group">
        <label for="titre">Title:</label>
        <input type="text" class="form-control" name="titre" required>
      </div>

      <div class="form-group">
        <label for="contenu">Content:</label>
        <textarea class="form-control" name="contenu" required></textarea>
      </div>


      <button type="submit" class="btn btn-primary" name="submit_form">Create</button>
    </form>
  </div>
  <div class="container m-5">
    <h1>Article</h1>
    <table  class="table">
      <thead>
        <tr>
          <th>tire</th>
          <th>contenu</th>
          <th>date de creation</th>
          <th>edit</th>
        </tr>
      </thead>
  
    <?php
    include("articl.php");
    $row1 = new Article();
   


    foreach ($row1->afincherArticle() as $row) {
      echo
        "
      <tr>
      <td>$row[titre]</td>
      <td>$row[contenu]</td>
      <td>$row[date_de_creation]</td>
      <td>
      <a class ='btn btn-primary btn-sm ' href =\"crud/update.php?id=$row[id]\" >Edit</a>
      <a class ='btn btn-danger btn-sm 'href =\"crud/delet.php?id=$row[id]\"onClick=\"return confirm('Are you sure you want to delete?')\" >Delete</a>
          </td>
    
      </tr>";
    }

    ?>
 <table></table>
  </div>


</body>

</html>