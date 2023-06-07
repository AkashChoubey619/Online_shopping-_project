<?php 
session_start();
include "connectdb.php";
$uname="";
if(isset($_SESSION['username']))
{
    
    $uname=$_SESSION['username'];
    
}
$cid=$_GET['cid'];

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
    <?php 
                            
        if($uname)
        {
            include "header.php";
        }

        else {
            include "header.html";
        }
                             
        ?>    

    <div class="container"> 
        <div class="row">
        <?php include "sidebar.html" ?>
            <div class="col-md-9">
            </div>
            <div class="col-md-9">               
                <div class="row">                   
                    
                   <table class="table">
                        <thead>
                            <th>Product Code</th>
                            <th></th>
                            <th>Product Name</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Action</th>

                        </thead>
                         <tbody>
                        <?php
                          $sql="select * from products where cid=$cid";
                                        $result = mysqli_query($con, $sql);
                                        
                                        if (mysqli_num_rows($result) > 0) {
                                          
                                        while ($row= mysqli_fetch_assoc($result)){
                                     ?>       
                                        <tr>
                                            <td><?php echo $row["pid"]; ?></td>
                                            <td><img src = 'assets/img/<?php echo $row["pcode"]; ?>.jpg' height='50' width='50'></td>
                                            <td><?php echo $row["productname"]; ?></td>
                                            <td><?php echo $row["price"]; ?></td>
                                            <td><form action="addtocart.php" method ="POST"><?php echo "<input type='number' name='quantity' value='1' min='1'>" ?></td>
                                             <td>
                                                <input type="hidden" value="<?php echo $row['productname'];?>" name="productname">
                                                 <input type="hidden" value="<?php echo $row['price'];?>" name="price">
                                                  
                                                <input type="submit" class="btn btn-primary" value="Add to Cart" ></form></td>
                                                <td><a href="viewdetails.php?pid=<?php echo $row['pid'];?>" class="btn btn-success">View Details</a></td>                                    
                                        </tr>
                                    <?php
                                        }
                                        } else {
                                      
                        
                        ?>
                    </tbody>
                    <tfoot>
                        <?php echo "<h3>NO products found</h3>";  } ?> 
                    </tfoot>
                    </table>
                    
                </div>
            </div>
        </div>
    </div>
<?php include "footer.html" ?>

    <!--Core JavaScript file  -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!--bootstrap JavaScript file  -->
    <script src="assets/js/bootstrap.js"></script>
    <!--Slider JavaScript file  -->
    
</body>
</html>
