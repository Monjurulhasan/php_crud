<?php 

  $con = mysqli_connect('localhost', 'root', '', 'crud');
  $peoples = $con->query('select * from peoples');

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>
  <div class="container">
    <h1>All People</h1>
    
    <table class="table table-bordered">
      <tr>
        <th>id</th>
        <th>name</th>
        <th>email</th>
        <th>Action</th>
      </tr>
      <?php while($people = $peoples->fetch_object()): ?>
        <tr>
          <td><?= $people->id ?></td>
          <td><?= $people->name ?></td>
          <td><?= $people->email ?></td>
          <td>
           <a class="btn btn-info" href="update.php?id=<?= $people->id ?>">Edit</a> 
           <a class="btn btn-danger" href="delete.php?id=<?= $people->id ?>">Delete</a>
          </td>

        </tr>
      <?php endwhile; ?>
    </table>
  </div>

  
</body>
</html>