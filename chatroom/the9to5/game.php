
<!--Game worked on with Risha and Uyen -->
<?php
// welcome code based on https://www.youtube.com/watch?v=NXAHkqiIepc
session_start();
if (!isset($_SESSION['user'])) {
  header('location:login.php');
  exit();
}
?>
<!-- game code based on https://bootsnipp.com/tags/chat-->
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html>
<head>
  <title>The 9 to 5</title>
  <link rel="icon" href="../images/favicon.ico">
  <style>
  /*.mytext{
      border:0;padding:10px;background:whitesmoke;
  }*/
  body {
    overflow-x: hidden;
  }
  .text{
      width:75%;display:flex;flex-direction:column;
  }
  .text > p:first-of-type{
      width:100%;margin-top:0;margin-bottom:auto;line-height: 13px;font-size: 12px;
  }
  .text > p:last-of-type{
      width:100%;text-align:right;color:silver;margin-bottom:-7px;margin-top:auto;
  }
  .text-l{
      float:left;padding-right:10px;
  }
  .text-r{
      float:right;
      padding-left:10px;
  }
  .avatar{
      display:flex;
      justify-content:center;
      align-items:center;
      width:25%;
      float:left;
      padding-right:10px;
  }
  .macro{
      margin-top:5px;width:85%;border-radius:5px;padding:5px;display:flex;
  }
  .msj-rta{
      float:right;background:whitesmoke;
  }
  .msj{
      float:left;background:white;
  }
  .frame{
      position: absolute;
      left: 30%;
      margin-left: -190px;
      background:#e0e0de;
      width: 1000px;
      height:620px;
      margin-top:25px;
      margin-bottom:10px;
      overflow:hidden;
      padding:0;
  }
  .frame > div:last-of-type{
      position:absolute;bottom:0;width:100%;display:flex;
  }
  body > div > div > div:nth-child(2) > span{
      background: whitesmoke;padding: 10px;font-size: 21px;border-radius: 50%;
  }
  body > div > div > div.msj-rta.macro{
      margin:auto;margin-left:1%;
  }
  ul {
      width:100%;
      list-style-type: none;
      padding:18px;
      position:absolute;
      bottom:47px;
      display:flex;
      flex-direction: column;
      top:0;
      overflow-y:scroll;
  }
  .msj:before{
      width: 0;
      height: 0;
      content:"";
      top:-5px;
      left:-14px;
      position:relative;
      border-style: solid;
      border-width: 0 13px 13px 0;
      border-color: transparent #ffffff transparent transparent;
  }
  .msj-rta:after{
      width: 0;
      height: 0;
      content:"";
      top:-5px;
      left:14px;
      position:relative;
      border-style: solid;
      border-width: 13px 13px 0 0;
      border-color: whitesmoke transparent transparent transparent;
  }
  input:focus{
      outline: none;
  }
  ::-webkit-input-placeholder { /* Chrome/Opera/Safari */
      color: #d4d4d4;
  }
  ::-moz-placeholder { /* Firefox 19+ */
      color: #d4d4d4;
  }
  :-ms-input-placeholder { /* IE 10+ */
      color: #d4d4d4;
  }
  :-moz-placeholder { /* Firefox 18- */
      color: #d4d4d4;
  }

  .topnav {
    overflow: hidden;
    background-color: #021631;
    /*font: 'Montserrat', sans-serif;*/
    font: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
    height: 57px;
  }
  .rightnav {
    padding-top: 20px;
    padding-right: 205px;
  }
  .rightnav a {
    float: right;
    color: #818B98;
    padding-right: 10px;
    text-align: center;
    text-decoration: none;
    font-size: 15px;
    text-decoration: none;
  	background-color: transparent;
  }
  .rightnav a:hover {
    color: #BFC5B2;

  }
  .rightnav a.active {
    color: white;
  }
  .leftnav a {
    float: left;
    color: white;
    text-align: center;
    padding-left: 205px;
    padding-top: 17px;
    text-decoration: none;
    font-size: 20px;
    text-decoration: none;
  	background-color: transparent;
  }
  .leftnav a.active {
    background-color: #4CAF50;
    color: white;
  }
  </style>
</head>
    <body>
      <div class="topnav">
        <div class="leftnav">
          <a href="#">Chatroom Adventures</a>
        </div>
          <div class="rightnav">
            <a href="http://localhost/chatroom/logout.php">Logout</a>
            <a href="http://localhost/chatroom/welcome.php" onclick="return goBack()" id="goback">Go Back</a>
            <a href="#about"  onclick="saveGame()" id="save">Save</a>
            <a class="active" href="#home">The 9 to 5</a>
          </div>
      </div>
    </div>
        <div class="col-sm-3 col-sm-offset-4 frame">
            <ul></ul>
            <div>
                <div class="msj-rta macro">
                    <div class="text text-r" style="background:whitesmoke !important">
                      <!--Needs to be altered to display scripts, fit into page, and only continue game script once clicked-->
                        <button id='1' onclick="myFunction(this)">button 1</button>
                        <button id='2' onclick="myFunction(this)">button 2</button>

                        <!--input class="mytext" placeholder="Type a message"/-->

                    </div>
                </div>
                <div style="padding:10px;">
                    <span class="glyphicon glyphicon-share-alt"></span>
                </div>
            </div>
        </div>
        <script>
        // scripts to be filled in
        var playerName = '<?php echo $_SESSION['user'];?>';
        var aCount = 0;
        var bCount = 0;
        var nullCount = 0;
        var episodes = 0;
        var gameScript = ["Hello, " + playerName, "Welcome to the Collective Intelligence Company, or CIC for short. We are so excited to have you here with us.",
        "As you already know, I’m your leader Mr. Pearson. And as you can see, we will be using this chatroom for much of our communication. It’s not only convenient but also helps us foster good relations among the workforce while facilitating increased productivity.",
        "", "Well, I’m sure you’ll be a pro at this in no time." , "I look forward to seeing how well you work.", "Cheers."];
        var playerScriptA = ["I like it. I think this is efficient.", "Going well. Happy to contribute."];
        var playerScriptB = ["It seems a little impersonal...", "It’s hard to keep up sometimes."];
        var gameEndingA = ["Hey, boss. I'm sorry about what happened in the last meeting.",
        "I know. I know. Thanks to your talks on efficieny, I think I'm becoming a better worker.",
        "Boss, can I ask you something?", "What ever happend to Mr. Pearson?",
        "You don't have to be so callous about it.",
        "But isn't it weird that we never heard from him right before you took his job? And when we did, it was from the news saying that he was found in the river nearby the office? I heard from the other workers that there was something fishy about it.",
        "Right, of course.", "I will say, I kinda like you better than Mr. Pearson. You're nicer."];
        var gameEndingB = ["Woah, you're still on here?",
        "Especially what happened.",
        "Same here! Did you hear the results of the court-hearing? Mr. Pearson and the higher-ups of CIC are sentenced to life!",
        "Right, I forgot that. I'm sorry",
        "Hey, " + playerName + ". Can I ask you something?",
        "How did you find me? When you came to get me, you looked like you went through a lot... what did they do to you?",
        "Yeah! See you tomorrow at 2?"];
        var playerEndingA = [];
        var playerEndingB = [];
        var part = 0;
        var stage = 0;
        var n = 100;

        var peter = {};
        peter.avatar = "../images/boss2.png";

        var you = {};
        you.avatar = "../images/user.png";

        var pat = {};
        pat.avatar = "../images/pat.png";

        function formatAMPM(date) {
            var hours = date.getHours();
            var minutes = date.getMinutes();
            var ampm = hours >= 12 ? 'PM' : 'AM';
            hours = hours % 12;
            hours = hours ? hours : 12; // the hour '0' should be '12'
            minutes = minutes < 10 ? '0'+minutes : minutes;
            var strTime = hours + ':' + minutes + ' ' + ampm;
            return strTime;
        }

        //-- No use time. It is a javaScript effect.
        function insertChat(who, text, time){
            if (time === undefined){
                time = 0;
            }
            var control = "";
            var date = formatAMPM(new Date());

            if (who == "peter"){
                control = '<li style="width:100%">' +
                                '<div class="msj macro">' +
                                '<div class="avatar"><img class="img-circle" style="width:100%;" src="'+ peter.avatar +'" /></div>' +
                                    '<div class="text text-l">' +
                                        '<p>'+ text +'</p>' +
                                        '<p><small>'+date+'</small></p>' +
                                    '</div>' +
                                '</div>' +
                            '</li>';
            }
            else if (who == "pat") {
              control = '<li style="width:100%">' +
                              '<div class="msj macro">' +
                              '<div class="avatar"><img class="img-circle" style="width:100%;" src="'+ pat.avatar +'" /></div>' +
                                  '<div class="text text-l">' +
                                      '<p>'+ text +'</p>' +
                                      '<p><small>'+date+'</small></p>' +
                                  '</div>' +
                              '</div>' +
                          '</li>';
            }
            else{
                control = '<li style="width:100%;">' +
                                '<div class="msj-rta macro">' +
                                    '<div class="text text-r">' +
                                        '<p>'+text+'</p>' +
                                        '<p><small>'+date+'</small></p>' +
                                    '</div>' +
                                '<div class="avatar"><img class="img-circle" style="width:100%;" src="'+ you.avatar+'" /></div>' +
                          '</li>';
            }
            setTimeout(
                function(){
                    $("ul").append(control).scrollTop($("ul").prop('scrollHeight'));
                }, time);

        }

        function resetChat(){
            $("ul").empty();
            // currently set to zero for debug
            aCount = 0;
            bCount = 0;
            part = 0;
        }

        $(".mytext").on("keydown", function(e){
            if (e.which == 13){
                var text = $(this).val();
                if (text !== ""){
                    insertChat("me", text);
                    $(this).val('');
                }
            }
        });

        $('body > div > div > div:nth-child(2) > span').click(function(){
            $(".mytext").trigger({type: 'keydown', which: 13, keyCode: 13});
        })

        //-- Clear Chat
        resetChat();
        runChat();

        //-- Print Messages
        /*
        var n = 500;
        for (var i = 0; i < gameScript.length; i++) {
          if (gameScript[i] == "") {
            insertChat("me", "Waiting for user response", n);
          }
          else {
            insertChat("me", gameScript[i], n);
          }
          n = n + 2000;
        }*/
        /*insertChat("you", playerScriptA[0], 1800);
        insertChat("me", gameScript[0], 500);
        insertChat("me", "As you already know, I’m your leader Mr. Pearson. And as you can see, we will be using this chatroom for much of our communication. It’s not only convenient but also helps us foster good relations among the workforce while facilitating increased productivity.", 1500);

        insertChat("me", "What would you like to talk about today?", 3500);
        insertChat("you", "Tell me a joke",7000);
        insertChat("me", "Spaceman: Computer! Computer! Do we bring battery?!", 9500);
        insertChat("you", "LOL", 12000);
        insertChat("me", "Hello Tom...", 13500);

        if (gameScript[i] == "") {
          $("#1").on("click", function() {
            insertChat("you", playerScriptA[0], 0);
          }
         }

        else {*/
        function runChat() {
          console.log('runchat');
          for (; stage < gameScript.length; stage++) {
            console.log('looping: ',stage);
            if (gameScript[stage] == "") {
              document.getElementById("1").addEventListener("click", myFunction);
            //  document.getElementById("2").addEventListener("click", myFunction);
              //continue;
              //$("#1").click(myFunction);
              break;
            }
            insertChat("peter", gameScript[stage], n);
            n = n + 1000;
          }
        }


        function myFunction(elem) {
          switch(elem.id) {
            case '1':
              insertChat("you", playerScriptA[part], 0);
              aCount++;
              //document.getElementById("demo1").innerHTML = "A count: " + aCount; // check how many times button is clicked. located when clicked on menu
            break;

            case '2':
              insertChat("you", playerScriptB[part], 0);
              bCount++;
              //document.getElementById("demo2").innerHTML = "B count: " + bCount; // check how many times button is clicked located
            break;
          }
          part++;
          stage++;
          n = n + 1000; 
          runChat();
        }
        /*
        insertChat("you", playerScriptA[part], 0);
        aCount++;
        insertChat("me", gameScript[i+1], n);
        document.getElementById("demo1").innerHTML = "A count: " + aCount; // check how many times button is clicked. located when clicked on menu
        part++;
        */
        /*
        function myFunction(elem) {
              switch(elem.id) {
                case '1':
                  insertChat("you", playerScriptA[part], 0);
                  aCount++;
                  document.getElementById("demo1").innerHTML = "A count: " + aCount; // check how many times button is clicked. located when clicked on menu
                break;

                case '2':
                  insertChat("you", playerScriptB[part], 0);
                  bCount++;
                  document.getElementById("demo2").innerHTML = "B count: " + bCount; // check how many times button is clicked located
                break;
             }
             part++;
        }
        */

        //document.getElementById("demo").innerHTML = aCount;
        //document.getElementById("demo2").innerHTML = bCount;
        //-- NOTE: No use time on insertChat.

        function goBack() {
          var answer = confirm ("Did you save yet? Press OK if you want to go back or Cancel to resume your game.");
          if (answer) {
            window.location="http://localhost/chatroom/welcome.php";
          }
          else {
            return false;
          }
           document.getElementById("goback").innerHTML = answer;
        }

        function saveGame() {
          alert("Your game has been saved!");
        }
        // -->
        </script>
    </body>
</html>
