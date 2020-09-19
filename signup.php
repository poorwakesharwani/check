<!DOCTYPE HTML>
<html>
<head>
<title>New user signup </title>
<script>
function validateForm(){
	var x = document.forms["form1"]["user_id"].value;
	 if (x == "") {
    alert("User Id must be filled out");
    return false;
  }
  
  var y = document.forms["form1"]["login"].value;
	 if (y == "") {
    alert("Password must be filled out");
    return false;
  }
  
  
   var z = document.forms["form1"]["pass"].value;
	 if (z == "") {
    alert("Confirm must be filled out");
    return false;
  }
   if(z!=y)
  {
    alert("Confirm Password does not matched");
	return false;
  }
  
  
    var l = document.forms["form1"]["name"].value;
	 if (l == "") {
    alert("Name must be filled out");
    return false;
  }
 
  var l = document.forms["form1"]["email"].value;
	 if (l == "") {
    alert("Email must be filled out");
    return false;
  }else {
	   	f1=l.indexOf('@');
		f2=l.indexOf('@',f1+1);
		e1=l.indexOf('.');
		e2=l.indexOf('.',e1+1);
		n=l.length;

		if(!(f1>0 && f2==-1 && e1>0 && e2==-1 && f1!=e1+1 && e1!=f1+1 && f1!=n-1 && e1!=n-1))
		{
			alert("Please Enter valid Email");
			document.form1.email.focus();
			return false;
		}
		
 }
}

  
</script>
<link  rel="stylesheet" type="text/css">
</head>
<style>
		body {
		  background-color: #92a8d1;
		}
    </style>
<body>
<center>
<div class="floating-box">
<form name="form1" action="signupuser.php"  onsubmit="return validateForm()"  method="post">
   <label for=""pwd"> User Id</label>
   <input type="text" id="user_id" name="user_id"><br><br>
   
   <label for=""pwd">Password</label>
   <input type="password" id="login" name="login"><br><br>
     
   <label for=""pwd"> Confirm  Password </label>
   <input type="password" id="pass" name="pass"><br><br>
   
   <label for="uname">Name</label>
   <input type="text" id="name" name="name"><br><br>
       
   
   <label for="uname">Email id</label>
   <input type="text" id="email" name="email"><br><br>
    
   <input type="submit" name="submit" value="Signup"><br>
   <a href="index.php">Already Register</a>

</form>
</div>
</center>
 
 
</body>
</html>