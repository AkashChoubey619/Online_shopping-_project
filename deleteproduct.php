<?php

session_start();

include "connectdb.php";
$errmsg="";
if(!isset($_SESSION['username']))
{
    header('Location: login.php');
}
else {
    $uname=$_SESSION['username'];
    
}


   
    $id=$_GET['id'];
    
    $sql="DELETE from cart where id=$id";
    
    $result = mysqli_query($con, $sql);
    echo $sql;
   if ($result){
       $errmsg="Product Deleted. <a href='cart.php'>Go to Cart</a> " ;

   }
   else{
    $errmsg="OOps Some error occured";
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
            <div class="col-md-3">
            </div>
            <div class="col-md-6">
                <br/> <br/> <br/>
                
                <br/>
                <div class="row">
                    <div class="alert alert-success">
                        <?php echo $errmsg; ?>
                    </div>                   
                </div>
            </div>
        </div>
        <!-- /.row -->
    </div>
   
    <!--Footer -->
    <?php include "footer.html"; ?>
    <!--Footer end -->
    <!--Core JavaScript file  -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!--bootstrap JavaScript file  -->
    <script src="assets/js/bootstrap.js"></script>
    
</body>
</html>
