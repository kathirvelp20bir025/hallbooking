<!DOCTYPE html>
<html>
<head>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karma">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Karma", sans-serif}
.w3-bar-block .w3-bar-item {padding:20px}
</style>
</head>
<body>

<nav class="w3-sidebar w3-bar-block w3-card w3-top w3-xlarge w3-animate-left" style="display:none;z-index:2;width:40%;min-width:300px" id="mySidebar">
  <a href="#food" onclick="w3_close()" class="w3-bar-item w3-button">Food</a>
  <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button">About</a>
  <a href="javascript:void(0)" onclick="w3_close()"
  class="w3-bar-item w3-button">Close Menu</a>
</nav>
<div class="w3-top">
  <div class="w3-white w3-xlarge" style="max-width:1200px;margin:auto">
    <div class="w3-button w3-padding-16 w3-left" onclick="w3_open()">☰</div>
    <div class="w3-center w3-padding-16">   SEMINAR HALL    </div>
  </div>
</div>
<!-- !PAGE CONTENT! -->
<div class="w3-main w3-content w3-padding" style="max-width:1200px;margin-top:100px">


  </div>
 
  <!-- Second Photo Grid-->
  <div class="w3-row-padding w3-padding-16 w3-center">
    <div class="w3-quarter">
    <a href="booking.php">
      <img src="6.jfif" alt="Popsicle" style="width:100%"></a>
      <h3>KALINGARAYAN SEMINAR HALL</h3>
    </div>
    <div class="w3-quarter">
    <a href="booking.php">
      <img src="7.jfif" alt="Popsicle" style="width:100%"></a>
      <h3>SIR C V RAMAN SEMINAR HALL</h3>
      </div>
    <div class="w3-quarter">
    <a href="booking.php">
      <img src="8.jfif" alt="Popsicle" style="width:100%"></a>
      <h3>CONFERENCE HALL(ADMIN)</h3>
      </div>
    <div class="w3-quarter">
    <a href="booking.php">
      <img src="10.jfif" alt="Popsicle" style="width:100%"></a>
      <h3>JAWAHARLAL NEHRU HALL</h3>
      </div>
  </div>
  </div>
  <div class="w3-center w3-padding-32">
    <div class="w3-bar">
      <a href="#" class="w3-bar-item w3-button w3-hover-black">«</a>
      <a href="#" class="w3-bar-item w3-black w3-button">1</a>
      <a href="2" class="w3-bar-item w3-button w3-hover-black">2</a>
      <a href="3" class="w3-bar-item w3-button w3-hover-black">3</a>
      <a href="4" class="w3-bar-item w3-button w3-hover-black">4</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">»</a>
    </div>
  </div>
  <script>
// Script to open and close sidebar
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
}
 
function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
}
</script>
</body>
</html>

