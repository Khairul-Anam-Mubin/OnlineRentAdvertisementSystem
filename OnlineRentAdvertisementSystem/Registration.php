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
<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
    <div class="container">
        <a href="" class="navbar-brand">
            <img src="asset/img/logo.png">
        </a>

            <ul class="navbar-nav">
                <li><a href="index.php" class="nav-link">Home</a> </li>
                <li><a href="Registration.php" class="nav-link">Registration</a> </li>
                <li><a href="login.php" class="nav-link">Log In</a> </li>
            </ul>


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
<script src="asset/js/bootstrap.bundle.js"></script>;
<script src="asset/js/bootstrap.js"></script>;
</body>
</html>
