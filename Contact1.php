<!DOCTYPE html>
<html>
<head>


</head>
<body>

<div class="container">
		<div class="row">
							<div class="col-lg-6">
							<img src='img/logo.jpg' alt='' width='100' height='100' />
<center>




<?php


$con=mysqli_connect('182.50.133.82:3306','jct','jct@123');

if(!$con)
{
	echo 'Not Connect to the Server';
}


if(!mysqli_select_db($con,'jctechnology'))
{

	 echo 'DataBase Not Connected';
 }

$Name=$_POST['Name'];
 
 $Email=$_POST['Email'];
 
$Commend=$_POST['Commend'];
 
 
 
 $sql="INSERT INTO contact(Name,Email,Commend) VALUES ('$Name','$Email','$Commend')";
 
if(!mysqli_query($con,$sql))
	 
	 {
		 echo 'Not Inserted';
	 }
	 else
		  {
		 echo'<h3>Thank You For Contact Us. We Will Back To You Soon...</h3>';
	 }
	 
header("refresh:3 url=contact2.html");
 


?>
	
</center>	
</div>
</div>
</div>
</body>
</html>