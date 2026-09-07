<?php
session_start();
include "db.php";

if(isset($_POST['login'])){

	$reg_no = mysqli_real_escape_string($conn, $_POST['reg_no']);
	$password = mysqli_real_escape_string($conn, $_POST['password']);

	$sql = "SELECT * FROM voters WHERE reg_no = '$reg_no' AND password = '$password'";

	$result = mysqli_query($conn,$sql);

	if(mysqli_num_rows($result)==1){

		$voter = mysqli_fetch_assoc($result);

		if($voter['has_voted']==1){
			echo "<script>
			alert('You have already voted.');
			window.location='voter_login.php';
			</script>";
			exit();
		}
		
			$_SESSION['voter_reg_no'] = $voter['reg_no'];
			$_SESSION['fullname'] = $voter['fullname'];
			header("Location:vote_ballot.php");
			exit();
		}else{
			echo "<script>
			alert('Invalid Registration number or Password');
			window.location='voter_login.php';
			</script>";
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
<title>voter login</title>
<style>
body{
font-family:Aerial, sans-serif;
}
label{
display:block;
margin-bottom:10px;
}
input{
width:100%
height:40px;
margin-bottom:20px;
padding:10px;
border:1px solid #ccc;
}
h3,h4,button{
width:100%
height:40px;
background-color:#4CAF50;
color:#fff;
padding:10px;
border:none;
border-radius:50px
cursor:pointer;
}
</style>
</head>

<body>
<div align="center">

<br><br>
<h2>UMOJA KING'ORI SECONDARY SCHOOL</h2>
<h3>STUDENTS ELECTION LIVE</h3>

<br><br>
<h4>VOTERS LOGIN FORM</h4>
<form action="voter_login.php" method="POST">
<input type="text" name="reg_no" placeholder="Enter Your Reg No" maxlength="15" required><br>
<input type="password" name="password" placeholder="Enter Your Secret PIN" required> <br>
<button type="submit" name="login" value="Login">Login</button>
</form>
</div>
</body>
</html>
