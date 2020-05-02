<?php
// validation code based on https://www.youtube.com/watch?v=NXAHkqiIepc

session_start();

$con = mysqli_connect('localhost', 'root', 'rybu1');

mysqli_select_db($con, 'registration');

$uname = $_POST['user'];
$name = $_POST['pname'];
$pass = $_POST['password'];

$u = " SELECT * FROM user_table WHERE uname = '$uname'";
$p = " SELECT * FROM user_table WHERE password = '$pass'";

$ru = mysqli_query($con, $u);
$rp = mysqli_query($con, $p);
$numu = mysqli_num_rows($ru);
$nump = mysqli_num_rows($rp);

if ($numu == 1 && $nump == 1) {
  $_SESSION['user'] = $uname;
  $_SESSION['pname'] = $name;
  header('location:welcome.php');
}

else {
  echo" <script> alert('Incorrect username and/or password. Please try again.'); window.location.href ='http://localhost/chatroom/login.php'</script>";
}

?>
