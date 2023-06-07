<?php
session_start();
include "connectdb.php";
$errmsg="";
if($_SERVER["REQUEST_METHOD"] == "POST") {

    $username=$_POST['username'];
    
    $sql="select username,password from users where username='$username'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);

    if ($row["username"] == $username) {
        $_SESSION['username']=$username;
        header('Location: cart.php');
    }
    else {
        $errmsg= "Invalid Login. Please give correct username and passowrd.";
    }    

   
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
   <?php include "header.html"; ?>
    <div class="container">
        
        <!-- /.row -->
        <div class="row">
             <?php include "sidebar.html"; ?>
            <div class="col-md-3">
            </div>
            <div class="col-md-6">
                <br/> <br/> <br/>
                <h2> User Login</h2><br/>
                <br/>
                <div class="row">
                
                    <form action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                        <div class ="row">
                            <div class="col-md-2">
                                <label> Username</label>
                            </div>
                            <div class="col-md-5">
                                <input type="text" id="username" class="form-control" placeholder="Username" name="username">
                            </div>
                        </div>          
                        <div class ="row">
                                <div class="col-md-2">
                                <label> Password</label>
                            </div>
                            <div class="col-md-5">    
                                <input type="password" id="password" class="form-control"  placeholder="password"  name="password">
                            </div>
                        </div>
                        <div class ="row">
                        <input type="submit" class="btn btn-primary" value="Log In">
                        
                        <input type="reset" class="btn btn-warning" value="Reset">
                        <a href="register.php" class="btn btn-danger" >New User ? signup </a>
                        </div>
                          
                                <?php
                                if ($errmsg != NULL) {
                                        echo "<div class='alert alert-danger'>". $errmsg . "</div>";
                                }
                                ?>
                        
                        
                      </form>
                      
                </div>
               
                
            </div>
            <!-- /.col -->
            
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
   

    <!--Footer -->
 <?php include "footer.html"; ?>
   
    <!--Footer end -->
    <!--Core JavaScript file  -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!--bootstrap JavaScript file  -->
    <script src="assets/js/bootstrap.js"></script>
    <!--Slider JavaScript file  -->
    
</body>
</html>
