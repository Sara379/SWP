<!DOCTYPE html>
<html>
<head>
<title>patient</title>
<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
 
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="w3-top">
  <div class="w3-bar w3-white w3-card" id="myNavbar">
    <a href="clinic.php" class="w3-bar-item w3-button w3-wide">Derma Clinic</a>
    <div class="w3-right w3-hide-small">
      <a href="#Schedule" class="w3-bar-item w3-button"><i class="fa fa-th"></i> Schedule</a>
      <a href="ContactUs.php" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i> Logout</a>
    </div>




    </a>
  </div>
</div>    

<div class="container">
   <br />
   <h2 align="center"></h2><br />

   <div class="form-group">
    <div class="input-group">
     <span class="input-group-addon">Search </span>
     <input   type="text" name="search_text" id="search_text" placeholder="Search patient" class="form-control" />
    </div>
   </div>
   <br />
   <div id="result"></div>
  </div>
  <br>
  <script>
$(document).ready(function(){

 load_data();

 function load_data(query)
 {
  $.ajax({
   url:"search.php",
   method:"POST",
   data:{query:query},
   success:function(data)
   {
    $('#result').html(data);
   }
  });
 }
 $('#search_text').keyup(function(){
  var search = $(this).val();
  if(search != '')
  {
   load_data(search);
  }
  else
  {
   load_data();
  }
 });
});
</script>

 
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
  border-collapse: collapse;
  width: 100%;
  font-size :20px;
  font: serif;

}

th, td {
  text-align: left;
  padding: 8px;

}
tr {

  background-color:lightgray;
}

tr:nth-child(even){background-color: white}

th {
  background-color: gray;
  color: white;
}


</html>