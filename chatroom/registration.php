<?php

session_start();

$con = mysqli_connect('localhost', 'root', 'rybu1');

mysqli_select_db($con, 'registration');

$uname = $_POST['user'];
$name = $_POST['name'];
$email = $_POST['email'];
$pass = $_POST['password'];

$u = " SELECT * FROM user_table WHERE uname = '$uname'";
$e = " SELECT * FROM user_table WHERE email = '$email'";

$ru = mysqli_query($con, $u);
$re = mysqli_query($con, $e);
$numu = mysqli_num_rows($ru);
$nume = mysqli_num_rows($re);

if ($numu == 1 || $nume == 1) {
  echo" <script> alert('Looks like that username and/or email already exists. Please try again with new credentials.'); window.location.href ='http://localhost/chatroom/login.php'</script>";
}
else {
  $reg = " INSERT INTO user_table (uname, name, email, password) VALUES ('$uname', '$name','$email','$pass')";
  mysqli_query($con, $reg);
  echo" <script> alert('Registration successful!'); window.location.href ='http://localhost/chatroom/login.php'</script>";
}

?>
