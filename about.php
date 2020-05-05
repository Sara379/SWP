


<!DOCTYPE html>
<html>
<title>Register</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<style>

input[type=submit] {
  width: 40%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 10px;
  cursor: pointer;
}
#css{
	margin-top:50px;
	width: 50%;
	margin-top:10px;
 margin-left:650px;
}
#btn{
	width: 50%;
	
	margin-left:650px;
}
body {
  background-image: url('clin.jpg');
  background-attachment: fixed;
  background-repeat: no-repeat;
    background-size: cover;
}

input[type=submit]:hover {
    opacity: 0.5;
}


</style>

<div class="w3-top" >
        <div  class="w3-bar w3-white w3-card" id="myNavbar" >
            <a href="clinic.php" class="w3-bar-item w3-button w3-wide">Derma Clinic</a>
            <div class="w3-right w3-hide-small">              
                <a href="ContactUs.php" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i> Contact Us</a>
            </div>
</div>
</div>
<hr>
            <h1 style="color:maroon; text-align: center;">Register</h1>

<body>
<br>
<form action ="Register.php" method ="post">
<h4  style="font-family:time new roman;margin-left:650px;margin-top:20px;">	Name: </h4>
			<input id="css" class="form-control" type="text" name="Name" >
				<br>
	<h4  style="font-family:time new roman;margin-left:650px;margin-top:20px;">	Age: </h4>
			<input id="css" class="form-control" type="text" name="Age" >
				<br>
	<h4  style="font-family:time new roman;margin-left:650px;margin-top:20px;"> Mobile: </h4>
			<input id="css" class="form-control" type="text" name="Mobile" >
				<br>
	<h4  style="font-family:time new roman;margin-left:650px;margin-top:20px;">	Address	:  </h4>
			<input id="css" class="form-control"type="text" name="Address" >
                <br>
                <h4  style="font-family:time new roman;margin-left:650px;margin-top:20px;">	Doctor :  </h4>
                <input style="font-family:time new roman;margin-left:650px;margin-top:20px;" type="checkbox" id="DR1" name="DR1" value="DR1">
<label for="DR1"> </label> <b> Rania </b><br>
<input style="font-family:time new roman;margin-left:650px;margin-top:20px; "type="checkbox" id="DR2" name="DR2" value="DR2">
<label for="DR2"><b> Shereen</label> </b><br>


	<h4  style="font-family:time new roman;margin-left:650px;margin-top:20px;">	Day of Reservation : </h4>
    <select style="font-family:time new roman;margin-left:650px;margin-top:20px"  name="Todays_Day">
    <option value="" selected></option>
    <option value="Monday">Monday</option>
    <option value="Tuesday">Tuesday</option>
    <option value="Wednesday">Wednesday</option>
    <option value="Thursday">Thursday</option>
    <option value="Friday">Friday</option>
    <option value="Saturday">Saturday</option>
    <option value="Sunday">Sunday</option>
</select>
<br>
</div>
    <button style= "background-color:lightblue font-family:time new roman;margin-left:650px;margin-top:20px" type="Submit" class="btn btn-default" name="submit " >Submit</button>
    

</div>
</form>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "swp1";
$conn = new mysqli($servername, $username, $password, $dbname);
if (!$conn)
{
die ('Could not connect:' . mysql_error());
}


if(isset($_POST['Submit']))
{
	 $Name = $_POST['Name'];
	 $Age = $_POST['Age'];
	  $Mobile = $_POST['Mobile'];
	  $Address  = $_POST['Address'];
	   $Dr=$_POST['Dr'];
	    $Day  = $_POST['Day'];
	
	
	 $sql = "INSERT INTO Pending(`Name`, `Age`, `Mobile`, `Address`, `Dr`, `Day`) 
	 VALUES ('$Name','$Age','$Mobile','$Address','$Dr','$Day')";
	 
	  if (mysqli_query($conn, $sql)) {
		echo "New record created successfully !";
	 } else {
		echo "Error: " . $sql . " " . mysqli_error($conn);
	 }
	 mysqli_close($conn);

}
	 
?>

<div class="w3-display-bottomleft w3-text-grey w3-large" style="padding:24px 48px">
            <i class="fa fa-facebook-official w3-hover-opacity"></i>
            <i class="fa fa-instagram w3-hover-opacity"></i>
            <i class="fa fa-snapchat w3-hover-opacity"></i>
            <i class="fa fa-pinterest-p w3-hover-opacity"></i>
            <i class="fa fa-twitter w3-hover-opacity"></i>
            <i class="fa fa-linkedin w3-hover-opacity"></i>
        </div>


</body>
</html>
