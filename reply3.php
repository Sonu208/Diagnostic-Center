
<?php
$login = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'connected.php';
    $Username = $_POST["Username"];
    $Password = $_POST["Password"]; 
    
     
    $sql = "Select * from register where Username='$Username' AND Password='$Password'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if ($num == 1){
        $login = true;
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['Username'] = $Username;
        header("location: test.php");

    } 
    else{
        $showError = "Invalid Credentials";
        // header("location: login.php");
    
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
<?php
    if($login){
    echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong><p> You are logged in</p>
        
    </div> ';
    }
    if($showError){
    echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> '. $showError.'
        
    </div> ';
    }
    ?>
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


<center><img src="up.gif" height="250px" width="350px"></center>

<div align="center">
<h1>You Have successfully Login !!!<h1>


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
copyright&copy;-2022. Diagnostics Center . All Rights Reserved.
</footer><hr>


</body>
</html>
 

