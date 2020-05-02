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
<script src= "https://code.jquery.com/jquery-1.12.4.min.js"> </script>
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
    overflow-y: hidden; /* Hide vertical scrollbar */
    overflow-x: hidden; /* Hide horizontal scrollbar */
  }
  .text {
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
      margin-top:5px;
      width:890px;
      border-radius:5px;
      padding:5px;
      display:flex;


  }
  .textbox {
    width: 965px;
    margin-left: 17px;
    border-radius: 0px;
    border-style: solid;
    border-width: thin;
    border-color: #20647B;
    height: 85px;
  }
  .msj-rta{
      float:right;
      background:whitesmoke;
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
      height: 535px;
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

  .options {
    width: 765px;
    font-size: 15px;
    background-color: white;
    margin-left: 40px;
  }
  .optA, .optB {
    border: none;
    height: 30px;
    margin: 2px;
  }
  .optA {
    margin-bottom: 8px;
  }
  .optA:hover {
    background-color: #AD7F29;
    color: white;
  }
  .optB:hover {
    background-color: #20647B;
    color: white;
  }

  .send-btn {
    float:right !important;
  }

  ::-webkit-scrollbar {
    width: 10px;
  }

  /* Track */
  ::-webkit-scrollbar-track {
    background: #E0E0DE;
  }

  /* Handle */
  ::-webkit-scrollbar-thumb {
    background: #E0E0DE;
  }

/*navigation bar menu*/
  .topnav {
    overflow: hidden;
    background-color: #20647B;
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
            <div class = "mess">
                <div class="macro textbox" id = "mess-box" style="background-color: white; ">
                    <div class="text" >
                      <!--Needs to be altered to display scripts, fit into page, and only continue game script once clicked-->
                      <div class=" text options" id= "options">
                        <input type = "button" id="1" class = "optA" onclick="chooseOption(this)" value = ""></button>
                        <input type = "button" id="2" class = "optB" onclick="chooseOption(this)" value = ""></button>
                      </div>
                    </div>
                    <div style="padding-top:3px; padding-left:135px;">
                        <!--span class="glyphicon glyphicon-share-alt"></span-->
                         <img src="../images/send.jpg" alt="send btn">
                    </div>
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
        var gameScript = ["", playerName + ". I was going to ask you to send those to me.",
        "I’m glad that you are working efficiently. Say, how do you like the company so far? ", "",
        "It’s best that you adapt yourself to work quicker. The workload isn’t slowing down any time soon.",
        "",
        "I’m glad that you are at least acclimating to our environment.",
        "Hm, I just received your documents and there’s an error in it. All the calculations are wrong because of it. Get this corrected, will you?", "",
        "I want it done now. I don’t care if you have to skip lunch or stay late for it. ",
         "Anyways, I want to let you know that we have a big presentation for a project coming up and you will be working with Pat. You’ve heard of him? ", "",
         "Well, whatever your thoughts on him are, you’ll be working with him. He’s one of our new full times but he’s new like you.",
         "new"];
        var playerScriptA = ["*send documents*",
        "Going well. Happy to contribute.",
        "I'll do my best at all cost. You can leave it to me!",
        "Right away!" ,
        "No, I haven’t gotten a chance to meet with him because I’ve been too occupied with work.",
        "Go to Episode 2"];
        var playerScriptB = ["*send documents*",
        "It’s hard to keep up sometimes.",
        "I'll do my best but it will be a challenge.",
        "I'll get back to you after lunch.",
        "I’ve talked to him during lunch. He’s pretty cool. It’s weird that he’s the only one who was willing to talk with me though...",
        "Go to Episode 2"];
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
        //var gameProgress = {stage: stage, part: part, a: aCount, b: bCount}; // game progress

        var peter = {};
        peter.avatar = "../images/boss.png";

        var you = {};
        you.avatar = "../images/player.png";

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

        //-- Print Messages

        function runChat() {
          //$("#options").hide();
          for (; stage < gameScript.length; stage++) {
            console.log('looping: ',stage);
            if (gameScript[stage] == "") {
              document.getElementById("1").value = playerScriptA[part];
              document.getElementById("2").value = playerScriptB[part];
              //$("#options").show();
              document.getElementById("1").addEventListener("click", chooseOption);
              document.getElementById("2").addEventListener("click", chooseOption);

              break;
            }
            else if (gameScript[stage] == "new") {
              document.getElementById("1").value = playerScriptA[part];
              document.getElementById("2").value = playerScriptB[part];

              document.getElementById("1").addEventListener("click", newStory);
              document.getElementById("2").addEventListener("click", newStory);
              break;
            }
            insertChat("peter", gameScript[stage], n);
            n = n + 1000;
          }
        }

        function newStory(elem) {
          window.location.href = 'http://localhost/chatroom/the9to5/game-1.php';
          part++;
          stage++;
          //document.getElementById("1").removeEventListener("click", newStory);
          //document.getElementById("2").removeEventListener("click", newStory);
        }


        function chooseOption(elem) {
          $("#options").show();
          switch(elem.id) {
            case '1':
              insertChat("you", playerScriptA[part], 0);
              aCount++;
            break;

            case '2':
              insertChat("you", playerScriptB[part], 0);
              bCount++;
            break;
          }
          part++;
          stage++;
          document.getElementById("1").removeEventListener("click", chooseOption);
          document.getElementById("2").removeEventListener("click", chooseOption);
          runChat();
        }

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

        resetChat();
        runChat();
        </script>
    </body>
</html>