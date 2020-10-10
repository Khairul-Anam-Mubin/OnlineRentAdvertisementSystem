<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">

    <title>Hostel</title>
    <link rel="stylesheet" href="asset/css/bootstrap.css"/>
    <link rel="stylesheet" href="asset/css/owl.carousel.min.css"/>
    <link rel="stylesheet" href="asset/css/owl.theme.default.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="asset/css/style.css">
</head>
<body>

<!--  HEADER -->
<header>
    <!--start navbar-->

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
                    <li class="dropdown"><a href="" class="nav-link dropdown-toggle" data-toggle="dropdown">Home Rent</a>
                        <ul class="dropdown-menu">
                            <!--sub manu-->
                            <li><a href="" class="dropdown-item"> Flat</a> </li>
                            <li><a href="" class="dropdown-item"> Sublet</a> </li>
                            <li><a href="" class="dropdown-item"> Hostel</a> </li>
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
                    <li><a href="Advertises.php" class="nav-link">Create Ads</a></li>
                </ul>
                <ul class="navbar-nav ml-auto"
                <li><a href="#ContactPaper" class="nav-link" data-toggle="modal" data-keyboard="false" data-backdrop="static">ContactPaper</a></li><!--data-keyboard="false" data-backdrop="static" use for page cannot move from home page-->
                <li class="dropdown"><a href="" class="nav-link dropdown-toggle" data-toggle="dropdown">Name</a>
                    <ul class="dropdown-menu">
                        <li><a href="Profile.php" class="dropdown-item"> Profile</a> </li>
                        <li><a href="User.php" class="dropdown-item"> Home</a> </li>
                        <li><a href="index.php" class="dropdown-item"> Logout</a> </li>
                    </ul>
                </li>
            </div>
        </div>
    </nav>
</header>


<section class="py-1 bg-dark"><!---->
    <form class="example" action="index.php" style="margin:auto;max-width:800px">
        <h3 style="color: white">Search Your Necessary Things</h3>
        <input type="text" placeholder="Search......" name="searchbtn">
        <button type="submit"><i class="fa fa-search"></i></button>
    </form>
</section>



<h2 class="text-center" style="color: green"> Latest Upload Hostel's seat Available </h2>



<div class="container">
    <div class="row">
        <div class="col-sm-4 py-3 py-sm-0">
            <div class="card" >
                <img class="card-img-top" src="asset/img/hostel3.jpg" alt="Card image cap">
                <div class="card-body">

                    <h4>Hostel's seats Rent Available Now</h4>
                    <h5>Location : Dhanmondi</h5>

                    <a href="Product.php" class="btn btn-success">Show Details....</a>
                    <a href="" class="btn btn-dark">Taka 7500/month</a>
                </div>
            </div>
        </div>


        <div class="col-sm-4 py-3 py-sm-0">
            <div class="card" >
                <img class="card-img-top" src="asset/img/hostel7.jpg" alt="Card image cap">
                <div class="card-body">

                    <h4>Hostel's seats Rent Available Now</h4>
                    <h5>Location :Ghulsan</h5>

                    <a href="" class="btn btn-success">Show Details....</a>
                    <a href="" class="btn btn-dark">Taka 5000/month</a>
                </div>
            </div>
        </div>



        <div class="col-sm-4 py-3 py-sm-0">
            <div class="card" >
                <img class="card-img-top" src="asset/img/hostel1.jpg" alt="Card image cap">
                <div class="card-body">

                    <h4>Hostel's seats Rent Available Now</h4>
                    <h5>Location : Mirpur-1</h5>

                    <a href="" class="btn btn-success">Show Details....</a>
                    <a href="" class="btn btn-dark">Taka 4500/month</a>
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
                <img class="card-img-top" src="asset/img/hostel4.jpg" alt="Card image cap">
                <div class="card-body">

                    <h4>Hostel's seats Rent Available Now</h4>
                    <h5>Location : Jatrabari</h5>

                    <a href="" class="btn btn-success">Show Details....</a>
                    <a href="" class="btn btn-dark">Taka 4000/month</a>
                </div>
            </div>
        </div>


        <div class="col-sm-4 py-3 py-sm-0">
            <div class="card" >
                <img class="card-img-top" src="asset/img/hostel5.jpg" alt="Card image cap">
                <div class="card-body">

                    <h4>Hostel's seats Rent Available Now</h4>
                    <h5>Location : Mohammadpur</h5>

                    <a href="" class="btn btn-success">Show Details....</a>
                    <a href="" class="btn btn-dark">Taka 6000/month</a>
                </div>
            </div>
        </div>



        <div class="col-sm-4 py-3 py-sm-0">
            <div class="card" >
                <img class="card-img-top" src="asset/img/hostel6.jpg" alt="Card image cap">
                <div class="card-body">

                    <h4>Hostel's seats Rent Available Now</h4>
                    <h5>Location : Mirpur-2</h5>

                    <a href="" class="btn btn-success">Show Details....</a>
                    <a href="" class="btn btn-dark">Taka 6000/month</a>
                </div>
            </div>
        </div>


    </div>
</div>

<!--modal use for click...modal fade use for show into click -->
<div class="modal fade" id="ContactPaper">
    <div class="modal-dialog modal-lg"><!--modal size manual-->
        <div class="modal-content">
            <div class="modal-header">
                <div class="imgcontainer">
                    <img src="asset/img/logo.png"
                         alt="Avatar" class="avatar">
                </div>
                <h2>Contact Paper</h2>
                <!--Step 1 : Adding HTML-->
                <button type="button" class="close" data-dismiss="modal">x</button>
            </div>
            <div class="modal-body">
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label class="col-form-label">User Name</label>
                            <input type="text" name="U_name" class="form-control" required/>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">User Id</label>
                            <input type="text" name="U_id" class="form-control"required/>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Lesse_Name</label>
                            <input type="text" name="L_name" class="form-control"required/>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Lesse_Nid_Image</label>
                            <input type="file" name="L_nid_image" class="form-control"required/>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label"> Add Lesse_Id</label>
                            <input type="text" name="L_id" class="form-control"required/>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label"> Rent Amount</label>
                            <input type="number" name="R_amount" class="form-control"required/>
                        </div>

                        <div class="form-group">
                            <label class="col-form-label"> Address</label>
                            <input type="text" name="U_address" class="form-control"required/>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label"> Contact Date</label>
                            <input type="date" name="C_date" class="form-control"required/>
                        </div>

                        <div class="form-group">
                            <label class="col-form-label"></label>
                            <input type="submit" name="btn" class="btn btn-outline-success" value="Make Aggrement"/>
                        </div>

                    </form>
                </div>
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
