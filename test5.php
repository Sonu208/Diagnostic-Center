<?php 
if(isset($_FILES['image'])){
$errors= array(); 
$file_name = $_FILES['image']['name']; 
$file_size =$_FILES['image']['size']; 
$file_tmp =$_FILES['image']['tmp_name']; 
$file_type=$_FILES['image']['type'];
 $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
$expensions= array("jpeg","jpg", "png");
if(in_array($file_ext, $expensions) === false) {
$errors []="extension not allowed, please choose a JPEG or PNG file.";
}
if($file_size > 2097152) {
$errors[]='File size must be excately 2 MB';
}
if(empty($errors) ==true){
move_uploaded_file($file_tmp, "images/" .$file_name);
echo "Success"; }
else{
print_r($errors);
}}
?>

<!doctype html>
<html>
<head>
<title>Diagnostic Centre </title>
<link rel ="stylesheet" href ="mystyle.css">

                   
<style>
       body {background-blend-mode: very lighten;background-image: url("download5.jpg"); background-repeat: no-repeat; background-attachment: fixed; background-position: center; background-size: 2000px;}
h1,h3{font-family: "Times New Roman", Times, serif;}
</style>

</head>
<body>
<header>
<img src="dia.jpg"  width="150px" height="130px"  align="left">
  <h1 style="color:Tomato;">Apex Diagnostics Center</h1>
<ul>
   <li><a href="index.html "target="_self"> Home</a></li>

       
	
	
	      
	       <li><a href="test.php">Book a test</a></li>
               

	           <li><a href="facilities.html"> Facilities</a></li>
          
        
	 
       <li><a href="contact.html">Contact us</a></li>
 
 
       <li><a href="register.php">Register</a>

        <li><a href="login.php">Login</a></li>

</li>
</ul>
<hr>
</header>
<br>
<br>
<br>

	<form name="reg" action="insert2.php" method="POST">
<fieldset>
<legend><b><p>Appointment Form</b></p></legend>
<br>
<h2><p>Take an appointment</p></h2>
<hr>
<h3>Please fill in the details below to schedule an appointment</h3>
<hr>
<b> First name </b>
<input type="text" name="First" id="First" required>

<br>
<br>
<b> Last name </b>
<input type="text" name="Last" id="Last" required>
<br>
<br>
<b> Gender </b>
<input type="radio" name="Gender" value="male"/> male 
<input type="radio" name="Gender" value="female"/> female 
<br>
<br>
 <b> Address</b>
<input type="text" name="Address" id="Address" required>
<br>
<br>
<b> Date </b>
<input type="date" name="Date" required>
<br>
<br>
<b> Select Specialities</b>

<select name="Specialities" size="2" required multiple>
<option value="Xray">X-RAY</option>
<option value="CTscan">CT SCAN</option>
<option value="Mri">MRI SCAN</option>
<option value="Bloodtest">BLOOD TEST</option>
<option value="Sonography">SONOGRAPHY</option>


</select>
<br>
<br>
<b> Upload Your Image</b>
<form action="" method="POST"_enctype="multipart/form-data">
<input type="file" name="image" />
 </form>
<br>
<br>

<b> Phone no. </b>
<input type="text" name="Phone" id="Phone" required>
<br>
<br>


&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="submit" name="Submit">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="reset" name="Reset">
<hr>


</fieldset>



</FORM>


</body>
</html>
