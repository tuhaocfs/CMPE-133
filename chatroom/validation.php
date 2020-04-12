<?php

session_start();

$con = mysqli_connect('localhost', 'root', 'rybu1');

mysqli_select_db($con, 'registration');

$uname = $_POST['user'];
$pass = $_POST['password'];
$name = $_POST['name'];

$s = " SELECT * FROM user_table WHERE uname = '$uname'";

$result = mysqli_query($con, $s);
$playname = mysqli_query($con, $n);
$num = mysqli_num_rows($result);

if ($num == 1) {
  $_SESSION['user'] = $uname;
  header('location:welcome.php');
}
else {
  header('location:login.php');
}

?>
