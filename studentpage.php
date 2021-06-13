<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "student";
// Create connection
$con = mysqli_connect($servername, $username, $password,$db);
// Check connection
if (!$con) {
   die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

$sql1="select * from students";


$result1 = mysqli_query($con, $sql1);

mysqli_close($con);
?><!DOCTYPE html>
<html>
<head>
<title>STUDENTS DETAILS</title>
</head>
<style type="text/css">
	.container {
  width: 500px;
  clear: both;
}

.container input {
  width: 100%;
  clear: both;
}
</style>
<body>
	

	<table align="center" border="1px" style="width:600px; line-height:40px;"> 

	<tr> 
		<th colspan="14"><h2>STUDENT RECORDS</h2></th> 
		</tr> 
			  <th> SNO </th> 
			  <th> DOOR NO </th> 
			  <th> STUDENT NAME </th> 
			  <th> CASTE </th> 
			  <th> FATHER NAME  </th> 
			  <th> AGE </th> 
			  <th> D O B </th> 
			  <th> CLASS </th> 
			  <th> SCHOOL </th> 
			  <th> YEAR1 </th> 
			  <th> YEAR2 </th> 
			  <th> YEAR3 </th> 
			  <th> YEAR4 </th> 
			  <th> YEAR5 </th> 
		</tr> 
		
		<?php while($rows=mysqli_fetch_assoc($result1)) 
		{ 
		?> 
		<tr> <td><?php echo $rows['sno']; ?></td> 
		<td><?php echo $rows['doorno']; ?></td> 
		<td><?php echo $rows['studentname']; ?></td> 
		<td><?php echo $rows['caste']; ?></td> 
		<td><?php echo $rows['fathername']; ?></td> 
		<td><?php echo $rows['age']; ?></td> 
		<td><?php echo $rows['dob']; ?></td> 
		<td><?php echo $rows['class']; ?></td>
		<td><?php echo $rows['school']; ?></td>
		<td><?php echo $rows['year1']; ?></td>
		<td><?php echo $rows['year2']; ?></td>
		<td><?php echo $rows['year3']; ?></td>
		<td><?php echo $rows['year4']; ?></td>
		<td><?php echo $rows['year5']; ?></td>
		
		</tr> 
	<?php 
               } 
          ?> 

	</table> 
</body>
</html>