

<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "swp";

$conn = new mysqli($servername, $username, $password, $dbname);
if(isset($_POST['Submit'])){ 

	$sql="select * from patient where 
	id='".$_POST["ID"]."' and username='".$_POST["Email"]."' and password='".$_POST["Password"]."'";
	$result = mysqli_query($conn,$sql);	

	if($row=mysqli_result)
	{
		$_SESSION["ID"]=$row['id'];
		$_SESSION["Email"]=$row["username"];
		
		
		header("Location:afterlogin.php");
	}
	else if (empty($_POST['Email'])||empty($_POST['Password']))	
	{
		echo"<script>alert('Please Fill The empty space');
		 </script>";
	}
}
?>

<head>
 <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<head>
<style>
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=password], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
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


input[type=submit]:hover {
    opacity: 0.5;
}

input[type=reset] {
  width: 40%;
  background-color: #7FB3D5;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 10px;
  cursor: pointer;
}
input[type=resett]:hover {
    opacity: 0.5;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
 
}
body {
  background-image: url('doc.jpg');
  background-repeat: no-repeat;
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
<br>
<br>
<br>
<br>
<br>

<h1 style="color:maroon; text-align: center;">Login</h1>

<body>
<br>
<div class="container">
  <form action ="logIn.php" method ="post">
  <div class="form-group">
      <label for="ID">ID:</label>
      <input type="ID" class="form-control"  id="ID" placeholder="Enter ID" name="ID">
    </div>
    <div class="form-group">
      <label for="Email">Email:</label>
      <input type="Email" class="form-control" id="Email" placeholder="Enter email" name="Email">
    </div>
    <div class="form-group">
      <label for="Password">Password:</label>
      <input type="Password" class="form-control" id="Password" placeholder="Enter password" name="Password">
    </div>
    <div class="checkbox">
      <label><input type="checkbox" name="remember"> Remember me</label>
    </div>
    <button style="background-color:lightblue" type="Submit" class="btn btn-default" name="Submit" >Submit</button>
    
  </form>
</div>


</body>
</html>
