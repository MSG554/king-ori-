
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>www.ukss.ac.tz  | Administartive Page</title>

    <meta name="description"
          content="Masaga M&E Consulting Firm provides professional Monitoring, Evaluation, Research, Data and Digital Solutions.">

    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
            scroll-padding-top: 110px;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            line-height: 1.6;
            color: #1b263b;
            background: #ffffff;
        }

        a {
            text-decoration: none;
        }

        /* ==============================
           HEADER
        ============================== */

        header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            background: rgba(255,255,255,0.97);
            box-shadow: 0 3px 15px rgba(0,0,0,0.08);
            z-index: 9999;
        }

        .header-top {
            max-width: 1250px;
            margin: auto;
            padding: 14px 25px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }


         .logo-area {
            text-align: center;
        }

        .logo-area h2 {
            font-size: 36px;
            color: #0b3d91;
            margin: 0;
        }

        .logo-area span {
            display: block;
            text-align: center;
            font-size: 14px;
            color: #777;
            letter-spacing: 5px;
        }

        .slogan {
            font-size: 16px;
            font-weight: bold;
            color: #b8860b;
            text-align: center;
        }


        /* ==============================
           NAVIGATION
        ============================== */

        .navigation {
            border-top: 1px solid #eeeeee;
            background-color: silver;
        }

        nav {
            max-width: 1250px;
            margin: auto;
            padding: 12px 25px;
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 32px;
        }

        nav a {
            color: #1b263b;
            font-size: 14px;
            font-weight: bold;
            position: relative;
        }

        nav a::after {
            content: "";
            position: absolute;
            left: 0;
            bottom: -6px;
            width: 0;
            height: 2px;
            background: #0b3d91;
            transition: 0.3s;
        }

        nav a:hover::after {
            width: 100%;
        }

        nav a:hover {
            color: #0b3d91;
        }

        .nav-button {
            background: #0b3d91;
            color: white !important;
            padding: 9px 18px;
            border-radius: 5px;
        }

        .nav-button::after {
            display: none;
        }
 .logo-area {
            text-align: center;
        }

        .logo-area h2 {
            font-size: 36px;
            color: #0b3d91;
            margin: 0;
        }

        .logo-area span {
            display: block;
            text-align: center;
            font-size: 14px;
            color: #777;
            letter-spacing: 5px;
        }

        .slogan {
            font-size: 16px;
            font-weight: bold;
            color: #b8860b;
            text-align: center;
        }

        /* ==============================
           GENERAL SECTION
        ============================== */

        section {
            padding: 90px 7%;
        }

        .container {
            max-width: 1200px;
            margin: auto;
        }

        .section-heading {
            text-align: center;
            margin-bottom: 50px;
        }

        .section-heading span {
            color: #b8860b;
            font-size: 13px;
            font-weight: bold;
            letter-spacing: 2px;
            text-transform: uppercase;
        }

        .section-heading h2 {
            font-size: 38px;
            margin: 10px 0 15px;
            color: #0b3d91;
        }

        .section-heading p {
            max-width: 750px;
            margin: auto;
            color: #666;
        }

        /* ==============================
           ABOUT
        ============================== */

        .about {
            background: white;
        }

        .about-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
            align-items: center;
        }

        .about-image {
            min-height: 400px;

            background:
                linear-gradient(
                    rgba(11,61,145,0.2),
                    rgba(11,61,145,0.2)
                ),
                url("images/about.jpg");

            background-size: cover;
            background-position: center;
            border-radius: 10px;
        }

        .about-text h3 {
            font-size: 30px;
            margin-bottom: 20px;
            color: #0b3d91;
        }

        .about-text p {
            color: #555;
            margin-bottom: 18px;
        }

        .values {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 15px;
            margin-top: 25px;
        }

        .value-box {
            padding: 15px;
            background: #f5f7fa;
            border-left: 4px solid #b8860b;
        }

        .value-box strong {
            color: #0b3d91;
        }

        /* ==============================
           SERVICES
        ============================== */

        .services {
            background: #f5f7fa;
        }

        .services-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 25px;
        }

        .service-card {
            background: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.06);
            transition: 0.3s;
            border-top: 4px solid transparent;
        }

        .service-card:hover {
            transform: translateY(-7px);
            border-top: 4px solid #b8860b;
        }

        .service-number {
            font-size: 14px;
            font-weight: bold;
            color: #b8860b;
            margin-bottom: 15px;
        }

        .service-card h3 {
            color: #0b3d91;
            margin-bottom: 12px;
        }

        .service-card p {
            color: #666;
            font-size: 15px;
        }

        /* ==============================
           STATISTICS
        ============================== */

        .stats {
            background: #0b3d91;
            color: white;
        }

        .stats-grid {
            max-width: 1100px;
            margin: auto;
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            text-align: center;
            gap: 30px;
        }

        .stat h2 {
            font-size: 42px;
            color: #f4c542;
        }

        .stat p {
            font-size: 14px;
        }

        /* ==============================
           WHY US
        ============================== */

        .why-us {
            background: white;
        }

        .why-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 25px;
        }

        .why-card {
            padding: 30px;
            border: 1px solid #eeeeee;
            border-radius: 8px;
        }

        .why-card h3 {
            color: #0b3d91;
            margin-bottom: 10px;
        }

        .why-card p {
            color: #666;
        }

        /* ==============================
           PROJECTS
        ============================== */

        .projects {
            background: #f5f7fa;
        }

        .project-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 25px;
        }

        .project-card {
            background: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.05);
        }

        .project-card h3 {
            color: #0b3d91;
            margin-bottom: 12px;
        }

        .project-card p {
            color: #666;
        }

        .project-status {
            display: inline-block;
            margin-top: 15px;
            padding: 5px 12px;
            background: #e9f2ff;
            color: #0b3d91;
            border-radius: 20px;
            font-size: 12px;
            font-weight: bold;
        }

        /* ==============================
           CTA
        ============================== */

        .cta {
            background:
                linear-gradient(
                    rgba(11,61,145,0.95),
                    rgba(11,61,145,0.95)
                );
            text-align: center;
            color: white;
        }

        .cta h2 {
            font-size: 40px;
            margin-bottom: 15px;
        }

        .cta p {
            max-width: 700px;
            margin: 0 auto 30px;
            color: #eeeeee;
        }

        /* ==============================
           CONTACT
        ============================== */

        .contact {
            background: white;
        }

        .contact-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 50px;
        }

        .contact-info h3 {
            color: #0b3d91;
            font-size: 28px;
            margin-bottom: 20px;
        }

        .contact-info p {
            color: #666;
            margin-bottom: 15px;
        }

        .contact-form input,
        .contact-form textarea,
        .contact-form select {
            width: 100%;
            padding: 13px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-family: inherit;
        }

        .contact-form textarea {
            height: 140px;
            resize: vertical;
        }

        .contact-form button {
            border: none;
            cursor: pointer;
            font-size: 15px;
        }

        /* ==============================
           FOOTER
        ============================== */

        footer {
            background: #071f43;
            color: white;
            padding: 50px 7% 25px;
        }

        .footer-grid {
            max-width: 1200px;
            margin: auto;
            display: grid;
            grid-template-columns: 2fr 1fr 1fr;
            gap: 50px;
        }

        footer h3 {
            margin-bottom: 15px;
        }

        footer p,
        footer a {
            color: #cbd5e1;
            font-size: 14px;
        }

        footer a {
            display: block;
            margin-bottom: 8px;
        }

        .footer-bottom {
            max-width: 1200px;
            margin: 40px auto 0;
            padding-top: 20px;
            border-top: 1px solid rgba(255,255,255,0.15);
            text-align: center;
        }

        /* ==============================
           MOBILE
        ============================== */

        @media (max-width: 900px) {

            .header-top {
                flex-direction: column;
                text-align: center;
                gap: 5px;
            }

            nav {
                overflow-x: auto;
                justify-content: flex-start;
                white-space: nowrap;
                gap: 22px;
            }

            .hero {
                padding-top: 220px;
            }

            .hero h1 {
                font-size: 42px;
            }

            .about-grid,
            .contact-grid {
                grid-template-columns: 1fr;
            }

            .services-grid,
            .why-grid,
            .project-grid {
                grid-template-columns: 1fr 1fr;
            }

            .stats-grid {
                grid-template-columns: 1fr 1fr;
            }

            .footer-grid {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 600px) {

            .logo-area h2 {
                font-size: 19px;
            }

            .slogan {
                font-size: 11px;
            }

            .hero {
                padding-left: 6%;
                padding-right: 6%;
            }

            .hero h1 {
                font-size: 34px;
            }

            .hero p {
                font-size: 16px;
            }

            section {
                padding: 70px 6%;
            }

            .section-heading h2 {
                font-size: 30px;
            }

            .services-grid,
            .why-grid,
            .project-grid,
            .stats-grid {
                grid-template-columns: 1fr;
            }

            .values {
                grid-template-columns: 1fr;
            }

            .btn {
                width: 100%;
                text-align: center;
                margin-bottom: 10px;
            }
        }

    </style>
</head>

<body>


<!-- ==================================================
     HEADER
================================================== -->

<header>

    <div class="header-top">
           <img src="uhuru na umoja.png" width="120" height="120">
        
        <div class="logo-area">     

            <h2>UMOJA KING'ORI SECONDARY SCHOOL</h2>
                <span>
                     P • O • BOX 17075 • ARUSHA
               </span>
               
        <div class="slogan">
            Enter to Learn, Leave to Serve
        </div>    

         
        </div>

        
        <img src="school logo.png" width="120" height="120">

    </div>


    <div class="navigation">

        <nav>

            <a href="index.php">Home</a>

            <a href="#services">Services</a>

            <a href="#registration">Registration</a>

            <a href="#students">Students</a>

            <a href="#subjects">Subjects</a>

            <a href="#fees">Fees</a>

            <a href="#contributions">Contributions</a>

            <a href="#voters">Voters</a>

            <a href="#contesters">Candidates</a>

            <a href="#examinations">Examinations</a>

            <a href="#results">Results</a>

            <a href="#contact">Warning</a>

        </nav>

    </div>

</header>



<!-- ==================================================
     SERVICES
================================================== -->

<section class="services" id="services">

    <div class="container">

        <div class="section-heading">

            <span>What We Do</span>

            <h2>Our Professional Services</h2>

            <p>
                Integrated consulting solutions designed to help
                organizations measure performance, understand results,
                and improve impact.
            </p>

        </div>


        <div class="services-grid">


            <div class="service-card">

                <div class="service-number">01</div>

                <h3>
                    Student Registration
                </h3>

                <p>
                    We register students who are joining our school for the first time, wether by being admitted directly at our school or being transferred from other schools.
                </p>

            </div>


            <div class="service-card">

                <div class="service-number">02</div>

                <h3>
                    Continuing Students
                </h3>

                <p>
                    We update students who are still studying at our school.
                </p>

            </div>


            <div class="service-card">

                <div class="service-number">03</div>

                <h3>
                    Subjects Registration
                </h3>

                <p>
                    We register subjects that are taught at our school.
                </p>

            </div>


            <div class="service-card">

                <div class="service-number">04</div>

                <h3>
                    Fee Payment
                </h3>

                <p>
                    We record students fees paid.
                </p>

            </div>


            <div class="service-card">

                <div class="service-number">05</div>

                <h3>
                    Other Contributions
                </h3>

                <p>
                    We record other payments and contributions a student owe to pay.
                </p>

            </div>


            <div class="service-card">

                <div class="service-number">06</div>

                <h3>
                    Voters Registration
                </h3>

                <p>
                    We register voters who will participate in the comming school election.
                </p>

            </div>


            <div class="service-card">

                <div class="service-number">07</div>

                <h3>
                    Candidates Registration
                </h3>

                <p>
                    We register contesters who want to run for students election positions in the upcoming election.
                </p>

            </div>



            <div class="service-card">

                <div class="service-number">07</div>

                <h3>
                    Examination Record
                </h3>

                <p>
                    We record student academic progress through tests, examination and behavioural scores.
                </p>

            </div>




            <div class="service-card">

                <div class="service-number">10</div>

                <h3>
                    Examinations Results for Official Use Only
                </h3>

                <p>
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
button{
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
<form id="academiclogin" align="center">
<br><br>
<input type="text" id="username" name="username" placeholder="Username" required>
<input type="password" id="password" name="password"placeholder="Password"required> <br>
<button type="submit">Login</button>
</form>
    
     <script>    
 const users = [
   {username: 'Azory', password: 'a1'},
   {username: 'Imma', password: 'i1'},
   {username: 'admin1', password: 'admin1'}
 ];
 localStorage.setItem('users', JSON.stringify(users));
         
 const academicForm = document.getElementById('academiclogin');
 academicForm.addEventListener('submit', (e) => {
   e.preventDefault();
             
   const username = document.getElementById('username').value;
   const password = document.getElementById('password').value;
                 
   const storedUsers = JSON.parse(localStorage.getItem('users'));

   const user = storedUsers.find(
     (user) => user.username === username && user.password === password
   );

   if (user) {
     // redirect instead of alert
     window.location.href = 'registration-page.html';
   } else {
     alert('Please Contact System Administrator');
   }
 });
</script>
                </p>

            </div>

        </div>

    </div>

</section>



<!-- ==================================================
     STATISTICS
================================================== -->

<section class="stats">

    <div class="stats-grid">

        <div class="stat">

            <h2>01</h2>

            <p>
                Evidence-Driven Approach
            </p>

        </div>


        <div class="stat">

            <h2>09+</h2>

            <p>
                Consulting Service Areas
            </p>

        </div>


        <div class="stat">

            <h2>360°</h2>

            <p>
                Integrated Perspective
            </p>

        </div>


        <div class="stat">

            <h2>100%</h2>

            <p>
                Commitment to Quality
            </p>

        </div>

    </div>

</section>



<!-- ==================================================
     REGISTRATION
================================================== -->

<section class="registration" id="registration">

<div align="center">
<?php
include "db.php";

$ujumbe="";

if(isset($_POST['register_student'])){
$reg_no= $conn->real_escape_string(strtoupper($_POST['reg_no']));
$fullname= $conn->real_escape_string(strtoupper($_POST['fullname']));
$sex= $conn->real_escape_string(strtoupper($_POST['sex']));
$date_of_birth= $conn->real_escape_string(strtoupper($_POST['date_of_birth']));
$region_of_birth= $conn->real_escape_string(strtoupper($_POST['region_of_birth']));
$phone= $conn->real_escape_string(strtoupper($_POST['phone']));
$email= $conn->real_escape_string($_POST['email']);
$previous_school= $conn->real_escape_string(strtoupper($_POST['previous_school']));
$previous_school_region= $conn->real_escape_string(strtoupper($_POST['previous_school_region']));
$status= $conn->real_escape_string(strtoupper($_POST['status']));

$sql = "INSERT INTO master_table 
(reg_no,fullname,sex,date_of_birth,region_of_birth,phone,email,previous_school,previous_school_region,status,registered_date) VALUES 
(\"$reg_no\",\"$fullname\",\"$sex\",\"$date_of_birth\",\"$region_of_birth\",\"$phone\",\"$email\",\"$previous_school\",\"$previous_school_region\",\"$status\",NOW())";

if($conn->query($sql)===TRUE){
    echo "<h2>Student Registration Table</h2>";
}else{
    echo "Error: ".$conn->error;
}
}
$conn->close();
?>


<style>
    table{
        width:30%;
    }
    tr{
        height:55px;
    }
    td{
        padding:10px;
    }
    input, select{
        width: 100%;
        height: 40px;
        font-size:16px;
        box-sizing: border-box;
        text-align: center;
    }
</style>    
<h2>UMOJA KING'ORI SECONDARY SCHOOL</h2>
<h3>Students Registration Form</h3>
<form action="administrative-page.php" method="POST">
<table border="0" cellpadding="5">
<tr align="center">
    <td>Registration Number<br><input type="text" name="reg_no" placeholder="Example: S5631-0001-2025" maxlength="15" required></td>
</tr>
<tr align="center">
    <td>Student Name<br><input type="text" name="fullname" placeholder="Enter Your Full Name" maxlength="100" required></td>
</tr>
<tr align="center">
    <td>Sex<br>
        <select name="sex" required>
            <option value=""><---Choose Your Sex---></option>
            <option value="M">Male</option>
            <option value="F">Female</option>
        </select>
</tr>
<tr align="center">
    <td>Date of Birth<br><input type="date" name="date_of_birth" placeholder="Enter Your Date" maxlength="100" required></td>
</tr>
<tr align="center">
    <td>Region of Birth<br>
        <select name="region_of_birth" required>
            <option value=""><---Choose Your Region---></option>
            <option value="ARUSHAM">Arusha</option>
            <option value="MWANZA">Mwanza</option>
        </select>
</tr>
<tr align="center">
    <td>Phone<br><input type="text" name="phone" placeholder="Enter Your Phone Number" maxlength="100" required></td>
</tr>
<tr align="center">
    <td>Email<br><input type="email" name="email" placeholder="Enter Your Email" maxlength="100" required></td>
</tr>
<tr align="center">
    <td>Previous School<br><input type="text" name="previous_school" placeholder="Enter Your Previous School" maxlength="100" required></td>
</tr>
<tr align="center">
    <td>Previous School Region<br>
        <select name="previous_school_region" required>
            <option value=""><---Choose Your Region---></option>
            <option value="ARUSHAM">Arusha</option>
            <option value="MWANZA">Mwanza</option>
        </select>
</tr>
<tr align="center">
<td>Status<br>
        <select name="status" required>
            <option value=""><---Choose Your Region---></option>
            <option value="FIRST ADMITTED">First Admitted</option>
            <option value="TRANSFERRED">Transferred</option>
        </select>
</tr>

<tr align="center">
<td><input type="submit" name="register_student" value="Register Student"></td></tr>
</table>
</form>
 </form>
</div>

</section>





<!-- ==================================================
     CONTINUING STUDENTS
================================================== -->
<section class="students" id="students">
<div align="center">

<?php
include "db.php";

$ujumbe="";

if(isset($_POST['update'])){
$reg_no= $conn->real_escape_string(strtoupper($_POST['reg_no']));
$class_level= $conn->real_escape_string(strtoupper($_POST['class_level']));
$academic_year= $conn->real_escape_string(strtoupper($_POST['academic_year']));
$status= $conn->real_escape_string(strtoupper($_POST['status']));

$sql = "INSERT INTO students 
(reg_no, class_level, academic_year, status, updated_at) VALUES 
(\"$reg_no\",\"$class_level\",\"$academic_year\",\"$status\",NOW())";

if($conn->query($sql)===TRUE){
    echo "<h2>Student Registration Table</h2>";
}else{
    echo "Error: ".$conn->error;
}
}
$conn->close();
?>



<style>
    table{
        width:30%;
    }
    tr{
        height:55px;
    }
    td{
        padding:10px;
    }
    input, select{
        width: 100%;
        height: 40px;
        font-size:16px;
        box-sizing: border-box;
        text-align: center;
    }
</style>    

<h2 align="center">UMOJA KING'ORI SECONDARY SCHOOL</h2>
<h3 align="center">Update Continuing Students</h3>

<form action="" method="POST">
<table align="center" border="0" cellpadding="5">
<tr align="center">
    <td>Registration Number<br><input type="text" name="reg_no" placeholder="Example: S5631-0001-2025" maxlength="15" required></td>
</tr>

<tr align="center">
    <td>Education Level<br>
        <select name="class_level" required>
            <option value=""><---Choose Your Level of Education---></option>
            <option value="FORM I">Form I</option>
            <option value="FORM II">Form II</option>
            <option value="FORM III">Form III</option>
            <option value="FORM IV">Form IV</option>
        </select>
</tr>
<tr align="center">
    <td>Academic Year<br><input type="number" name="academic_year" placeholder="Year of Study" maxlength="4" required></td>
</tr>
<tr align="center">
<td>Status<br>
        <select name="status" required>
            <option value=""><---Choose Your Region---></option>
            <option value="ACTIVE">Active</option>
            <option value="INACTIVE">Inactive</option>
        </select>

<tr align="center">
<td><input type="submit" name="update" value="Update Student"></td></tr>
</table>
</form>
</div>
</section>





<!-- ==================================================
     SUBJECTS
================================================== -->
<section class="subjects" id="subjects">
    
    <div align="center">
    <?php
include "db.php";


if(isset($_POST['save'])){
$subject_code= $conn->real_escape_string(strtoupper($_POST['subject_code']));
$subject_name= $conn->real_escape_string(strtoupper($_POST['subject_name']));
$units= $conn->real_escape_string(strtoupper($_POST['units']));

$check = mysqli_query($conn, "SELECT * FROM subjects WHERE subject_code = '$subject_code' ");

if(mysqli_num_rows($check) > 0){
    echo "<h2>Subject already exists.</h2>";
}else{
    $sql = "INSERT INTO subjects (subject_code, subject_name, units) VALUES 
('$subject_code', '$subject_name', '$units')";

if (mysqli_query($conn,$sql)) {
    echo "<h2>Subject registered successflly.</h2>";
}else{
    echo "Error: ".mysqli_errror($conn);
    }
  }
}
?>


<!DOCTYPE html>
<html align="center">
<head>
<title>subject registration</title>
<style>
    table{
        width:30%;
    }
    tr{
        height:55px;
    }
    td{
        padding:10px;
    }
    input, select{
        width: 100%;
        height: 40px;
        font-size:16px;
        box-sizing: border-box;
        text-align: center;
    }
</style>    
</head>

<body>
<h2 align="center">UMOJA KING'ORI SECONDARY SCHOOL</h2>
<h3 align="center">Register School Subjects</h3>

<form action="subjects.php" method="POST">

<table align="center" border="0" cellpadding="5">

<tr align="center">
    <td>Subject Code<br><input type="text" name="subject_code" placeholder="Enter Subject Code" maxlength="5" required></td>
</tr>

<tr align="center">
    <td>Subject Name<br><input type="text" name="subject_name" placeholder="Enter Subject Name" maxlength="50" required></td>
</tr>

<tr align="center">
    <td>Subject Name<br><input type="number" name="units" placeholder="Enter Subject Units" maxlength="2" required></td>
</tr>

<tr align="center">
<td><input type="submit" name="save" value="Save Subjects"></td></tr>
</table>
</form>
        
    </div>
</section>




<!-- ==================================================
     FEES
================================================== -->
<section class="fees" id="fees">
    </section>




<!-- ==================================================
     CONTRIBUTION
================================================== -->
<section class="contributions" id="contributions">
    </section>





<!-- ==================================================
     VOTERS
================================================== -->
<section class="voters" id="voters">
    <div align="center">

<?php

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
<tr align="center"> <td>Class Level:<br>
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
        
    </div>
    </section>





<!-- ==================================================
     CONTESTERS
================================================== -->
<section class="contesters" id="contesters">
    <div align="center">

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
    background: linear-gradient(135deg, #ffffff, #f8f9fa);
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
    height: 60px;
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
    opacity: 1;
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

<form action=" " method="POST" enctype="multipart/form-data">
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
    <input type="number" name="election_year" placeholder="2020" min="2020" max="2100" required>
    
    <input type="submit" name="register_candidate" value="Register Candidate">

        <br>
        <marquee><?php echo $ujumbe; ?></marquee>

</form>
</body>
</html>


        
    </div>
</section>



<!-- ==================================================
     EXAMINATIONS
================================================== -->
<section class="examinations" id="examinations">
    </section>



<!-- ==================================================
     RESULTS
================================================== -->
<section class="results" id="results">
    </section>



<!-- ==================================================
     WARNING
================================================== -->
<section class="warning" id="warning">
    </section>



<!-- ==================================================
     FOOTER
================================================== -->

<footer>

    <div class="footer-grid">


        <div>

            <h3>
                Masaga M&E Consulting Firm
            </h3>

            <p>
                We Value Data, We Care About Impact.
            </p>

            <br>

            <p>
                Professional Monitoring, Evaluation,
                Research, Data and Digital Solutions.
            </p>

        </div>


        <div>

            <h3>
                Quick Links
            </h3>

            <a href="#services">Services</a>

            <a href="#students">Students</a>

            <a href="#fees">Fees</a>

            <a href="#voters">Voters</a>

            <a href="#contesters">Contesters</a>

        </div>


        <div>

            <h3>
                Services
            </h3>

            <a href="#services">
                Monitoring & Evaluation
            </a>

            <a href="#services">
                Research
            </a>

            <a href="#services">
                Data Analysis
            </a>

            <a href="#services">
                Digital M&E
            </a>

        </div>

    </div>


    <div class="footer-bottom">

        <p>
            © 2026 Masaga M&E Consulting Firm.
            All Rights Reserved.
        </p>

    </div>

</footer>


</body>
</html>
