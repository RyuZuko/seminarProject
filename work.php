<!DOCTYPE html>
<html lang="en">

<head>
    <title>I Agency Seminar - Admin Page</title>
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
    <link rel="stylesheet" type="text/css" href="new.css">
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
    <div id="work_banner" class="banner-wrapper bg-light w-100 py-5">
        <div
            class="banner-vertical-center-work container text-light d-flex justify-content-center align-items-center py-5 p-0">
            <div class="banner-content col-lg-8 col-12 m-lg-auto text-center">
                <h1 class="banner-heading h2 display-3 pb-5 semi-bold-600 typo-space-line-center">Admin Page</h1>
                <h3 class="h4 pb-2 regular-400">Welcome to the Admin page for I Agency Seminar.</h3><br>
                <p class="banner-body pb-2 light-300">
                    If you are not an admin please sign out.
                </p><br>
                <a href="register-admin.php">
                    <button type="submit" class="btn rounded-pill btn-outline-light px-4 me-4 light-300">Register New
                        Admin</button>
                </a>
                <a href="remove-admin.php">
                    <button type="submit" class="btn rounded-pill btn-outline-light px-4 me-4 light-300">Admin List
                    </button>
                </a>
                <a href="register-seminar.php">
                    <button type="submit" class="btn rounded-pill btn-outline-light px-4 me-4 light-300">Register New
                        Seminar</button>
                </a>
		<a href="remove-seminar.php">
                    <button type="submit" class="btn rounded-pill btn-outline-light px-4 me-4 light-300">Seminar List</button>
                </a>
		<br><br>
		<a href="email-list.php">
                    <button type="submit" class="btn rounded-pill btn-outline-light px-4 me-4 light-300">Email Page</button>
                </a>
		<a href="participants-list.php">
                    <button type="submit" class="btn rounded-pill btn-outline-light px-4 me-4 light-300">Participants List</button>
                </a>
            </div>
        </div>
    </div>
    <!-- End Banner Hero -->

    
        <!-- <div class="row projects gx-lg-5">
            <a href="work-single.php" class="col-sm-6 col-lg-4 text-decoration-none project marketing social business">
                <div class="service-work overflow-hidden card mb-5 mx-5 m-sm-0">
                    <img class="card-img-top" src="./assets/img/our-work-01.jpg" alt="...">
                    <div class="card-body">
                        <h5 class="card-title light-300 text-dark">Seminar Plan A</h5>
                        <p class="card-text light-300 text-dark">
                            This is the most basic plan.
                        </p>
                        <span class="text-decoration-none text-primary light-300">
                              Read more <i class='bx bxs-hand-right ms-1'></i>
                          </span>
                    </div>
                </div>
            </a>
            <a href="work-single.php" class="col-sm-6 col-lg-4 text-decoration-none project graphic social">
                <div class="service-work overflow-hidden card mx-5 mx-sm-0 mb-5">
                    <img class="card-img-top" src="./assets/img/our-work-02.jpg" alt="...">
                    <div class="card-body">
                        <h5 class="card-title light-300 text-dark">Seminar Plan B</h5>
                        <p class="card-text light-300 text-dark">
                            This is a description for seminar plan.
                        </p>
                        <span class="text-decoration-none text-primary light-300">
                              Read more <i class='bx bxs-hand-right ms-1'></i>
                          </span>
                    </div>
                </div>
            </a>
            <a href="work-single.php" class="col-sm-6 col-lg-4 text-decoration-none project marketing graphic business">
                <div class="service-work overflow-hidden card mx-5 mx-sm-0 mb-5">
                    <img class="card-img-top" src="./assets/img/our-work-03.jpg" alt="...">
                    <div class="card-body">
                        <h5 class="card-title light-300 text-dark">Seminar Plan C</h5>
                        <p class="card-text light-300 text-dark">
                            This is a description for seminar plan.
                        </p>
                        <span class="text-decoration-none text-primary light-300">
                              Read more <i class='bx bxs-hand-right ms-1'></i>
                          </span>
                    </div>
                </div>
            </a>
            <a href="work-single.php" class="col-sm-6 col-lg-4 text-decoration-none project social business">
                <div class="service-work overflow-hidden card mx-5 mx-sm-0 mb-5">
                    <img class="card-img-top" src="./assets/img/our-work-04.jpg" alt="...">
                    <div class="card-body">
                        <h5 class="card-title light-300 text-dark">Seminar Plan D</h5>
                        <p class="card-text light-300 text-dark">
                            This is a description for seminar plan.
                        </p>
                        <span class="text-decoration-none text-primary light-300">
                              Read more <i class='bx bxs-hand-right ms-1'></i>
                          </span>
                    </div>
                </div>
            </a>
            <a href="work-single.php" class="col-sm-6 col-lg-4 text-decoration-none project marketing">
                <div class="service-work overflow-hidden card mx-5 mx-sm-0 mb-5">
                    <img class="card-img-top" src="./assets/img/our-work-05.jpg" alt="...">
                    <div class="card-body">
                        <h5 class="card-title light-300 text-dark">Seminar Plan E</h5>
                        <p class="card-text light-300 text-dark">
                            This is a description for seminar plan.
                        </p>
                        <span class="text-decoration-none text-primary light-300">
                              Read more <i class='bx bxs-hand-right ms-1'></i>
                          </span>
                    </div>
                </div>
            </a>
            <a href="work-single.php" class="col-sm-6 col-lg-4 text-decoration-none project marketing graphic">
                <div class="service-work overflow-hidden card mx-5 mx-sm-0 mb-5">
                    <img class="card-img-top" src="./assets/img/our-work-06.jpg" alt="...">
                    <div class="card-body">
                        <h5 class="card-title light-300 text-dark">Seminar Plan F</h5>
                        <p class="card-text light-300 text-dark">
                            This is a description for seminar plan.
                        </p>
                        <span class="text-decoration-none text-primary light-300">
                              Read more <i class='bx bxs-hand-right ms-1'></i>
                          </span>
                    </div>
                </div>
            </a> -->
        </div>
        <!-- <div class="row">
            <div class="btn-toolbar justify-content-center pb-4" role="toolbar" aria-label="Toolbar with button groups">
                <div class="btn-group me-2" role="group" aria-label="First group">
                    <button type="button" class="btn btn-secondary text-white">Previous</button>
                </div>
                <div class="btn-group me-2" role="group" aria-label="Second group">
                    <button type="button" class="btn btn-light">1</button>
                </div>
                <div class="btn-group me-2" role="group" aria-label="Second group">
                    <button type="button" class="btn btn-secondary text-white">2</button>
                </div>
                <div class="btn-group" role="group" aria-label="Third group">
                    <button type="button" class="btn btn-secondary text-white">Next</button>
                </div>
            </div>
        </div> -->
    </section>
    <!-- End Our Work -->

    <!-- Bootstrap -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <!-- Lightbox -->
    <script src="assets/js/fslightbox.js"></script>
    <script>
        fsLightboxInstances['gallery'].props.loadOnlyCurrentSource = true;
    </script>
    <!-- Load jQuery require for isotope -->
    <script src="assets/js/jquery.min.js"></script>
    <!-- Isotope -->
    <script src="assets/js/isotope.pkgd.js"></script>
    <!-- Page Script -->
    <script>
        $(window).load(function () {
            // init Isotope
            var $projects = $('.projects').isotope({
                itemSelector: '.project',
                layoutMode: 'fitRows'
            });
            $(".filter-btn").click(function () {
                var data_filter = $(this).attr("data-filter");
                $projects.isotope({
                    filter: data_filter
                });
                $(".filter-btn").removeClass("active");
                $(".filter-btn").removeClass("shadow");
                $(this).addClass("active");
                $(this).addClass("shadow");
                return false;
            });
        });
    </script>
    <!-- Templatemo -->
    <script src="assets/js/templatemo.js"></script>
    <!-- Custom -->
    <script src="assets/js/custom.js"></script>

</body>

</html>