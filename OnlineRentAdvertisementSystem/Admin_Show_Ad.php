<?php

session_start();

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title>View Ads</title>
    <link rel="stylesheet" href="asset/css/bootstrap.css"/>
</head>
<body>
<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
    <ul class="navbar-nav">
        
        <li><a href="Admin_Show_User.php" class="nav-link">View Users</a> </li>
        <li><a href="Admin_Show_Ad.php" class="nav-link">View Advertises</a> </li>
        <li><a href="index.php" class="btn btn-danger">Log Out</a>
    </ul>
</nav>
<div class="jumbotron">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mx-auto">
                <div class="card rounded-0">
                    <div class="card-header">
                        All Pending Ads info goes here
                    </div>
                    <form action="Admin_Show_Ad.php" method="post" enctype="multipart/form-data">
                    <div class="card-body">
                        <table class="table table-bordered table-hover">
                            <tr>
                                <th>Rent Add Id</th>
                                <th>Rent Type</th>
                                <th>Rent Name</th>
                                <th>Rent Area</th>
                                <th>Rent Amount</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Available Date</th>
                                <th>Description</th>
                                <th>image</th>
                                <th>Action</th>

                            </tr>
                             
                            <?php
                                include 'dbcon.php';
                                    
                                $query="select * from advertises , pending_advertises where advertises.add_id = pending_advertises.add_id";
                                $query_run=mysqli_query($connect,$query);
                                $button_no = 0;
                                $button_no1 = 0;

                                while ($row=mysqli_fetch_array($query_run)) {
                                    $del[$button_no] = $row['add_id'];
                                    $add[$button_no1] = $row['add_id'];
                                    echo '
                                    <tr>
                                        <td>'.$row['add_id'].'</td>
                                        <td>'.$row['rent_type'].'</td>
                                        <td>'.$row['rent_name'].'</td>
                                        <td>'.$row['area'].'</td>
                                        <td>'.$row['amount'].'</td>
                                        <td>'.$row['email'].'</td>
                                        <td>'.$row['phone'].'</td>
                                        <td>'.$row['available_date'].'</td>
                                        <td>'.$row['description'].'</td>
                                        <td>
                                            <img src="data:image/jpeg;base64,'.base64_encode($row['image1']).'" height="100" width="150" class="img-thumnail" />
                                        </td>
                                        <td>
                                            <div class="form-group">
                                            <label class="col-form-label"></label>
                                            <input type="submit" name="'.$button_no.'" class="btn  btn-outline-success" value="Delete"/>
                                            <input type="submit" name="'.$button_no1.'" class="btn  btn-outline-success" value="ADD"/>
                                            </div>
                                        </td>

                                    </tr>

                                    ';

                                    $button_no++;
                                    $button_no1++;
                                }
                                $deleted = 0;
                                $added = 0;
                                for ($i = 0; $i < $button_no; $i++) {
                                    if (isset($_POST[$i])) {
                                        $deleted = $del[$i];
                                        break;
                                    }
                                }
                                for ($i = 0; $i < $button_no1; $i++) {
                                    if (isset($_POST[$i])) {
                                        $added = $add[$i];
                                        break;
                                    }
                                }

                                if ($added != 0) {
                                    $qur = "select * from advertises where add_id = '$added'";
                                    $query =mysqli_query($connect,$qur);
                                    $ff = mysqli_fetch_array($query);
                                    $u_id = $ff['user_id'];
                                    $qur = "insert into approved_advertises (add_id , user_id) values ('$added' , '$u_id')";
                                    $query = mysqli_query($connect , $qur);

                                    $qur = "delete from pending_advertises where add_id = '$added'";
                                    $query = mysqli_query($connect , $qur);
                                } else if ($deleted != 0) {
                                    $qur = "delete from pending_advertises where add_id = '$deleted'";
                                    $query = mysqli_query($connect , $qur);
                                }
                            ?>
                        </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="asset/js/bootstrap.bundle.js"></script>
<script src="asset/js/bootstrap.js"></script>
</body>
</html>