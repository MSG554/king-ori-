<?php
session_start();
include "db.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>www.ukss.ac.tz  | Home Page</title>

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
            gap: 60px;
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

        /* ==============================
           HERO
        ============================== */

        .hero {
            min-height: 100vh;
            padding: 190px 7% 100px;

            background:
                linear-gradient(
                    rgba(7, 31, 67, 0.88),
                    rgba(7, 31, 67, 0.88)
                ),
                url("images/hero.jpg");

            background-size: cover;
            background-position: center;

            display: flex;
            align-items: center;
        }

        .hero-content {
            max-width: 850px;
            color: white;
        }

        .hero-small {
            color: #f4c542;
            font-weight: bold;
            letter-spacing: 2px;
            margin-bottom: 15px;
            text-transform: uppercase;
        }

        .hero h1 {
            font-size: 58px;
            line-height: 1.15;
            margin-bottom: 25px;
        }

        .hero h1 span {
            color: #f4c542;
        }

        .hero p {
            font-size: 19px;
            max-width: 750px;
            margin-bottom: 35px;
            color: #eeeeee;
        }

        .hero-buttons {
            display: flex;
            gap: 15px;
            flex-wrap: wrap;
        }

        .btn {
            display: inline-block;
            padding: 13px 25px;
            border-radius: 5px;
            font-weight: bold;
            transition: 0.3s;
        }

        .btn-primary {
            background: #f4c542;
            color: #111;
        }

        .btn-primary:hover {
            transform: translateY(-3px);
        }

        .btn-outline {
            border: 2px solid white;
            color: white;
        }

        .btn-outline:hover {
            background: white;
            color: #0b3d91;
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

            <a href="#home">Home</a>

            <a href="#services">Administration</a>

            <a href="#projects">Academic Issues</a>

            <a href="#election">Election</a>

             <a href="#about">About Us</a>

            <a href="#contact">Contact Us</a>

        </nav>

    </div>

</header>



<!-- ==================================================
     HERO SECTION
================================================== -->

<section class="hero" id="home">

    <div class="hero-content">

        <div class="hero-small">
             Evidence • Insight • Impact
        </div>

        <p>
            Umoja King'ori Secondary School is the public school owned by the government located to about 15kms from Kibaoni Moshi-Arusha main tarmac road to northen part of King'ori ward to abot 3kms from King'ori.
        </p>


        <div class="hero-buttons">

                <a href="#services" class="btn btn-outline">
                Explore Our Services
            </a>

        </div>

    </div>

</section>






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
                    Monitoring & Evaluation
                </h3>

                <p>
                    We design and strengthen M&E systems that help
                    organizations track progress, measure performance,
                    identify challenges and improve results.
                </p>

            </div>


            <div class="service-card">

                <div class="service-number">02</div>

                <h3>
                    Baseline & Endline Studies
                </h3>

                <p>
                    We establish reliable benchmarks and measure changes
                    achieved through projects and programs.
                </p>

            </div>


            <div class="service-card">

                <div class="service-number">03</div>

                <h3>
                    Impact Evaluation
                </h3>

                <p>
                    We assess whether interventions are creating
                    meaningful and measurable changes for beneficiaries.
                </p>

            </div>


            <div class="service-card">

                <div class="service-number">04</div>

                <h3>
                    Research & Assessments
                </h3>

                <p>
                    We conduct research, needs assessments, feasibility
                    studies and organizational assessments.
                </p>

            </div>


            <div class="service-card">

                <div class="service-number">05</div>

                <h3>
                    Data Collection & Analysis
                </h3>

                <p>
                    We provide professional data collection,
                    management, statistical analysis and visualization.
                </p>

            </div>


            <div class="service-card">

                <div class="service-number">06</div>

                <h3>
                    Digital M&E Solutions
                </h3>

                <p>
                    We develop practical digital systems, dashboards
                    and tools for monitoring, reporting and decision-making.
                </p>

            </div>


            <div class="service-card">

                <div class="service-number">07</div>

                <h3>
                    Third-Party Monitoring
                </h3>

                <p>
                    We provide independent monitoring to assess
                    implementation progress, quality and results.
                </p>

            </div>


            <div class="service-card">

                <div class="service-number">08</div>

                <h3>
                    Training & Capacity Building
                </h3>

                <p>
                    We strengthen organizational capacity in M&E,
                    research, data management and evidence-based decisions.
                </p>

            </div>


            <div class="service-card">

                <div class="service-number">09</div>

                <h3>
                    Data Visualization & Dashboards
                </h3>

                <p>
                    We transform complex information into clear,
                    useful dashboards that support timely decisions.
                </p>

            </div>


            <div class="service-card">

                <div class="service-number">10</div>

                <h3>
                    Other Administrative Services
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
<form id="index" align="center">
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
         
 const indexForm = document.getElementById('index');
 indexForm.addEventListener('submit', (e) => {
   e.preventDefault();
             
   const username = document.getElementById('username').value;
   const password = document.getElementById('password').value;
                 
   const storedUsers = JSON.parse(localStorage.getItem('users'));

   const user = storedUsers.find(
     (user) => user.username === username && user.password === password
   );

   if (user) {
     // redirect instead of alert
     window.location.href = 'administrative-page.php';
   } else {
     alert('Please Contact System Administrator. Phone: 076963031;  E-Mail: atnasmasaga@gmail.com');
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
     PROJECTS
================================================== -->

<section class="projects" id="projects">

    <div class="container">

        <div class="section-heading">

            <span>Our Experience</span>

            <h2>
                Projects & Assignments
            </h2>

            <p>
                We are committed to delivering credible evidence,
                practical solutions and measurable results.
            </p>

        </div>


        <div class="project-grid">


            <div class="project-card">

                <h3>
                    Monitoring & Evaluation Systems
                </h3>

                <p>
                    Development of practical performance monitoring
                    frameworks, indicators, tools and reporting systems.
                </p>

                <span class="project-status">
                    M&E
                </span>

            </div>


            <div class="project-card">

                <h3>
                    Research & Data Studies
                </h3>

                <p>
                    Evidence generation through structured data
                    collection, analysis and interpretation.
                </p>

                <span class="project-status">
                    Research
                </span>

            </div>


            <div class="project-card">

                <h3>
                    Digital Performance Solutions
                </h3>

                <p>
                    Digital tools and dashboards designed to improve
                    organizational monitoring and reporting.
                </p>

                <span class="project-status">
                    Digital M&E
                </span>

            </div>

        </div>

    </div>

</section>



<!-- ==================================================
     CTA
================================================== -->

<section class="cta">

    <div class="container">

        <h2>
            School Songs
        </h2>

        <p>
            National Songs
        </p>

        <p>
            Graduational Songs
        </p>

    </div>

</section>


<!-- ==================================================
     WHY CHOOSE US
================================================== -->

<section class="why-us" id="why-us">

    <div class="container">

        <div class="section-heading">

            <span>Our Difference</span>

            <h2>Why Choose E-Election?</h2>

        


<!-- ==================================================
     ELECTION SECTION
================================================== -->

<section class="election" id="election">

    <div class="container">

        <div class="about-grid">

            <div class="about-image">
            </div>

            <div class="about-text">

                <div class="section-heading" style="text-align:left; margin-bottom:25px;">

                    <span>Why Choose Eelection?</span>
                      <p>
                        The School is delighted to provide to students free, fair and open election that will prepare future generations and leaders to be fair, transparent and accountable to the public instittions.
                      </p>

                    <h2>
                        Why E-election
                    </h2>

                </div>
                <dt>E-Election</dt>
                <dd>Is an online election conducted via the internet.</dd>
                <p>
                <ul type="circle">
                    <li>Fast</li>
                    <li>Reusable</li>
                    <li>Inexpensive</li>
                    <li>Error Free</li>
                    <li>Instantly results</li>
                    <li>No human involvement. At all about you and the device.</li>
                </ul>
            </p>

              
                 <h3>
                    Evidence That Supports Better Decisions
                </h3>

                <div class="values">

                    <div class="value-box">
                        <strong>Integrity</strong>
                    </div>

                    <div class="value-box">
                        <strong>Professionalism</strong>
                    </div>

                    <div class="value-box">
                        <strong>Evidence</strong>
                    </div>

                    <div class="value-box">
                        <strong>Innovation</strong>
                    </div>

                </div>

            </div>

        </div>

    </div>

</section>
 
<?php
include "db.php";

$result = $conn->query("SELECT * FROM candidates ORDER BY candidates.id ASC");

echo "<table border ='1' cellpadding='8' table align='center'>
<tr>
<th colspan='5'>UMOJA KING'ORI SECONDARY SCHOOL</th>
</tr>

<tr>
<th colspan='5'>Student Election Results</th>
</tr>
<tr>
<th colspan='5'><span class='live'><marquee><i>Live</i><b><font color='red'>LIVE</font></b></span><i>Live</i></marquee></th>
</tr>
<tr>
<th>Index</th>
<th>Reg No</th>


<th>Position</th>
<th>Total Votes</th>
<th>Election Year</th>
</tr>";

while($row = $result->fetch_assoc()){

    echo "<tr>
        <td>".$row['id']."</td>
    <td>".$row['reg_no']."</td>

    
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

        <a href="voting_results.php">Live Results</a>

        </p>





 <p>        
<?php
//session_start();
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

<br><br>
<h3>VOTERS LOGIN FORM</h3>
<form action="voter_login.php" method="POST">
<input type="text" name="reg_no" placeholder="Enter Your Reg No" maxlength="15" required>
<input type="password" name="password" placeholder="Enter Your Secret PIN" required> <br>
<button type="submit" name="login" value="Login">Login</button>
</form>
        </p>

        </div>


        <div class="why-grid">


            <div class="why-card">

                <h3>
                    Evidence Before Assumptions
                </h3>

                <p>
                    We prioritize reliable data and credible evidence
                    when developing recommendations and solutions.
                </p>

            </div>


            <div class="why-card">

                <h3>
                    Practical Solutions
                </h3>

                <p>
                    Our recommendations are designed to be realistic,
                    useful and applicable to real organizational challenges.
                </p>

            </div>


            <div class="why-card">

                <h3>
                    Technology & Innovation
                </h3>

                <p>
                    We use modern digital tools to improve data quality,
                    monitoring, reporting and decision-making.
                </p>

            </div>


            <div class="why-card">

                <h3>
                    Results Focused
                </h3>

                <p>
                    We focus on measurable outcomes and meaningful
                    improvements rather than activities alone.
                </p>

            </div>


            <div class="why-card">

                <h3>
                    Client-Centered
                </h3>

                <p>
                    We design our approach around the specific needs,
                    objectives and context of every client.
                </p>

            </div>


            <div class="why-card">

                <h3>
                    Professional Integrity
                </h3>

                <p>
                    We are committed to confidentiality, objectivity,
                    accountability and professional standards.
                </p>

            </div>

        </div>

    </div>

</section>







<!-- ==================================================
     ABOUT SECTION
================================================== -->

<section class="about" id="about">

    <div class="container">

        <div class="about-grid">

            <div class="about-image">
            </div>

            <div class="about-text">

                <div class="section-heading" style="text-align:left; margin-bottom:25px;">

                    <span>Who We Are</span>

                    <h2>
                        About Us
                    </h2>

                </div>

                <h3>
                    Evidence That Supports Better Decisions
                </h3>

                <p>
                    This is an online election page that prepare students to digital governance starting from election to assigned responsibilities.

                <p>
                    The election gives students their leaders of their choices since they vote and the results are obtained instantly after voting
                </p>

                <p>
                    The School is delighted to provide to students free, fair and open election that will prepare future generations and leaders to be fair, transparent and accountable to the public instittions.
                </p>

                <div class="values">

                    <div class="value-box">
                        <strong>Integrity</strong>
                    </div>

                    <div class="value-box">
                        <strong>Professionalism</strong>
                    </div>

                    <div class="value-box">
                        <strong>Evidence</strong>
                    </div>

                    <div class="value-box">
                        <strong>Innovation</strong>
                    </div>

                </div>

            </div>

        </div>

    </div>

</section>




<!-- ==================================================
     CONTACT
================================================== -->

<section class="contact" id="contact">

    <div class="container">

        <div class="contact-grid">


            <div class="contact-info">

                <span style="color:#b8860b; font-weight:bold;">
                    GET IN TOUCH
                </span>

                <h3>
                    Let's Discuss Your Project
                </h3>

                <p>
                    Tell us about your project, research,
                    evaluation or organizational challenge.
                </p>

                <p>
                    <strong>Email:</strong><br>
                    info@masagameconsulting.com
                </p>

                <p>
                    <strong>Phone:</strong><br>
                    +255 xxx xxx xxx
                </p>

                <p>
                    <strong>Location:</strong><br>
                    Tanzania
                </p>

            </div>


            <div class="contact-form">

                <form action="#" method="POST">

                    <input
                        type="text"
                        name="name"
                        placeholder="Full Name"
                        required
                    >

                    <input
                        type="text"
                        name="organization"
                        placeholder="Organization"
                    >

                    <input
                        type="email"
                        name="email"
                        placeholder="Email Address"
                        required
                    >

                    <input
                        type="tel"
                        name="phone"
                        placeholder="Phone Number"
                    >

                    <select name="service">

                        <option value="">
                            Select Service
                        </option>

                        <option>
                            Baseline & Endline Studies
                        </option>

                        <option>
                            Monitoring & Evaluation
                        </option>

                        <option>
                            Impact Evaluation
                        </option>

                        <option>
                            Research & Assessments
                        </option>

                        <option>
                            Data Collection & Analysis
                        </option>

                        <option>
                            Digital M&E Solutions
                        </option>

                        <option>
                            Training & Capacity Building
                        </option>

                        <option>
                            System Development
                        </option>

                    </select>

                    <textarea
                        name="message"
                        placeholder="Tell us about your project"
                        required
                    ></textarea>

                    <button
                        type="submit"
                        class="btn btn-primary"
                    >
                        Request a Proposal
                    </button>

                </form>

            </div>

        </div>

    </div>

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

            <a href="#home">Home</a>

            <a href="#about">About Us</a>

            <a href="#services">Services</a>

            <a href="#projects">Projects</a>

            <a href="#contact">Contact Us</a>

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
