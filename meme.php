<?php include '/admins/logincheck.php'; ?>
<html>
<head>
<link href="css/styles.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="js/scripts.js"></script>
<style>

.auto-style1 {
	text-align: center;
	font-family: Verdana, Geneva, Tahoma, sans-serif;
}
</style>

<link rel="shortcut icon" type="image/png" href="images/fdLogoSmall.png"/>
<link rel="icon" type="image/png" href="images/fdLogoSmall.png"/>

</head>
<body onload="getAPI()">

<?php include 'nav.html'?>

<br/>

<script>
window.onscroll = function() {sticker()};

var topnav = document.getElementById("myTopnav");
var sticky = topnav.offsetTop;

function sticker() {
  if (window.pageYOffset >= sticky) {
    topnav.classList.add("sticky")
  } else {
    topnav.classList.remove("sticky");
  }
}
</script>

<script>
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
</script>

<script>
    const URL_TEAM_DATA = "";   
    const URL_EVENT_DATA = "";
    const URL_DISTRICT_DATA = "";
    const AUTH_KEY = '7U1VHLOT9uLC7nvXj5Dk8bnLzUdMiwkbiN9mhcZFtvh5WMnf6nVE2sTZUgXHSaGb';



    const URL = 'https://www.thebluealliance.com/api/v3/event/2018wila/teams';
    

        function getAPI() {
            fetch(URL, {
                method: 'GET',
                headers: {
                    'X-TBA-Auth-Key': AUTH_KEY
                }
            
            })

            .then((response) => response.json());
        }
        
      //  document.getElementById("teams").innerHTML = "Test: " + duluth[];

        function fetchData(/*url*/) {

            return fetch( );

        }

        function getTeam() {


            
        }
</script>

<br/>
<br/>

<table class="pracWarning" style="width: 100%" id="teams"><tr class="aligncenter"><td><img src="images/memeoftheday.jpg"></td></tr></table>
<!-- 
<table class="pracWarning" style="width: 100%" id="teams"><tr class="aligncenter"><td>*Jumps down*</td></tr></table>
<table class="pracWarning" style="width: 100%" id="teams"><tr class="aligncenter"><td>General Kenobi: Hello There!</td></tr></table>
<table class="pracWarning" style="width: 100%" id="teams"><tr class="aligncenter"><td>General Grievous: Geeeneral Kennnoooobiiii </td></tr></table>
<table class="pracWarning" style="width: 100%" id="teams"><tr class="aligncenter"><td>*4 Lightsabers Emerge from 4 Arms*</td></tr></table>
<iframe src="https://www.youtube.com/embed/rEq1Z0bjdwc" width="100%" height="1000" align=middle></iframe> -->


</body>
</html>
