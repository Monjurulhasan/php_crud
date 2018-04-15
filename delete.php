<?php 

$id = $_GET['id'];
$con = mysqli_connect('localhost', 'root', '', 'crud');
$con->query("delete from peoples where id=$id");
header("Location: read.php");