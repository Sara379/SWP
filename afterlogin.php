<!DOCTYPE html>
<html>
<title>CLINIC</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<div class="w3-top">
  <div class="w3-bar w3-white w3-card" id="myNavbar">
    <a href="clinic.php" class="w3-bar-item w3-button w3-wide">Derma Clinic</a>
    <div class="w3-right w3-hide-small">
      <a href="#Schedule" class="w3-bar-item w3-button"><i class="fa fa-th"></i> Schedule</a>
      <a href="ContactUs.php" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i> Logout</a>
    </div>
<style>
       body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}

body, html {
  height: 10%%;
  line-height: 1.8;
}


.bgimg-1 {
  background-position: center;
  background-size: cover;
  background-image: url('clinic.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed; 
  background-size: cover;
  min-height: 200%;
}

.w3-bar .w3-button {
  padding: 16px;
}
    .split {
  height: 100%;
  width: 50%;
  position: fixed;
  z-index: 1;
  top: 0;
  overflow-x: hidden;
  padding-top: 20px;
}

/* Control the left side */
.left {
  left: 0;
}

/* Control the right side */
.right {
  right: 0;
}

/* If you want the content centered horizontally and vertically */
.centered {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
}

/* Style the image inside the centered container, if needed */
.centered img {
  width: 150px;
  border-radius: 50%;
}
</style>
<script>
<header >
        <div  class="w3-display-bottomleft w3-text-gray w3-large" style="padding:24px 48px">
            <i class="fa fa-facebook-official w3-hover-opacity"></i>
            <i class="fa fa-instagram w3-hover-opacity"></i>
            <i class="fa fa-snapchat w3-hover-opacity"></i>
            <i class="fa fa-pinterest-p w3-hover-opacity"></i>
            <i class="fa fa-twitter w3-hover-opacity"></i>
            <i class="fa fa-linkedin w3-hover-opacity"></i>
        </div>

</header>
</script>
<br>
<div  class="split left">
  <div  class="centered">
    <img src="patient.png" alt="patient">
    <br>
    <a href ="patient.php">Patients  </a>
  </div>
</div>

<div  class="split right">
  <div class="centered">
  <img src="pending.jpg" alt="pending">
    <br>
    <a href ="pending.php">Pending </a>
  </div>
  </div>

 
  