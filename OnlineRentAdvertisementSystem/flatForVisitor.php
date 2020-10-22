<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">

    <title>Flat</title>
    <link rel="stylesheet" href="asset/css/bootstrap.css"/>
    <link rel="stylesheet" href="asset/css/owl.carousel.min.css"/>
    <link rel="stylesheet" href="asset/css/owl.theme.default.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="asset/css/style.css">
</head>
<body>


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
                        <li><a href="ShopForVisitor.php" class="dropdown-item"> Shop</a> </li>
                        <li><a href="garageForVisitor.php" class="dropdown-item"> Garage</a> </li>
                        <li><a href="carparkingForVisitor.php" class="dropdown-item"> Car Parking</a> </li>
                        <li><a href="subletForVisitor.php" class="dropdown-item"> Store House</a> </li>

                    </ul>
                </li>
                <li class="dropdown"><a href="" class="nav-link dropdown-toggle" data-toggle="dropdown">CommercialProperty</a>
                    <ul class="dropdown-menu">
                        <li><a href="partycenterForVisitor.php" class="dropdown-item"> Party Center</a> </li>
                        <li><a href="conferenceroomForVisitor.php" class="dropdown-item"> Conference Room</a> </li>
                        <li><a href="ConventionhallForVisitor.php" class="dropdown-item"> Conventional Hall</a> </li>
                        <li><a href="ConventionhallForVisitor.php" class="dropdown-item"> Community Center</a> </li>
                        <li><a href="restaurantcenterForVisitor.php" class="dropdown-item"> Restaurant Center</a> </li>

                    </ul>
                </li>
                <li class="dropdown"><a href="" class="nav-link dropdown-toggle" data-toggle="dropdown">Transportation</a>
                    <ul class="dropdown-menu">
                        <li><a href="bikeForVisitor.php" class="dropdown-item"> Bus</a> </li>
                        <li><a href="carForVisitor.php" class="dropdown-item"> Car</a> </li>
                        <li><a href="bikeForVisitor.php" class="dropdown-item"> Bike</a> </li>
                        <li><a href="truckForVisitor.php" class="dropdown-item"> Truck</a> </li>
                        <li><a href="MinitruckForVisitor.php" class="dropdown-item"> Mini Truck</a> </li>
                    </ul>
                </li>
                <li class="dropdown"><a href="" class="nav-link dropdown-toggle" data-toggle="dropdown">Decoration</a>
                    <ul class="dropdown-menu">
                        <li><a href="clothForVisitor.php" class="dropdown-item"> Clothes</a> </li>
                        <li><a href="OrnamentForVisitor.php" class="dropdown-item"> Ornaments</a> </li>
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
<!--end navbar-->
<!--for search button-->
<section class="py-1 bg-dark"><!---->
    <form class="example" action="index.php" style="margin:auto;max-width:800px">
        <h3 style="color: white">Search Your Necessary Things</h3>
        <input type="text" placeholder="Search......" name="searchbtn">
        <button type="submit"><i class="fa fa-search"></i></button>
    </form>
</section>

<h2 class="text-center" style="color: green"> Latest Upload Flat Available </h2>



<div class="container">
    <div class="row">
        <div class="col-sm-4 py-3 py-sm-0">
            <div class="card" >
                <img class="card-img-top" src="asset/img/flat8.jpg" alt="Card image cap">
                <div class="card-body">

                    <h4>Flat Rent Available Now</h4>
                    <h5>Location : Dhanmondi</h5>

                    <a href="ProductForVisitor.php" class="btn btn-success">Show Details....</a>
                    <a href="" class="btn btn-dark">Taka 65000/month</a>
                </div>
            </div>
        </div>


        <div class="col-sm-4 py-3 py-sm-0">
            <div class="card" >
                <img class="card-img-top" src="asset/img/flat9.jpg" alt="Card image cap">
                <div class="card-body">

                    <h4>Flat Rent Available Now</h4>
                    <h5>Location :Ghulsan</h5>

                    <a href="" class="btn btn-success">Show Details....</a>
                    <a href="" class="btn btn-dark">Taka 55000/month</a>
                </div>
            </div>
        </div>



        <div class="col-sm-4 py-3 py-sm-0">
            <div class="card" >
                <img class="card-img-top" src="asset/img/flat3.jpg" alt="Card image cap">
                <div class="card-body">

                    <h4>Flat Rent Available Now</h4>
                    <h5>Location : Mirpur-1</h5>

                    <a href="" class="btn btn-success">Show Details....</a>
                    <a href="" class="btn btn-dark">Taka 40000/month</a>
                </div>
            </div>
        </div>


    </div>
</div>
<br>

<div class="container">
    <div class="row">
        <div class="col-sm-4 py-3 py-sm-0">
            <div class="card" >
                <img class="card-img-top" src="asset/img/flat4.jpeg" alt="Card image cap">
                <div class="card-body">

                    <h4>Flat Rent Available Now</h4>
                    <h5>Location : Jatrabari</h5>

                    <a href="" class="btn btn-success">Show Details....</a>
                    <a href="" class="btn btn-dark">Taka 20000/month</a>
                </div>
            </div>
        </div>


        <div class="col-sm-4 py-3 py-sm-0">
            <div class="card" >
                <img class="card-img-top" src="asset/img/sublet5.jpg" alt="Card image cap">
                <div class="card-body">

                    <h4>Flat Rent Available Now</h4>
                    <h5>Location : Mohammadpur</h5>

                    <a href="" class="btn btn-success">Show Details....</a>
                    <a href="" class="btn btn-dark">Taka 50000/month</a>
                </div>
            </div>
        </div>



        <div class="col-sm-4 py-3 py-sm-0">
            <div class="card" >
                <img class="card-img-top" src="asset/img/flat6.jpg" alt="Card image cap">
                <div class="card-body">

                    <h4>Flat Rent Available Now</h4>
                    <h5>Location : Old Dhaka</h5>

                    <a href="" class="btn btn-success">Show Details....</a>
                    <a href="" class="btn btn-dark">Taka 25000/month</a>
                </div>
            </div>
        </div>


    </div>
</div>

<!--modal use for click...modal fade use for show into click -->
<div class="modal fade" id="login">
    <div class="modal-dialog modal-lg"><!--modal size manual-->
        <div class="modal-content">
            <div class="modal-header">
                <div class="imgcontainer">
                    <img src="asset/img/logo.png"
                         alt="Avatar" class="avatar">
                </div>
                <h2>Login Form</h2>
                <!--Step 1 : Adding HTML-->
                <button type="button" class="close" data-dismiss="modal">x</button>
            </div>
            <div class="modal-body">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="container">
                        <label><b>Phone</b></label>
                        <input type="text" placeholder="Enter Number" name="phone"required>
                        <br/>
                        <br/>
                        <label><b>Password</b></label>
                        <input type="password" placeholder="Enter Password" name="password"required>
                        <br/>
                        <br/>
                        <button type="submit" name="login" class="btn btn-outline-success" value="Log IN">Login</button>
                        <input type="checkbox" checked="checked"> Remember me
                    </div>
                    <?php
                    include 'dbcon.php';
                    if(isset($_POST['login'])) {
                        $phone = $_POST['phone'];
                        $password = $_POST['password'];
                        $pass1 = md5($password);
                        $phone_query = "Select * from users where phone = '$phone' and password_hash = '$pass1'";
                        $query = mysqli_query($connect , $phone_query);
                        if (mysqli_num_rows($query) > 0) {
                            echo '<meta http-equiv="refresh" content="1; URL=User.php" />';

                        } else {
                            echo '
                                    <script>alert("Incorrect Phone or Password")</script>
                                ';
                        }
                    }
                    ?>
                </form>

            </div>
            <div class="modal-footer">
                <form action=""
                <div class="container" style="background-color:#f1f1f1">
                    <button type="button" class="bg-danger">Cancel</button>
                    <span class="psw">Forgot <a href="#">password?</a></span>
                </div>
                </form>

            </div>
        </div>
    </div>
</div>


<footer>
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

</body>
</html>

