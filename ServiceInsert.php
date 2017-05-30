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
 
  $sql="UPDATE `servicereq` SET Status='$_POST[Status]',Remarks='$_POST[Remarks]',Ser_Eng_Name='$_POST[Ser_Eng_Name]' WHERE Id='$_POST[Id]'";
 
 
 if(!@mysqli_query($con,$sql))
	 
	 {
	 
		 echo 'Not Inserted';
	 }
	 else
	 
	 {
 
 session_start();
  
 $_SESSION['userName'] = 'Admin';
	 
	 $_SESSION['userName1'] = 'Admin1';
	 

		
header("refresh:1 url=ServiceHome.php");
}

	
?>