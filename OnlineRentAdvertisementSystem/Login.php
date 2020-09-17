<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title>Login Page</title>
    <link rel="stylesheet" href="asset/css/bootstrap.css"/>
</head>
<body>
<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
    <div class="container">
        <ul class="navbar-nav">
            <li><a href="index.php" class="nav-link">Home</a> </li>
            <li><a href="Registration.php" class="nav-link">Registration</a> </li>
            <li><a href="Login.php" class="nav-link">Log In</a> </li>
        </ul>
     </div>
</nav>
<div class="jumbotron">
    <div class="container">
        <div class="modal-header">
            <div class="imgcontainer">
                <img src="asset/img/logo.png"
                     alt="Avatar" class="avatar">
                <h2>Login Form</h2>
            </div>

            <!--Step 1 : Adding HTML-->
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
                    <button type="submit"name="login" class="btn btn-outline-success" value="Log IN">Login</button>
                    <input type="checkbox" checked="checked"> Remember me

                </div>
                <?php 
                        include 'dbcon.php'; 
                        if(isset($_POST['login'])) {
                            $phone = $_POST['phone'];
                            $password = $_POST['password'];
                            $phone_query = "Select * from users where phone = '$phone' and password_hash = '$password'";
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



<script src="asset/js/bootstrap.bundle.js"></script>;
<script src="asset/js/bootstrap.js"></script>;
</body>
</html>

