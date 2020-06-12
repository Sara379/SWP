<script>
function validatePassword() {
var currentPassword,newPassword,confirmPassword,output = true;

currentPassword = document.frmChange.currentPassword;
newPassword = document.frmChange.newPassword;
confirmPassword = document.frmChange.confirmPassword;

if(!currentPassword.value) {
currentPassword.focus();
document.getElementById("currentPassword").innerHTML = "required";
output = false;
}
else if(!newPassword.value) {
newPassword.focus();
document.getElementById("newPassword").innerHTML = "required";
output = false;
}
else if(!confirmPassword.value) {
confirmPassword.focus();
document.getElementById("confirmPassword").innerHTML = "required";
output = false;
}
if(newPassword.value != confirmPassword.value) {
newPassword.value="";
confirmPassword.value="";
newPassword.focus();
document.getElementById("confirmPassword").innerHTML = "not same";
output = false;
} 	
return output;
}
</script>
<?php
session_start();
$_SESSION["ID"] = " ";
$conn = mysqli_connect("localhost", "root", "", "swp1") or die("Connection Error: " . mysqli_error($conn));

if(isset($_POST['Supmit']))
{
if (count($_POST) > 0) {
    $result = mysqli_query($conn, "SELECT *from Login WHERE ID='" . $_SESSION["ID"] . "'");
    $row = mysqli_fetch_array($result);
    if ($_POST["currentPassword"] == $row["password"]) {
        mysqli_query($conn, " UPDATE Login set Password='" . $_POST["newPassword"] . "' WHERE ID='" . $_SESSION["ID"] . "'");
        $message = "Password Changed";
    } else
        $message = "Current Password is not correct";
}}
?>

<html>
    <head>
	<style>
	<meta name="viewport" content="width=device-width, initial-scale=1">

body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

/* Button used to open the contact form - fixed at the bottom of the page */
.open-button {
  background-color: #555;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 28px;
  width: 280px;
}

/* The popup form - hidden by default */
.form-popup {
	font-size:8px;
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}

/* Full-width input fields */
.form-container input[type=text], .form-container input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

/* When the inputs get focus, do something */
.form-container input[type=text]:focus, .form-container input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/login button */
.form-container .btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
  
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
.editt{
  background-color: red;                    
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

				.x {
  display: block;
  width: 100%;
  border: none;
  background-color: #4CAF50;
  color: white;
  padding: 14px 28px;
  font-size: 16px;
  cursor: pointer;
  text-align: center;
}

.x:hover {
  background-color: #ddd;
  color: black;
}
.bbtn{
background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;

	
}


.form {
  
  padding: 12px 20px;
  box-sizing: border-box;
  border: 2px solid red;
position:absolute;
top:50%;
left:50%;
transform:translate(-50%,-50%);
text-align:center;
font-size:24px;
 border-radius: 5px;
  background-color: #f2f2f2;
  width: 500px;
  border: 15px ;
  padding: 50px;
  margin: 20px;
  
}
.add {
  
  padding: 12px 20px;
  box-sizing: border-box;

}




</style>
</head>
<title>patient</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<div class="w3-top">
  <div class="w3-bar w3-white w3-card" id="myNavbar">
    <a href="#home" class="w3-bar-item w3-button w3-wide">Derma Clinic</a>
    <div class="w3-right w3-hide-small">
      <a href="#Schedule" class="w3-bar-item w3-button"><i class="fa fa-th"></i> Schedule</a>
      <a href="clinic.php" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i> Logout</a>
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



        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    </head>
<body>
<br>
<br>
<br>
<h1> If you forget your passwrod, you can reset it..</h1>
<div  id="form"  class="form" >
               Enter here your new password:<br>
                 <input type="password" id="newPassword" name="password" placeholder="New Password">
				 <br>
				 <br>
				 <input type="password" id="confirmPassword" name="confirmPassword" placeholder="Confirm Passwrod">
                  <br>
                   <br><br>
                      <input type="Submit" onclick="validatePassword()" value="Submit">
                
				</div>
				
			
</body>
</html>
</html>