<?php

session_start();

        include("connection.php");
        include("functions.php");

        $user_data = check_login($con);
        $sql = "SELECT * FROM products";
        $result = mysqli_query($con, $sql);

        $row = mysqli_fetch_all($result, MYSQLI_ASSOC);

        //free result from memory
        mysqli_free_result($result);

        //close connection
        mysqli_close($con);
     


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
					<li class="active"> <a href="index1.php"> <img src="Images/home.png"/> Home </a></li>
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
                    <li> <a href="about1.php"><img src="Images/about.png"/> About Us </a></li>
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
                    <form method="post" action="search.php">
                        <input class="search-txt2" type="text" name="search" placeholder="Search Shop and Save....."/>
					   <input type="submit" class="search-btn2" name="submit"value="Search" >
					
                    </form>
					 
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
        
		<div class= "content1">
			<div class="slideshow-container">
				<div class="mySlides fade">
				  <div class="numbertext">1 / 3</div>
				  <img src="Images/image1.png" style="width:100%">
				  <div class="text"></div>
				</div>

				<div class="mySlides fade">
				  <div class="numbertext">2 / 3</div>
				  <img src="Images/image2.png" style="width:100%">
				  <div class="text"></div>
				</div>

				<div class="mySlides fade">
				  <div class="numbertext">3 / 3</div>
				  <img src="Images/image3.png" style="width:100%">
				  <div class="text"></div>
				</div>

			</div>
			<br>

			<div style="text-align:center">
			  <span class="dot"></span> 
			  <span class="dot"></span> 
			  <span class="dot"></span> 
			</div>

			<script>
			let slideIndex = 0;
			showSlides();

			function showSlides() {
			  let i;
			  let slides = document.getElementsByClassName("mySlides");
			  let dots = document.getElementsByClassName("dot");
			  for (i = 0; i < slides.length; i++) {
				slides[i].style.display = "none";  
			  }
			  slideIndex++;
			  if (slideIndex > slides.length) {slideIndex = 1}    
			  for (i = 0; i < dots.length; i++) {
				dots[i].className = dots[i].className.replace(" active", "");
			  }
			  slides[slideIndex-1].style.display = "block";  
			  dots[slideIndex-1].className += " active";
			  setTimeout(showSlides, 5000); // Change image every 2 seconds
			}
			</script>		
		</div>	
		<div class="content1a">
            <img src="Images/how.png" alt="hot to shop online"/>
            <p class="more"> <a  href="info.php">Know More</a> </p>
        </div>
		<div class="content2">
            <div class="welcome">
            <h1>Welcome Back <?php echo $user_data['fname']; ?>,</h1>
            </div>
			
			<div class="small-container">
                <hr style="height: 1px;background-color: #262626;border: none;" >
                <!--Best deals-->
				<h2> Best Deals</h2>
                <div class="mmore">
                    <a href="deal.php">See more</a>
                </div>
				<div class="row"> 
					<a class="col-1" href="item1.php?product_id=<?php echo 0;?>" style="text-decoration:none;color:black;">
						<?php echo '<img src="data:image;base64,'.base64_encode($row[0]['prod_image']).'" alt="Rooster Chicken #18">';?> 
						<h4><?php echo $row[0]['prod_name']; ?></h4>
						<p>$<?php echo $row[0]['prod_cost']; ?> &nbsp;  <strike> $17.80 </strike></p>
					</a>
					<a class="col-1" href="item1.php?product_id=<?php echo 1;?>" style="text-decoration:none;color:black;">
						<?php echo '<img src="data:image;base64,'.base64_encode($row[1]['prod_image']).'" >';?> 
						<h4><?php echo $row[1]['prod_name']; ?></h4>
						<p>$<?php echo $row[1]['prod_cost']; ?> &nbsp;  <strike> $3.30 </strike></p>
					</a>
					<a class="col-1" href="item1.php?product_id=<?php echo 2;?>" style="text-decoration:none;color:black;">
						<?php echo '<img src="data:image;base64,'.base64_encode($row[2]['prod_image']).'" >';?> 
						<h4><?php echo $row[2]['prod_name']; ?></h4>
						<p>$<?php echo $row[2]['prod_cost']; ?> &nbsp;  <strike> $3.50 </strike></p>
					</a>
					<a class="col-1" href="item1.php?product_id=<?php echo 3;?>" style="text-decoration:none;color:black;">
						<?php echo '<img src="data:image;base64,'.base64_encode($row[3]['prod_image']).'" >';?> 
						<h4><?php echo $row[3]['prod_name']; ?></h4>
						<p>$<?php echo $row[3]['prod_cost']; ?> &nbsp;  <strike> $1.70 </strike></p>
					</a>
					<a class="col-1" href="item1.php?product_id=<?php echo 4;?>" style="text-decoration:none;color:black;">
						<?php echo '<img src="data:image;base64,'.base64_encode($row[4]['prod_image']).'" >';?> 
						<h4><?php echo $row[4]['prod_name']; ?></h4>
						<p>$<?php echo $row[4]['prod_cost']; ?> &nbsp;  <strike> $6.80 </strike>
                        </p>
					</a>
				</div>
			</div>
            
            
			<div class="small-container">
				<div class="row"> 
					<a class="col-1" href="item1.php?product_id=<?php echo 5;?>" style="text-decoration:none;color:black;">
						<?php echo '<img src="data:image;base64,'.base64_encode($row[5]['prod_image']).'" >';?> 
						<h4><?php echo $row[5]['prod_name']; ?></h4>
						<p>$<?php echo $row[5]['prod_cost']; ?> &nbsp;  <strike> $3.50 </strike></p>
					</a>
					<a class="col-1" href="item1.php?product_id=<?php echo 6;?>" style="text-decoration:none;color:black;">
						<?php echo '<img src="data:image;base64,'.base64_encode($row[6]['prod_image']).'" >';?> 
						<h4><?php echo $row[6]['prod_name']; ?></h4>
						<p>$<?php echo $row[6]['prod_cost']; ?> &nbsp;  <strike> $4.50 </strike></p>
					</a>
					<a class="col-1" href="item1.php?product_id=<?php echo 7;?>" style="text-decoration:none;color:black;">
						<?php echo '<img src="data:image;base64,'.base64_encode($row[7]['prod_image']).'" >';?> 
						<h4><?php echo $row[7]['prod_name']; ?></h4>
						<p>$<?php echo $row[7]['prod_cost']; ?> &nbsp;  <strike> $4.75 </strike></p>
					</a>
					<a class="col-1" href="item1.php?product_id=<?php echo 8;?>" style="text-decoration:none;color:black;">
						<?php echo '<img src="data:image;base64,'.base64_encode($row[8]['prod_image']).'" >';?> 
						<h4><?php echo $row[8]['prod_name']; ?></h4>
						<p>$<?php echo $row[8]['prod_cost']; ?> &nbsp;  <strike> $23.45 </strike></p>
					</a>
					<a class="col-1" href="item1.php?product_id=<?php echo 9;?>" style="text-decoration:none;color:black;">
						<?php echo '<img src="data:image;base64,'.base64_encode($row[9]['prod_image']).'" >';?> 
						<h4><?php echo $row[9]['prod_name']; ?></h4>
						<p>$<?php echo $row[9]['prod_cost']; ?> &nbsp;  <strike> $5.75 </strike>
                        </p>
					</a>
                    
				</div>
                <div>
                        
                </div>
			</div>
            
            
            
            
            
            <!--Best Selling-->
            <div class="small-container">
                <hr style="height: 1px;background-color: #262626;border: none;" >
				<h2> Best Selling</h2>
                <div class="mmore">
                    <a href="sells.php">See more</a>
                </div>
				<div class="row"> 
					<a class="col-1" href="item1.php?product_id=<?php echo 10;?>" style="text-decoration:none;color:black;">
						<?php echo '<img src="data:image;base64,'.base64_encode($row[10]['prod_image']).'">';?> 
						<h4><?php echo $row[10]['prod_name']; ?></h4>
						<p>$<?php echo $row[10]['prod_cost']; ?></p>
					</a>
					<a class="col-1" href="item1.php?product_id=<?php echo 11;?>" style="text-decoration:none;color:black;">
						<?php echo '<img src="data:image;base64,'.base64_encode($row[11]['prod_image']).'" >';?> 
						<h4><?php echo $row[11]['prod_name']; ?></h4>
						<p>$<?php echo $row[11]['prod_cost']; ?> </p>
					</a>
					<a class="col-1" href="item1.php?product_id=<?php echo 12;?>" style="text-decoration:none;color:black;">
						<?php echo '<img src="data:image;base64,'.base64_encode($row[12]['prod_image']).'" >';?> 
						<h4><?php echo $row[12]['prod_name']; ?></h4>
						<p>$<?php echo $row[12]['prod_cost']; ?> </p>
					</a>
					<a class="col-1" href="item1.php?product_id=<?php echo 13;?>" style="text-decoration:none;color:black;">
						<?php echo '<img src="data:image;base64,'.base64_encode($row[13]['prod_image']).'" >';?> 
						<h4><?php echo $row[13]['prod_name']; ?></h4>
						<p>$<?php echo $row[13]['prod_cost']; ?> </p>
					</a>
					<a class="col-1" href="item1.php?product_id=<?php echo 14;?>" style="text-decoration:none;color:black;">
						<?php echo '<img src="data:image;base64,'.base64_encode($row[14]['prod_image']).'" >';?> 
						<h4><?php echo $row[14]['prod_name']; ?></h4>
						<p>$<?php echo $row[14]['prod_cost']; ?> </p>
					</a>
				</div>
			</div>
            
            
            
            
            
            <!--Most Viewed-->
            <div class="small-container">
                <hr style="height: 1px;background-color: #262626;border: none;" >
				<h2> Most Viewed</h2>
                <div class="mmore">
                    <a href="views.php">See more</a>
                </div>
				<div class="row"> 
					<a class="col-1" href="item1.php?product_id=<?php echo 15;?>" style="text-decoration:none;color:black;">
						<?php echo '<img src="data:image;base64,'.base64_encode($row[15]['prod_image']).'" >';?> 
						<h4><?php echo $row[15]['prod_name']; ?></h4>
						<p>$<?php echo $row[15]['prod_cost']; ?> &nbsp;  <strike> $1.40 </strike></p>
					</a>
					<a class="col-1" href="item1.php?product_id=<?php echo 16;?>" style="text-decoration:none;color:black;">
						<?php echo '<img src="data:image;base64,'.base64_encode($row[16]['prod_image']).'" >';?> 
						<h4><?php echo $row[16]['prod_name']; ?></h4>
						<p>$<?php echo $row[16]['prod_cost']; ?> &nbsp;  <strike> $2.22 </strike></p>
					</a>
					<a class="col-1" href="item1.php?product_id=<?php echo 17;?>" style="text-decoration:none;color:black;">
						<?php echo '<img src="data:image;base64,'.base64_encode($row[17]['prod_image']).'" >';?> 
						<h4><?php echo $row[17]['prod_name']; ?></h4>
						<p>$<?php echo $row[17]['prod_cost']; ?></p>
					</a>
					<a class="col-1" href="item1.php?product_id=<?php echo 18;?>" style="text-decoration:none;color:black;">
						<?php echo '<img src="data:image;base64,'.base64_encode($row[18]['prod_image']).'" >';?> 
						<h4><?php echo $row[18]['prod_name']; ?></h4>
						<p>$<?php echo $row[18]['prod_cost']; ?> &nbsp;  <strike> $3.00 </strike></p>
					</a>
					<a class="col-1" href="item1.php?product_id=<?php echo 19;?>" style="text-decoration:none;color:black;">
						<?php echo '<img src="data:image;base64,'.base64_encode($row[19]['prod_image']).'" >';?> 
						<h4><?php echo $row[19]['prod_name']; ?></h4>
						<p>$$<?php echo $row[19]['prod_cost']; ?> &nbsp;  <strike> $16.80 </strike>
                        </p>
					</a>
				</div>
			</div> 
            
            
            
            
            
            <!--Exclusive Items-->
            <div class="small-container">
                <hr style="height: 1px;background-color: #262626;border: none;" >
				<h2> Exclusive Items</h2>
                <div class="mmore">
                    <a href="exclusives.php">See more</a>
                </div>
				<div class="row"> 
					<a class="col-1" href="item1.php?product_id=<?php echo 20;?>" style="text-decoration:none;color:black;">
						<?php echo '<img src="data:image;base64,'.base64_encode($row[20]['prod_image']).'" >';?> 
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



