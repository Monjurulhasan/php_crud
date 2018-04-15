<?php 

if (isset($_POST['name']) && isset($_POST['email'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $con = mysqli_connect('localhost', 'root', '', 'crud');
  $con->query("insert into peoples(name, email) value('$name', '$email')");
}


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
    <div class="card">
      <div class="card-header">
        <h2>Add People</h2>
      </div>
      <div class="card-body">
        <form method="post">
          <div class="form-group">
              <label for="name">Name</label>
              <input type="text" name="name" id="name" class="form-control">
          </div>
          <div class="form-group">
              <label for="email">Email</label>
              <input type="text" name="email" id="email" class="form-control">
          </div>
          <div class="form-group">
            <button class="btn btn-outline-info" type="submit">Add People</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  
</body>
</html>