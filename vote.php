<?php
session_start();
include "db.php";

$reg_no = $_SESSION['voter_reg_no'];

if(empty($reg_no)){
	die("Haujasajiliwa. Wasiliana na mtoa huduma wetu.");
} else {
	echo "Your Registration Number is: ".$reg_no;
}

	//Hakikisha mgombea amechagliwa
	if(isset($_POST['submit_vote'])){

$reg_no = mysqli_escape_string($conn, $reg_no);

//Head Boy
	if(!empty($_POST['headboy'])){
		$candidate_id = $conn->real_escape_string($_POST['headboy']);
	    $position = "Head Boy";
	    $election_year = date("Y");


	//Hifadhi data za mpiga kura
	$ingiza = mysqli_query($conn,
		"INSERT INTO votes (voter_reg_no, candidate_id, position, election_year, vote_date)
	VALUES('$reg_no','$candidate_id','$position','$election_year', NOW())");

	
if(!$ingiza){
	die(" MISTAKE NOTICE: " . mysqli_error($conn));
}
	
//Ongeza kura kwa candidate
	mysqli_query($conn, "UPDATE candidates SET votes = votes + 1 WHERE id = '$candidate_id' ");

	}


	//Head Girl
	if(!empty($_POST['headgirl'])){
		$candidate_id = $conn->real_escape_string($_POST['headgirl']);
	    $position = "Head Girl";
	    $election_year = date("Y");


	//Hifadhi data za mpiga kura
	$ingiza = mysqli_query($conn,
		"INSERT INTO votes (voter_reg_no, candidate_id, position, election_year, vote_date)
	VALUES('$reg_no','$candidate_id','$position','$election_year', NOW())");

	
if(!$ingiza){
	die(" MISTAKE NOTICE: " . mysqli_error($conn));
}
	
//Ongeza kura kwa candidate
	mysqli_query($conn, "UPDATE candidates SET votes = votes + 1 WHERE id = '$candidate_id' ");

	}


session_unset();
session_destroy();
echo "<script>
alert('Your vote has been submitted and counted. Thank You for voting.');
window.location.href = 'voter_login.php';
</script>";
exit();
}
?>