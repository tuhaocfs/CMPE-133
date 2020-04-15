<!-- about code based on https://www.w3schools.com/howto/howto_css_about_page.asp-->
<!DOCTYPE html>
<html>
<head>
        <title>About Us</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: 'Montserrat', sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: #003D6A;
  color: white;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

a {
  color: white;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
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
</style>
</head>
<body>

<div class="about-section">
  <h1>About Us</h1>
  <p>Our web application is a class project for our Spring 2020 Software Engineering II class (CMPE 133).</p>
  <p>This class project involves creating any web application of choice using any language and operating system platform.</p>
  <p>To view our code, check out our repository <a href="https://github.com/uyen-carolyn/CMPE-133">here!</a>.</p>

  <button class="menu-button" onclick="openForm()">Menu</button>
  <div class="form-popup" id="myForm">
    <form action="/action_page.php" class="form-container">
       <button type="submit" class="btn" formaction="http://localhost/chatroom/welcome.php">Welcome</button>
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
</div>

<h2 style="text-align:center">Our Team Members</h2>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="images/default.jpg" alt="brian" style="width:100%">
      <div class="container">
        <h2>Brian Albert Rendoloza</h2>
        <p class="title">Team Member</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>GitHub: Redoloza-BrianAlbert</p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="images/profile-risha.jpg" alt="risha" style="width:100%">
      <div class="container">
        <h2>Risha Ray</h2>
        <p class="title">Team Member</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>GitHub: risharay</p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="images/default.jpg" alt="yenni" style="width:100%">
      <div class="container">
        <h2>Yenni Lam</h2>
        <p class="title">Team Member</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>GitHub: YenniLamb</p>
      </div>
    </div>
  </div>
</div>

<div class="column">
  <div class="card">
    <img src="images/profile-uyen.jpg" alt="uyen" style="width:100%">
    <div class="container">
      <h2>Uyen Nguyen</h2>
      <p class="title">Team Member</p>
      <p>Some text that describes me lorem ipsum ipsum lorem.</p>
      <p>GitHub: uyen-carolyn</p>
    </div>
  </div>
</div>
</div>

</body>
</html>
