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
<table>	
			
<?php


$con=mysqli_connect('182.50.133.82:3306','jct','jct@123');

if(!$con)
{
	echo 'Not Connect to the Server';
}

 if(!@mysqli_select_db($con,'jctechnology'))
 {

	 echo 'DataBase Not Connected';
 }
 

 $Name=$_POST['Name'];
 
 $Email=$_POST['Email'];
 
 $Phone=$_POST['Phone'];
 
 $Warranty=$_POST['Warranty'];
 
 $Problem=$_POST['Problem'];
 
 
$sql="INSERT INTO servicereq(Name,Email,Phone,Warranty,Problem) VALUES ('$Name','$Email','$Phone','$Warranty','$Problem')";
 
 if(!@mysqli_query($con,$sql))
	 
	 {
	 
		 echo 'Not Inserted';
	 }
else
	 {
	
	$sql1="SELECT Id FROM `servicereq` WHERE Problem='$Problem' && Name='$Name' && Phone='$Phone'";
	
	$records=mysqli_query($con,$sql1);
 
 while($row = mysqli_fetch_array($records))
 {
	 echo "<h1> Thank You for Interested.We Will Contact You Very Soon.. <th>".$row['Id']."</th></h1>";
	 
	 
	 
 }
	 }

 


?>

<center><p><font color="blue"><h2>Please Note Down This Call Log Number For Further Procerss</h2></font></p></center>
</table>
	</br>
<button onclick="window.location.href='http://www.jctechnology.in/index.html'">Go Back</button>	
</div>
</div>
</div>
</body>
</html>