<?php

session_start();
header('location:login.php'); 
$con = mysqli_connect('localhost', 'root', 'rybu1');

mysqli_select_db($con, 'user_registation');

$name = $_POST['user'];
$pass = $_POST['password'];

$s = " SELECT * FROM user_table WHERE name = '$name'";

$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);

if ($num == 1) {
  echo" The username is already taken.";
}
else {
  $reg = " INSERT INTO user_table (name, password) VALUES ('$name', '$pass')";
  mysqli_query($con, $reg);
  echo" Registation successful.";
}

?>
