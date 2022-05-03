<?php 
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "kjhosp"; 
$conn = mysqli_connect($servername, $username, $password, $dbname); 
if ($conn->connect_error) { 
die("Connection failed: " . $conn->connect_error); 
} 
$sql ="INSERT INTO vaccine (username,address,aadhar,date,timeslot,phone,vaccines,dose,gender,allergy) 
VALUES('$_POST[username]','$_POST[address]','$_POST[aadhar]','$_POST[date]','$_POST[timeslot]','$_POST[phone]','$_POST[vaccines]','$_POST[dose]','$_POST[gender]','$_POST[allergy]')";  
if ($conn->multi_query($sql) == TRUE) { 
echo "Your data is recorded "; 
} else { 
echo "Error: " . $sql . "<br>" . $conn->error; 
}
 $conn->close(); 
?>
<!DOCTYPE html>
<html>
<head>
  <title>Signup Message</title>
 <style>
h1{text-align: center}
h1{font-family:Andika New Basic; }
h2{font-family: Times New Roman}
h2,footer{text-align: center}
a {text-decoration:none;}
body{background-image: url("bg1.jpg");}
</style>
<script>
      function printFunction() { 
        window.print(); 
      }
    </script>
</head>
<body>

<div align="center">
<img src="Input1.gif" height="400px" width="500px"></div>

<h1>Your Vaccination Slot has been booked Successfully !!!</h1>
<p><h2>
<?php
echo "<center>";
echo "<h2>";
echo "<br>";
echo("Name : ".$_POST["username"]);
echo "<br>";
echo("Aadhar Number : ".$_POST["aadhar"]);
echo "<br>";
echo("Vaccination Date : ".$_POST["date"]);
echo "<br>";
echo("Vaccination Timeslot : ".$_POST["timeslot"]);
echo "<br>";
echo("Phone Number: ".$_POST["phone"]);
echo "<br>";
echo("Vaccine Name : ".$_POST["vaccines"]);
echo "<br>";
echo("Vaccine Dose Number : ".$_POST["dose"]);
echo "<br>";
echo "</h2>";
echo "</center>";
?>

<button onclick="printFunction()">Print Reciept</button>​
<br>
<footer><h2><b>&reg; KJ HOSPITAL </b></h2>
<hr>
<div align="center"><a href="index.html"><h3 style="color:white;background-color:black;">Back To The Home Page</h3></a></div></footer>

</body>
</html>