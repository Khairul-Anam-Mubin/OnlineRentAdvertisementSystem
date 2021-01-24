<?php session_start(); 

    if (isset($_POST['flat'])) {           
        $_SESSION['rr'] = 'Flat';
        echo '<meta content="1; URL=Searches.php" />';                   
    } 
    if (isset($_POST['hostel'])) {           
        $_SESSION['rr'] = 'Hostel';
        echo '<meta content="1; URL=Searches.php" />';                   
    } 
    if (isset($_POST['sublet'])) {           
        $_SESSION['rr'] = 'Sublet';
        echo '<meta content="1; URL=Searches.php" />';                   
    } 
    if (isset($_POST['shop'])) {           
        $_SESSION['rr'] = 'Shop';
        echo '<meta content="1; URL=Searches.php" />';                   
    } 
    if (isset($_POST['garage'])) {           
        $_SESSION['rr'] = 'Garage';
        echo '<meta content="1; URL=Searches.php" />';                   
    } 
    if (isset($_POST['carparking'])) {           
        $_SESSION['rr'] = 'Car Parking';
        echo '<meta http-equiv="refresh" content="1; URL=Searches.php" />';                   
    } 
    if (isset($_POST['storehouse'])) {           
        $_SESSION['rr'] = 'Store House';
        echo '<meta http-equiv="refresh" content="1; URL=Searches.php" />';                   
    } 
    if (isset($_POST['partycenter'])) {           
        $_SESSION['rr'] = 'Party Center';
        echo '<meta http-equiv="refresh" content="1; URL=Searches.php" />';                   
    } 
    if (isset($_POST['conferenceroom'])) {           
        $_SESSION['rr'] = 'Conference Room';
        echo '<meta http-equiv="refresh" content="1; URL=Searches.php" />';                   
    } 
    if (isset($_POST['conventionalhall'])) {           
        $_SESSION['rr'] = 'Conventional Hall';
        echo '<meta http-equiv="refresh" content="1; URL=Searches.php" />';                   
    } 
    if (isset($_POST['communitycenter'])) {           
        $_SESSION['rr'] = 'Community Center';
        echo '<meta http-equiv="refresh" content="1; URL=Searches.php" />';                   
    } 
    if (isset($_POST['restaurents'])) {           
        $_SESSION['rr'] = 'Restaurants';
        echo '<meta http-equiv="refresh" content="1; URL=Searches.php" />';                   
    } 
    if (isset($_POST['bus'])) {           
        $_SESSION['rr'] = 'Bus';
        echo '<meta http-equiv="refresh" content="1; URL=Searches.php" />';                   
    } 
    if (isset($_POST['car'])) {           
        $_SESSION['rr'] = 'Car';
        echo '<meta http-equiv="refresh" content="1; URL=Searches.php" />';                   
    } 
    if (isset($_POST['bike'])) {           
        $_SESSION['rr'] = 'Bike';
        echo '<meta http-equiv="refresh" content="1; URL=Searches.php" />';                   
    } 
    if (isset($_POST['truck'])) {           
        $_SESSION['rr'] = 'Truck';
        echo '<meta http-equiv="refresh" content="1; URL=Searches.php" />';                   
    } 
    if (isset($_POST['minitruck'])) {           
        $_SESSION['rr'] = 'Mini Truck';
        echo '<meta http-equiv="refresh" content="1; URL=Searches.php" />';                   
    } 
    if (isset($_POST['clothes'])) {           
        $_SESSION['rr'] = 'Clothes';
        echo '<meta http-equiv="refresh" content="1; URL=Searches.php" />';                   
    } 
    if (isset($_POST['ornaments'])) {           
        $_SESSION['rr'] = 'Ornaments';
        echo '<meta http-equiv="refresh" content="1; Searches.php" />';                   
    } 
    if (isset($_POST['dothers'])) {           
        $_SESSION['rr'] = 'dothers';
        echo '<meta http-equiv="refresh" content="1; Searches.php" />';                   
    } 
    if (isset($_POST['others'])) {           
        $_SESSION['rr'] = 'Others';
        echo '<meta http-equiv="refresh" content="1; Searches.php" />';                   
    } 
     if (isset($_POST['logout'])) {
        $_SESSION['user_id'] = "";

        echo '<meta http-equiv="refresh" content="1; URL=index.php" />';
    }
?>


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

    <header>
        <!--start navbar-->

       <!--start navbar use fixed top-->
<nav class="navbar navbar-expand-md bg-dark navbar-dark">
    <form action="index.php" method="post" enctype="multipart/form-data">
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
                <li><a href="index.php" class="nav-link">Home</a></li>
                <li class="dropdown"><a href="" class="nav-link dropdown-toggle" data-toggle="dropdown">HomeRent</a>
                    <ul class="dropdown-menu">
                        <!--sub manu-->
                        <li><button type="submit" name="flat" class="btn bg-transparent" value="Flat">Flat</button> </li>
                        <li><button type="submit" name="sublet" class="btn bg-transparent" value="Sublet">Sublet</button> </li>
                        <li><button type="submit" name="hostel" class="btn bg-transparent" value="Hostel">Hostel</button> </li>
                    </ul>
                </li>
                <li class="dropdown"><a href="" class="nav-link dropdown-toggle" data-toggle="dropdown">GroundFloor</a>
                    <ul class="dropdown-menu">
                        <!--
                        <li><a href="ShopForVisitor.php" class="dropdown-item"> Shop</a> </li>
                        <li><a href="garageForVisitor.php" class="dropdown-item"> Garage</a> </li>
                        <li><a href="carparkingForVisitor.php" class="dropdown-item"> Car Parking</a> </li>
                        <li><a href="subletForVisitor.php" class="dropdown-item"> Store House</a> </li>
                        -->
                        <li><button type="submit" name="shop" class="btn bg-transparent" value="shop">Shop</button> </li>
                        <li><button type="submit" name="garage" class="btn bg-transparent" value="Garage">Garage</button> </li>
                        <li><button type="submit" name="carparking" class="btn bg-transparent" value="Car Parking">Car Parking</button> </li>
                        <li><button type="submit" name="storehouse" class="btn bg-transparent" value="storehouse">Store House</button> </li>
                    </ul>
                </li>
                <li class="dropdown"><a href="" class="nav-link dropdown-toggle" data-toggle="dropdown">CommercialProperty</a>
                    <ul class="dropdown-menu">
                        <!--
                        <li><a href="partycenterForVisitor.php" class="dropdown-item"> Party Center</a> </li>
                        <li><a href="conferenceroomForVisitor.php" class="dropdown-item"> Conference Room</a> </li>
                        <li><a href="ConventionhallForVisitor.php" class="dropdown-item"> Conventional Hall</a> </li>
                        <li><a href="ConventionhallForVisitor.php" class="dropdown-item"> Community Center</a> </li>
                        <li><a href="restaurantcenterForVisitor.php" class="dropdown-item"> Restaurant Center</a> </li>
                        -->

                        <li><button type="submit" name="partycenter" class="btn bg-transparent" value="shop">Party Center</button> </li>
                        <li><button type="submit" name="conferenceroom" class="btn bg-transparent" value="Garage">Conference Room</button> </li>
                        <li><button type="submit" name="Conventionalhall" class="btn bg-transparent" value="Car Parking">Conventional Hall</button> </li>
                        <li><button type="submit" name="communitycenter" class="btn bg-transparent" value="storehouse">Community Center</button> </li>
                        <li><button type="submit" name="restaurents" class="btn bg-transparent" value="restaurents">restaurents</button> </li>

                    </ul>
                </li>
                <li class="dropdown"><a href="" class="nav-link dropdown-toggle" data-toggle="dropdown">Transportation</a>
                    <ul class="dropdown-menu">
                        <!--
                        <li><a href="bikeForVisitor.php" class="dropdown-item"> Bus</a> </li>
                        <li><a href="carForVisitor.php" class="dropdown-item"> Car</a> </li>
                        <li><a href="bikeForVisitor.php" class="dropdown-item"> Bike</a> </li>
                        <li><a href="truckForVisitor.php" class="dropdown-item"> Truck</a> </li>
                        <li><a href="MinitruckForVisitor.php" class="dropdown-item"> Mini Truck</a> </li>
                        -->
                         <li><button type="submit" name="bus" class="btn bg-transparent" value="shop">Bus</button> </li>
                        <li><button type="submit" name="car" class="btn bg-transparent" value="Garage">Car</button> </li>
                        <li><button type="submit" name="bike" class="btn bg-transparent" value="Car Parking">Bike</button> </li>
                        <li><button type="submit" name="truck" class="btn bg-transparent" value="storehouse">Truck</button> </li>
                        <li><button type="submit" name="minitruck" class="btn bg-transparent" value="restaurents">Mini Truck</button> </li>
                    </ul>
                </li>
                <li class="dropdown"><a href="" class="nav-link dropdown-toggle" data-toggle="dropdown">Decoration</a>
                    <ul class="dropdown-menu">
                        <!--
                        <li><a href="clothForVisitor.php" class="dropdown-item"> Clothes</a> </li>
                        <li><a href="OrnamentForVisitor.php" class="dropdown-item"> Ornaments</a> </li>
                        <li><a href="" class="dropdown-item"> Others</a> </li>
                        -->
                         <li><button type="submit" name="clothes" class="btn bg-transparent" value="shop">Clothes</button> </li>
                        <li><button type="submit" name="ornaments" class="btn bg-transparent" value="Garage">Ornaments</button> </li>
                        <li><button type="submit" name="dothers" class="btn bg-transparent" value="Car Parking">Others</button> </li>
                    </ul>
                </li>
                <li><button type="submit" name="others" class="btn btn-secondary" value="Car Parking">Others</button> </li>
            </ul>
            <?php 
                if (($_SESSION['user_id']) == "") {
                    echo ' 
                        <ul class="navbar-nav ml-auto">
                        <li><a href="#login" class="nav-link" data-toggle="modal" data-keyboard="false" data-backdrop="static">Login</a></li><!--data-keyboard="false" data-backdrop="static" use for page cannot move from home page-->
                        <li><a href="Registration.php" class="nav-link">Registration</a></li>
                        </ul>
                    ';
                } else {


                    echo '
                        <ul class="navbar-nav ml-auto">
                        <li><a href="Advertises.php" class="nav-link">CreateAds</a></li>
                <li class="dropdown"><a href="" class="nav-link dropdown-toggle" data-toggle="dropdown">'.$_SESSION['name'].'</a>
                    <ul class="dropdown-menu">
                        <li><a href="Profile.php" class="dropdown-item"> Profile</a> </li>
                         <li><a href="#ContractPaper" class="nav-link" data-toggle="modal" data-keyboard="false" data-backdrop="static" style="color:black;">ContractPaper</a></li>
                        <li><button type="submit" name="logout" class="btn btn-secondary" value="Car Parking">Log Out</button> </li>
                    </ul>
                </li>
                </ul>
                    ';
                }



            ?>

            

            
        </div>
        
    </div>
    </form>
</nav>
    </header>

    <section class="py-5 bg-white"><!---->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card rounded-0"><!--rounded-0 for desing-->

                    <div class="card-body align-content-center">
                        <form action="">

                            <?php 
                                include 'dbcon.php';
                                $add = $_SESSION['here'];

                                $query = "select * from advertises where add_id = '$add'";

                                $equery = mysqli_query($connect , $query);

                                $row = mysqli_fetch_array($equery);

                                echo '
                                    <h3>Add Type : '.$row['rent_name'].'</h3>
                                    <h3>Location : '.$row['city'].'</h3>
                                    <h3>Amount : '.$row['amount'].'</h3>
                                ';

                             ?>
                       
                        </form>
                    </div>

                </div>

            </div>

        </div>
</section>

<h2 style="text-align:center">Show Photo Gallary</h2>

<div class="container">

    <?php 
        include 'dbcon.php';
        $add = $_SESSION['here'];

        $query = "select * from advertises where add_id = '$add'";

        $equery = mysqli_query($connect , $query);

        $row = mysqli_fetch_array($equery);

    
        echo '

            <div class="mySlides">
                <div class="numbertext">1 / 3</div>
                <img src="data:image/jpeg;base64,'.base64_encode($row['image1']).'" style="width:100%">
            </div>

            <div class="mySlides">
                <div class="numbertext">2 / 3</div>
                <img src="data:image/jpeg;base64,'.base64_encode($row['image2']).'" style="width:100%">
            </div>

            <div class="mySlides">
                <div class="numbertext">3 / 3</div>
                <img src="data:image/jpeg;base64,'.base64_encode($row['image3']).'" style="width:100%">
            </div>

            <a class="prev" onclick="plusSlides(-1)"><</a>
            <a class="next" onclick="plusSlides(1)">></a>

            <div class="caption-container">
                <p id="caption"></p>
            </div>

            <div class="row">
                <div class="column">
                    <img class="demo cursor" src="data:image/jpeg;base64,'.base64_encode($row['image1']).'" style="width:100%" onclick="currentSlide(1)" alt="Room1">
                </div>
                <div class="column">
                    <img class="demo cursor" src="data:image/jpeg;base64,'.base64_encode($row['image2']).'" style="width:100%" onclick="currentSlide(2)" alt="Dinning Room">
                </div>
                <div class="column">
                    <img class="demo cursor" src="data:image/jpeg;base64,'.base64_encode($row['image3']).'" style="width:100%" onclick="currentSlide(3)" alt="Room2">
                </div>

            </div>
        ';

    ?>
</div>

<section class="bg-dark"><!---->
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
                         <!--   
                        <h6>This is the description of the page</h6>
                        <h6>Available: ........</h6>
                        <h6>Duration:........</h6>
                        <h6>Email:.......</h6>
                        <h6>Phone : .......</h6>
                    -->

                        <?php 
                                include 'dbcon.php';
                                $add = $_SESSION['here'];

                                $query = "select * from advertises where add_id = '$add'";

                                $equery = mysqli_query($connect , $query);

                                $row = mysqli_fetch_array($equery);

                                echo '
                                    <h6>Description: '.$row['description'].'</h6>
                                    <h6>Available in: '.$row['available_date'].'</h6>
                                    <h6>Duration: '.$row['duration'].'</h6>
                                    <h6>Email: '.$row['email'].'</h6>
                                    <h6>Phone : '.$row['phone'].'</h6>
                                ';

                             ?>

                        </form>

                    </div>

                </div>

            </div>

            </div>
</section>

<form action="" method="post" enctype="multipart/form-data">
    


<section class="bg-dark">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center" style="color: white">Rent Available Find Your Own</h2>
            </div>
            <div class="col-md-12">
                <div class="owl-carousel owl-theme">
                    <?php
                    
                        
                        include 'dbcon.php';
                        //$db=mysqli_select_db($connect,'users');
                        

                        $query="select * from advertises, approved_advertises where advertises.add_id = approved_advertises.add_id";
                        $query_run=mysqli_query($connect,$query);
                        $i = 0;
                        $cnt = 0;
                        while ($row=mysqli_fetch_array($query_run)) {

                            echo '
                                <div class="item">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4> '.$row['rent_name'].' Rent Available Now..</h4>
                                            <h5>Location : '.$row['district'].' </h5>
                                        </div>  
                                        <div class="card-body">
                                            <img src="data:image/jpeg;base64,'.base64_encode($row['image1']).'" height="200" width="300" class="img-thumnail" />
                                                <button type="submit" name = '.$i.' class="btn btn-success" >Show Details....</button>
                                                <a href="" class="btn btn-outline-dark">Taka '.$row['amount'].'/=</a>
                                        </div>
                                    </div>
                                </div>
                            ';
                            $now[$i] = $row['add_id'];
                            $i++;
                            $cnt++;
                        }

                         $_SESSION['here'] = "";
                        for ($i = 0; $i < $cnt; $i++) {
                            if (isset($_POST[$i])) {
                                $_SESSION['here'] = $now[$i];
                                echo '<meta http-equiv="refresh" content="1; URL=Product.php" />';
                            }
                        }
                    ?>
                 </div>
            </div>
        </div>
    </div>
</section>
</form>

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
                    </div>
                    <?php 
                        
                        include 'dbcon.php'; 
                        

                        if(isset($_POST['login'])) {
                            $phone = $_POST['phone'];
                            $password = $_POST['password'];
                            $pass1 = md5($password);
                            $phone_query = "Select * from users where phone = '$phone' and password_hash = '$pass1'";
                            $query = mysqli_query($connect , $phone_query);
                            $row = mysqli_fetch_array($query);
                            $_SESSION['user_id'] = $row['user_id'];
                            $_SESSION['name'] = $row['name'];
                            if (mysqli_num_rows($query) > 0) {           
                                echo '<meta http-equiv="refresh" content="1; URL=index.php" />';
                                
                            } else {
                                echo '
                                    <script> alert("Incorrect Phone or Password") </script>
                                ';
                            }

                        }  
                     ?>
                </form>

            </div>
        </div>
    </div>
</div>

<!--modal use for click...modal fade use for show into click -->
<div class="modal fade" id="ContractPaper">
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
                        <?php
                        include 'dbcon.php';
                        if(isset($_POST['btn'])) {

                            $U_name = $_POST['U_name'];
                            $U_id = $_POST['U_id'];
                            $L_name = $_POST['L_name'];
                            $R_amount = $_POST['R_amount'];
                            $U_address = $_POST['U_address'];
                            $C_date = $_POST['C_date'];

                                $query = "insert into contract(U_name, U_id,L_name,R_amount, U_address,C_date) values ('$U_name' ,'$U_id' ,'$L_name', '$R_amount','$U_address','$C_date')";
                                $iquery = mysqli_query($connect , $query);
                                if ($iquery) {
                                    echo '<meta http-equiv="refresh" content="1; URL=User.php" />';
                                } else {
                                    echo '<script>alert("Problems Inserting.")</script> ';
                                }

                        }
                        ?>

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
<script>
    $(document).ready(function() {
        var owl = $('.owl-carousel');
        owl.owlCarousel({
            items: 4,
            loop: true,
            margin: 10,
            autoplay: true,
            autoplayTimeout: 1000,
            autoplayHoverPause: true,
            
            responsive: {
                0: {
                    items: 1,
                   <!-- nav: true-->
                },
                600: {
                    items: 3,
                    <!--nav: false-->
                },
                1000: {
                    items: 4,
                    <!--nav: true,-->
                    <!--loop: false,-->
                    margin: 20
                }
            }
        });

    })
</script>
</body>
</html>

