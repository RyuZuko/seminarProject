<?php

$conn=mysqli_connect("localhost","root","","seminar_project");

if(!$conn)
{
die("Connection failed: " . mysqli_connect_error());
}
$success=false;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>I Agency Seminar - Register New Seminar</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="assets/img/apple-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    <!-- Load Require CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font CSS -->
    <link href="assets/css/boxicon.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">
    <!-- Load Tempalte CSS -->
    <link rel="stylesheet" href="assets/css/templatemo.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/custom.css">
<!--
    
TemplateMo 561 Purple Buzz
https://templatemo.com/tm-561-purple-buzz
-->
</head>

<body>
    <!-- Header -->
    <nav id="main_nav" class="navbar navbar-expand-lg navbar-light bg-white shadow">
        <div class="container d-flex justify-content-between align-items-center">
            <a class="navbar-brand h1">
                <i class='bx bx-buildings bx-sm text-dark'></i>
                <span class="text-dark h4">I Agency</span> <span class="text-primary h4">Seminar</span>
            </a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-toggler-success" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- TODO: change the reference link -->
            <div class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-between" id="navbar-toggler-success">
                <div class="flex-fill mx-xl-5 mb-2">
                    <ul class="nav navbar-nav d-flex justify-content-between mx-xl-5 text-center text-dark">
                        <li class="nav-item">
                            <a class="nav-link btn-outline-primary rounded-pill px-3" href="work.php">Work</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn-outline-primary rounded-pill px-3" href="register-admin.php">Register Admin</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn-outline-primary rounded-pill px-3" href="remove-admin.php">Admin List</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn-outline-primary rounded-pill px-3" href="register-seminar.php">Register Seminar</a>
                        </li>
			<li class="nav-item">
                            <a class="nav-link btn-outline-primary rounded-pill px-3" href="remove-seminar.php">Seminar List</a>
                        </li>
                    </ul>
                </div>
		<div class="navbar align-self-center d-flex">
                	<a class="banner-button btn rounded-pill btn-outline-primary btn-lg px-4" href="index.php" role="button">Log Out</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- Close Header -->


    <!-- Start Banner Hero -->
    <section class="bg-light">
        <div class="container py-4">
            <div class="row align-items-center justify-content-between">
                <div class="contact-header col-lg-4">
                    <h1 class="h2 pb-3 text-primary">Register New Seminar Plan</h1>
                    <!-- <h3 class="h4 regular-400">Elit, sed do eiusmod tempor</h3> -->
                    <p class="light-300">
                        This page is for admin to add new seminar plan into the system.
                    </p>
                </div>
                <div class="contact-img col-lg-5 align-items-end col-md-4">
                    <img src="./assets/img/banner-img-01.svg">
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Hero -->


    <!-- Start Contact -->
    <section class="container py-5">

<?php

  if(isset($_POST['save']))
{
    $sql = "INSERT INTO seminar (name, date, time, venue)
    VALUES ('".$_POST["name"]."','".$_POST["date"]."','".$_POST["time"]."','".$_POST["venue"]."')";

    $result = mysqli_query($conn,$sql);
	$success = true;
}

?>
        <div class="row pb-4">
            <!-- Start Contact Form -->
            <div class="col-lg-12 ">
                <form class="contact-form row" method="post" action="register-seminar.php" role="form">

                    <div class="col-lg-8 mb-4">
                        <div class="form-floating">
                            <input type="text" class="form-control form-control-lg light-300" id="floatingname" name="name" placeholder="Seminar Name">
                            <label for="floatingname light-300">Seminar Name</label>
                        </div>
                    </div><!-- End Input Name -->

                    <div class="col-lg-8 mb-4">
                        <div class="form-floating">
                            <input type="date" class="form-control form-control-lg light-300" id="floatingemail" name="date" placeholder="Price">
                            <label for="floatingemail light-300">Date</label>
                        </div>
                    </div><!-- End Input Email -->

                    <div class="col-lg-8 mb-4">
                        <div class="form-floating mb-4">
                            <input type="time" class="form-control form-control-lg light-300" id="floatingsubject" name="time" placeholder="Subject">
                            <label for="floatingsubject light-300">Time</label>
                        </div>
                    </div><!-- End Input Subject -->

                    <div class="col-lg-8 mb-4">
                        <div class="form-floating mb-4">
                            <input type="text" class="form-control form-control-lg light-300" id="floatingsubject" name="venue" placeholder="Subject">
                            <label for="floatingsubject light-300">Venue</label>
                        </div>
                    </div><!-- End Textarea Message -->

                    <div class="col-md-12 col-12 m-auto text-end">
                        <button type="submit" name ="save" class="btn btn-secondary rounded-pill px-md-5 px-4 py-2 radius-0 text-light light-300">Register New Seminar</button>
                    </div>

                </form>
			<?php if($success){ ?>
   			<script> alert ("New seminar registered successfully!")</script>
 			<?php } ?>
            </div>
            <!-- End Contact Form -->


        </div>
    </section>
    <!-- End Contact -->

    <!-- Bootstrap -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <!-- Templatemo -->
    <script src="assets/js/templatemo.js"></script>
    <!-- Custom -->
    <script src="assets/js/custom.js"></script>

</body>

</html>