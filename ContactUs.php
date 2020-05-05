
<html>

<head>

<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">




<div class="w3-top">
        <div class="w3-bar w3-white w3-card" id="myNavbar">
            <a href="#home" class="w3-bar-item w3-button w3-wide">Derma Clinic</a>
            <div class="w3-right w3-hide-small">
                <a href="LogIn.php" class="w3-bar-item w3-button"><i class="fa fa-user"></i> Log In</a>
                <a href="Register.php" class="w3-bar-item w3-button"><i class="fa fa-usd"></i> Register </a>
            </div>




            </a>
        </div>
    </div>
<br>

<style>
.mySlides {display:none;}
.footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: lightgray;
   color: black;
   text-align: center;
}
</style>
</head>

<body>

<div class="footer">
  <p>Contact Us<br>
  please contact us now on: Tel. 01061332627<br>
   email<a href="m.me/Dermacure.skinlaser"> m.me/Dermacure.skinlaser</a>
  </p>
</div>


<div class="w3-content w3-section" style="max-width:500px">
  <img class="mySlides" src="1.jpg" style="width:100%">
  <img class="mySlides" src="3.jpg" style="width:100%">
   <img class="mySlides" src="4.jpg" style="width:100%">
    <img class="mySlides" src="5.jpg" style="width:100%">
	 <img class="mySlides" src="6.jpg" style="width:100%">
	   <img class="mySlides" src="2.jpg" style="width:100%">
</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>

</body>
</html>
