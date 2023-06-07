<?php 
session_start();
include "connectdb.php";
 $pid = $_GET['pid'];
if(isset($_SESSION['username']))
{   

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
        <!-- /.row -->
        <div class="row">
            <?php include "sidebar.html"; ?>
            <!-- /.col -->
            <div class="col-md-1">
            </div>
            <div class="col-md-8">
                <br/> <br/> <br/>
                <h2> Product Details</h2><br/>
                <br/>
                <div class="row">                
                    <table class="table">
                        
                        
                            <?php
                                $q = "SELECT * FROM products where pid='$pid'";
                                $result = mysqli_query($con, $q); 
                                
                                if (mysqli_num_rows($result) > 0) {                                  
                                while ($row= mysqli_fetch_assoc($result)){
                                    $id=$row["pid"];
                             ?>       
                                <tr>
                                    <td style="color:blue; font-size: 30px;"><?php echo $row["productname"]; ?></td>
                                    <td><img src = 'assets/img/<?php echo $row["pcode"]; ?>.jpg' height='200' width='200'></td>                                    
                                </tr>
                                <tr>
                                    <td><?php echo $row["description"]; ?></td>                                    
                                </tr>
                                <tr>
                                    <td style="color:red; font-size: 30px;">Rs. <?php echo $row["price"]; ?></td>     <td><form action="addtocart.php" method ="POST"><?php echo "<input type='number' name='quantity' value='1' min='1'>" ?></td>
                                     <td>
                                        <input type="hidden" value="<?php echo $row['productname'];?>" name="productname">
                                         <input type="hidden" value="<?php echo $row['price'];?>" name="price">
                                          
                                        <input type="submit" class="btn btn-primary" value="Add to Cart" ></form></td>                               
                                </tr>
                            <?php
                                }
                                }
                                
                            ?>
                                                       
                    </table>
                </div>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
   

    <?php include "footer.html"; ?>
    <!--Core JavaScript file  -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!--bootstrap JavaScript file  -->
    <script src="assets/js/bootstrap.js"></script>
    <!--Slider JavaScript file  -->
    
</body>
</html>
