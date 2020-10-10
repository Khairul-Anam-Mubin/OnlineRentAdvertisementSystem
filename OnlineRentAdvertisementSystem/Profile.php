<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">

    <title>Profile</title>
    <link rel="stylesheet" href="asset/css/bootstrap.css"/>
    <link rel="stylesheet" href="asset/css/owl.carousel.min.css"/>
    <link rel="stylesheet" href="asset/css/owl.theme.default.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="asset/css/style.css">
    <style>
        .card1 {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            max-width: 300px;
            margin: auto;
            text-align: center;
        }

        .title {
            color: grey;
            font-size: 18px;
        }

        button {
            border: none;
            outline: 0;
            display: inline-block;
            padding: 8px;
            color: white;
            background-color: #000;
            text-align: center;
            cursor: pointer;
            width: 100%;
            font-size: 18px;
        }


        button:hover, a:hover {
            opacity: 0.7;
        }
    </style>
<body>
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
                        <li><a href="" class="dropdown-item"> Profile</a> </li>
                        <li><a href="index.php" class="dropdown-item"> Logout</a> </li>
                    </ul>
                </li>
            </div>
        </div>
    </nav>
</header>
<section class="bg-secondary">
    <div class="container">
        <div class="row">
            <div class="card1">
                <h2 style="text-align:center">User Profile Card</h2>
                <img src="asset/img/decoration1.jpg" alt="John" style="width:100%">
                <h1>Mirpur-1,Dhaka</h1>
                <p><button>Update</button></p>
            </div>
            <div class="col-md-10 mx-auto">
                <div class="card rounded-0">
                    <div class="card-header">
                        All Advertisement info goes here
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-hover">
                            <tr>
                                <th>Rent Type</th>
                                <th>Rent Name</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr>

                                <tr>
                                    <td>Home Rent</td>
                                    <td>Find home</td>
                                    <td>10 dec </td>
                                    <td>
                                        <a href="Profile.php" class="btn btn-success">Edit</a>
                                        <a href="Profile.php" class="btn btn-danger" onclick="">Delete</a>
                                    </td>
                                </tr>

                        </table>



                    </div>
                    <div class="card-footer">

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

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

