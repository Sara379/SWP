
<!DOCTYPE html>
<html>
<title>Prescription</title>

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
  background-image: url('p.jpg');
  background-attachment: fixed;
  background-repeat: no-repeat;
    background-size: cover;
}

input[type=submit]:hover {
    opacity: 0.5;
}


</style>


<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "swp1";
$conn = new mysqli($servername, $username, $password, $dbname);

if(isset($_POST['Submit'])){ 

	
		$sql="insert into prescription (
			patientid, 
			medicine,
			diagnosis,
			instructions,
			DoctorName,
			Dosage
		)
		values
		(
		'".$_POST["id"]."' ,
		'".$_POST["medicine_:"]."' ,
		'".$_POST["diagnosis_"]."' ,
		'".$_POST["instructions"]."' ,
		'".$_POST["DoctorName"]."' ,
		'".$_POST["Dosage_"]."'
		)";
		
		echo  $sql;
		$result=mysqli_query($conn,$sql);
		
		if($result==true)	
		{
		
		echo "<script>alert('New prescription created successfully !');
		 </script>";
		}
		else
		{
			 $sql;
		}
	}



	 
?>



<div class="w3-top" >
        <div  class="w3-bar w3-white w3-card" id="myNavbar" >
            <a href="clinic.php" class="w3-bar-item w3-button w3-wide">Derma Clinic</a>
            <div class="w3-right w3-hide-small">              
			<a href="room.php" class="w3-bar-item w3-button"><i class="fa fa-th"></i> Room</a>

                <a href="ContactUs.php" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i> Contact Us</a>
            </div>
</div>
</div>
<hr>
            <h1 style="color:maroon; text-align: center;">prescription</h1>

<body>
<br>
<form action ="prescription.php" method ="post">
<h4  style="font-family:time new roman;margin-left:650px;margin-top:20px;">	Patient ID : </h4>
			<input id="css" class="form-control" type="text" name="id" >
				<br>
	<h4  style="font-family:time new roman;margin-left:650px;margin-top:20px;">	Medicine : </h4>
			<input id="css" class="form-control" type="text" name="medicine :" >
				<br>
				<h4  style="font-family:time new roman;margin-left:650px;margin-top:20px;">Diagnosis : </h4>
			<input id="css" class="form-control" type="text" name="diagnosis " >
				<br>
				<h4  style="font-family:time new roman;margin-left:650px;margin-top:20px;">	Additional Instructions :  </h4>
			<input id="css" class="form-control"type="text" name="instructions" >
                <br>
				<h4  style="font-family:time new roman;margin-left:650px;margin-top:20px;">	Doctor :  
<select name="DoctorName">
			<?php
				$DoctorName=array('Rania', 'Shareen');
				for($i=0;$i<count($DoctorName);$i++)
				{
					echo"<option>".$DoctorName[$i]."<option>";
				}
			?>
			</select>
			</h4>
			<br>
	
                <h4  style="font-family:time new roman;margin-left:650px;margin-top:20px;">	Dosage :  
<select name="Dosage ">
			<?php
				$Dosage=array('Morning', 'Afternoon' , 'Night');
				for($i=0;$i<count($Dosage);$i++)
				{
					echo"<option>".$Dosage[$i]."<option>";
				}
			?>
			</select>
			</h4>
	
<br>

	
<br>

  <input  style="font-family:time new roman;margin-left:650px;margin-top:20px;" type="submit" value="Submit" name="Submit">
    

</div>
</form>

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