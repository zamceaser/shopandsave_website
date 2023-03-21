<?php 
    session_start();
    include("connection.php");
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
					<li> <a href="index.php"> <img src="Images/home.png"/> Home </a></li>
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
                        <a href="cart.php"><img src="Images/cart.png"/> <?php 
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
<div class="locate">
        <div class="box">
            <h1> <u>Western Division</u> </h1><br><hr>
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
                <h3>  Market Road, Sigatoka </h3>
                <h4> <b>Phone:</b> 650 2031</h4>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3791.5214803599993!2d177.50419141500254!3d-18.139875989823516!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6e10a99b3ee65ce7%3A0xdf4d886969246ad6!2sShop%20%26%20Save!5e0!3m2!1sen!2sfj!4v1656592979841!5m2!1sen!2sfj" width="800" height="450" style="border:2px solid black; border-radius:2%" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="mapp">
                <h3>  Sahu Khan St, Nadi </h3>
                <h4> <b>Phone:</b> 670 3266</h4>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30390.103013331875!2d177.38137377910152!3d-17.802837999999987!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6e175af977cffc33%3A0xad1fb72643af5dd3!2sShop%20N%20Save%20Supermarket!5e0!3m2!1sen!2sfj!4v1656593103101!5m2!1sen!2sfj" width="800" height="450" style="border:2px solid black; border-radius:2%" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="mapp">
                <h3>  Main St, Nadi </h3>
                <h4> <b>Phone:</b> 670 1255</h4>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30397.09431002456!2d177.41868257910158!3d-17.76174509999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6e175be4f50b551b%3A0xe43f9f0dac1a0c77!2sShop%20and%20Save!5e0!3m2!1sen!2sfj!4v1656593163226!5m2!1sen!2sfj" width="800" height="450" style="border:2px solid black; border-radius:2%" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="mapp">
                <h3> Lodhia St, Nadi </h3>
                <h4> <b>Phone:</b> 670 1114</h4>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30397.09431002456!2d177.41868257910158!3d-17.76174509999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6e17594177bbb965%3A0x782ced29a86b1455!2sShop%20n%20Save!5e0!3m2!1sen!2sfj!4v1656593202606!5m2!1sen!2sfj" width="800" height="450" style="border:2px solid black; border-radius:2%" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div><div class="mapp">
                <h3> Namaka, Nadi </h3>
                <h4> <b>Phone:</b> 672 7492</h4>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30397.09431002456!2d177.41868257910158!3d-17.76174509999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6e175be4f8b38d31%3A0x428307e7fbd58c3f!2sShop%20N%20Save%20Bakery!5e0!3m2!1sen!2sfj!4v1656593241211!5m2!1sen!2sfj" width="800" height="450" style="border:2px solid black; border-radius:2%" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div><div class="mapp">
                <h3> Votualevu Road, Nadi  </h3>
                <h4> <b>Phone:</b> 672 0218</h4>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3799.5027761845568!2d177.47378861499595!3d-17.768052579312194!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6e17594177bbb965%3A0x782ced29a86b1455!2sShop%20n%20Save!5e0!3m2!1sen!2sfj!4v1656593299980!5m2!1sen!2sfj" width="800" height="450" style="border:2px solid black; border-radius:2%" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div><div class="mapp">
                <h3> 21 Yasawa, Lautoka </h3>
                <h4> <b>Phone:</b> 666 6781</h4>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3802.9772875636154!2d177.45269821499312!3d-17.603813374738277!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6e1766d600cd56d3%3A0xfe7ae97b9c8f60e2!2sShop%20n%20Save!5e0!3m2!1sen!2sfj!4v1656593340758!5m2!1sen!2sfj" width="800" height="450" style="border:2px solid black; border-radius:2%" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div><div class="mapp">
                <h3> 11 Yasawa Street, Lautoka </h3>
                <h4> <b>Phone:</b> 666 0537</h4>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3802.9553149448266!2d177.4531395149931!3d-17.604856674767234!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6e1766d600cd56d3%3A0xfe7ae97b9c8f60e2!2sShop%20n%20Save!5e0!3m2!1sen!2sfj!4v1656593403017!5m2!1sen!2sfj" width="800" height="450" style="border:2px solid black; border-radius:2%" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div><div class="mapp">
                <h3> 19 Tukani St, Lautoka </h3>
                <h4> <b>Phone:</b> 666 8967</h4>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3802.946297543325!2d177.45187443267886!3d-17.605284820116257!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6e17670b10fcbc3b%3A0x77912a53126d6497!2sShop&#39;n%20Save!5e0!3m2!1sen!2sfj!4v1656593601814!5m2!1sen!2sfj" width="800" height="450" style="border:2px solid black; border-radius:2%" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div><div class="mapp">
                <h3> Veitari, Warehouse Lautoka </h3>
                <h4> <b>Phone:</b> 664 5671</h4>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30417.227682154986!2d177.39716017430766!3d-17.6428893272415!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6e175db9f1a3acf3%3A0x4e4f36eec3a60e8d!2sShop%20N%20Save!5e0!3m2!1sen!2sfj!4v1656593507700!5m2!1sen!2sfj" width="800" height="450" style="border:2px solid black; border-radius:2%" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div><div class="mapp">
                <h3> Market Subdvsn, Ba </h3>
                <h4> <b>Phone:</b> 667 8208</h4>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d121717.2436352084!2d177.50069213562017!3d-17.57118327101776!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6e19db4791e26fa3%3A0x5e141674d7a6f34b!2sShop&#39;n%20Save!5e0!3m2!1sen!2sfj!4v1656593652675!5m2!1sen!2sfj" width="800" height="450" style="border:2px solid black; border-radius:2%" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div><div class="mapp">
                <h3> Tavua </h3>
                <h4> <b>Phone:</b> 668 0200</h4>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3806.380096261254!2d177.86400101499027!3d-17.44151247026008!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6e19b7c2de0bfbc3%3A0x606ea44894becd0a!2sShop%20N%20Save%20Supermarket!5e0!3m2!1sen!2sfj!4v1656593692495!5m2!1sen!2sfj" width="800" height="450" style="border:2px solid black; border-radius:2%" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
        
    </div>
    <div class="faq-direct">
            <h4>GOT QUERIES ABOUT SHOPPING ONLINE WITH US?</h4>
             <p>
                Check out our Frequently Asked Questions page. If you still require assistance than feel free to contact us during business hours between <br>
                 8am to 6pm Fiji Time, from Monday to Sunday on (679) 338 3400 or by simply dropping an email at <a href="mailto:info@shopnsave.com.fj">info@shopnsave.com.fj</a>
            </p>
            
            <p class="more"> <a  href="faq.php">Frequently Asked Questions</a> </p>
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
					<li><a href="about.php">About Us</a></li>
					<li><a href="#">Terms of Use</a></li>
					<li><a href="#">Privacy Policy</a></li>
				</ul>
			</div>
			<div class="col3">
				<ul>
					<li><h3>Customer Service</h3></li>
					<li><a href="#">Shipping Policy</a></li>
					<li><a href="log.html">My Account</a></li>
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
