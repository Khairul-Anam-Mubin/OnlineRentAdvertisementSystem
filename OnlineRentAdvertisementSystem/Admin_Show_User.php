<?php
require_once './app/classes/Information.php ';
use App\classes\Information;

$information=new Information();

if(isset($_GET['status']))
{
    $information->deleteUserInfo($_GET['user_id']);

}

$receivedResult = $information->GetUserInfo();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title>View User Profile</title>
    <link rel="stylesheet" href="asset/css/bootstrap.css"/>
</head>
<body>
<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
    <ul class="navbar-nav">
        <li><a href="index.php" class="nav-link">Home</a> </li>
        <li><a href="Admin_Show_User.php" class="nav-link">View User Profile</a> </li>
        <li><a href="Admin_Show_Ad.php" class="nav-link">View Advertise</a> </li>
    </ul>
</nav>
<div class="jumbotron">
    <div class="container">
        <div class="row">
            <div class="col-md-10 mx-auto">
                <div class="card rounded-0">
                    <div class="card-header">
                        All Users info goes here
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-hover">
                            <tr>
                                <th>User Id</th>
                                <th>User Name</th>
                                <th>User Email</th>
                                <th>User Phone</th>
                                <th>Address</th>
                                <th>Action</th>
                            </tr>
                            <?php while ($row= mysqli_fetch_assoc($receivedResult)) { ?><!--  data get or find into $receiveResult -->
                                <tr>
                                    <td><?php echo $row['user_id'];?></td>
                                    <td><?php echo $row['name'];?></td>
                                    <td><?php echo $row['email'];?></td>
                                    <td><?php echo $row['phone'];?></td>
                                    <td><?php echo $row['address'];?></td>
                                    <td>
                                        <a href="?status=delete&&id=<?php echo $row['user_id'];?>" class="btn btn-danger"onclick="return confirm('Are you sure to delete this !!');">Delete</a><!-- ?=get ,status=index,delete=value -->
                                    </td>
                                </tr>
                            <?php } ?>
                        </table>



                    </div>
                    <div class="card-footer">

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="asset/js/bootstrap.bundle.js"></script>>;
<script src="asset/js/bootstrap.js"></script>>;
</body>
</html>

