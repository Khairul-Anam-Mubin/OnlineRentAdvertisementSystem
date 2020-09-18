
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title>Advertises Page</title>
    <link rel="stylesheet" href="asset/css/bootstrap.css"/>
</head>
<body>
<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
    <div class="container">
        <a href="" class="navbar-brand">
            <img src="asset/img/logo.png">
        </a>

        <ul class="navbar-nav">
            <li><a href="User.php" class="nav-link">Home</a> </li>
            <li><a href="#" class="nav-link">Advertises</a> </li>
        </ul>


    </div>
</nav>
<div class="jumbotron">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card rounded-0">
                    <div class="card-header">
                        <h1>Advertises</h1>
                        Please fill all the field carefully.
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="form-group" id="">
                                <label for="sel1">Rent Type:</label>
                                <select class="form-control" id="">
                                    <option>Home Rent</option>
                                    <option>Commercial Properties</option>
                                    <option>Transportation</option>
                                    <option>Grand Floor</option>
                                    <option>Occasionally Decoration</option>
                                </select>
                                <br>
                            </div>
                            <div class="form-group" id="">
                                <label for="sel1">Rent Name:</label>
                                <select class="form-control" id="">
                                    <option>Float</option>
                                    <option>Sublet</option>
                                    <option>Hostel</option>
                                </select>
                                <br>
                            </div>
                            <div class="form-group">
                                <label class="col-form-label"> District</label>
                                <input type="text" name="district" class="form-control"required/>
                            </div>
                            <div class="form-group">
                                <label class="col-form-label"> City</label>
                                <input type="text" name="" class="form-control"required/>
                            </div>
                            <div class="form-group">
                                <label class="col-form-label"> Area</label>
                                <input type="text" name="" class="form-control"required/>
                            </div>
                            <div class="form-group">
                                <label class="col-form-label"> Amount</label>
                                <input type="number" name="U_gmail" class="form-control"required/>
                            </div>

                            <div class="form-group">
                                <label class="col-form-label"> Gmail</label>
                                <input type="text" name="U_gmail" class="form-control"required/>
                            </div>
                            <div class="form-group">
                                <label class="col-form-label"> Phone Number</label>
                                <input type="number" name="U_phone" class="form-control"required/>
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">Image1</label>
                                <input type="file" name="U_input_image1" class="form-control"required/>
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">Image2</label>
                                <input type="file" name="U_input_image2" class="form-control"required/>
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">Image3</label>
                                <input type="file" name="U_input_image3" class="form-control"required/>
                            </div>
                            <div class="form-group"> <!-- Date input -->
                                <label class="control-label" for="date">Available Date</label>
                                <input class="form-control" id="date" name="date" placeholder="MM/DD/YYY" type="text"/>
                            </div>

                            <div class="form-group">
                                <label class="control-label" for="date">Duration Date(Days)</label>
                                <input class="form-control" id="date" name="date" placeholder="" type="text"/>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="date">Description</label><br>
                                <textarea rows="4" cols="50" name="comment" form="usrform " placeholder="Write in details"></textarea>
                            </div>


                            <div class="form-group">
                                <label class="col-form-label"></label>
                                <input type="submit" name="btn" class="btn btn-outline-success" value="Make Advertises"/>
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


