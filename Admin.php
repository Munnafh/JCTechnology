<?php


$con=mysqli_connect('127.0.0.1','root','root');

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
		 echo'Data Inserted Sucessfully';
	 }
	 
 header("refresh:2 url=contact2.html");
 


?>