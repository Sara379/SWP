<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "swp";
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
	   $DR=$_POST['Dr'];
	    $Day  = $_POST['Day'];
	
	
	 $sql = "INSERT INTO Pending(`Name`, `Age`, `Mobile`, `Address`, `Dr`, `Day`) 
	 VALUES ('$Name','$Age','$Mobile','$Address','$Dr','$Day)";
	 
	  if (mysqli_query($conn, $sql)) {
		echo "New record created successfully !";
	 } else {
		echo "Error: " . $sql . " " . mysqli_error($conn);
	 }
	 mysqli_close($conn);

}
	 
?>