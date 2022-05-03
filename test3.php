<!-- <?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: login.php");
    exit;
}
?>  -->

<!doctype html>
<html>
<head>
<title>Diagnostic Centre </title>
<link rel ="stylesheet" href ="mystyle.css">
<script>
  function validateForm() {
    var scans=document.forms["myForm"]["scans"].value;
    let x = document.forms["myForm"]["First"].value;
    if (x == "") {
      alert("First Name must be filled out");
      return false;
    }
    let y = document.forms["myForm"]["Last"].value;
    if (y == "") {
      alert("Last Name must be filled out");
      return false;
    }
    var male=document.myForm.gender[0].checked;
var female=document.myForm.gender[1].checked;
if (male==false && female==false )
{
alert("Please choose your Gender! ( Male or Female )");
return false;
}
    let z = document.forms["myForm"]["add"].value;
    if (z == "") {
      alert("Address must be filled out");
      return false;
    }
    let a = document.forms["myForm"]["Number"].value;
    if (a == "") {
      alert("Phone number must be filled out");
      return false;
    }
    
    if (scans == 'none') {
            alert("Please select an option!");
            return false;
        }
    if (x !="" && y !="" && z !=="" && a !="")
    {
      alert("You Form is succesfully submited!!");
    }  
    
  }

  </script>
  <script>
    function myFunction() {
      alert("You Have Entered in the Input Field");
    }
    </script>  
    <script>
      function myFunction2() {
        alert("You pressed a key inside the input field");
      }
      </script> 
      <script>
        function myFunction1() {
         
          var x = document.getElementById("First");
          x.value = x.value.toUpperCase();
        }
        </script>  
        <script>
        function myFunction3() { 
         var x = document.getElementById("Last");      
          x.value = x.value.toUpperCase();
        }
        </script>     
        <script>
         function myFunction4(x) {
          x.style.background = "yellow";
        }
</script>
<style>
       body {background-blend-mode: very lighten;background-image: url("download5.jpg"); background-repeat: no-repeat; background-attachment: fixed; background-position: center; background-size: 2000px;}
h1,h3{font-family: "Times New Roman", Times, serif;}
</style>

</head>
<body>
<header><br>
<img src="dia.jpg"  width="150px" height="130px"  align="left">
  <h1 style="color:Tomato;">Apex Diagnostics Center</h1>
  <?php require '_nav.php' ?>

<hr>
</header>
<br>
<br>
<br>
<form name="myForm" method="POST" action="insert2.php" onsubmit="return validateForm()" >
<fieldset>
<legend><b><p>Appointment Form</b></p></legend>
<br>
<h2><p>Take an appointment</p></h2>
<hr>
<h3>Please fill in the details below to schedule an appointment</h3>
<hr>
<b> First name </b>
<input type="text" name="First" id="First"onblur="myFunction1()" >

<br>
<br>
<b> Last name </b>
<input type="text" name="Last" id="Last" onkeyup="myFunction3()" >
<br>
<br>
<b> Email address</b>
<input type="text" name="Email" onfocus="myFunction4(this)" >
<br>
<br>
<b> Gender </b>
<input type="radio" name="Gender" value="male"/> male 
<input type="radio" name="Gender" value="female"/> female 
<br>
<br>
 <b> Address</b>
<input type="text" name="Address" id="Address" > <!-- onkeypress="myFunction()"  > -->
<br>
<br>

<b> Date </b>
<input type="date" name="Date" >
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
 <br>
<b> Phone no. </b> 
<input type="text" name="Phone" id="Phone" required> <!-- onkeydown="myFunction2()" >-->
<br>
<br>



&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="submit" name="Submit">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="reset" name="Reset">
<hr>


</fieldset>



</FORM>

<script>
  function myFunction() {
      alert("The form was submitted");
    }
    </script> 
</body>
</html>
