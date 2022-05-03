<!DOCTYPE html>
<html>
<head>
  <title>Registration and Sign-up Form</title>
  <link rel="stylesheet" type="text/css" href="style4.css">
<link href='https://fonts.googleapis.com/css?family=Bayon' rel='stylesheet'>
<script type="text/javascript">
function validateform()
{  
var name=document.vac.username.value;
var address=document.vac.address.value; 
var aadhar=document.vac.aadhar.value; 
var Date = document.vac.date.value; 
var phone = document.vac.phone.value; 

var covishield=document.vac.vaccines[0].checked;
var covaxin=document.vac.vaccines[1].checked;

var dose1=document.vac.dose[0].checked;
var dose2=document.vac.dose[1].checked;


var male=document.vac.gender[0].checked;
var female=document.vac.gender[1].checked;
var other=document.vac.gender[2].checked;

var allergy = document.vac.allergy.value;   

if (name==null || name==""){  
  alert("Error !!! No Name Found \n Name can't be empty/null");  
  return false;  
}

if (address==null || address==""){  
  alert("Error !!! No Address Written.\n Address Field can't be empty/null");  
  return false;  
}

if (aadhar==null || aadhar==""){  
  alert("Error !!! No Aadhar NO. written .\n Aadhar Field can't be empty/null");  
  return false;  
}

if ( Date== null || Date== '')
{
    alert('Date Should not be empty \n Please Enter  Date ');
    return false;
} 

if (covishield==false && covaxin==false)
{
alert("Please choose your Vaccine [ covishield or covaxin ] ");
return false;
}


if (dose1==false && dose2==false)
{
alert("Please choose your Dose Number[ First or Second ] ");
return false;
}

if (male==false && female==false && other==false)
{
alert("Please choose your Gender! [ Male or Female or Other ] ");
return false;
}

}


</script>

</head>
<body>
<hr>
  <div class="header">
  	<h2>Adult Vaccination</h2>
  </div>
	
  <form name="vac" form method="post" action="vacact.php" onsubmit="return validateform()">
  	
  	<div class="input-group">
  	  <label>Full Name </label>
  	  <input type="text" name="username" >
  	</div>
<br>
<div class="input-group">
  	  <label>Address </label>
  	  <input type="text" name="address" >
  	</div>
<br>
<div class="input-group">
  	  <label>Aadhar Card Number </label>
  	  <input type="number" name="aadhar">
  	</div>
<br>
	<p>Vaccination Date</p>
 	<input type="date" name="date" placeholder="dd-mm-yyyy" value="dd-mm-yyyy">
  	</div>
<br>
<br>
<div class="input-group">
 <label for="Timeslot">Choose a Time Slot:</label>
  <select name="timeslot" id="timing">
    <option value="9-10 AM">  9 - 10 AM</option>
    <option value="10-11 AM"> 10 - 11 AM</option>
    <option value="11-12 PM"> 11 - 12 PM</option>
    <option value="12-1 PM"> 12 - 1 PM</option>
    <option value="1-2 PM"> 1 - 2 PM</option>
    <option value="2-3 PM"> 2 - 3 PM </option>
  </select>
</div>
  <br>
<br>
<div>
<label for="phone">Phone Number:</label><br><br>

  <input type="tel" id="phone" name="phone"  >
</div>
<br>
<p> Vaccine Name</p>
  <input type="radio" id="vaccine_1" name="vaccines" value="Covishield">
  <label for="Covishield">Covishield</label><br>
  <input type="radio" id="vaccine_2" name="vaccines" value="Covaxin">
  <label for="Covaxin">Covaxin</label><br>
  
<br>
<p> Dose</p>
  <input type="radio" id="dose_1" name="dose" value="1">
  <label for="1">First</label><br>
  <input type="radio" id="dose_2" name="dose" value="2">
  <label for="2">Second</label><br>
<br>
	<p> Gender</p>
  <input type="radio" id="male" name="gender" value="Male">
  <label for="male">Male</label><br>
  <input type="radio" id="female" name="gender" value="Female">
  <label for="female">Female</label><br>
  <input type="radio" id="others" name="gender" value="Others">
  <label for="others">Others</label>
<br>
<br>
<div class="input-group">
  	  <label>Any Allergies </label>
  	  <input type="text" name="allergy" value="Enter Allergy if Present">
  	</div>
<br>
<center>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Book</button>
	<button type="reset" class="btn" name="reset">Reset</button>
  	</div>
</center> 	
  </form>


<hr>
</body>
</html>
 