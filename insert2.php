<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sonu";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql ="INSERT INTO appointment (First,Last,Email,Gender,Address,Date,Specialities,Phone)
VALUES('$_POST[First]','$_POST[Last]','$_POST[Email]','$_POST[Gender]','$_POST[Address]','$_POST[Date]','$_POST[Specialities]','$_POST[Phone]');";
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
       body {background-blend-mode: very lighten;background-image: url("jpg/download5.jpg"); background-repeat: no-repeat; background-attachment: fixed; background-position: center; background-size: 2000px;}
h1,h3{font-family: "Times New Roman", Times, serif;}
</style>

</head>
<body>
<script>
      function printFunction() { 
        window.print(); 
      }
    </script>
<header>
<img src="jpg/dia.jpg"  width="150px" height="130px"  align="left">
  <h1 style="color:Tomato;">Apex Diagnostics Center</h1>
<ul>
   <li><a href="index.php "target="_self"> Home</a></li>

       
	
	
	      
	       <li><a href="test.php">Book a test</a></li>
               

	           <li><a href="facilities.html"> Facilities</a></li>
          
        
	 
       <li><a href="contact.html">Contact us</a></li>
 
 
       <li><a href="register.php">Register</a>

        <li><a href="login.php">Login</a></li>

</li>
</ul>
<hr>
<br>
<br>
<br>

</header>
<br>

<center><img src="jpg/blue.gif" height="200px" width="350px"></center>

<div >
<h1 align="center">Your Appointment has been registered successfully<h1>
<br><hr>
<div class="abc">
  <center>
<?php
echo "<h4>";

echo "<p align='center'> <font color=blue  size='6pt'>Your Entered Details</font> </p>";
echo("<font color=red>First Name :</font> ".$_POST["First"]);
echo "<br>";
echo("<font color=red>Last Name :</font> ".$_POST["Last"]);
echo "<br>";
echo("<font color=red>Email :</font> ".$_POST["Email"]);
echo "<br>";
echo("<font color=red>Gender :</font> ".$_POST["Gender"]);
echo "<br>";
echo("<font color=red>Address :</font> ".$_POST["Address"]);
echo "<br>";
echo("<font color=red>Date :</font> ".$_POST["Date"]);
echo "<br>";
echo("<font color=red>Specialities :</font> ".$_POST["Specialities"]);
echo "<br>";
echo("<font color=red>Phone :</font> ".$_POST["Phone"]);
echo "<br>";
echo "</h4>";
?>
</center>
</div>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.btn {
  background-color: DodgerBlue;
  border: none;
  color: white;
  padding: 12px 30px;
  cursor: pointer;
  font-size: 20px;
}

/* Darker background on mouse-over */
.btn:hover {
  background-color: RoyalBlue;
}
</style>
<center>
<h5>You can download your invoice !!!</h5>

<button class="btn" onclick="printFunction()">Print Reciept</button>
       
  

</body>
</html>

<h5><p>Diagnostics Center, Mumbai-400001.</p></h5></center>
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