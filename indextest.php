<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {
  margin: 0;
  font-family: Arial;
  font-size: 17px;
}

#myVideo {
  right: 0;
  bottom: 0;
  min-width: 100%; 
  min-height: 100%;
  align: center;
}

.content {
  position: fixed;
  bottom: 0;
  background: rgba(0, 0, 0, 0.5);
  color: #f1f1f1;
  width: 100%;
  padding: 20px;
}

#myBtn {
  width: 200px;
  font-size: 18px;
  padding: 10px;
  border: none;
  background: #000;
  color: #fff;
  cursor: pointer;
}

.myBtn {
  width: 200px;
  font-size: 18px;
  padding: 10px;
  border: none;
  background: #000;
  color: #fff;
  cursor: pointer;
}

#myBtn:hover {
  background: #ddd;
  color: black;
}

.myBtn:hover {
  background: #ddd;
  color: black;
}
</style>
</head>
<body>

<video autoplay muted loop id="myVideo">
  <source src="liftoff.mp4" type="video/mp4">
  Your browser does not support HTML5 video.
</video>

<div class="content">
  <h1>Ferradermis</h1>
  <p>Click one of the following options.</p>
  <button id="myBtn" onclick="myFunction()">Pause</button>
  <button class="myBtn" onclick="https://www.ferradermis.org/ScoutingApp/forms/scouting.php">Scouting</button>
  <button class="myBtn" onclick="https://www.ferradermis.org/ScoutingApp/reports/scoutingreports.php">Scouting Reports</button>
  <button class="myBtn" onclick="https://www.ferradermis.org/ScoutingApp/reports/compare.php">Compare</button>
  <button class="myBtn" onclick="https://www.ferradermis.org/ScoutingApp/forms/scouting.php">Selective Scouting</button>
  <button class="myBtn" onclick="https://www.ferradermis.org/ScoutingApp/forms/scouting.php">Pit Scouting</button>
</div>

<script>
var video = document.getElementById("myVideo");
var btn = document.getElementById("myBtn");

function myFunction() {
  if (video.paused) {
    video.play();
    btn.innerHTML = "Pause";
  } else {
    video.pause();
    btn.innerHTML = "Play";
  }
}
</script>

</body>
</html>
