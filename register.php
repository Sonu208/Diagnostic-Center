
<?php 
$showAlert = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'connected.php';
    $Username = $_POST["Username"];
    $Password = $_POST["Password"];
    $cPassword = $_POST["cPassword"];
    
    $exists=false;
    if(($Password == $cPassword) && $exists==false){
        $sql = "INSERT INTO `register` ( `Username`, `Password`, `dt`) VALUES ('$Username','$Password',current_timestamp())";
        $result = mysqli_query($conn, $sql);
        if ($result){
            $showAlert = true;
           
        }
    }
    else{
        $showError = "Passwords do not match";
    }
}
    
?>
<html>
<head>
<title>Login Form Design</title>

<link rel="stylesheet" type="text/css" href="css/mystyle.css">  

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link rel="stylesheet" href="css/style.css">
<style>
       body {background-blend-mode: very lighten;background-image: url("jpg/download5.jpg"); background-repeat: no-repeat; background-attachment: fixed; background-position: center; background-size: 2000px;}

</style>

</head>
<body>
<header>
<?php
    if($showAlert){
    echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong>Your account is now created and you can login
        
      
        
    </div> ';
    }
     if($showError){
    echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> '. $showError.'
        
    
        
    </div> ';
    }
    ?>
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
<hr> -->
</header>

    
 
    <section class="ftco-section">
        <div class="container">
            
             <form action="register.php" method="post">
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="login-wrap py-5">
                <div class="img d-flex align-items-center justify-content-center" style="background-image: url(jpg/av.jpg);"></div>
                <h3 class="text-center mb-0">Welcome</h3>
               
                    <center>Sign in by entering the information below</center><br>
                
                        <form action="#" class="login-form">
                    <div class="form-group">
                        <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-user"></span></div>
                        <input type="text" name="Username" class="form-control" required placeholder="Username" required>
                        <small id="emailHelp" class="form-text text-muted">We will not share your email with anyone else</small>   
                    </div>
                    <div class="form-group">
                    <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-lock"></span></div>
                  <input type="password" name="Password" class="form-control" placeholder="Password" required>
                </div>
                <div class="form-group">
                    <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-lock"></span></div>
                  <input type="password" name="cPassword" class="form-control" placeholder="Confirm Password" required>
                </div> 
                
                <div class="form-group d-md-flex">
                                <div class="w-100 text-md-right">
                                    <a href="#"></a>
                                </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn form-control btn-primary rounded submit px-3">Get Started</button>
                </div>
              </form>
              <div class="w-100 text-center mt-4 text">
                <center>Already have an account?</center>
                  <a href="login.php"> Login !</a>
              </div>
            </div>
                </div>
            </div>
        </div>
    </section>

    <script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>


</body>
</head>
</html>