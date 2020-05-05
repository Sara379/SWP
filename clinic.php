<!DOCTYPE html>
<html>
<title>CLINIC</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    body,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        font-family: "Raleway", sans-serif
    }
    
    body,
    html {
        height: 100%;
        line-height: 1.8;
    }
    /* Full height image header */
    
    .bgimg-1 {
        background-position: center;
        background-size: cover;
        background-image: url('clinic.jpg');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
        min-height: 100%;
    }
    
    .w3-bar .w3-button {
        padding: 16px;
    }
</style>

<body>


    <div class="w3-top">
        <div class="w3-bar w3-white w3-card" id="myNavbar">
            <a href="#home" class="w3-bar-item w3-button w3-wide">Derma Clinic</a>
            <div class="w3-right w3-hide-small">
                <a href="LogIn.php" class="w3-bar-item w3-button"><i class="fa fa-user"></i> Log In</a>
                <a href="#Schedule" class="w3-bar-item w3-button"><i class="fa fa-th"></i> Schedule</a>
                <a href="Register.php" class="w3-bar-item w3-button"><i class="fa fa-registered"></i> Register </a>
                <a href="ContactUs.php" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i> Contact Us</a>
            </div>




            </a>
        </div>
    </div>



    <nav class="w3-sidebar w3-bar-block w3-black w3-card w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidebar">

        <a href="#team" onclick="w3_close()" class="w3-bar-item w3-button">TEAM</a>
        <a href="#work" onclick="w3_close()" class="w3-bar-item w3-button">WORK</a>
        <a href="#pricing" onclick="w3_close()" class="w3-bar-item w3-button">PRICING</a>
        <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button">CONTACT</a>
    </nav>




    <header class="bgimg-1 w3-display-container w3-grayscale-min" id="home">
        <div class="w3-display-left w3-text-white" style="padding:48px">
            <span class="w3-jumbo w3-hide-small">See The Beautiful In Everything</span><br>
            <p><a href="about.php" class="w3-button w3-white w3-padding-large w3-large w3-margin-top w3-opacity w3-hover-opacity-off">Get Your Appointment ..</a></p>
        </div>



        <div class="w3-display-bottomleft w3-text-grey w3-large" style="padding:24px 48px">
            <i class="fa fa-facebook-official w3-hover-opacity"></i>
            <i class="fa fa-instagram w3-hover-opacity"></i>
            <i class="fa fa-snapchat w3-hover-opacity"></i>
            <i class="fa fa-pinterest-p w3-hover-opacity"></i>
            <i class="fa fa-twitter w3-hover-opacity"></i>
            <i class="fa fa-linkedin w3-hover-opacity"></i>
        </div>
    </header>


    </script>

</body>

</html>