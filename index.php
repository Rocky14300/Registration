<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script> -->


<style type="text/css">

	
[type="date"] {
  background:#fff url(https://cdn1.iconfinder.com/data/icons/cc_mono_icon_set/blacks/16x16/calendar_2.png)  97% 50% no-repeat ;
}
[type="date"]::-webkit-inner-spin-button {
  display: none;
}
[type="date"]::-webkit-calendar-picker-indicator {
  opacity: 0;
}


</style>





<script type="text/javascript">
	function fun(){
		
		var f = document.getElementById("inputFirstName").value;
		var l = document.getElementById("inputLastName").value;
		var e = document.getElementById("inputEmail").value;
		var p = document.getElementById("phone").value;
		var d = document.getElementById("dateofbirth").value;
		var pwd = document.getElementById("Password").value;



		
		if(f.trim()==""){
			//alert("Enter first name...");
			document.getElementById("inputFirstName").style.border="solid 2px red";
			document.getElementById("lblf").style.visibility="visible";
			return false;
		}else if(l.trim()==""){
			//alert("Enter last name...");
			document.getElementById("inputLastName").style.border="solid 2px red";
			document.getElementById("lbll").style.visibility="visible";
			return false;
		}else if(e.trim()==""){
			//alert("provide your Email...");
			document.getElementById("inputEmail").style.border="solid 2px red";
			document.getElementById("lble").style.visibility="visible";
			return false;
		}else if(p.trim()=="" || p.trim().length!=10){
			//alert("provide your phone number...");
			document.getElementById("phone").style.border="solid 2px red";
			document.getElementById("lblp").style.visibility="visible";
			return false;
		}
		else if(d.trim()==""){
			//alert("Date of Birth filled is empty please provide your DOB...");
			document.getElementById("dateofbirth").style.border="solid 2px red";
			document.getElementById("lbld").style.visibility="visible";
			return false;
		}else if(pwd.trim()==""){
			//alert("Enter your password ...");
			document.getElementById("Password").style.border="solid 2px red";
			document.getElementById("lblpa").style.visibility="visible";
			return false;
		}
		else {
			alert("Registration Successfully...");
			return true;

		}

	}
</script>

</head>
<body>
<h2 align="center" style="background-color: orange;">---- Welcome to Registration form ----</h2><br><br>


<form action="" method="get" onsubmit="return fun()">
<div class='container'>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputFirstName">First Name</label>
      <input type="varchar" class="form-control" id="inputFirstName" placeholder="f_name" name="fname">
      <label id="lblf" style="color: red;visibility: hidden;">*required (Enter first name)</label>
    </div>
    <div class="form-group col-md-6">
      <label for="inputLastName">Last Name</label>
      <input type="varchar" class="form-control" id="inputLastName" placeholder="l_name" name="lname">
      <label id="lbll" style="color: red;visibility: hidden;">*required(Enter last name)</label>
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail">Email</label>
    <input type="Email" class="form-control" id="inputEmail" placeholder="your@gmail.com" name="email">
    <label id="lble" style="color: red;visibility: hidden;">*required(Enter email)</label>
  </div>
  
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="phone">Phone Number (Exclude country code)</label>
      <input  type="integer" class="form-control" id="phone" name="ph">
      <label id="lblp" style="color: red;visibility: hidden;">*required(ph no. must be 10 digit)</label>
     
    </div>
    <div style="margin-top: 22px;" class="form-group col-md-4">
		<label for="dateofbirth">Date Of Birth:</label>
		<input type="date" name="dateofbirth" id="dateofbirth">
		<label id="lbld" style="color: red;visibility: hidden;">*required(Enter the date of birth)</label>
    </div>
    <div class="form-group col-md-4">
      <label for="Password">Password</label>
      <input type="password" class="form-control" id="Password" name="pass">
      <label id="lblpa" style="color: red;visibility: hidden;">*reqired</label>
</div>
   </div>






 

  <button type="submit" class="btn btn-primary" >Register</button>
</form>




</div>


</body>
</html>