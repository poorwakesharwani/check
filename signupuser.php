<!DOCTYPE HTML>
<html>
<head>
<title>User Signup</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link  rel="stylesheet" type="text/css">
</head>

<body>
<?php

extract($_POST);
include("database.php");
$rs=mysqli_query($conn,"select * from emp where user_id='$user_id'");
if (mysqli_num_rows($rs)>0)
{
	echo "<br><br><br><div class=head1>Login Id Already Exists</div>";
	echo "<br><div class=head1><a href=login.php>Login</a></div>";
	exit;
}
$sql = "INSERT INTO emp(user_id,login,pass,name,email)
VALUES ('$user_id','$login','$pass','$name','$email')";

if ($conn->query($sql) === TRUE) {
  echo "<br><br><br><div class=head1>Your Login ID  $user_id Created Sucessfully</div>";
  echo "<br><div class=head1>Please Login using your Login ID</div>";
   echo "<br><div class=head1><a href=login.php>Login</a></div>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
?>
</body>
</html>