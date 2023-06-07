<?php 
session_start();
include "connectdb.php";
if(!isset($_SESSION['username']))
{
    header('Location: login.php');
}
else {
    $uname=$_SESSION['username'];
    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>eKart</title>
    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!-- Fontawesome core CSS -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
    <!--GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <!-- custom CSS here -->
    <link href="assets/css/style.css" rel="stylesheet" />
</head>
<body>
<?php include "header.php"; ?>
    <div class="container">
        <div class="row">            
        <?php include "sidebar.html" ?>
            <div class="col-md-9">
                <br/><br/><br/>
                <!-- /.row -->
                <div class="row">
                   <table class="table">
                        <thead>
                            <th>Username</th>
                            <th>Email ID</th>
                            <th>Phone</th>
                            <th>Address1</th>
                            <th>Address2</th>
                        </thead>
                        <tbody>
                            <?php
                                $sql="select * from users where username='$uname'";
                                $result = mysqli_query($con, $sql);                                
                                if (mysqli_num_rows($result) > 0) {                                  
                                while ($row= mysqli_fetch_assoc($result)){
                             ?>       
                                <tr>
                                    <td><?php echo $row["username"]; ?></td>
                                    <td><?php echo $row["email"]; ?></td>
                                    <td><?php echo $row["phone"]; ?></td>
                                    <td><?php echo $row["address1"]; ?></td>
                                    <td><?php echo $row["address2"]; ?></td> 
                                </tr>
                            <?php
                                }
                                }
                            ?>
                        </tbody>   
                                <tfoot>
                                    <tr>
                                    <td><a href ="updatepass.php" class="btn btn-primary" > Update Password</a></td>
                                        <td><a href ="updateaddress.php" class="btn btn-primary" > Update Address</a> </td>
                                        </tr>
                                </tfoot> 
                    </table>
                </div>                
            </div>
        </div>
    </div>
   <?php include "footer.html"; ?>
    <!--Core JavaScript file  -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!--bootstrap JavaScript file  -->
    <script src="assets/js/bootstrap.js"></script>
    <!--Slider JavaScript file  -->
    
</body>
</html>
