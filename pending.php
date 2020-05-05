!DOCTYPE html>
<html>
<head>
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
      <a href="ContactUs.php" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i> Logout</a>
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
<br>
<HR>
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
table {
width: 100%;
color: pink;
font-family: monospace;
font-size: 25px;
text-align: left;
}
th {
background-color: white;
color: black;
}
tr:nth-child(even) {background-color: white  }
</style>
</head>
<body>
<table border="1">
<tr>
<th>Name</th>
<th>Age</th>
<th>Mobile</th>
<th>Address</th>
<th>Dr</th>
<th>Day</th>
</tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "swp");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM pending";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {

echo "<tr><td>" 
. $row['Name'] . 
"</td><td>"
. $row['Age'] . 
"</td><td>"
 . $row['Mobile'] .
"</td><td>"
. $row['Address'] . 
"</td><td>"
. $row['Dr'] . 
"</td><td>"
. $row['Day'] . 


 "</td></tr>";  //$row['index'] the index here is a field name
}

echo "</table>"; //Close the table in HTML
}
?>

