<?php

session_start();
if (!isset($_SESSION['username'])) {
  header('location:login.php');
}

?>

<html>
<head>
  <title> Home Page </title>
  <link rel="stylesheet" type="text/css" href="login-style.css">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>
  <div class="container">
    <a class="float-right" href="logout.php"> LOGOUT </a>
    <h1> Welcome <?php echo $_SESSION['username']; ?></h1>
  </div>
</body>
</html>
