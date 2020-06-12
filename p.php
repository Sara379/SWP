<?php

$conn    = new mysqli("localhost", "root", "", "swp1"); 
$sql    = "SELECT * FROM `patient`"; 
$result = mysqli_query($conn, $sql); 








function getNameOfUser($UserID) 
{
    $conn    = new mysqli("localhost", "root", "", "swp1"); 
    $sql    = "select Name from patient where ID = $UserID";
    $result = mysqli_query($conn, $sql);
    $data   = mysqli_fetch_array($result); 
    return $data['Name'];
}

 
 
function getAgeOfUser($UserID) 
{
    $conn    = new mysqli("localhost", "root", "", "swp1"); 
    $sql    = "select age from user where ID = $UserID";
    $result = mysqli_query($conn, $sql);
    $data   = mysqli_fetch_array($result); 
    return $data['age'];
}




function getPhoneOfUser($UserID) 
{
    $conn    = new mysqli("localhost", "root", "", "swp1"); 
    $sql    = "select Phone from user where ID = $UserID";
    $result = mysqli_query($conn, $sql);
    $data   = mysqli_fetch_array($result); 
    return $data['Phone'];
}

function getEmailOfUser($UserID) 
{
    $conn    = new mysqli("localhost", "root", "", "project-r"); 
    $sql    = "select Email from user where ID = $UserID";
    $result = mysqli_query($conn, $sql);
    $data   = mysqli_fetch_array($result); 
    return $data['Email'];
}
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "swp1";
$conn = new mysqli($servername, $username, $password, $dbname);

if (isset($_POST['Submit'])) {
	$sql="update patient
set 
Mobile	='".$_POST["Mobile"]."',
Address 	='".$_POST['Address']."',
Email 	='".$_POST['Email']."',
Case	='".$_POST['Case']."'
where  ID='" . $_POST['ID'] . "'";
$result=mysqli_query($conn,$sql);

if($result==true)	
		{
		
		echo "<script>alert('patient modified successfully !');
		 </script>";
		}
		else
		{
			 $sql;
		}
}

?> 


<html>
    <head>
	<style>
	<meta name="viewport" content="width=device-width, initial-scale=1">

body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

/* Button used to open the contact form - fixed at the bottom of the page */
.open-button {
  background-color: #0095B6;
  color: white;
  padding: 16px 20px;
  text-align: center;
  border: none;
  cursor: pointer;
  opacity: 0.99;
  position: fixed;
  bottom: 20px;
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
.form-container input[type=text],
 .form-container input[type=password] {
  width: 70%;
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
  background-color: Purple;
  
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
.editt{
  background-color :purple;
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
background-color: pink;
  color: black;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 50%;
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




.w3-bar .w3-button {
  padding: 16px;
}
table {
width: 70%;
color: black;
font-family: monospace;
font-size: 18px;
text-align: left;
}
th {
background-color: white;
color: black;
}
tr:nth-child(even) {background-color: white  }


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
    <a href="clinic.php" class="w3-bar-item w3-button w3-wide">Derma Clinic</a>
    <div class="w3-right w3-hide-small">
    <a href="afterp.php" class="w3-bar-item w3-button"><i class="fa fa-th"></i> Prescription</a>

      <a href="clinic.php" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i> Logout</a>
    </div>



    <a class="open-button" href="actionpage.php" >Add Patient</a>

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
<br>
<br>


                <table class="table table-hover" id="myTable">  
	
                    <div class="container">
					
                        <input name="term" type="text" class="form-control" style="margin-bottom: 40px;
" id="search" onkeyup="getResult()" placeholder="Search Term..."/> 

                        <div id="result"> 
                               
                            </div>
						
						
                    </div>

                    <thead>
                    <tr>
                        <th>ID</th> 
                        <th>Name</th>
						<th>Age</th>
                        <th>Mobile</th>
                        <th>Address</th>
                        <th>Email</th>
                        <th>LastVisite</th>
                        <th>Case</th>
						<th></th>
                        <th>Edit</th>
						<th></th>
                        
                    </tr>
                    </thead>
                    <tbody> 
                    <?php while ($data = mysqli_fetch_array($result)): ?> 


                        <tr>
                            <td class="p
							_id"><?= $data['ID'] ?></td> 
                           <td><?= $data['Name'] ?></td>
                            <td><?= $data['Age'] ?></td>
                            <td><?= $data['Address'] ?></td>
                            <td><?= $data['Mobile'] ?></td>
                            <td><?= $data['Email'] ?></td>
                            <td><?= $data['LastVisit'] ?></td>
                            <td><?= $data['Case'] ?></td>
							
                           <td></td>
                            <td>
                            <td><a href="edit.php?ID=<?php echo $data['ID']; ?>" class="editt">Edit</a></td>
                               
                            </td>
							
							     <td>
                               <!--<button type="button" class="btn btn-primary add-comment-btn" onclick="deleteRow('<?php echo $data['ID']; ?>')">Delet patient </button> -->
                               
                            </td>
                            <td><a href="delete.php?ID=<?php echo $data['ID']; ?> "  class="bbtn" >Delete</a></td>
							
							
							
                        </tr>
                    <?php endwhile ?> 

                    </tbody>

                </table>
<td>
                               
                            </td>
             </div>
            </div>
        </div>
    </div>
	
	
	
	
	

<script>




</script>


	
	
	
	


	
	
				<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script>

    

	
	var request_id ;
	function show(requestId) {
		request_id  = requestId;
	  var x = document.getElementById("form");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
	}


    function addComment() {
		 var comment = document.getElementById("com").value ;
		 
		 var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     
    }
  };
  xhttp.open("GET", "add-comment-ajax.php?comment=" + comment + "&id=" + request_id, true);
  xhttp.send();
  window.location.replace("p.php");
	
	}

    
    
        function getResult() { 
            $(document).ready(function () {
                $("#search").on("keyup", function () { 
                    var value = $(this).val().toLowerCase();
                    $("#myTable tr").filter(function () { 
                        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1) 
                    });
                });
            });
        }
		
		
		
		
	



    </script>

</body>
</html> 
