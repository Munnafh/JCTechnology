<Html>
<head>

</head>

<body>

<?php


//$con=mysqli_connect('182.50.133.82:3306','jct','jct@123');

$con=mysqli_connect('127.0.0.1','root','root');

if(!$con)
{
	echo 'Not Connect to the Server';
}

 if(!@mysqli_select_db($con,'jctechnology'))
 {

	 echo 'DataBase Not Connected';
 }
 //$dateTime = date_create('now')->format('Y-m-d H:i:s');
//$timezone = date_default_timezone_get(india);



$time_now=mktime(date('h')+5,date('i')+30,date('s'));
$date = date('d-m-Y H:i:s', $time_now);
echo $date;


//echo "The current server timezone is: " . $dateTime;
 
 //echo (new \DateTime())->format('Y-m-d H:i:s');
 
 //$username="select username from admin where id=1";
 
 //$password="select password from admin where id=1";
 
 //$a=mysqli_query($con,$username);
 
 //$b=mysqli_query($con,$password);

	// session_start();
  
 //$_SESSION['userName'] = 'Admin';
	 
	// $_SESSION['userName1'] = 'Admin1';
  
 //header("Location: http://localhost:8080/JCTechnology/AdminHome.php");
	 
 //die();
 

?>

</body>
</html>