<?php

session_start();

        include("connection.php");
        include("functions.php");

        $user_data = check_login($con);


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
    <div class="locate">
        <div class="box">
            <h1> <u>Central Division</u> </h1><br><hr>
            <div class="hour" >
                <h3>Hours: </h3>
                <p style="margin-bottom: 40px;">Thursday	7am–8:30pm <br>
                Friday	7am–9pm<br>
                Saturday	7am–9pm<br>
                Sunday	7:30am–4:30pm<br>
                Monday	7am–8pm<br>
                Tuesday	7am–8pm<br>
                Wednesday	7am–8pm</p>
            </div>
            <div class="mapp">
                <h3>  411 Fletcher Rd, Nabua, Suva </h3>
                <h4> <b>Phone:</b> 338 3400</h4>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3791.892003263441!2d178.4555891148869!3d-18.122777787641834!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6e1bde6cc119802b%3A0x9415393fa4be33fc!2sShop%20N%20Save!5e0!3m2!1sen!2sfj!4v1656591121157!5m2!1sen!2sfj" width="800" height="450" style="border-radius:2%;border:2px solid black;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="mapp">
                <h3>  9 Miles, Nasinu </h3>
                <h4> <b>Phone:</b> 341 0221</h4>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3793.0857899208677!2d178.50542618986995!3d-18.067582788331165!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6e1be047c19c0bb3%3A0x56394d49c7cdb263!2sShop%20N%20Save%20Supermarket%2C%20Nakasi!5e0!3m2!1sen!2sfj!4v1656591391120!5m2!1sen!2sfj" width="800" height="450" style="border-radius:2%;border:2px solid black;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="mapp">
                <h3>  8 Fenton St, Lami </h3>
                <h4> <b>Phone:</b> 336 1391</h4>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3792.095304587941!2d178.40469981500198!3d-18.113389589067634!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6e1bdeb60f0cd80d%3A0xdc46ccaaa8eb6c6c!2sShop%20n%20Save%20Supermarket!5e0!3m2!1sen!2sfj!4v1656591754278!5m2!1sen!2sfj" width="800" height="450" style="border-radius:2%;border:2px solid black;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="mapp">
                <h3> Nasinu Rd, Valelevu, Nasinu </h3>
                <h4> <b>Phone:</b> 339 6965</h4>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3792.5260103536634!2d178.47885111500165!3d-18.09348458850019!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6e1be081a7987e69%3A0x9a94781727160235!2sShop%20n%20Save%20Valelevu!5e0!3m2!1sen!2sfj!4v1656591720134!5m2!1sen!2sfj" width="800" height="450" style="border-radius:2%;border:2px solid black;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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



