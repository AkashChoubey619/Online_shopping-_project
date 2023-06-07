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
$errmsg="";
if($_SERVER["REQUEST_METHOD"] == "POST") {

    $oldpassword=$_POST['oldpassword'];
    $newpassword=$_POST['newpassword'];   
  
    $sql = "UPDATE `users` SET `password`='$newpassword' WHERE `username`='$uname'";
    
    $result = mysqli_query($con, $sql);
       if ($result){
           $errmsg="Password Successfully Updated. <a href='login.php'>Go to login </a>" ;

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
<?php include "header.php"; ?>
    <div class="container">
        
        <!-- /.row -->
        <div class="row">
            
        <?php include "sidebar.html" ?>
            <div class="col-md-2">
                
            </div>

            <div class="col-md-4">
                <br/><br/><br>
                <h2> Update profile password</h2>
                <!-- /.row -->
                
                     
                    
                   <form class="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method ="POST">
                   <input type="email"  name="email" class="form-control" placeholder="Email ID"><br>
                    
                    <input type="password" class="form-control" name="oldpassword" placeholder="Old Password"><br/>
                    <input type="password" class="form-control" name="newpassword" placeholder="New password"><br/>
                                          
                    <input type="submit" class="btn btn-primary" value="Update Password" >
                    </form>
                    
                 
                    <?php if($errmsg) { 
                    ?>
                         <div class="alert alert-info">
                    <?php
                        echo $errmsg;
                    
                    ?>
                      
                    </div>
                    <?php 
                        }
                        ?>                    
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
