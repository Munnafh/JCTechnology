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
 
  $sql1="SELECT * FROM `servicereq` WHERE Id='$_GET[id]'";
 
 $records=mysqli_query($con,$sql1);
 
 while($row = mysqli_fetch_array($records))
 {
 $Id=$row['Id'];
 
 $Name=$row['Name'];
 
 $Email=$row['Email'];
 
 $Phone=$row['Phone'];
 
 $Warranty=$row['Warranty'];
 
 $Problem=$row['Problem'];
 
 $Status=$row['Status'];
 
 $Remarks=$row['Remarks'];
	 
 $Ser_Eng_Name=$row['Ser_Eng_Name'];
 
$sql="INSERT INTO servicereqD(Id,Name,Email,Phone,Warranty,Problem,Status,Remarks,Ser_Eng_Name) VALUES ('$Id','$Name','$Email','$Phone','$Warranty','$Problem','$Status','$Remarks','$Ser_Eng_Name')";
 }
 if(!@mysqli_query($con,$sql))
	 
	 {
	 
		 echo 'Not Inserted';
	 }
	 else
	 
	 {
 
 

$sql="DELETE FROM servicereq WHERE Id='$_GET[id]'";


if(mysqli_query($con,$sql))
{
 session_start();
  
 $_SESSION['userName'] = 'Admin';
	 
	 $_SESSION['userName1'] = 'Admin1';
	 

		
header("refresh:1 url=AdminHome.php");
}
else
	
	{
		echo"Not DELETE";
	}
	 }
	

?>