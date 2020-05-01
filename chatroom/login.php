<!-- login code based on https://www.youtube.com/watch?v=NXAHkqiIepc -->
<!-- H5 animation code based on https://www.codesdope.com/blog/article/creating-typewriter-text-animation-using-css/ -->

<html>
<head>
        <title>User Login and Registration</title>
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<style>
body {
  background: url("images/bg2.jpg");
  background-size: cover;
  background-position: center;
}
/*Login and Registration Box*/
.login-box {
  max-width: 700px;
  float: none;
  margin: -30px 255px auto;
}
.row {
  width: 900px;
  height: 400px;
}
.login-left {
  background: rgba(211, 211, 211, 0.5);
  padding: 50px;
  padding-bottom: 25px;
  border-top-left-radius: 10px !important;
  border-bottom-left-radius: 10px !important;
}
.login-right {
  background: #fff;
  padding: 50px;
  padding-bottom: 25px;
  border-top-right-radius: 10px !important;
  border-bottom-right-radius: 10px !important;
}
.form-control {
  background-color: transparent !important;
}
/*Misc*/
a {
  color: #fff !important;
}
h1 {
  color: #fff !important;
  margin-top: 200px !important;
  text-align: center !important;
  text-transform: uppercase;
}

/*H5 Animation*/
h5 {
  text-align: center;
  margin: 50px auto;
  font-size: 55px;
  font-family: 'Montserrat', sans-serif;
  color: white;
  border-right: solid 5px rgb(255,255,255);
  white-space: nowrap;
  overflow: hidden;
  animation: animated-text 4s steps(29,end) 0s 1 normal both,
             animated-cursor 600ms steps(29,end) infinite;
}
@keyframes animated-text{ /*text animation*/
  from{width: 0px;}
  to{width: 790px;}
}
@keyframes animated-cursor{ /* cursor animations */
  from{border-right-color: rgb(255,255,255);}
  to{border-right-color: transparent;}
}

button {
	background-color: #021631 !important;
  border-color: #021631 !important;
}

button:hover {
	background-color: #002B79 !important;
  border-color: #002B79 !important;
}
</style>

<body>
  <h5>Welcome to Chatroom Adventures.</h5>
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
        <form action="registration.php" method="post">
          <div class="form-group">
            <label>Username</label>
            <input type="text" name="user" class="form-control" required>
          </div>
          <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" class="form-control" required>
          </div>
          <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" class="form-control" required>
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
