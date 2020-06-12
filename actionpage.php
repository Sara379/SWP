
<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "swp1";
$conn = new mysqli($servername, $username, $password, $dbname);

if (isset($_POST['Submit'])) {

//print_r($_POST);


    if(empty($_POST['ID'])
    ||empty($_POST['Name'])
		||empty($_POST['Age'])
	||empty($_POST['Mobile'])
    ||empty($_POST['Address'])
    ||empty($_POST['Email'])
	||empty($_POST['Drname'])
    ||empty($_POST['LastVisit'])
    ||empty($_POST['Case']))


	{
		 echo "<script>alert('Please Fill The empty space');
		 </script>";
    }
    else {

    
    
		$sql="INSERT INTO `patient` (`ID`, `Name`, `Age`, `Mobile`, `Address`, `Email`, `Drname`, `LastVisit`, `Case`)
		values
		(
        '".$_POST["ID"]."' ,
		'".$_POST["Name"]."' ,
		'".$_POST["Age"]."' ,
		'".$_POST["Mobile"]."' ,
		'".$_POST["Address"]."' ,
        '".$_POST["Email"]."' ,
        '".$_POST["Drname"]."' ,
        '".$_POST["LastVisit"]."' ,
		'".$_POST["Case"]."'
		)";
		
		// $sql;

		//echo $sql;
		$result=mysqli_query($conn,$sql);
		$Mobile = filter_var($_POST, FILTER_SANITIZE_NUMBER_INT);
		if(isset($_POST['Mobile'])== true && empty($_POST['Mobile']) == false)
{
	
		    $Mobile = $_POST['Mobile'];

	if(strlen($Mobile) < 11 || strlen($Mobile) >11 || strlen($Mobile)!==11)
	{
		echo'<script> alert("Please enter mobile number in correct way ")</script>';
	}
	
 
	}
		if($result==true)	
		{
		
		echo "<script>alert('New record created successfully !');
		 </script>";
		}
		else
		{
			 $sql;
		}
	}


}
	
if($_SERVER['REQUEST_METHOD']=='POST')
{
	$Email = filter_var($_POST , FILTER_SANITIZE_STRING);
	$Age= filter_var($_POST, FILTER_SANITIZE_NUMBER_INT);
    $symbols = array("!","@","#","$","%","^","&","*","(",")","()","_","-","+","=","~","`",":",";","?","/",">","<");
	
	if(filter_var($Email,FILTER_VALIDATE_EMAIL) == false)
		{
			echo '<script>alert("that\'s invalid emial address);</script>';
		
	}
	
	if(strlen($Age) >3)
	{
		echo'<script> alert("Age must be below 100")</script>';
	}

	 
}
	
?>

<!DOCTYPE html>
<html>
<title>Add patient </title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<style>

input[type=Submit] {
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
  background-image: url('addpatient.jpg');
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
				<a href="room.php" class="w3-bar-item w3-button"><i class="fa fa-th"></i> Room</a>

            </div>
</div>
</div>
<hr>
            <h1 style="color:maroon; text-align: center;">Add Patient</h1>

<body>
<br>
<form action ="actionpage.php" method ="post">
  
    <h3 >Enter here Patient information please..</h3>
	<h4  style="font-family:time new roman;margin-left:650px;margin-top:20px;">	ID </h4>
			<input id="css" class="form-control" type="text" name="ID" >
				<br>
                <h4  style="font-family:time new roman;margin-left:650px;margin-top:20px;">	Name: </h4>
			<input id="css" class="form-control" type="text" name="Name" >
				<br>
                <h4  style="font-family:time new roman;margin-left:650px;margin-top:20px;">	Age: </h4>
			<input id="css" class="form-control" type="number" name="Age" >
				<br>
                <h4  style="font-family:time new roman;margin-left:650px;margin-top:20px;">	Mobile: </h4>
			<input id="css" class="form-control" type="text" name="Mobile" >
				<br>>
                <h4  style="font-family:time new roman;margin-left:650px;margin-top:20px;">	Address: </h4>
			<input id="css" class="form-control" type="text" name="Address" >
				<br>>
                <h4  style="font-family:time new roman;margin-left:650px;margin-top:20px;">	Email: </h4>
			<input id="css" class="form-control" type="email" name="Email" >
				<br>
                <h4  style="font-family:time new roman;margin-left:650px;margin-top:20px;">	Doctor :  
<select name="Drname">
			<?php
				$Drname=array('Rania', 'Shareen');
				for($i=0;$i<count($Drname);$i++)
				{
					echo"<option>".$Drname[$i]."<option>";
				}
			?>
			</select>
			</h4>
            
                <h4  style="font-family:time new roman;margin-left:650px;margin-top:20px;">	LastVisit: </h4>
			<input id="css" class="form-control" type="date" name="LastVisit" >
            <h4  style="font-family:time new roman;margin-left:650px;margin-top:20px;">	Case: </h4>
			<input id="css" class="form-control" type="text" name="Case" >
				<br>
<br>
    <br>
    <input  style="font-family:time new roman;margin-left:650px;margin-top:20px;" type="submit" value="Submit" name="Submit">

  </form>
  
</div>



