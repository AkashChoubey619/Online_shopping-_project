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

    $add1=$_POST['add1'];
    $add2=$_POST['add2'];
   
    $sql = "UPDATE `users` SET `address1`='$add1', `address2` = '$add2' WHERE `username`='$uname'";
    
    $result = mysqli_query($con, $sql);
       if ($result){
           $errmsg="Address Successfully Updated. <a href='myaccountuser.php'>Go to Profile </a>" ;

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
                <h2> Address Book</h2>
                <!-- /.row -->
                   <form class="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method ="POST">
                     First Address
                    <input type="text" class="form-control" name="add1" placeholder="Address 1"><br/>
                    Second Address
                    <input type="text" class="form-control" name="add2" placeholder="Address 2"><br/>
                                          
                    <input type="submit" class="btn btn-primary" value="Update Adress" >
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
        <!-- /.row -->
    </div>
    
    <?php include "footer.html"; ?>
    <!--Core JavaScript file  -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!--bootstrap JavaScript file  -->
    <script src="assets/js/bootstrap.js"></script>
    <!--Slider JavaScript file  -->
    
</body>
</html>
