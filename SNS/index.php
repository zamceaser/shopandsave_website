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
     <!--Header-->   
    <?php include("header.php"); ?>
        
        
	<!---------------------------------Content-------------------------------->
	<!--image Carousal-->
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
        
        <!--How to shop online-->
		<div class="content1a">
            <img src="Images/how.png" alt="hot to shop online"/>
            <p class="more"> <a  href="info.php">Know More</a> </p>
        </div>
        
         
        
        <!-----------------------products display--------------------------->
		<div class="content2">
			<div class="small-container">
                <hr style="height: 1px;background-color: #262626;border: none;" >
                <!--Best deals-->
				<h2> Best Deals</h2>
                <div class="mmore">
                    <a href="deal.php">See more</a>
                </div>
				<div class="row"> 
					<a class="col-1" href="item.php?product_id=<?php echo 0;?>" style="text-decoration:none;color:black;">
						<?php echo '<img src="data:image;base64,'.base64_encode($row[0]['prod_image']).'" alt="Rooster Chicken #18">';?> 
						<h4><?php echo $row[0]['prod_name']; ?></h4>
						<p>$<?php echo $row[0]['prod_cost']; ?> &nbsp;  <strike> $17.80 </strike></p>
					</a>
					<a class="col-1" href="item.php?product_id=<?php echo 1;?>" style="text-decoration:none;color:black;">
						<?php echo '<img src="data:image;base64,'.base64_encode($row[1]['prod_image']).'" >';?> 
						<h4><?php echo $row[1]['prod_name']; ?></h4>
						<p>$<?php echo $row[1]['prod_cost']; ?> &nbsp;  <strike> $3.30 </strike></p>
					</a>
					<a class="col-1" href="item.php?product_id=<?php echo 2;?>" style="text-decoration:none;color:black;">
						<?php echo '<img src="data:image;base64,'.base64_encode($row[2]['prod_image']).'" >';?> 
						<h4><?php echo $row[2]['prod_name']; ?></h4>
						<p>$<?php echo $row[2]['prod_cost']; ?> &nbsp;  <strike> $3.50 </strike></p>
					</a>
					<a class="col-1" href="item.php?product_id=<?php echo 3;?>" style="text-decoration:none;color:black;">
						<?php echo '<img src="data:image;base64,'.base64_encode($row[3]['prod_image']).'" >';?> 
						<h4><?php echo $row[3]['prod_name']; ?></h4>
						<p>$<?php echo $row[3]['prod_cost']; ?> &nbsp;  <strike> $1.70 </strike></p>
					</a>
					<a class="col-1" href="item.php?product_id=<?php echo 4;?>" style="text-decoration:none;color:black;">
						<?php echo '<img src="data:image;base64,'.base64_encode($row[4]['prod_image']).'" >';?> 
						<h4><?php echo $row[4]['prod_name']; ?></h4>
						<p>$<?php echo $row[4]['prod_cost']; ?> &nbsp;  <strike> $6.80 </strike>
                        </p>
					</a>
				</div>
			</div>
            
            
			<div class="small-container">
				<div class="row"> 
					<a class="col-1" href="item.php?product_id=<?php echo 5;?>" style="text-decoration:none;color:black;">
						<?php echo '<img src="data:image;base64,'.base64_encode($row[5]['prod_image']).'" >';?> 
						<h4><?php echo $row[5]['prod_name']; ?></h4>
						<p>$<?php echo $row[5]['prod_cost']; ?> &nbsp;  <strike> $3.50 </strike></p>
					</a>
					<a class="col-1" href="item.php?product_id=<?php echo 6;?>" style="text-decoration:none;color:black;">
						<?php echo '<img src="data:image;base64,'.base64_encode($row[6]['prod_image']).'" >';?> 
						<h4><?php echo $row[6]['prod_name']; ?></h4>
						<p>$<?php echo $row[6]['prod_cost']; ?> &nbsp;  <strike> $4.50 </strike></p>
					</a>
					<a class="col-1" href="item.php?product_id=<?php echo 7;?>" style="text-decoration:none;color:black;">
						<?php echo '<img src="data:image;base64,'.base64_encode($row[7]['prod_image']).'" >';?> 
						<h4><?php echo $row[7]['prod_name']; ?></h4>
						<p>$<?php echo $row[7]['prod_cost']; ?> &nbsp;  <strike> $4.75 </strike></p>
					</a>
					<a class="col-1" href="item.php?product_id=<?php echo 8;?>" style="text-decoration:none;color:black;">
						<?php echo '<img src="data:image;base64,'.base64_encode($row[8]['prod_image']).'" >';?> 
						<h4><?php echo $row[8]['prod_name']; ?></h4>
						<p>$<?php echo $row[8]['prod_cost']; ?> &nbsp;  <strike> $23.45 </strike></p>
					</a>
					<a class="col-1" href="item.php?product_id=<?php echo 9;?>" style="text-decoration:none;color:black;">
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
					<a class="col-1" href="item.php?product_id=<?php echo 10;?>" style="text-decoration:none;color:black;">
						<?php echo '<img src="data:image;base64,'.base64_encode($row[10]['prod_image']).'">';?> 
						<h4><?php echo $row[10]['prod_name']; ?></h4>
						<p>$<?php echo $row[10]['prod_cost']; ?></p>
					</a>
					<a class="col-1" href="item.php?product_id=<?php echo 11;?>" style="text-decoration:none;color:black;">
						<?php echo '<img src="data:image;base64,'.base64_encode($row[11]['prod_image']).'" >';?> 
						<h4><?php echo $row[11]['prod_name']; ?></h4>
						<p>$<?php echo $row[11]['prod_cost']; ?> </p>
					</a>
					<a class="col-1" href="item.php?product_id=<?php echo 12;?>" style="text-decoration:none;color:black;">
						<?php echo '<img src="data:image;base64,'.base64_encode($row[12]['prod_image']).'" >';?> 
						<h4><?php echo $row[12]['prod_name']; ?></h4>
						<p>$<?php echo $row[12]['prod_cost']; ?> </p>
					</a>
					<a class="col-1" href="item.php?product_id=<?php echo 13;?>" style="text-decoration:none;color:black;">
						<?php echo '<img src="data:image;base64,'.base64_encode($row[13]['prod_image']).'" >';?> 
						<h4><?php echo $row[13]['prod_name']; ?></h4>
						<p>$<?php echo $row[13]['prod_cost']; ?> </p>
					</a>
					<a class="col-1" href="item.php?product_id=<?php echo 14;?>" style="text-decoration:none;color:black;">
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
					<a class="col-1" href="item.php?product_id=<?php echo 15;?>" style="text-decoration:none;color:black;">
						<?php echo '<img src="data:image;base64,'.base64_encode($row[15]['prod_image']).'" >';?> 
						<h4><?php echo $row[15]['prod_name']; ?></h4>
						<p>$<?php echo $row[15]['prod_cost']; ?> &nbsp;  <strike> $1.40 </strike></p>
					</a>
					<a class="col-1" href="item.php?product_id=<?php echo 16;?>" style="text-decoration:none;color:black;">
						<?php echo '<img src="data:image;base64,'.base64_encode($row[16]['prod_image']).'" >';?> 
						<h4><?php echo $row[16]['prod_name']; ?></h4>
						<p>$<?php echo $row[16]['prod_cost']; ?> &nbsp;  <strike> $2.22 </strike></p>
					</a>
					<a class="col-1" href="item.php?product_id=<?php echo 17;?>" style="text-decoration:none;color:black;">
						<?php echo '<img src="data:image;base64,'.base64_encode($row[17]['prod_image']).'" >';?> 
						<h4><?php echo $row[17]['prod_name']; ?></h4>
						<p>$<?php echo $row[17]['prod_cost']; ?></p>
					</a>
					<a class="col-1" href="item.php?product_id=<?php echo 18;?>" style="text-decoration:none;color:black;">
						<?php echo '<img src="data:image;base64,'.base64_encode($row[18]['prod_image']).'" >';?> 
						<h4><?php echo $row[18]['prod_name']; ?></h4>
						<p>$<?php echo $row[18]['prod_cost']; ?> &nbsp;  <strike> $3.00 </strike></p>
					</a>
					<a class="col-1" href="item.php?product_id=<?php echo 19;?>" style="text-decoration:none;color:black;">
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
					<a class="col-1" href="item.php?product_id=<?php echo 20;?>" style="text-decoration:none;color:black;">
						<?php echo '<img src="data:image;base64,'.base64_encode($row[20]['prod_image']).'" >';?> 
						<h4><?php echo $row[20]['prod_name']; ?></h4>
						<p>$<?php echo $row[20]['prod_cost']; ?> </p>
					</a>
					<a class="col-1" href="item.php?product_id=<?php echo 21;?>" style="text-decoration:none;color:black;">
						<?php echo '<img src="data:image;base64,'.base64_encode($row[21]['prod_image']).'" >';?> 
						<h4><?php echo $row[21]['prod_name']; ?></h4>
						<p>$<?php echo $row[21]['prod_cost']; ?></p>
					</a>
					<a class="col-1" href="item.php?product_id=<?php echo 22;?>" style="text-decoration:none;color:black;">
						<?php echo '<img src="data:image;base64,'.base64_encode($row[22]['prod_image']).'" >';?> 
						<h4><?php echo $row[22]['prod_name']; ?></h4>
						<p>$<?php echo $row[22]['prod_cost']; ?> </p>
					</a>
					<a class="col-1" href="item.php?product_id=<?php echo 23;?>" style="text-decoration:none;color:black;">
						<?php echo '<img src="data:image;base64,'.base64_encode($row[23]['prod_image']).'" >';?> 
						<h4><?php echo $row[23]['prod_name']; ?></h4>
						<p>$<?php echo $row[23]['prod_cost']; ?></p>
					</a>
					<a class="col-1" href="item.php?product_id=<?php echo 24;?>" style="text-decoration:none;color:black;">
						<?php echo '<img src="data:image;base64,'.base64_encode($row[24]['prod_image']).'" >';?> 
						<h4><?php echo $row[24]['prod_name']; ?></h4>
						<p>$<?php echo $row[24]['prod_cost']; ?></p>
					</a>
				</div>
			</div>
		</div>
        
        <!--FAQ-->
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

