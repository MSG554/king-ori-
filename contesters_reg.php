<?php
include "db.php";


$ujumbe="";

if(isset($_POST['register_candidate'])){

$reg_no = $conn->real_escape_string(strtoupper($_POST['reg_no']));
$position= $conn->real_escape_string($_POST['position']);
$election_year= $conn->real_escape_string($_POST['election_year']);

$sql = "INSERT INTO candidates (reg_no,position,election_year) 
VALUES (\"$reg_no\",\"$position\",\"$election_year\")";

if($conn->query($sql)===TRUE){
	$ujumbe="<b style='color:green;'>Mgombea amesajiliwa!</b>";
}else{
	$ujumbe= "<b style='color:red;'>Problem detected: ".$conn->error."</b>";
}
}
$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
	<title>www.ukss.ac.tz | candidates registration</title>
	<style>
/* ===== GENERAL ===== */
* {
    box-sizing: border-box;
}

body {
    margin: 0;
    padding: 30px 15px;
    font-family: "Segoe UI", Arial, sans-serif;
    background: linear-gradient(135deg, #0f172a, #1e3a8a, #2563eb);
    min-height: 100vh;
    color: #1e293b;
}

/* ===== FORM CONTAINER ===== */
form {
    width: 100%;
    max-width: 650px;
    margin: 30px auto;
    background: rgba(255, 255, 255, 0.97);
    padding: 35px;
    border-radius: 20px;
    box-shadow: 0 20px 50px rgba(0, 0, 0, 0.30);
    border: 1px solid rgba(255,255,255,0.5);
}

/* ===== TITLE ===== */
h2,h3 {
    text-align: center;
    margin-top: 0;
    margin-bottom: 30px;
    color: #1d4ed8;
    font-size: 28px;
    font-weight: 700;
}

/* ===== LABELS ===== */
label {
    display: block;
    margin-top: 18px;
    margin-bottom: 8px;
    font-weight: 600;
    color: #334155;
    font-size: 15px;
    text-align: center;
}

/* ===== INPUTS & SELECT ===== */
input[type="text"],
input[type="number"],
select {
    width: 100%;
    padding: 14px 16px;
    border: 2px solid #e2e8f0;
    border-radius: 10px;
    background: #f8fafc;
    color: #0f172a;
    font-size: 15px;
    outline: none;
    transition: all 0.3s ease;
}

/* Focus effect */
input[type="text"]:focus,
input[type="number"]:focus,
select:focus {
    border-color: #2563eb;
    background: #ffffff;
    box-shadow: 0 0 0 4px rgba(37, 99, 235, 0.12);
}

/* Placeholder */
input::placeholder {
    color: #94a3b8;
    text-align: center;
}

/* ===== SELECT ===== */
select {
    cursor: pointer;
    text-align: center;
}

/* ===== SUBMIT BUTTON ===== */
input[type="submit"] {
    width: 100%;
    margin-top: 28px;
    padding: 15px;
    border: none;
    border-radius: 10px;
    background: linear-gradient(135deg, #2563eb, #1d4ed8);
    color: white;
    font-size: 16px;
    font-weight: 700;
    cursor: pointer;
    transition: all 0.3s ease;
    box-shadow: 0 8px 18px rgba(37, 99, 235, 0.30);
}

input[type="submit"]:hover {
    transform: translateY(-2px);
    background: linear-gradient(135deg, #1d4ed8, #1e40af);
    box-shadow: 0 12px 25px rgba(37, 99, 235, 0.40);
}

input[type="submit"]:active {
    transform: translateY(0);
}

/* ===== HORIZONTAL LINE ===== */
hr {
    border: none;
    border-top: 1px solid #e2e8f0;
    margin: 25px 0;
}

/* ===== MOBILE ===== */
@media (max-width: 600px) {

    body {
        padding: 15px 10px;
    }

    form {
        padding: 25px 20px;
        margin: 10px auto;
        border-radius: 15px;
    }

    h2 {
        font-size: 23px;
    }

    input[type="text"],
    input[type="number"],
    select {
        padding: 13px;
    }
}
</style>

</head>

<body>

<form action="contesters.php" method="POST" enctype="multipart/form-data">
	<h2>UMOJA KING'ORI SECONDARY SCHOOL</h2>
	<h3>Candidate Registration Form</h3>

	
	<label>Registration Number</label>
	<input type="text" name="reg_no" placeholder="S5631-0001-2023" maxlength="15" required>

	<label>Position</label>
	<select name="position" required>
		<option value=""><---Select Position---></option>
		<option value="Head Boy">Head Boy</option>
		<option value="Head Girl">Head Girl</option>
		<option value="GS">General Secretary</option>

		<option value="Academic (Male)">Academic Master</option>
		<option value="Academic (Female)">Academic Mistress</option>
		<option value="Discipline (Male)">Discipline Master</option>
		<option value="Discipline (Female)">Discipline Mistress</option>

		<option value="Food & Nutrition (Male)">Food & Nutrition Leader (Boy)</option>
		<option value="Food & Nutrition (Female)">Food & Nutrition Leader (Girl)</option>
		<option value="Environmental Leader (male)">Environmental Leader (Boy)</option>
		<option value="Environmental Leader (Female)">Environmental Leader (Girl)</option>

		<option value="Health Leader (Male)">Healthcare Prefect (Boy)</option>
		<option value="Health Leader (Feale)">Heathcare Prefect (Girl)</option>
		<option value="Sport & Games (Male)">Sport & Game Prefect (Boy)</option>
		<option value="Sports & Gmes (Female)">Sport & Game Prefect (Girl)</option>

		<option value="Time Keeper (Male)">Time Keeping Prefect (Boy)</option>
		<option value="Time Keeper (Female)">Time Keeping Prefect (Girl)</option>

		<option value="Guidance & Counceling (Male)">Sport & Game Prefect (Boy)</option>
		<option value="Guidance & Counceling (Female)">Sport & Game Prefect (Girl)</option>
		
    </select>

    <label>Election Year</label>
    <input type="number" name="election_year" placeholder="2020" min="2023" max="2100" required>
    
	<input type="submit" name="register_candidate" value="Register Candidate">

     	<br>
     	<marquee><?php echo $ujumbe; ?></marquee>

</form>
</body>
</html>