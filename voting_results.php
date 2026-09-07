<?php
session_start();
include "db.php";

$result = $conn->query("
	SELECT
	candidates.id,
	candidates.reg_no,
	voters.fullname,
	candidates.position,
	candidates.votes,
	candidates.election_year
	FROM candidates INNER JOIN voters
	ON candidates.reg_no = voters.reg_no
	 ORDER BY candidates.id ASC
	 ");

echo "<table border ='1' cellpadding='8' table align='center'>
<tr>
<th colspan='6'>UMOJA KING'ORI SECONDARY SCHOOL</th>
</tr>

<tr>
<th colspan='6'>Student Election Results</th>
</tr>
<tr>
<th colspan='6'><span class='live'><marquee><i>Live</i><b><font color='red'>LIVE</font></b></span><i>Live</i></marquee></th>
</tr>
<tr>
<th>Index</th>
<th>Reg No</th>
<th>Name</th>


<th>Position</th>
<th>Total Votes</th>
<th>Election Year</th>
</tr>";

while($row = $result->fetch_assoc()){

	echo "<tr>
        <td>".$row['id']."</td>
	<td>".$row['reg_no']."</td>
	<td>".$row['fullname']."</td>

	
	<td>".$row['position']."</td>
	<td>".$row['votes']."</td>
	<td>".$row['election_year']."</td>
	</tr>";
}

	echo "</table>";
?>

<style>
		
		body{
			background: #eef3f8;
			font-family: Arial, sans-serif;
		}
		table{
			width: 80%;
			margin: auto;
			border-collapse: collapse;
			background: #fff;
			box-shadow: 0 0 20px 30px rgba(0,0,0,.2);
		}
		th{
			background: #003366;
			color: white;
			padding: 12px;
		}
		td{
			padding: 10px;
			text-align: center;
			border-bottom: 1px solid #ddd;
		}
		tr:nth-child(even){
			background: #f5f5f5;
		}
		tr:hover{
			background: #d6ecff;
			transition: 3s;
		}
		.live{
			color: blue;
			font-weight: bold;
			animation: libeBlink 1s infinite;
		}
		@keyframes liveBlink{
			0%{
				opacity: 1;
				text-shadow: 0 0 5px red;
			}
			50%{
				opacity: 0;
			}
			100%{
				opacity: 1;
				text-shadow: 0 0 15px red;
			}
		}
	</style>
	<script>
		setTimeout(function(){
			location.reload();
		},180000); //Baada ya dakika 3 =180000milliseconds)
	</script>
	<div style="text-align: center; margin: 15px;">
		Refreshing in <span id='timer'>180</span> seconds</div>
		<script>
			let time = 180;
			setInterval(function(){
				time--;
				document.getElementById('timer').innerHTML=time;
				if(time<=0){
					location.reload();
				}
			},1000);
		</script>

		