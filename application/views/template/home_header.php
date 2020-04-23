<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Digicult, a solution to FAW menace</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Platform that gives solutions on how to curb the menace brought about by Fall Armyworm." />
    <meta name="keywords" content="Digicult, Fall Armyworm, Farmer, Agrovet, Specialist, Smart Farming," />
    <meta name="author" content="Dannex Daniels & Bett Kipchumba" />

    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content=""/>
    <meta property="og:image" content=""/>
    <meta property="og:url" content=""/>
    <meta property="og:site_name" content=""/>
    <meta property="og:description" content=""/>
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />

    <link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,700,800" rel="stylesheet">

    <!-- Animate.css -->
    <link rel="stylesheet" href="<? echo base_url('assets/')?>css/animate.css">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="<? echo base_url('assets/')?>css/icomoon.css">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="<? echo base_url('assets/')?>css/bootstrap.css">

    <!-- Magnific Popup -->
    <link rel="stylesheet" href="<? echo base_url('assets/')?>css/magnific-popup.css">

    <!-- Owl Carousel  -->
    <link rel="stylesheet" href="<? echo base_url('assets/')?>css/owl.carousel.min.css">
    <link rel="stylesheet" href="<? echo base_url('assets/')?>css/owl.theme.default.min.css">

    <!-- Theme style  -->
    <link rel="stylesheet" href="<? echo base_url('assets/')?>css/style.css">

    <!-- Modernizr JS -->
    <script src="<? echo base_url('assets/')?>js/modernizr-2.6.2.min.js"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]> -->
    <script src="<? echo base_url('assets/')?>js/respond.min.js"></script>
    <![endif]-->

</head>
<body>

<div class="fh5co-loader"></div>

<div id="page">
    <nav class="fh5co-nav" role="navigation">
        <div class="top">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 text-right">
                        <p class="num">Call: +254 712 345 6789</p>
                        <ul class="fh5co-social">
                            <li><a href="#"><i class="icon-twitter"></i></a></li>
                            <li><a href="#"><i class="icon-facebook"></i></a></li>
                            <li><a href="#"><i class="icon-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="top-menu">
            <div class="container">
                <div class="row">
                    <div class="col-xs-1">
                        <div id="fh5co-logo"><a href="/">Digicult<span>.</span></a></div>
                    </div>
                    <div class="col-xs-11 text-right menu-1">
                        <ul>
                            <li class="active"><a href="/">Home</a></li>
                            <li><a href="#">About</a></li>
                            <li><a href="#">Prevention</a></li>
                            <li class="has-dropdown">
                                <a href="#">Control</a>
                                <ul class="dropdown">
                                    <li><a href="#">Method 1</a></li>
                                    <li><a href="#">Method 2</a></li>
                                    <li><a href="#">Method 3</a></li>
                                    <li><a href="#">Method 4</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Contact</a></li>
                            <li class="btn-cta"><a href="#" data-toggle="modal" data-target="#loginModal"><span>Admin</span></a></li>
                            <li class="btn-cta"><a href="#" data-toggle="modal" data-target="#agrovetModal"><span>Agrovet Registration</span></a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </nav>

    <!--Admin Login Modal -->
    <div id="loginModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <form id="adminLogin" action="authenticate" method="post">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <!--<h4 class="modal-title">Modal Header</h4>-->
                        <h3 class="modal-title">Administration Login</h3>
                    </div>
                    <div class="modal-body">

                        <div class="row form-group">
                            <div class="col-md-12">
                                <!-- <label for="email">Email</label> -->
                                <input type="text" name="email" class="form-control" placeholder="Enter Username" required>
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <!-- <label for="subject">Subject</label> -->
                                <input type="password" name="password" class="form-control" placeholder="Enter Password" required>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="row left">
                            <div class="col-md-5">
                                <button type="submit" class="btn btn-default" >Login</button>
                            </div>
                            <div class="col-md-2">
                                <h4>or</h4>
                            </div>
                            <div class="col-md-5">
                                <p><a href="admin/forgot-password.html">Did you Forget Password?</a> </p>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

        </div>
    </div>

    <!--Admin Login Modal -->
    <div id="agrovetModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <form id="agrovet_add" action="add_agrovet" method="post">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <!--<h4 class="modal-title">Modal Header</h4>-->
                        <h3 class="modal-title">Agrovet Registration</h3>
                    </div>
                    <div class="modal-body">
                        <div class="row form-group">
                            <div class="col-md-6">
                                <!-- <label for="fname">First Name</label> -->
                                <input type="text" name="fname" class="form-control" placeholder="Your firstname" required>
                            </div>
                            <div class="col-md-6">
                                <!-- <label for="lname">Last Name</label> -->
                                <input type="text" name="lname" class="form-control" placeholder="Your lastname" required>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12">
                                <!-- <label for="email">Email</label> -->
                                <input type="text" name="idno" class="form-control" placeholder="Your ID number" required>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12">
                                <!-- <label for="email">Email</label> -->
                                <input type="email" name="email" class="form-control" placeholder="Your email address" required>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12">
                                <!-- <label for="subject">Subject</label> -->
                                <input type="text" name="phone" class="form-control" placeholder="Your phone number" required>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12">
                                <!-- <label for="subject">Subject</label> -->
                                <input type="text" name="address" class="form-control" placeholder="Your Address" required>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12">
                                <!-- <label for="subject">Subject</label> -->
                                <select name="location" class="form-control" required>
                                    <option value="">Select Location</option>
                                    <option value="1">Lurambi East</option>
                                    <option value="2">Lurambi West</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-default" >Register</button>
                    </div>
                </div>
            </form>

        </div>
    </div>

    <header id="fh5co-header" class="fh5co-cover" role="banner" style="background-image:url(<? echo base_url('assets/')?>images/img_bg_1.jpg);" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center">
                    <div class="display-t">
                        <div class="display-tc animate-box" data-animate-effect="fadeIn">
                            <h1>A solution to problems brought about by Fall Armyworm.</h1>

                            <p><a class="btn btn-primary btn-lg btn-learn" href="#" data-toggle="modal" data-target="#loginModal">Login</a> <a class="btn btn-primary btn-lg" href="#" data-toggle="modal" data-target="#agrovetModal"><i class="icon-play"></i> Register</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
