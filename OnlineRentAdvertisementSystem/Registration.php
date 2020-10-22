<?php  
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
            echo '<meta http-equiv="refresh" content="1; URL=User.php" />';
        } else {
            echo '
                <script>alert("Problems Inserting.")</script>
            ';
        }
    }
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
