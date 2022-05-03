<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sonu";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql ="INSERT INTO Booking (First,Last,Email,City,Query)
VALUES('$_POST[First]','$_POST[Last]','$_POST[Email]','$_POST[City]','$_POST[Query]');";
if ($conn->multi_query($sql) == TRUE) {
echo "Your data is recorded in DB successfully";
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>
<!doctype html>
<html>
<head>
<title>Diagnostic Centre </title>
<link rel ="stylesheet" href ="css/mystyle.css">

                   
<style>
       body {background-blend-mode: very lighten;background-image: url("css/download5.jpg"); background-repeat: no-repeat; background-attachment: fixed; background-position: center; background-size: 2000px;}
h1,h3{font-family: "Times New Roman", Times, serif;}
</style>

</head>
<body>
<header>
<img src="jpg/dia.jpg"  width="150px" height="130px"  align="left">
  <h1 style="color:Tomato;">Apex Diagnostics Center</h1>
<ul>
   <li><a href="index.php"target="_self"> Home</a></li>

       
	
	
	      
	       <li><a href="test.php">Book a test</a></li>
               

	           <li><a href="facilities.html"> Facilities</a></li>
          
        
	 
       <li><a href="contact.html">Contact us</a></li>
 
 
       <li><a href="register.php">Register</a>

        <li><a href="login.php">Login</a></li>

</li>
</ul>
<hr>
</header>

<center><img src="jpg/up1.gif" height="200px" width="300px"></center>

<div align="center">
<h1>Your Query has been received, We will get back to you shortly.<h1>


<h2><p>Diagnostics Center, Mumbai-400001.</p></h2>
</div>
<hr>
<div align="center">
<a href="index.html"><h2 style="background-color:black;color:white;">Back To Home Page</h2></a></div>
</div>
<hr>
<center><a href="#top">Scroll back to Top.</a></center>
<hr>
<footer>
copyright&copy;-2022. Diagnostics Center. All Rights Reserved.
</footer><hr>


</body>
</html>
 

