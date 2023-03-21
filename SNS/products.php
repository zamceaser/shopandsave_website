<?php 
    session_start();
    include("connection.php");
    $sql = "SELECT * FROM products";
    $result = mysqli_query($con, $sql);
     
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
					<li > <a href="index.php"> <img src="Images/home.png"/> Home </a></li>
					<li> <a> <img src="Images/locate.png"/>Locations</a>
						<div class="sub-menu">
							<ul>
								<li> <a href="Central.php">Central</a></li>
								<li> <a href="Western.php">Western</a></li>
								<li> <a href="Northern.php">Northern</a></li>
							</ul>
						</div>
					</li>
				</ul>
				<div class="logo">
					<a href="index.php"> <img src="Images/logo.png" alt="ShopandSave Logo"> </a>
				</div>
				<ul class="nav">
                    <li> <a href="about.php"><img src="Images/about.png"/> About Us </a></li>
					<li> <a href="reg.html"><img src="Images/user.png" />Accounts </a>			
						<div class="sub-menu">
							<ul>
								<li> <a onclick="document.getElementById('id01').style.display='block'" style="width:auto;cursor: pointer;">Log In</a>
                                

                                    <div id="id01" class="modal">

                                      <form class="modal-content animate" action="login.php" method="post">
                                        <div class="imgcontainer">
                                          <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                                          <img src="Images/img_avatar2.png" alt="Avatar" class="avatar">
                                        </div>

                                        <div class="container">
                                          <label for="email"><b>Email</b></label>
                                          <input class="txt01" type="text" placeholder="Enter Email" name="email" required>

                                          <label for="psw"><b>Password</b></label>
                                          <input class="txt01" type="password" placeholder="Enter Password" name="psw" required>

                                          <button class="btn01" type="submit">Login</button>
                                          <label>
                                            <input type="checkbox" checked="checked" name="remember"> Remember me
                                          </label>
                                        </div>

                                        <div class="container" style="background-color:#f1f1f1">
                                          <button  class="btn02" type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                                          <span class="psw">Forgot <a href="#">password?</a></span>
                                        </div>
                                      </form>
                                    </div>
                                </li>
                                
								<li> <a onclick="document.getElementById('id02').style.display='block'" style="width:auto;cursor: pointer;">Sign Up</a>
                                    
                                    <div id="id02" class="modal1">
                                      <span onclick="document.getElementById('id02').style.display='none'" class="close1" title="Close Modal">&times;</span>
                                      <form class="modal-content1" method="post" action="register.php">
                                        <div class="container1">
                                          <h1 style="color: black;">Sign Up</h1>
                                          <p style="color: black;">Please fill in this form to create an account.</p>
                                          <hr>
                                          <label for="fname"><b>First Name</b></label>
                                          <input class="txt03" type="text" placeholder="Enter First Name" name="fname" required>
                                            
                                          <label for="lname"><b>Last Name</b></label>
                                          <input class="txt03" type="text" placeholder="Enter Last Name" name="lname" required>
                                            
                                          <label for="email"><b>Email</b></label>
                                          <input class="txt02" type="text" placeholder="Enter Email" name="email" required>

                                          <label for="psw"><b>Password</b></label>
                                          <input class="txt02" type="password" placeholder="Enter Password" name="psw" required>

                                          <label for="psw-repeat"><b>Repeat Password</b></label>
                                          <input class="txt02" type="password" placeholder="Repeat Password" name="psw-repeat" required>

                                          <label>
                                            <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
                                          </label>

                                          <p style="color: black;">By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

                                          <div class="clearfix1">
                                              <button class="btn03" type="submit" class="signupbtn">Sign Up</button>
                                            <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn1">Cancel</button>
                                            
                                          </div>
                                        </div>
                                      </form>
                                    </div>
                                </li>
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
                        <a href="cart.php"><img src="Images/cart.png"/> </a>
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
								<li> <a href="categories.php?cat_id=<?php echo 1;?>">Fresh Produce</a></li>
								<li> <a href="categories.php?cat_id=<?php echo 2;?>">Frozen</a></li>
								<li> <a href="categories.php?cat_id=<?php echo 3;?>">Drinks</a></li>
								<li> <a href="categories.php?cat_id=<?php echo 4;?>">Hygiene</a></li>
								<li> <a href="categories.php?cat_id=<?php echo 5;?>">Dairy</a></li>
								<li> <a href="categories.php?cat_id=<?php echo 6;?>">Snacks</a></li>
								<li> <a href="categories.php?cat_id=<?php echo 7;?>">Homeware</a></li>
								<li> <a href="categories.php?cat_id=<?php echo 8;?>">Dried Goods</a></li>
							</ul>
						</div>
                    </li>
					<li class="prod"><a href="products.php">All Products</a></li>
				</ul>
				<div class="search-box2">
                    <form method="post" action="search.php">
                        <input class="search-txt2" type="text" name="search" placeholder="Search Shop and Save....."/>
					   <input type="submit" class="search-btn2" name="submit"value="Search" >
					
                    </form>
					 
				</div>
                <div>
                    <ul class="wish">
					<li><a href="wishlist.php" style="pointer-events: none;"><img class="grayscale" src="Images/wishlist.png" alt="wishlist icon"/></a></li>
				    </ul>
                </div>
                
                <div class="care"> 
                    <img class="care" src="Images/customer.png" alt="customer support"/>
                </div>
                
                <div class="nav-header">
                    <ul>
                        <li> <a href="deal.php"> Best Deals </a></li>
                        <li> <a href="sells.php"> Best Selling </a></li>
                        <li> <a href="views.php"> Most Viewed </a></li>
                        <li> <a href="exclusives.php"> Exclusive Items </a></li>
                    </ul>
                </div>
                
			</div>
            
	</div>

        
        
	<!-------------Content---------------->
	<div class="content">	
		<div class="content2">
			<div class="small-container">
                <hr>
				<h2> ALL PRODUCTS</h2>
                <div class="mmore">
                    <i class="fa-solid fa-filter"></i><a href="filter.php">&nbsp;&nbsp;&nbsp;FILTER</a>
                </div>
				<div class="row">
                    <?php 
                    $i = 0;
                    while($row = mysqli_fetch_assoc($result))
                    {
                      ?>
                           <a class="col-1" href="item.php?product_id=<?php echo $i;?>" style="text-decoration:none;color:black;">
                                <?php echo '<img src="data:image;base64,'.base64_encode($row['prod_image']).'" alt="Image can not Load">';?> 
                                <h4><?php echo $row['prod_name']; ?></h4>
                                <p>$<?php echo $row['prod_cost']; ?> &nbsp;  </p>
                            </a>
                        <?php
                        $i = $i + 1;
                       
                        }
                        ?>
                    
				</div>
                <div style="text-align: right; color:black;">
                    <a href="#" > SEE MORE</a>
                </div>
                
			</div>
            

		</div>
        
        <!--Frequently asked questions-->
        <div class="faq-direct">
            <h4>GOT QUERIES ABOUT SHOPPING ONLINE WITH US?</h4>
             <p>
                Check out our Frequently Asked Questions page. If you still require assistance than feel free to contact us during business hours between <br>
                 8am to 6pm Fiji Time, from Monday to Sunday on (679) 338 3400 or by simply dropping an email at <a href="mailto:info@shopnsave.com.fj">info@shopnsave.com.fj</a>
            </p>
            
            <p class="more"> <a  href="faq.php">Frequently Asked Questions</a> </p>
       </div>
        
	</div>


	<!-------------Footer---------------->
	<?php include("footer.php"); ?>
			
		
	</body>
</html>

