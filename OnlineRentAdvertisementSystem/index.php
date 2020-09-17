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
            <form action="">
                <div class="container">
                    <label><b>Username</b></label>
                    <input type="text" placeholder="Enter Username" name="U_name"required>
                    <br/>
                    <br/>
                    <label><b>Password</b></label>
                    <input type="password" placeholder="Enter Password" name="U_pass"required>
                    <br/>
                    <br/>
                    <button type="submit"name="btn" class="btn btn-outline-success" value="Log IN">Login</button>
                    <input type="checkbox" checked="checked"> Remember me
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

