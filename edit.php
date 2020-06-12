<?php

include "dbcon.php"; 

$ID = $_GET['ID']; 
$qry = mysqli_query($db,"select * from patient where ID='$ID'"); // select query

$data = mysqli_fetch_array($qry); // fetch data

if(isset($_POST['update'])) // when click on Update button
{
    $Mobile = $_POST['Mobile'];
    $Address = $_POST['Address'];
    $Email = $_POST['Email'];
    $Case = $_POST['Case'];

	
	
    $edit = mysqli_query($db,"update patient set Mobile='$Mobile', Address='$Address', Email='$Email', Case='$Case' where ID='$ID'");
	
    if($edit)
    {
        mysqli_close($db); // Close connection
        header("location:p.php"); // redirects to all records page
        exit;
    }
    else
    {
        echo "Error editing record"; 
    } 	
}
?>

<h3>Update Data</h3>

<form method="POST">
Enter your edits here..<br>
			    <label for="Mobile"><b>Mobile</label>
			<input id="css" class="form-control" type="text" name="Mobile" required>
	

     <label for="Address"><b>Address</label>
			<input id="css" class="form-control" type="text" name="Address" required>
	
	 <label for="Email"><b>Email</label>
	
			<input id="css" class="form-control" type="email" name="Email" required>
	<label for=" Case"><b>Case</b></label><br>
   <input id="css" class="form-control" type="text" name="Case" >
   <br>
                   

  <input type="submit" name="update" value="Update">
</form>