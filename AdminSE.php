<Html>
<head>

</head>

<body>

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
 
 
 //$username="select username from admin where id=1";
 
 //$password="select password from admin where id=1";
 
 //$a=mysqli_query($con,$username);
 
 //$b=mysqli_query($con,$password);

 
	 session_start();
  
 $_SESSION['userName'] = 'Admin';
	 
	 $_SESSION['userName1'] = 'Admin1';
  
 header("Location: http://www.jctechnology.in/SeviceHome.php");
	 
 die();
 

?>

</body>
</html>