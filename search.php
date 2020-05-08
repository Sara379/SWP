<?php
//fetch.php
$connect = mysqli_connect("localhost", "root", "", "swp");
$output = '';
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($connect, $_POST["query"]);
 $query = "
  SELECT * FROM patient
  WHERE ID LIKE '%".$search."%'
  OR Name LIKE '%".$search."%' 
  OR Email LIKE '%".$search."%' 

 ";
}
else
{
 $query = "
  SELECT * FROM patient ORDER BY ID
 ";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
 $output .= '
  <div class="table-responsive">
   <table class="table table bordered =1">
	<tr>
	<th> ID</th>
     <th> Name</th>
     <th>Age</th>
     <th>Mobile</th>
	 <th>Address</th>
	 <th>Email</th>
	 <th>LastVisit</th>
     <th>Case</th>
    </tr>
 ';
 
 while($row = mysqli_fetch_array($result))
 {
  $output .= '
   
  <tr>
    <td>'.$row["ID"].'</td>
    <td>'.$row["Name"].'</td>
	<td>'.$row["Age"].'</td>
	<td>'.$row["Mobile"].'</td>
    <td>'.$row["Address"].'</td>
    <td>'.$row["Email"].'</td>
    <td>'.$row["LastVisit"].'</td>
    <td>'.$row["Case"].'</td>
   </tr>
  ';
 }
 echo $output;
}
else
{
 echo 'Data Not Found';
}

?>