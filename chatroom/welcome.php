<?php

session_start();
if (!isset($_SESSION['user'])) {
  header('location:login.php');
}
?>
<html>
<head>
        <title>Welcome</title>
        <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  background-color: #4D4E5F;
  background: url("images/backg.jpg");
}
/*Menu Section*/
.menu-button {
  background-color: #007BFF;
  color:white;
  font-weight: bold;
  font-size: 12px;
  width: 100px;
  padding:16px 2px;
  cursor: pointer;
  position: fixed;
  top: 5%;
  right: 2%;
  width: 100px;
  border-radius: 10px;
}
.form-popup {           /* The menu */
  display: none;
  position: fixed;
  top: 12%;
  right: 2%;
}
.form-container {       /* Add styles to the menu container */
  width: 175px;
  padding: 16px 2px;
  background-color:lightgray;
  border-radius: 10px;
}
.form-container .btn {  /* Set a style for the buttons in menu form */
  background-color:#FFFFFF;
  color: #003D6A;
  padding: 10px 40px;
  border: none;
  width: 155px;
  display: block;
  margin: 10px;
  border-radius: 10px;
  font-family: 'Montserrat', sans-serif;

}
.form-container .btn:hover, .open-button:hover {  /* Add hover effects to buttons */
  opacity: 1;
}

/*H5 Animation*/
h5 {
  text-align: center;
  font-size: 50px;
  font-family: 'Montserrat', sans-serif;
  color: white;
  border-right: solid 5px rgb(255,255,255);
  white-space: nowrap;
  overflow: hidden;
  margin: 0 auto;
  animation: animated-text 4s steps(29,end) 0s 1 normal both,
             animated-cursor 600ms steps(29,end) infinite;
}
@keyframes animated-text{ /*text animation*/
  from{width: 0px;}
  to{width: 730px;}
}
@keyframes animated-cursor{ /* cursor animations */
  from{border-right-color: rgb(255,255,255);}
  to{border-right-color: transparent;}
}

.flex {
  margin-top: 50px;
  display: flex;
  justify-content: center;
}

.flex-item + .flex-item {
  margin-left: 50px;
}

.button {
  margin-top: 50px;
  background-color: #0066FF;
  border-radius: 10px;
  width: 300px;
  height: 150px;
  color: white;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 28px;
  cursor: pointer;
}

/*Misc*/
h4 {
  margin: 20px auto auto 0px;
  margin-bottom: -50px;
  padding: 0;
  text-align: center;
  line-height: 300px;
  font-size: 60px;
  font-family: 'Montserrat', sans-serif;
  color: white;
}
</style>

</head>
<body>
  <h4>Welcome, <?php echo $_SESSION['user']; ?>.</h4>
  <h5>Choose how your story ends.</h5>

  <button class="menu-button" onclick="openForm()">Menu</button>
  <div class="form-popup" id="myForm">
    <form action="/action_page.php" class="form-container">
      <button type="submit" class="btn" formaction="http://localhost/chatroom/instructions.php">Instructions</button>
      <button type="submit" class="btn" formaction="http://localhost/chatroom/about.php">About Us</button>
      <button type="submit" class="btn" formaction="http://localhost/chatroom/logout.php">Log Out</button>
      <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
    </form>
  </div>

  <script>
    function openForm() {
      document.getElementById("myForm").style.display = "block";
    }
    function closeForm() {
      document.getElementById("myForm").style.display = "none";
    }
  </script>

  <div class="flex">
  <form action="aboutus.html" class="flex-item">
    <button class="button">Start New Story</button>
  </form>

  <form action="end.html" class="flex-item">
    <button class="button">Continue Story</button>
  </form>
</div>

</body>
</html>
