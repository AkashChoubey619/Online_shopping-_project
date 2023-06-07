
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
            <div class="col-md-9">
                
                
                <!-- /.row -->
                <div class="row">
                    <div class="col-md-4 text-center col-sm-6 col-xs-6">
                        <div class="thumbnail product-box">
                            <img src="assets/img/phone1.jpg" alt="" />
                            <div class="caption">
                                <h3><a href="mobile.php">Mobiles </a></h3>
                                
                                <p><a href="product.php?cid=1" class="btn btn-primary" >View All products</a> </p>
                            </div>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-md-4 text-center col-sm-6 col-xs-6">
                        <div class="thumbnail product-box">
                            <img src="assets/img/kids1.jpg" alt="" />
                            <div class="caption">
                                <h3><a href="kidswear.php">Baby Products </a></h3>
                                
                                <p><a href="product.php?cid=4" class="btn btn-primary" >View All products</a> </p>
                            </div>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-md-4 text-center col-sm-6 col-xs-6">
                        <div class="thumbnail product-box">
                            <img src="assets/img/laptop.png" alt="" />
                            <div class="caption">
                                <h3><a href="laptops.php">Laptops </a></h3>
                                
                                <p><a href="product.php?cid=2" class="btn btn-primary" >View All products</a> </p>
                            </div>
                        </div>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
               
                
            </div>
            <!-- /.col -->
            <!-- /.col -->
            <div class="col-md-9">
               
                <div class="row">
                    <div class="col-md-4 text-center col-sm-6 col-xs-6">
                        <div class="thumbnail product-box">
                            <img src="assets/img/shirt1.jpg" alt="" />
                            <div class="caption">
                                <h3><a href="menswear.php">Men's Shirts </a></h3>
                                
                                <p><a href="product.php?cid=7" class="btn btn-primary" role="button">View All products</a> </p>
                            </div>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-md-4 text-center col-sm-6 col-xs-6">
                        <div class="thumbnail product-box">
                            <img src="assets/img/phone2.png" alt="" />
                            <div class="caption">
                                <h3><a href="tablets.php">Tablets </a></h3>
                               
                                <p><a href="product.php?cid=6" class="btn btn-primary" role="button">View All products</a> </p>
                            </div>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-md-4 text-center col-sm-6 col-xs-6">
                        <div class="thumbnail product-box">
                            <img src="assets/img/saree1.jpg" alt="" />
                            <div class="caption">
                                <h3><a href="womenswear.php"> Women Sarees </a></h3>
                                
                                <p><a href="product.php?cid=3" class="btn btn-primary" role="button">View All products</a> </p>
                            </div>
                        </div>
                    </div>
                    <!-- /.col -->
                </div>
                  
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
   <?php include "footer.html" ?>
 
    <!--Core JavaScript file  -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!--bootstrap JavaScript file  -->
    <script src="assets/js/bootstrap.js"></script>
    <!--Slider JavaScript file  -->
    
</body>
</html>
