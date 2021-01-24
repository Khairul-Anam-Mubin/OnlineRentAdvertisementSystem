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

    <title>Searches</title>
    <link rel="stylesheet" href="asset/css/bootstrap.css"/>
    <link rel="stylesheet" href="asset/css/owl.carousel.min.css"/>
    <link rel="stylesheet" href="asset/css/owl.theme.default.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="asset/css/style.css">
</head>
<body>


<!--start navbar use fixed top-->
<nav class="navbar navbar-expand-md bg-dark navbar-dark">
    <form action="" method="post" enctype="multipart/form-data">
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
                        <li><button type="submit" name="conventionalhall" class="btn bg-transparent" value="Car Parking">Conventional Hall</button> </li>
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
<!--end navbar-->
<!--for search button-->
<section class="py-1 bg-dark"><!---->
    <form class="example" action="index.php" style="margin:auto;max-width:800px">
        <h3 style="color: white">Search Your Necessary Things</h3>
        <input type="text" placeholder="Search......" name="searchbtn">
        <button type="submit"><i class="fa fa-search"></i></button>
    </form>
</section>

<h2 class="text-center" style="color: green"> Rents Available </h2>



    <form action="" method="post" enctype="multipart/form-data">
        
    

    <?php 
        include 'dbcon.php';

        $name = $_SESSION['rr'];
        
        $query = "select * from advertises ,approved_advertises where advertises.rent_name = '$name' and approved_advertises.add_id = advertises.add_id";

        $iquery = mysqli_query($connect , $query);
        $cnt = 0;
        for ($i = 0; $row = mysqli_fetch_array($iquery) ; $i++ , $cnt++) {
            if ($i != 0 && $i % 3 == 0) {
                    echo '
                        </div>
                        </div>
                        <br>
                    ';
                }
            if ($i % 3 == 0) {
                echo '
                <div class = "container">
                <div class="row">
                    <div class="col-sm-4 py-3 py-sm-0">
                        <div class="card" >
                            <img class="card-img-top"src="data:image/jpeg;base64,'.base64_encode($row['image1']).'" alt="Card image cap">
                            <div class="card-body">

                                <h4>'.$row['rent_name'].' Rent Available Now</h4>
                                <h5>Location : '.$row['city'].'</h5>

                                <button type="submit" name = '.$i.' class="btn btn-success" >Show Details....</button>
                                <a href="" class="btn btn-dark">Taka '.$row['amount'].'/=</a>
                            </div>
                        </div>
                    </div>


                ';
                
            } else {
                echo '
                    <div class="col-sm-4 py-3 py-sm-0">
                        <div class="card" >
                            <img class="card-img-top"src="data:image/jpeg;base64,'.base64_encode($row['image1']).'" alt="Card image cap">
                            <div class="card-body">

                                <h4>'.$row['rent_name'].' Rent Available Now</h4>
                                <h5>Location : '.$row['city'].'</h5>

                                <button type="submit" name = '.$i.' class="btn btn-success" >Show Details....</button>
                                <a href="" class="btn btn-dark">Taka '.$row['amount'].'/=</a>
                            </div>
                        </div>
                    </div>

                ';
            }
            //<button type="submit" name="logout" class="btn btn-secondary" value="Car Parking">Log Out</button>
            $now[$i] = $row['add_id'];
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

