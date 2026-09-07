<?php
	include "db.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>www.ukss.ac.tz | Online Polling Station</title>
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
	
</head>

<body>
<h2 align="center"> UMOJA KING'ORI SECONDARY SCHOOL STUDENTS ELECTION</h2>


<form action="vote.php" method="POST">
<table border="1"spacing="10" cellpadding="10" align="center" width = "70%">


<tr align="center"><th colspan="5">Here are nominees to vote for</th></tr>
<tr align="center"><th colspan="5">HEAD PREFECTS</th></tr>

<tr align="center"><td colspan="5">1. HEAD BOY</td></tr>
<?php
	$sql = "SELECT candidates.id, candidates.position, candidates.votes, voters.fullname, voters.sex, voters.class_level 
	FROM candidates INNER JOIN voters ON 
	candidates.reg_no = voters.reg_no WHERE candidates.position = 'Head Boy'";
	$results = mysqli_query($conn, $sql);
	$headboy = [];
	while($row = mysqli_fetch_assoc($results)){
	$headboy[] = $row;
	}
?>
<tr>
<td>
	<?php if(isset($headboy[0])) { ?>

	<strong>Name:</strong> <?php echo $headboy[0]['fullname']; ?>      <br>
	<strong>Sex:</strong> <?php echo $headboy[0]['sex']; ?>            <br>
	<strong>Class Level:</strong> <?php echo $headboy[0]['class_level']; ?><br>
	<strong>Position:</strong> <?php echo $headboy[0]['position']; ?>      <br>
	<img src="<?php //echo $headboy[0]['Masaga.jpg']; ?>" width="70" height="80" align="center"><br>
	
	<input type="radio" name="headboy" value="<?php echo $headboy[0]['id']; ?>" required>
	<?php } ?>
</td>
	

<td><-------Leading-------></td>

<td>
	<?php if(isset($headboy[1])) { ?>
	<strong>Name:</strong> <?php echo $headboy[1]['fullname']; ?> <br>
	<strong>Sex:</strong> <?php echo $headboy[1]['sex']; ?>    <br>
	<strong>Class Level:</strong> <?php echo $headboy[1]['class_level']; ?><br>
	<strong>Position:</strong> <?php echo $headboy[1]['position']; ?><br>
	<img src="<?php //echo $headboy[0]['Masaga.jpg']; ?>" width="70" height="80" align="center"><br>

	<input type="radio" name="headboy" value="<?php echo $headboy[1]['id']; ?>" >
	<?php } ?>
</td>
</tr> 





<tr align="center"><td colspan="5">2. HEAD GIRL</td></tr>
<?php
	$sql = "SELECT candidates.id, candidates.position, candidates.votes, voters.fullname, voters.sex, voters.class_level 
	FROM candidates INNER JOIN voters ON 
	candidates.reg_no = voters.reg_no WHERE candidates.position = 'Head Girl'";
	$results = mysqli_query($conn, $sql);
	$headgirl = [];
	while($row = mysqli_fetch_assoc($results)){
	$headgirl[] = $row;
	}
?>
<tr>
<td>
	<?php if(isset($headgirl[0])) { ?>
	<strong>Name:</strong> <?php echo $headgirl[0]['fullname']; ?> <br>
	<strong>Sex:</strong> <?php echo $headgirl[0]['sex']; ?>    <br>
	<strong>Class Level:</strong> <?php echo $headgirl[0]['class_level']; ?><br>
	<strong>Position:</strong> <?php echo $headgirl[0]['position']; ?><br>
	<img src="Masaga.jpg" width="70" height="80" align="center"><br>

	<input type="radio" name="headgirl" value="<?php echo $headgirl[0]['id']; ?>" required>
	<?php } ?>
</td>
	

<td><-------Leading-------></td>

<td>
	<?php if(isset($headgirl[1])) { ?>
	<strong>Name:</strong> <?php echo $headgirl[1]['fullname']; ?> <br>
	<strong>Sex:</strong> <?php echo $headgirl[1]['sex']; ?>    <br>
	<strong>Class Level:</strong> <?php echo $headgirl[1]['class_level']; ?><br>
	<strong>Position:</strong> <?php echo $headgirl[1]['position']; ?><br>
	<img src="Masaga.jpg" width="70" height="80" align="center"> <br>

	<input type="radio" name="headgirl" value="<?php echo $headgirl[1]['id']; ?>" >
	<?php } ?>
</td>
</tr> 




<tr align="center"><td colspan="5">3. GENERAL SECRETARY (GS)</td></tr>
<?php
	$sql = "SELECT candidates.id, candidates.position, candidates.votes, voters.fullname, voters.sex, voters.class_level 
	FROM candidates INNER JOIN voters ON 
	candidates.reg_no = voters.reg_no WHERE candidates.position = 'GS'";
	$results = mysqli_query($conn, $sql);
	$gs = [];
	while($row = mysqli_fetch_assoc($results)){
	$gs[] = $row;
	}
?>
<tr>
<td>
	<?php if(isset($gs[0])) { ?>
	<strong>Name:</strong> <?php echo $gs[0]['fullname']; ?> <br>
	<strong>Sex:</strong> <?php echo $gs[0]['sex']; ?>    <br>
	<strong>Class Level:</strong> <?php echo $gs[0]['class_level']; ?><br>
	<strong>Position:</strong> <?php echo $gs[0]['position']; ?><br>
	<img src="Masaga.jpg" width="70" height="80" align="center"><br>

	<input type="radio" name="gs" value="<?php echo $gs[0]['id']; ?>" required>
	<?php } ?>
</td>
	

<td><-------Leading-------></td>

<td>
	<?php if(isset($gs[1])) { ?>
	<strong>Name:</strong> <?php echo $gs[1]['fullname']; ?> <br>
	<strong>Sex:</strong> <?php echo $gs[1]['sex']; ?>    <br>
	<strong>Class Level:</strong> <?php echo $gs[1]['class_level']; ?><br>
	<strong>Position:</strong> <?php echo $gs[1]['position']; ?><br>
	<img src="Masaga.jpg" width="70" height="80" align="center"> <br>

	<input type="radio" name="gs" value="<?php echo $gs[1]['id']; ?>" >
	<?php } ?>
</td>
</tr> 



<tr align="center"><th colspan="5">OTHER PREFECTS</th></tr>
<tr align="center"><td colspan="5">1. Academic Prefect</td></tr>
<?php
	$sql = "SELECT candidates.id, candidates.position, candidates.votes, voters.fullname, voters.sex, voters.class_level 
	FROM candidates INNER JOIN voters ON 
	candidates.reg_no = voters.reg_no WHERE candidates.position = 'Academic (Male)'";
	$results = mysqli_query($conn, $sql);
	$academic1 = [];
	while($row = mysqli_fetch_assoc($results)){
	$academic1[] = $row;
	}
?>
<tr>
<td>
	<?php if(isset($academic1[0])) { ?>
	<strong>Name:</strong> <?php echo $academic1[0]['fullname']; ?> <br>
	<strong>Sex:</strong> <?php echo $academic1[0]['sex']; ?>    <br>
	<strong>Class Level:</strong> <?php echo $academic1[0]['class_level']; ?><br>
	<strong>Position:</strong> <?php echo $academic1[0]['position']; ?><br>
	<img src="Masaga.jpg" width="70" height="80" align="center"><br>

	<input type="radio" name="academic1" value="<?php echo $academic1[0]['id']; ?>" required>
	<?php } ?>
</td>
	

<td><-------Leading-------></td>

<td>
	<?php if(isset($academic1[1])) { ?>
	<strong>Name:</strong> <?php echo $academic1[1]['fullname']; ?> <br>
	<strong>Sex:</strong> <?php echo $academic1[1]['sex']; ?>    <br>
	<strong>Class Level:</strong> <?php echo $academic1[1]['class_level']; ?><br>
	<strong>Position:</strong> <?php echo $academic1[1]['position']; ?><br>
	<img src="Masaga.jpg" width="70" height="80" align="center"> <br>

	<input type="radio" name="academic1" value="<?php echo $academic1[1]['id']; ?>" >
	<?php } ?>
</td>
</tr> 


<?php
	$sql = "SELECT candidates.id, candidates.position, candidates.votes, voters.fullname, voters.sex, voters.class_level 
	FROM candidates INNER JOIN voters ON 
	candidates.reg_no = voters.reg_no WHERE candidates.position = 'Academic (Female)'";
	$results = mysqli_query($conn, $sql);
	$academic2 = [];
	while($row = mysqli_fetch_assoc($results)){
	$academic2[] = $row;
	}
?>
<tr>
<td>
	<?php if(isset($academic2[0])) { ?>
	<strong>Name:</strong> <?php echo $academic2[0]['fullname']; ?> <br>
	<strong>Sex:</strong> <?php echo $academic2[0]['sex']; ?>    <br>
	<strong>Class Level:</strong> <?php echo $academic2[0]['class_level']; ?><br>
	<strong>Position:</strong> <?php echo $academic2[0]['position']; ?><br>
	<img src="Masaga.jpg" width="70" height="80" align="center"><br>

	<input type="radio" name="academic2" value="<?php echo $academic2[0]['id']; ?>" required>
	<?php } ?>
</td>
	

<td><-------Leading-------></td>

<td>
	<?php if(isset($academic2[1])) { ?>
	<strong>Name:</strong> <?php echo $academic2[1]['fullname']; ?> <br>
	<strong>Sex:</strong> <?php echo $academic2[1]['sex']; ?>    <br>
	<strong>Class Level:</strong> <?php echo $academic2[1]['class_level']; ?><br>
	<strong>Position:</strong> <?php echo $academic2[1]['position']; ?><br>
	<img src="Masaga.jpg" width="70" height="80" align="center"> <br>

	<input type="radio" name="academic2" value="<?php echo $academic2[1]['id']; ?>" >
	<?php } ?>
</td>
</tr> 


<tr align="center">
	<td colspan="5">
		<input type="submit" name="submit_vote" value="SUBMIT VOTE">
	</td>
</tr>

<tr align="center">
	<th colspan="5">
		<div id="datetime"></div>
		<style>
			#datetime{
				font-size: 20px;
				font-weight: bold;
				text-align: center;
			}
		</style>
		<script>
			function updateDateTime(){
				const now = new Date();

				document.getElementById("datetime").textContent = now.toLocaleDateString('en-TZ', {
					weekday: 'long',
					day: '2-digit',
					month: 'long',
					year: 'numeric'
				}) + "  -  Time " +
				now.toLocaleTimeString('sw-TZ',{
					hour:'2-digit',
					minute: '2-digit',
					second: '2-digit',
					hour12: false
				});
			}

			//Ionyeshe mara moja
			updateDateTime();
			//Update kila sekunde 1
			setInterval(updateDateTime,1000);
			
	    </script>	 
	</th>
</tr>
</table>


</form>
</body>
</html>