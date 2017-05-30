<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>JC Technology Service Section</title>
<link href="css/bootstrap.min.css" rel="stylesheet" />
<link href="plugins/flexslider/flexslider.css" rel="stylesheet" media="screen" />	
<link href="css/cubeportfolio.min.css" rel="stylesheet" />
<link href="css/style.css" rel="stylesheet" />
<link id="t-colors" href="skins/default.css" rel="stylesheet" />

	<!-- boxed bg -->
	<link id="bodybg" href="bodybg/bg1.css" rel="stylesheet" type="text/css" />

</head>
<body>

<div class="container">
		<div class="row">
							<div class="col-lg-6">
							<img src='img/logo.jpg' alt='' width='100' height='100' />
							
							<h2>JC Technology Service Section!! Only For Service Uses</h2>

<br><br>
								<p><font color="red"><h3>** Edit Only 'Status' , 'Remarks' and 'Ser_Eng_Name'</h3></font></p>
								
								
								<br>
								<h2>Service Request Table :-</h2>
								<br>



<table class='table table-hover'>
  <tr>
	   <th align="middle"><h4>Id</h4></th>
    <th align="middle"><h4>Name</h4></th>
    <th align="middle"><h4>Phone</h4></th>
      <th align="middle"><h4>Email</h4></th>
	  <th align="middle"><h4>Warranty</h4></th>
      <th align="middle"><h4>Problem</h4></th>	
      <th align="middle"><h4>Status</h4></th>
      <th align="middle"><h4>Remarks</h4></th>	
      <th align="middle"><h4>Ser_Eng_Name</h4></th>		  
  </tr>
 
 <?php

session_start();
if(isset($_SESSION['userName']))
{
	session_destroy();

$con=mysqli_connect('182.50.133.82:3306','jct','jct@123');

if(!$con)
{
	echo 'Not Connect to the Server';
}

 if(!@mysqli_select_db($con,'jctechnology'))
 {

	 echo 'DataBase Not Connected';
 }
 
 $sql="SELECT * FROM `servicereq`";
 
 $records=mysqli_query($con,$sql);
 
 while($row = mysqli_fetch_array($records))
 {
	 echo "<tr><form action=ServiceInsert.php method=post>";
	 echo "<td><input type=text  name=Id value='".$row['Id']."'></td>";
	 echo "<td><input type=text name=Name value='".$row['Name']."' ></td>";
	 echo "<td><input type=text  name=Phone value='".$row['Phone']."'></td>";
	 echo "<td><input type=text name=Email value='".$row['Email']."' ></td>";
	 echo "<td><input type=text  name=Warranty value='".$row['Warranty']."'></td>";
	 echo "<td><input type=text name=Problem value='".$row['Problem']."' ></td>";
	 echo "<td><input type=text  name=Status value='".$row['Status']."'></td>";
	 echo "<td><input type=text name=Remarks value='".$row['Remarks']."' ></td>";
	  echo "<td><input type=text name=Ser_Eng_Name value='".$row['Ser_Eng_Name']."' ></td>";
	 echo "<td><input type=submit value=Submit>";
	 
	 echo "<td><a href=AdminSE.php>refresh</a></td>";
	 echo"</form></tr>";
	 
 }
 
}
else
	
{

	echo '<h3><font color="red">Please Login First</font></h3>';	
}
 
 
 
 
 
 
 
 
 ?>
 
</table>



<a class="btn btn-theme btn-lg" href="http://jctechnology.in/index.html">Go To Home</a>
</div>
</div>
</body>
</html>