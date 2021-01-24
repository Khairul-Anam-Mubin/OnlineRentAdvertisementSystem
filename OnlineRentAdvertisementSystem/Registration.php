<?php  

session_start();
 include 'dbcon.php'; 
 
 if(isset($_POST['submit'])) {  

    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $image = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));  
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $create_date = date("Y-m-d",time());
    //$pass1 = md5($password); 
    //$pass2 =  md5($cpassword); 
    $password_hash = md5($password);
    $phone_query = "Select * from users where phone = '$phone'";
    $query = mysqli_query($connect , $phone_query);
    if (mysqli_num_rows($query) > 0) {
        echo '
            <script>alert("Phone number already used before!! Try again with another number")</script>
        ';
    } else if ($password != $cpassword) {
        echo '
            <script>alert("Password Mismatch")</script>
        ';
    } else {
        $query = "insert into users(phone, email, name, address, image, password_hash, create_date) values ('$phone' ,'$email' ,'$name' ,'$address', '$image','$password_hash','$create_date')";
        $iquery = mysqli_query($connect , $query);
        if ($iquery) {
            echo '<meta http-equiv="refresh" content="1; URL=index.php" />';
        } else {
            echo '
                <script>alert("Problems Inserting.")</script>
            ';
        }
    }
 }
 if (empty($_SESSION['user_id'])) {
        $_SESSION['user_id'] = "";
    }
    if (isset($_POST['flat'])) {           
        $_SESSION['rr'] = 'Flat';
        echo '<meta http-equiv="refresh" content="1; URL=Searches.php" />';                   
    } 
    if (isset($_POST['hostel'])) {           
        $_SESSION['rr'] = 'Hostel';
        echo '<meta http-equiv="refresh" content="1; URL=Searches.php" />';                   
    } 
    if (isset($_POST['sublet'])) {           
        $_SESSION['rr'] = 'Sublet';
        echo '<meta http-equiv="refresh" content="1; URL=Searches.php" />';                   
    } 
    if (isset($_POST['shop'])) {           
        $_SESSION['rr'] = 'Shop';
        echo '<meta http-equiv="refresh" content="1; URL=Searches.php" />';                   
    } 
    if (isset($_POST['garage'])) {           
        $_SESSION['rr'] = 'Garage';
        echo '<meta http-equiv="refresh" content="1; URL=Searches.php" />';                   
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
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title>Registration Page</title>
    <link rel="stylesheet" href="asset/css/bootstrap.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
             
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
<!--end navbar-->
<div class="jumbotron">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card rounded-0">
                    <div class="card-header">
                        <h1>Registration</h1>
                        Please fill all the field carefully.
                    </div>
                    <div class="card-body">
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label class="col-form-label"> Name</label>
                                <input type="text" name="name" class="form-control" required/>
                            </div>
                            <div class="form-group">
                                <label class="col-form-label"> Email</label>
                                <input type="text" name="email" class="form-control" required/>
                            </div>
                            <div class="form-group">
                                <label class="col-form-label"> Address</label>
                                <input type="text" name="address" class="form-control" required/>
                            </div>
                            <div class="form-group">
                                <label class="col-form-label"> Phone Number</label>
                                <input type="number" name="phone" class="form-control" required/>
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">Image</label>
                                <input type="file" name="image" id="image" class="form-control" required/> 
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">New Password</label>
                                <input type="text" name="password" class="form-control" required/>
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">Confirm Password </label>
                                <input type="text" name="cpassword" class="form-control" required/>
                            </div>
                            <div class="form-group">
                                <label class="col-form-label"></label>
                                <input type="submit" name="submit" class="btn btn-outline-success" value="Save New User Info"/>
                            </div>
                        </form>

                    </div>
                    <div class="card-footer">

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="asset/js/jquery-3.5.1.js"></script>
<script src="asset/js/owl.carousel.js"></script>
<script src="asset/js/bootstrap.bundle.js"></script>
<script src="asset/js/bootstrap.js"></script>
</body>
</html>
