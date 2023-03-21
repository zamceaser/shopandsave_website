<?php

session_start();

        include("connection.php");
        include("functions.php");

        $user_data = check_login($con);
        include("categorizer.php");

        if(isset($_POST['add']))
        {
            //print_r($_POST['product_id']);
            if(isset($_SESSION['cart']))
            {
                $item_array_id = array_column($_SESSION['cart'], "product_id");

                if(in_array($_POST['product_id'],$item_array_id))
                {
                    echo "<script> alert('Product already in cart...') </script>";
                    echo "<script> window.location = 'index1.php' </script>";
                }else{
                    $count = count($_SESSION['cart']);
                    $item_array = array(
                    'product_id'=>$_POST['product_id']
                );
                    echo "<script> alert('Product added. Set your desired quantity in Cart...') </script>";
                    $_SESSION['cart'][$count] = $item_array;
        //            print_r($_SESSION['cart']);
                }
            }else{
                $item_array = array(
                    'product_id'=>$_POST['product_id']
                );

                //session variable 
                $_SESSION['cart'][0] = $item_array;
                print_r($_SESSION['cart']);


            }
    
        }

?>

<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Shop n Save | Home</title>
		<script src="https://kit.fontawesome.com/365de3e27b.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="styles.css" type="text/css"/>
		<link rel="icon" href="Images/icon.png" />
        
        <!---------google fonts---------->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        
       
	</head>

	<body>
	<!-------------Header---------------->
	<div class="header">
			
			<div class="top-header">
				<div class="social-link">
					
				    <a href="https://www.facebook.com/Shop-N-Save-Supermarket-197261370473503/" target="_blank"><img src="Images/facebook.png" alt="facebooks logo" /></a>
					
				</div>
				<ul class="nav">
					<li> <a href="index1.php"> <img src="Images/home.png"/> Home </a></li>
					<li> <a> <img src="Images/locate.png"/>Locations</a>
						<div class="sub-menu">
							<ul>
								<li> <a href="Central1.php">Central</a></li>
								<li> <a href="Western1.php">Western</a></li>
								<li> <a href="Northern1.php">Northern</a></li>
							</ul>
						</div>
					</li>
				</ul>
				<div class="logo">
					<a href="index1.php"> <img src="Images/logo.png" alt="ShopandSave Logo"> </a>
				</div>
				<ul class="nav">
                    <li class="active"> <a href="about1.php"><img src="Images/about.png"/> About Us </a></li>
					<li> <a><img src="Images/account.png" /><b>Hello, <?php echo $user_data['fname']; ?> </b></a>			
						<div class="sub-menu">
							<ul>
								<li> <a href="accounts.php">Account Management</a> </li>
								<li> <a href="order.php">Orders</a> </li>
								<li> <a href="wishlist.php">Wishlist</a> </li>
								<li> <a href="logout.php"> Log out</a> </li>
							</ul>
                            
                            <!--login/register script-->
                            <script>
                                //Login
                                // Get the modal
                                var modal = document.getElementById('id01');
                                var modal1 = document.getElementById('id02');

                                // When the user clicks anywhere outside of the modal, close it
                                window.onclick = function(event) {
                                    if (event.target == modal) {
                                        modal.style.display = "none";
                                    }
                                }
                                
                            </script>
						</div>
					</li>
					 
                    
				</ul>
                <div class="cart">
                        <a href="cart1.php"><img src="Images/cart.png"/> <?php 
                            if(isset($_SESSION['cart']))
                            {
                                $count = count($_SESSION['cart']);
                                echo "<span id=\"cart_count\" class=\"cartt\">$count</span>";
                            }else{
                                echo "<span id=\"cart_count\"> 0 </span>";
                            }
                        ?></a>
                    </div>
				<div>
					<form class="search-box" action="search.php" method="post">
                        <input class="search-txt" type="text" name="search" placeholder="Search for Groceries....."/>
                        <a class="search-btn" hrerf="#">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </a>
                    </form>
				</div>
			</div>
		
        
        
        
        
        <!--Bottom Header-->
	  		<div class="bottom-header">
				<ul>
					<li class="cate"><a href="#"><img src="Images/menu.png" alt="category menu icon"/></a>
                        <div class="cate-menu">
							<ul>
								<li> <a href="categories1.php?cat_id=<?php echo 1;?>">Fresh Produce</a></li>
								<li> <a href="categories1.php?cat_id=<?php echo 2;?>">Frozen</a></li>
								<li> <a href="categories1.php?cat_id=<?php echo 3;?>">Drinks</a></li>
								<li> <a href="categories1.php?cat_id=<?php echo 4;?>">Hygiene</a></li>
								<li> <a href="categories1.php?cat_id=<?php echo 5;?>">Dairy</a></li>
								<li> <a href="categories1.php?cat_id=<?php echo 6;?>">Snacks</a></li>
								<li> <a href="categories1.php?cat_id=<?php echo 7;?>">Homeware</a></li>
								<li> <a href="categories1.php?cat_id=<?php echo 8;?>">Dried Goods</a></li>
							</ul>
						</div>
                    </li>
					<li class="prod"><a href="products1.php">All Products</a></li>
				</ul>
				<div class="search-box2">
					<input class="search-txt2" type="text" name="" placeholder="Search Shop and Save....."/>
					<a class="search-btn2" href="#">
						<i>Search</i>
					</a>
				</div>
                <div>
                    <ul class="wish">
					<li><a href="wishlist.php"><img class="grayscale" src="Images/wishlist.png" alt="wishlist icon"/></a></li>
				    </ul>
                </div>
                
                <div class="care"> 
                    <img class="care" src="Images/customer.png" alt="customer support"/>
                </div>
                
                <div class="nav-header">
                    <ul>
                        <li> <a href="deal1.php"> Best Deals </a></li>
                        <li> <a href="sells1.php"> Best Selling </a></li>
                        <li> <a href="views1.php"> Most Viewed </a></li>
                        <li> <a href="exclusives1.php"> Exclusive Items </a></li>
                    </ul>
                </div>
                
			</div>
            
	</div>

        
        
	<!-------------Content---------------->
	        <div class="content">


            <div class="pack" style="margin-top:250px;">

                <div class="row1">
                  <div class="column1">

                    <img class="proddata" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row[$id]['prod_image']); ?>" />
                  </div>
                  <div class="column1" >
                    <form method="POST">
                        <p style="color:grey;">Category > <a style="color: grey;text-decoration: none;" href="<?php echo $cate?>.php"><?php echo $row1[0]['cat_name'] ?></a></p>
                        <h1><?php echo $row[$id]['prod_name']; ?></h1><br><hr style="height: 1px;background-color: grey;border: none;" > 
                        <p style="font-size:20px;"><b> $<?php echo $row[$id]['prod_cost']; ?></b> <br></p>
                        
                        <p style="color:grey;margin-top:5px;">Stock: <?php echo $row[$id]['prod_stock']; ?></p>
                        <button class="thebut" type="submit" name="add">Add to Cart &nbsp;&nbsp;<i class="fa-solid fa-cart-plus"></i></button>
                        <input type="hidden" name="product_id" value="<?php echo $row[$id]['prod_id'] ?>">
                        
                        <h2 style="margin-bottom: 10px;">Product Details </h2>   
                        <p><?php echo $row[$id]['description']; ?> <br></p>
                    </form>
                  </div>     
                </div>
            </div>

            <div class="content2"> 
                <!--Exclusive Items-->
                <div class="small-container">
                    <hr>
                    <h2> Exclusive Products</h2>
                    <div class="mmore">
                        <a href="exclusives.php">See more</a>
                    </div>
                    <div class="row"> 
					<a class="col-1" href="item1.php?product_id=<?php echo 20;?>" style="text-decoration:none;color:black;">
                            <?php echo '<img src="data:image;base64,'.base64_encode($row[20]['prod_image']).'">';?> 
                            <h4><?php echo $row[20]['prod_name']; ?></h4>
                            <p>$<?php echo $row[20]['prod_cost']; ?> </p>
                        </a>
					<a class="col-1" href="item1.php?product_id=<?php echo 21;?>" style="text-decoration:none;color:black;">
                            <?php echo '<img src="data:image;base64,'.base64_encode($row[21]['prod_image']).'" >';?> 
                            <h4><?php echo $row[21]['prod_name']; ?></h4>
                            <p>$<?php echo $row[21]['prod_cost']; ?></p>
                        </a>
					<a class="col-1" href="item1.php?product_id=<?php echo 22;?>" style="text-decoration:none;color:black;">
                            <?php echo '<img src="data:image;base64,'.base64_encode($row[22]['prod_image']).'" >';?> 
                            <h4><?php echo $row[22]['prod_name']; ?></h4>
                            <p>$<?php echo $row[22]['prod_cost']; ?> </p>
                        </a>
					<a class="col-1" href="item1.php?product_id=<?php echo 23;?>" style="text-decoration:none;color:black;">
                            <?php echo '<img src="data:image;base64,'.base64_encode($row[23]['prod_image']).'" >';?> 
                            <h4><?php echo $row[23]['prod_name']; ?></h4>
                            <p>$<?php echo $row[23]['prod_cost']; ?></p>
                        </a>
					<a class="col-1" href="item1.php?product_id=<?php echo 24;?>" style="text-decoration:none;color:black;">
                            <?php echo '<img src="data:image;base64,'.base64_encode($row[24]['prod_image']).'" >';?> 
                            <h4><?php echo $row[24]['prod_name']; ?></h4>
                            <p>$<?php echo $row[24]['prod_cost']; ?></p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="faq-direct">
                <h4>GOT QUERIES ABOUT SHOPPING ONLINE WITH US?</h4>
                 <p>
                    Check out our Frequently Asked Questions page. If you still require assistance than feel free to contact us during business hours between <br>
                     8am to 6pm Fiji Time, from Monday to Sunday on (679) 338 3400 or by simply dropping an email at <a href="mailto:info@shopnsave.com.fj">info@shopnsave.com.fj</a>
                </p>

                <p class="more"> <a  href="faq1.php">Frequently Asked Questions</a> </p>
           </div>

        </div>


	<!-------------Footer---------------->
	<div>
		<div class="top-footer">
			<div class="col1">
				<ul>
					<li><a><img src="Images/logoXS.png" alt="small shop and save logo"/></a></li>
					<li><h3>Contact Us</h3></li>
					<li><b>Email: </b><a href="mailto:info@shopnsave.com.fj">info@shopnsave.com.fj</a></li>
					<li><b>Phone: </b><a>3383400</a></li>
					<li><b>Fax: </b><a>3410221</a></li>
				</ul>
			</div>
			<div class="col2">
				<ul>
					<li><h3>About Market</h3></li>
					<li><a href="about1.php">About Us</a></li>
					<li><a href="#">Terms of Use</a></li>
					<li><a href="#">Privacy Policy</a></li>
				</ul>
			</div>
			<div class="col3">
				<ul>
					<li><h3>Customer Service</h3></li>
					<li><a href="#">Shipping Policy</a></li>
					<li><a href="accounts.php">My Account</a></li>
					<li><a href="#">Return Policy</a></li>
				</ul>
			</div>
			<div class="col4">
				<ul>
					<li><h3>Payment Shipping</h3></li>
					<li><a href="#">Shipping Guide</a></li>
					<li><a href="#">Delivery Times</a></li>
					<li><a><br><b>Payment Methods</b></a></li>
					<li><img src="Images/payments.png"/></li>
				</ul>
			</div>
			
		</div>
        <div class="middle-footer">
            <p>&copy; Shop and Save Supermarket, Fiji </p>
        </div>

		<div class="bottom-footer">
			<p>Developed and Designed by  </p> <a href="https://www.instagram.com/zamceaser/?hl=en"> Semii Ravitisai </a>
		</div>
	</div>
			
		
	</body>
</html>



