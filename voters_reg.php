<?php
var_dump($_POST);
include "db.php";

$ujumbe="";

if(isset($_POST['register_voter'])){
	$reg_no = $conn->real_escape_string(strtoupper($_POST['reg_no']));
	$fullname= $conn->real_escape_string(strtoupper($_POST['fullname']));
	$sex= $conn->real_escape_string(strtoupper($_POST['sex']));
	$class_level= $conn->real_escape_string(strtoupper($_POST['class_level']));
	$password= $conn->real_escape_string($_POST['password']);

$sql = "INSERT INTO voters 
(reg_no,fullname,sex,class_level,password,has_voted) VALUES 
(\"$reg_no\",\"$fullname\",\"$sex\",\"$class_level\",\"$password\",0)";

if($conn->query($sql)===TRUE){
	echo "<h2>Voter Registered</h2>";
}else{
	echo "Error: ".$conn->error;
}
}
$conn->close();
?>


<!DOCTYPE html>
<html align="center">
<head>
<title>voters registration</title>	
</head>

<body style="background-image:url('Capture');">
<h2 align="center">UMOJA KING'ORI SECONDARY SCHOOL</h2>
<h3 align="center">Voters Registration Form</h3>

<form action="" method="POST">
<table align="center" border="0" cellpadding="5">
<tr align="center">
	<td>Registration Number:<br><input type="text" name="reg_no" placeholder="Example: S5631-0001-2025" maxlength="15" required></td>
</tr>
<tr align="center">
	<td>Student Name:<br><input type="text" name="fullname" placeholder="Enter Your Full Name" maxlength="100" required></td>
</tr>
<tr align="center">
	<td>Sex:<br>
		<select name="sex" required>
			<option value=""><---Choose Your Sex---></option>
			<option value="M">Male</option>
			<option value="F">Female</option>
		</select>
</tr>
<tr align="center">	<td>Class Level:<br>
		<select name="class_level" required>
			<option value=""><---Choose Your Level of Study---></option>
			<option value="I">Form One</option>
			<option value="II">Form Two</option>
			<option value="III">Form Three</option>
			<option value="IV">Form Four</option>
		</select>
</tr>
<tr align="center">
	<td>Password:<br><input type="password" name="password" placeholder="Fill This Field" required></td>
</tr>
<tr align="center">
<td><input type="submit" name="register_voter" value="Register Voter"></td></tr>
</table>
</form>
<marquee direction="left">Enter to Learn, Leave to Serve</marquee>
</body>
</html>