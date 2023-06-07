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
        
        <!-- /.row -->
        <div class="row">
            <?php include "sidebar.html"; ?>
            <!-- /.col -->
            <div class="col-md-1">
            </div>
            <div class="col-md-8">
                <br/> <br/> <br/>
                <h2> My Cart</h2><br/>
                <br/>
                <div class="row">
                
                    <table class="table">
                        <thead>
                            <th>Product Name</th>
                            <th>Quantity</th>
                            <th>Amount</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            <?php
                                $q = "SELECT * FROM cart where username='$uname'";
                                $result = mysqli_query($con, $q);  
                                
                                if (mysqli_num_rows($result) > 0) {
                                  
                                while ($row= mysqli_fetch_assoc($result)){
                                    $id=$row["id"];
                             ?>       
                                <tr>
                                    <td><?php echo $row["productname"]; ?></td>
                                    <td><?php echo $row["quantity"]; ?></td>
                                    <td><?php echo $row["amount"]; ?></td>
                                    <td><a href="deleteproduct.php?id=<?php echo $id; ?>" class="btn btn-danger">Delete</td>
                                </tr>
                            <?php
                                }
                                }
                                else{
                                    echo "<tr><td colspan='4' style='color:red; font-size:30px;'>Cart is Empty</td></tr>";
                                }
                            ?>
                        </tbody>   
                        <tfoot>
                            <tr>
                                 <td colspan="3">Total Amount : </td>
                                <td>
                                    <?php
                                        $q = "SELECT sum(amount) as total FROM cart where username='$uname'";
                                        $result = mysqli_query($con, $q);  
                                       
                                        if (mysqli_num_rows($result) > 0)  {
                                            $row= mysqli_fetch_assoc($result);
                                            echo $row['total']; 
                                        }
                                 ?>
                                 </td>
                             </tr>
                             <tr>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                 <td ><input type="button" class="btn btn-success" value="Check Out"></td>
                             </tr>
                        </tfoot>          
                    </table>

                      
                </div>
               
                
            </div>
            <!-- /.col -->
            
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
   

    <!--Footer -->
    <?php include "footer.html"; ?>
    
    <!--Core JavaScript file  -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!--bootstrap JavaScript file  -->
    <script src="assets/js/bootstrap.js"></script>
    <!--Slider JavaScript file  -->
    
</body>
</html>
