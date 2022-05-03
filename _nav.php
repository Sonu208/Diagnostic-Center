<?php 
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
  $loggedin= true;
}
else{
  $loggedin = false;
}

  echo' <ul>

   <li><a href="index.php "target="_self"> Home</a></li>

       
	
	
	      
	       <li><a href="test.php">Book a test</a></li>
               

	           <li><a href="facilities.html"> Facilities</a></li>
          
        
	 
       <li><a href="contact.html">Contact us</a></li>';
 
       if(!$loggedin){
       echo'<li><a href="register.php">Register</a>

        <li><a href="login.php">Login</a></li>';
       }
       if($loggedin){

       echo' <li><a href="logout.php">Logout</a></li>';}
       

       echo'</ul>';

       ?>
      
       