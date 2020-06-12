
<?php
include "dbcon.php"; 

$ID= $_GET['ID']; 

$sql = mysqli_query($db,"delete from patient where ID = '$ID'"); 

if($sql)
{
    mysqli_close($db); 
    header("location:p.php"); 
    exit;	
}
else
{
    echo "Error deleting record"; 
}
?>