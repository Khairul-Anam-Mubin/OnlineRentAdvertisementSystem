<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title>Registration Page</title>
    <link rel="stylesheet" href="asset/css/bootstrap.css"/>
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
                        <form action="" method="post">
                            <div class="form-group">
                                <label class="col-form-label"> Name</label>
                                <input type="text" name="U_name" class="form-control"/>
                            </div>
                            <div class="form-group">
                                <label class="col-form-label"> Gmail</label>
                                <input type="text" name="U_gmail" class="form-control"/>
                            </div>
                            <div class="form-group">
                                <label class="col-form-label"> Address</label>
                                <input type="text" name="U_address" class="form-control"/>
                            </div>
                            <div class="form-group">
                                <label class="col-form-label"> Phone Number</label>
                                <input type="number" name="U_phone" class="form-control"/>
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">Image</label>
                                <input type="file" name="U_input_image" class="form-control"/>
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">New Password</label>
                                <input type="text" name="U_New_pass" class="form-control"/>
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">Conform Password </label>
                                <input type="text" name="U_con_pass" class="form-control"/>
                            </div>
                            <div class="form-group">
                                <label class="col-form-label"></label>
                                <input type="submit" name="btn" class="btn btn-outline-success" value="Save New User Info"/>
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

