 <?php 
$id = $_GET['id'];

$con = mysqli_connect('localhost', 'root', '', 'crud');

if (isset($_POST['name']) && isset($_POST['email'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $con = mysqli_connect('localhost', 'root', '', 'crud');
  $con->query("update peoples set name='$name', email='$email' where id=$id");
}
$peoples = $con->query("select * from peoples where id=$id");
$people = $peoples->fetch_object();

 ?>
 <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Update</title>
  <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>
  <div class="container">
    <div class="card">
      <div class="card-header">
        <h2>Update People</h2>
      </div>
      <div class="card-body">
        <form method="post">
          <div class="form-group">
              <label for="name">Name</label>
              <input value="<?= $people->name ?>" type="text" name="name" id="name" class="form-control">
          </div>
          <div class="form-group">
              <label for="email">Email</label>
              <input value="<?= $people->email ?>"  type="text" name="email" id="email" class="form-control">
          </div>
          <div class="form-group">
            <button class="btn btn-outline-info" type="submit">Update</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  
</body>
</html>
