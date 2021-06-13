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

$sno=$_POST["sno"];
$doorno=$_POST["doorno"];
$studentname=$_POST["studentname"];
$caste=$_POST["caste"];
$fathername=$_POST["fathername"];
$age=$_POST["age"];
$dob=$_POST["dob"];
$class=$_POST["class"];
$school=$_POST["school"];
$year1=$_POST["year1"];
$year2=$_POST["year2"];
$year3=$_POST["year3"];
$year4=$_POST["year4"];
$year5=$_POST["year5"];

$sql="insert into students values('".$sno."','".$doorno."','".$studentname."','".$caste."','".$fathername."','".$age."','".$dob."','".$class."','".$school."','".$year1."','".$year2."','".$year3."','".$year4."','".$year5."')";
echo $sql;


$result = mysqli_query($con, $sql);

mysqli_close($con);
?>
<!DOCTYPE html>
<html>
<head>
<title>STUDENTS</title>
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
	<ul>
    <li><a href="student.php">ENTER DETAILS</a></li>
    <li><a href="studentpage.php">STUDENT RECORDS</a></li>
   </ul>
	<h3>FILL OUT THE STUDENT FORM</h3>
	<div  class="container" >
<form  method="POST" action="student.php">
<tr><th>sno: <input type="text" name="sno"><br></th>
<th>door no : <input type="text" name="doorno"><br></th>
<th>student name       : <input type="text" name="studentname"><br></th>
<th>CASTE : <input type="text" name="caste"><br></th>
<th>FATHER NAME    : <input type="text" name="fathername"><br></th>
<th>AGE  : <input type="text" name="age"><br></th>
<th>DOB(yyyy-mm-dd)        : <input type="text" name="dob"><br></th>
<th>CLASS      : <input type="text" name="class"><br></th>
<th>SCHOOL       : <input type="text" name="school"><br></th>
<th>YEAR1       : <input type="text" name="year1"><br></th>
<th>YEAR2       : <input type="text" name="year2"><br></th>
<th>YEAR3        : <input type="text" name="year3"><br></th>
<th>YEAR4        : <input type="text" name="year4"><br></th>
<th>YEAR5        : <input type="text" name="year5"><br></th>
</tr>
<input type="submit" name="submit" value="submit">
</form>
</div>

	
</body>
</html>