<html>
<head>
        <title>User Login and Registation</title>
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<style>
body {
  background: url("images/backg.jpg");
  background-size: cover;
  background-position: center;
}

.login-box {
  max-width: 700px;
  float: none;
  margin: 190px 250px auto;
}

.login-left {
  background: rgba(211, 211, 211, 0.5);
  padding: 50px;
  border-top-left-radius: 10px !important;
  border-bottom-left-radius: 10px !important;
}

.login-right {
  background: #fff;
  padding: 50px;
  border-top-right-radius: 10px !important;
  border-bottom-right-radius: 10px !important;
}

.form-control {
  background-color: transparent !important;
}

a {
  color: #fff !important;
}
h1 {
  color: #fff !important;
  margin-top: 200px !important;
  text-align: center !important;
  text-transform: uppercase;
}

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

/* The menu */
.form-popup {
  display: none;
  position: fixed;
  top: 12%;
  right: 2%;
}


/* Add styles to the menu container */
.form-container {
  width: 175px;
  padding: 16px 2px;
  background-color:lightgray;
  border-radius: 10px;
}

/* Set a style for the buttons in menu form */
.form-container .btn {
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



/* Add hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
</style>
<body>
  <div class="container">
    <div class="login-box">
    <div class= "row">
      <div class= "col-mid-6 login-left">
        <h2> Login Here</h2>
        <form action="validation.php" method="post">
          <div class="form-group">
            <label>Username</label>
            <input type="text" name="user" class="form-control" required>
          </div>

          <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" class="form-control" required>
          </div>
          <button type="submit" class="btn btn-primary"> Login </button>
        </form>
      </div>

      <div class= "col-mid-6 login-right">
        <h2> Register Here</h2>
        <form action="registation.php" method="post">
          <div class="form-group">
            <label>Username</label>
            <input type="text" name="user" class="form-control" required>
          </div>

          <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" class="form-control" required>
          </div>
          <button type="submit" class="btn btn-primary"> Register </button>
        </form>
      </div>
    </div>
  </div>
  </div>

  <button class="menu-button" onclick="openForm()">Menu</button>

  <div class="form-popup" id="myForm">
    <form action="/action_page.php" class="form-container">

       <button type="submit" class="btn" formaction="http://localhost/chatroom/welcome.php">Welcome</button>
       <button type="submit" class="btn" formaction="http://localhost/chatroom/about.php">About Us</button>


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
</body>
</html>
