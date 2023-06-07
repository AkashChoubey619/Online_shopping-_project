<?php
session_start();
include "connectdb.php";
$errmsg="";
if($_SERVER["REQUEST_METHOD"] == "POST") {

    $username=$_POST['username'];
    $password=$_POST['password'];
    $phone=$_POST['phone'];
    $emailid=$_POST['emailid'];
    $name=$_POST['fname'];
    $sql="INSERT INTO `users`(`username`, `password`, `email`, `phone`) VALUES ('$username','$password','$emailid','$phone')";
    $result = mysqli_query($con, $sql);
   if ($result){
       $errmsg="User created Successfully. <a href='login.php'>Go to login</a> " ;

   }
   else{
    $errmsg="OOps Some error occured";
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
            <?php include "sidebar.html" ?>
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
                                <label> Name</label>
                            </div>
                            <div class="col-md-5">
                                <input type="text" id="name" name="fname" class="form-control" >
                            </div>
                        </div>
                        <div class ="row">
                            <div class="col-md-2">
                                <label> phone</label>
                            </div>
                            <div class="col-md-5">
                                <input type="text" id="phone" name = "phone" class="form-control" >
                            </div>
                        </div>
                        <div class ="row">
                            <div class="col-md-2">
                                <label> Username</label>
                            </div>
                            <div class="col-md-5">
                                <input type="text" id="username" name="username" class="form-control">
                            </div>
                        </div> 
                        <div class ="row">
                            <div class="col-md-2">
                                <label> Password</label>
                            </div>
                            <div class="col-md-5">
                                <input type="text" id="password" name="password" class="form-control" >
                            </div>
                        </div>          
                        <div class ="row">
                                <div class="col-md-2">
                                <label> Email ID</label>
                            </div>
                            <div class="col-md-5">    
                                <input type="email" id="email" name="emailid" class="form-control" >
                            </div>
                        </div>
                        <div class ="row">
                        <input type="submit" class="btn btn-primary" value="Register" name="submit">
                        
                        <input type="reset" class="btn btn-warning" value="Reset">
                        <a href="login.php" class="btn btn-danger" >Already Have account ? Login </a>
                        </div>
                        <?php
                                if ($errmsg != NULL) {
                                        echo "<div class='alert alert-warning'>". $errmsg . "</div>";
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
   
<?php include "footer.html"; ?>
    <!-- /.col -->
    <!--Footer end -->
    <!--Core JavaScript file  -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!--bootstrap JavaScript file  -->
    <script src="assets/js/bootstrap.js"></script>
    <!--Slider JavaScript file  -->
    
</body>
</html>
