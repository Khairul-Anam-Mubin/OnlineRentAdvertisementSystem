<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">

    <title>Product</title>
    <link rel="stylesheet" href="asset/css/bootstrap.css"/>
    <link rel="stylesheet" href="asset/css/owl.carousel.min.css"/>
    <link rel="stylesheet" href="asset/css/owl.theme.default.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="asset/css/style.css">
    <style>
        body {
            font-family: Arial;
            margin: 0;
        }

        * {
            box-sizing: border-box;
        }

        img {
            vertical-align: middle;
        }

        /* Position the image container (needed to position the left and right arrows) */
        .container {
            position: relative;
        }

        /* Hide the images by default */
        .mySlides {
            display: none;
        }

        /* Add a pointer when hovering over the thumbnail images */
        .cursor {
            cursor: pointer;
        }

        /* Next & previous buttons */
        .prev,
        .next {
            cursor: pointer;
            position: absolute;
            top: 40%;
            width: auto;
            padding: 16px;
            margin-top: -50px;
            color: white;
            font-weight: bold;
            font-size: 20px;
            border-radius: 0 3px 3px 0;
            user-select: none;
            -webkit-user-select: none;
        }

        /* Position the "next button" to the right */
        .next {
            right: 0;
            border-radius: 3px 0 0 3px;
        }

        /* On hover, add a black background color with a little bit see-through */
        .prev:hover,
        .next:hover {
            background-color: rgba(0, 0, 0, 0.8);
        }

        /* Number text (1/3 etc) */
        .numbertext {
            color: #f2f2f2;
            font-size: 12px;
            padding: 8px 12px;
            position: absolute;
            top: 0;
        }

        /* Container for image text */
        .caption-container {
            text-align: center;
            background-color: #222;
            padding: 2px 16px;
            color: white;
        }

        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        /* Six columns side by side */
        .column {
            float: left;
            width: 16.66%;
        }

        /* Add a transparency effect for thumnbail images */
        .demo {
            opacity: 0.6;
        }

        .active,
        .demo:hover {
            opacity: 1;
        }
    </style>
<body>

    <!--start navbar-->
    <!--start navbar use fixed top-->
    <nav class="navbar navbar-expand-md bg-dark navbar-dark">
        <div class="container">
            <a href="" class="navbar-brand">
                <img src="asset/img/logo.png">
            </a>
            <!--make button... use navbar-toggler for button into information-->
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#manu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!--id use for transfer infromation-->
            <div class="collapse navbar-collapse" id="manu">
                <ul class="navbar-nav">
                    <li><a href="" class="nav-link">Home</a></li>
                    <li class="dropdown"><a href="" class="nav-link dropdown-toggle" data-toggle="dropdown">HomeRent</a>
                        <ul class="dropdown-menu">
                            <!--sub manu-->
                            <li><a href="flatForVisitor.php" class="dropdown-item"> Flat</a> </li>
                            <li><a href="subletForVisitor.php" class="dropdown-item"> Sublet</a> </li>
                            <li><a href="hostelForVisitor.php" class="dropdown-item"> Hostel</a> </li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="" class="nav-link dropdown-toggle" data-toggle="dropdown">GroundFloor</a>
                        <ul class="dropdown-menu">
                            <!--sub manu-->
                            <li><a href="" class="dropdown-item"> Shop</a> </li>
                            <li><a href="" class="dropdown-item"> Garage</a> </li>
                            <li><a href="" class="dropdown-item"> Car Parking</a> </li>
                            <li><a href="" class="dropdown-item"> Store House</a> </li>

                        </ul>
                    </li>
                    <li class="dropdown"><a href="" class="nav-link dropdown-toggle" data-toggle="dropdown">CommercialProperty</a>
                        <ul class="dropdown-menu">
                            <li><a href="" class="dropdown-item"> Party Center</a> </li>
                            <li><a href="" class="dropdown-item"> Conference Room</a> </li>
                            <li><a href="" class="dropdown-item"> Conventional Hall</a> </li>
                            <li><a href="" class="dropdown-item"> Community Center</a> </li>
                            <li><a href="" class="dropdown-item"> Restaurant Center</a> </li>

                        </ul>
                    </li>
                    <li class="dropdown"><a href="" class="nav-link dropdown-toggle" data-toggle="dropdown">Transportation</a>
                        <ul class="dropdown-menu">
                            <li><a href="" class="dropdown-item"> Bus</a> </li>
                            <li><a href="" class="dropdown-item"> Car</a> </li>
                            <li><a href="" class="dropdown-item"> Bike</a> </li>
                            <li><a href="" class="dropdown-item"> Truck</a> </li>
                            <li><a href="" class="dropdown-item"> Mini Truck</a> </li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="" class="nav-link dropdown-toggle" data-toggle="dropdown">Decoration</a>
                        <ul class="dropdown-menu">
                            <li><a href="" class="dropdown-item"> Clothes</a> </li>
                            <li><a href="" class="dropdown-item"> Ornaments</a> </li>
                            <li><a href="" class="dropdown-item"> Others</a> </li>
                        </ul>
                    </li>
                    <li><a href="" class="nav-link">Others</a></li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <li><a href="#login" class="nav-link" data-toggle="modal" data-keyboard="false" data-backdrop="static">Login</a></li><!--data-keyboard="false" data-backdrop="static" use for page cannot move from home page-->
                    <li><a href="Registration.php" class="nav-link">Registration</a></li>
                </ul>
            </div>
        </div>
    </nav>

<section class="py-5 bg-white"><!---->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card rounded-0"><!--rounded-0 for desing-->

                    <div class="card-body align-content-center">
                        <form action="">
                            <h3>Add Type : .......</h3>
                            <h3>Location : .......</h3>
                        </form>
                    </div>

                </div>

            </div>

        </div>
</section>

<h2 style="text-align:center">Show Photo Gallary</h2>

<div class="container">
    <div class="mySlides">
        <div class="numbertext">1 / 6</div>
        <img src="asset/img/home4.jpg" style="width:100%">
    </div>

    <div class="mySlides">
        <div class="numbertext">2 / 6</div>
        <img src="asset/img/home6.jpg" style="width:100%">
    </div>

    <div class="mySlides">
        <div class="numbertext">3 / 6</div>
        <img src="asset/img/home7.jpg" style="width:100%">
    </div>

    <div class="mySlides">
        <div class="numbertext">4 / 6</div>
        <img src="asset/img/home8.jpg" style="width:100%">
    </div>

    <div class="mySlides">
        <div class="numbertext">5 / 6</div>
        <img src="asset/img/home2.jpg" style="width:100%">
    </div>

    <div class="mySlides">
        <div class="numbertext">6 / 6</div>
        <img src="asset/img/home%2011.jpg"style="width:100%">
    </div>

    <a class="prev" onclick="plusSlides(-1)"><</a>
    <a class="next" onclick="plusSlides(1)">></a>

    <div class="caption-container">
        <p id="caption"></p>
    </div>

    <div class="row">
        <div class="column">
            <img class="demo cursor" src="asset/img/home4.jpg" style="width:100%" onclick="currentSlide(1)" alt="Room1">
        </div>
        <div class="column">
            <img class="demo cursor" src="asset/img/home6.jpg" style="width:100%" onclick="currentSlide(2)" alt="Dinning Room">
        </div>
        <div class="column">
            <img class="demo cursor" src="asset/img/home7.jpg" style="width:100%" onclick="currentSlide(3)" alt="Room2">
        </div>
        <div class="column">
            <img class="demo cursor" src="asset/img/home2.jpg" style="width:100%" onclick="currentSlide(4)" alt="Room3">
        </div>
        <div class="column">
            <img class="demo cursor" src="asset/img/home8.jpg" style="width:100%" onclick="currentSlide(5)" alt="Space">
        </div>
        <div class="column">
            <img class="demo cursor" src="asset/img/home%2011.jpg" style="width:100%" onclick="currentSlide(6)" alt="Room4">
        </div>
    </div>
</div>

<section class="py-5 bg-white"><!---->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center" style="color: white">Desription</h2>
                <!--<p class="md-4">
                    <span class="text-center border-bottom" style="border-bottom: 5px dotted red;font-size: 35px">
                        Rent Available Find Your Own
                    </span>
                </p>-->
            </div>
            <div class="col-md-12">
                <div class="card rounded-0"><!--rounded-0 for desing-->

                    <div class="card-body">
                        <form action="">
                            <h6>This is the description of the page</h6>
                            <h6>Available: ........</h6>
                            <h6>Duration:........</h6>
                            <h6>Email:.......</h6>
                            <h6>Phone : .......</h6>


                            <a href="Product.php" class="btn btn-success">Make Agreement</a>
                        </form>

                    </div>

                </div>

            </div>

        </div>
</section>

<section class="py-5 bg-dark"><!---->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center" style="color: white">Latest Upload Rent Available</h2>
                <!--<p class="md-4">
                    <span class="text-center border-bottom" style="border-bottom: 5px dotted red;font-size: 35px">
                        Rent Available Find Your Own
                    </span>
                </p>-->
            </div>
            <div class="col-md-4">
                <div class="card rounded-0"><!--rounded-0 for desing-->
                    <div class="card-header">
                        <h4>House Rent Available Now</h4>
                        <h5>Location : Mirpur-10</h5>
                    </div>
                    <div class="card-body">
                        <img src="asset/img/home4.jpg">
                    </div>
                    <div class="card-footer">
                        <form action="">
                            <a href="" class="btn btn-success">Show Details....</a>
                            <a href="" class="btn btn-dark">Taka 20000/month</a>
                        </form>
                        <!--<button class="btn" id="apply"><i class="fa fa-envelope"></i>sahrialalam@gmail.com</button>-->
                    </div>
                </div>

            </div>
            <div class="col-md-4">
                <div class="card rounded-0"><!--rounded-0 for desing-->
                    <div class="card-header">
                        <h4>Truck Rent Available Now</h4>
                        <h5>Location : Dhanmondi</h5>
                    </div>
                    <div class="card-body">
                        <img src="asset/img/truck1.jpg">
                    </div>
                    <div class="card-footer">
                        <form action="">
                            <a href="" class="btn btn-success">Show Details....</a>
                            <a href="" class="btn btn-dark">Taka 5000/day</a>
                        </form>
                        <!--<button class="btn" id="apply"><i class="fa fa-envelope"></i>sahrialalam@gmail.com</button>-->
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card rounded-0"><!--rounded-0 for desing-->
                    <div class="card-header">
                        <h4>1 RoomMate Available Now</h4>
                        <h5>Location : Mirpur-1</h5>
                    </div>
                    <div class="card-body">
                        <img src="asset/img/home2.jpg">
                    </div>
                    <div class="card-footer">
                        <form action="">
                            <a href="" class="btn btn-success">Show Details....</a>
                            <a href="" class="btn btn-dark">Taka 2500/month</a>
                        </form>
                        <!--<button class="btn" id="apply"><i class="fa fa-envelope"></i>sahrialalam@gmail.com</button>-->
                    </div>
                </div>
            </div>
</section>

<section class="footer-widget-area footer-widget-area-bg bg-dark">
    <div class="container-fluid text-center ">
        <div class="row">
            <div class="col-md-4 col-sm-12 col-xs-12">
                <div class="footer-widget">
                    <div class="sidebar-widget-wrapper">
                        <div class="footer-widget-header clearfix">
                            <h3 style="color: white">Powered by</h3>
                        </div>
                        <p></p>
                        <div class="footer-subscription">
                            <li><a href=""><img src="asset/img/logo.png"></a></li>
                        </div>
                    </div>
                </div>

            </div> <!--  end .col-md-4 col-sm-12 -->

            <div class="col-md-4 col-sm-12 col-xs-12 ml-auto">
                <div class="footer-widget clearfix">
                    <div class="sidebar-widget-wrapper">
                        <div class="footer-widget-header clearfix">
                            <h3 style="color: white">Contact Us</h3>
                        </div>  <!--  end .footer-widget-header -->
                        <ul class="footer-useful-links">
                            <li>
                                <div class="textwidget">
                                    <i class="fa fa-envelope-o fa-contact bg-white"></i><a href=""<h6 style="color: white">onlinerentsystem@gmail.com</h6></a>
                                </div>
                            </li>
                            <li>
                                <div class="textwidget">
                                    <i class="fa fa-facebook fa-contact bg-white"></i><a href=""<h6 style="color: white">onlinerentsystem.facebook.com</h6></a>
                                </div>
                            </li>
                            <li>
                                <div class="textwidget">
                                    <i class=" fa-contact bg-white"></i><a href=""<h6 style="color: white">About Us</h6></a>
                                </div>
                            </li>

                        </ul>

                    </div> <!--  end .footer-widget  -->

                </div> <!--  end .footer-widget  -->

            </div> <!--  end .col-md-4 col-sm-12 -->

        </div> <!-- end row  -->

    </div> <!-- end .container  -->

</section> <!--  end .footer-widget-area  -->

<!--FOOTER CONTENT  -->
<!--  end .footer-content  -->

</footer>

    <script src="asset/js/jquery-3.5.1.js"></script>
    <script src="asset/js/owl.carousel.js"></script>
    <script src="asset/js/bootstrap.bundle.js"></script>
    <script src="asset/js/bootstrap.js"></script>
<script>
    var slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("demo");
        var captionText = document.getElementById("caption");
        if (n > slides.length) {slideIndex = 1}
        if (n < 1) {slideIndex = slides.length}
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex-1].style.display = "block";
        dots[slideIndex-1].className += " active";
        captionText.innerHTML = dots[slideIndex-1].alt;
    }
</script>

</body>
</html>


