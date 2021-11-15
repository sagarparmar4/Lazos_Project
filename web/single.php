<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Wedding Store A Ecommerce Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<!--theme-style-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Wedding Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- start menu -->
<script src="js/simpleCart.min.js"> </script>
<!-- start menu -->
<link href="css/memenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/memenu.js"></script>
<script>$(document).ready(function(){$(".memenu").memenu();});</script>	
<!-- /start menu -->
</head>
<body> 
<!--header-->	
<div class="top_bg">
	<div class="container">
		<div class="header_top-sec">
			<div class="top_right">
				<ul>
					<li><a href="about.php">About</a></li>|
					<li><a href="contact.php">Contact</a></li>
				</ul>
			</div>
			<div class="top_left">
				<ul>
					<li class="top_link">Email:<a href="mailto:info@example.com">lazoskarma@gmail.com</a></li>
					<!--<li class="top_link"><a href="login.php">My Account</a></li>-->					
				</ul>
			</div>
				<div class="clearfix"> </div>
		</div>
	</div>
</div>
<div class="header-top">
	 <div class="header-bottom">
		 <div class="container">			
				<div class="logo">
					<a href="index.php"><h1>Lazos Karma</h1></a>
				</div>
			 <!---->
		 
			 <div class="top-nav">
				<ul class="memenu skyblue"><li class="grid"><a href="index.php">Home</a></li>
					<li class="active"><a href="#">Our Products</a>
						<div class="mepanel">
							<div class="row">
								<div class="col1 me-one">
									<!--<h4>Shop</h4>-->
									<ul>
										<li><a href="kurta.php">Kurta</a></li>
										<li><a href="mokhu.php">Mokhu</a></li>
										<li><a href="jacket.php">Jacket</a></li>
										<li><a href="jacket_kurta.php">Jacket-kurta</a></li>
										<li><a href="semi_indo.php">Semi Indo-Western</a></li>
										
									</ul>
								</div>
								<!--<div class="col1 me-one">
									<h4>Style Zone</h4>
									<ul>
										<li><a href="product.php">Men</a></li>
										<li><a href="product.php">Women</a></li>
										<li><a href="product.php">Brands</a></li>
										<li><a href="product.php">Kids</a></li>
										<li><a href="product.php">Accessories</a></li>
										<li><a href="product.php">Style Videos</a></li>
									</ul>	
								</div>
								<div class="col1 me-one">
									<h4>Popular Brands</h4>
									<ul>
										<li><a href="product.php">Levis</a></li>
										<li><a href="product.php">Persol</a></li>
										<li><a href="product.php">Nike</a></li>
										<li><a href="product.php">Edwin</a></li>
										<li><a href="product.php">New Balance</a></li>
										<li><a href="product.php">Jack & Jones</a></li>
										<li><a href="product.php">Paul Smith</a></li>
										<li><a href="product.php">Ray-Ban</a></li>
										<li><a href="product.php">Wood Wood</a></li>
									</ul>	
								</div>-->
							</div>
						</div>
					</li>
					<li class="grid"><a href="about.php">About Us</a></li>
					<li class="grid"><a href="contact.php">Contact</a></li>
				</ul>
				<div class="clearfix"> </div>
			 </div>
			 <!---->
			<!--<div class="cart box_1">
				 <a href="checkout.php">
					<h3> <div class="total">
					<span class="simpleCart_total"></span> (<span id="simpleCart_quantity" class="simpleCart_quantity"></span>)</div>
					<span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span></h3>
				</a>
				<p><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>
			 	<div class="clearfix"> </div>
			 </div>-->
			 <div class="clearfix"> </div>
			 <!---->			 
			 </div>
			<div class="clearfix"> </div>
	  </div>
</div>
<!--end header--><!---->



<?php
	include "config.php";	 	 
	if(!$conn)
	{
		echo "Error : ".mysql_error($conn);      //display error if connetion is not set
	}
	
	//Part 1
	else
	{
		$id=$_POST["buy_product_id"];
		$purchase_code=$id;
		//echo "id : ".$ref;
		$sql = "SELECT * FROM product WHERE id='$id'";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) 
		{
			// output data of each row
			while($row = $result->fetch_assoc()) 
			{				
				
				$prod_type=$row["type"];
		  
				
		?>


























<div class="single-sec">
	 <div class="container">
		 <ol class="breadcrumb">
			 <li><a href="index.php">Home</a></li>
			 <li><a href="<?php echo $prod_type.'.php'; ?>">Products</a></li>
			 <li class="active"><?php echo ucwords($prod_type);?></li>
		 </ol>
		 <!-- start content -->	
		 
		 
		 
		 
		 
		 
		 <h2><?php		echo ucwords($row["type"]);?> </h2>
		 
		 <div class="col-md-9 det">
				 <div class="single_left">
					 <div class="flexslider">
							<ul class="slides">
	<?php		
				$target=$row["code"];
				
				$target='products/'.$target.'.jpg';
?>
								<li>
									<img src="<?php echo $target;?>" />
									
								</li>
							</ul>
									
									
						</div>
						<!-- FlexSlider -->
						  <script defer src="js/jquery.flexslider.js"></script>
						<link rel="stylesheet" href="css/flexsliderfinal.css" type="text/css" media="screen" />

							<script>
						// Can also be used with $(document).ready()
						$(window).load(function() {
						  $('.flexslider').flexslider({
							animation: "slide",
							controlNav: "thumbnails"
						  });
						});
						</script>
						<h4>Product Code: <?php echo $row["code"]; ?></h3>
									<h4>Price: Rs. <?php echo $row["price"]; ?></h3>
									<h4>Product Type: <?php echo ucwords($row["type"]); ?></h3>
				 </div>
				 
				  <div class="single-right">
					 
					 
					<?php  
					  }
					  }
					  
					  ?>
					  <div class="single-bottom1">
						
						
						
							 
									
									
									
									
									
									
									
									
									
									
									
									
									
									
									
									
									
									
									
									
									
									
									
									
									
									
									
									
									
									
									
									
									
									
									
									
									
									
									

<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="well well-sm">
                <form method="POST" action="submit_purchase.php">
                <input type="hidden" name="purchaseCode" value="1000"/>
				<div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="name">
                                Name</label>
                            <input type="text" class="form-control" name="userName" placeholder="Enter name" required="required" />
                        </div>
						<div class="form-group">
                            <label for="name">
                                Phone No.</label>
                            <input type="text" class="form-control" name="userPhone" placeholder="Enter phone number" required="required" />
                        </div>
                        <div class="form-group">
                            <label for="email">
                                Email Address</label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                </span>
                                <input type="email" class="form-control" name="userEmail" placeholder="Enter email" required="required" /></div>
                        </div>
						<div class="form-group">
                            <label for="name">
                                Address</label>
                            <textarea name="userAddress" class="form-control" rows="3" cols="25" required="required"
                                placeholder="Address"></textarea>
                        </div>
                        
                    </div>
                    <!--<div class="col-md-12">
                        <div class="form-group">
                            <label for="name">
                                Message</label>
                            <textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required"
                                placeholder="Message"></textarea>
                        </div>
                    </div>-->
                    <div class="col-md-12">
					
                        <input type="submit" class="btn btn-primary pull-right" value="Purchase"/>
                    </div>
                </div>
                </form>
            </div>
        </div>
        
    </div>
</div>

									
									
									
									
									
									
									
									
									
									
									
									
									
									
									
									
									
									
									
									
									
									
									
									
									
									
									
								 
						
					 </div>					 
				  </div>
				  <div class="clearfix"></div>
					
		  <!---->
		  
			
			<!---->
		    </div>
		<div class="rsidebar span_1_of_left">
				<section  class="sky-form">
					 	<div class="product_right">
						 <h4 class="m_2"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span>Categories</h4>
						 <div class="tab1">
							 <ul class="place">								
								 <li class="sort"><a href="kurta.php">Kurta</a></li>
								 
									<div class="clearfix"> </div>
							  </ul>
							 
					      </div>						  
						  <div class="tab2">
							 <ul class="place">								
								 <li class="sort"><a href="mokhu.php">Mokhu</li>
								 
									<div class="clearfix"> </div>
							  </ul>
							 
					      </div>
						  <div class="tab3">
							 <ul class="place">								
								 <li class="sort"><a href="jacket.php">Jacket</a></li>
								 
									<div class="clearfix"> </div>
							  </ul>
							 
					      </div>
						  <div class="tab4">
							 <ul class="place">								
								 <li class="sort"><a href="jacket_kurta.php">Jacket-kurta</a></li>
								 
									<div class="clearfix"> </div>
							  </ul>
							
					      </div>
						  <div class="tab5">
							 <ul class="place">								
								 <li class="sort"><a href="semi_indo.php">Semi Indo-Western</a></li>
								 
									<div class="clearfix"> </div>
							  </ul>
							 
					      </div>
						  <!--script-->
						
						<!-- script -->					 
				 </section>
				 			
			 </div> 
		     <div class="clearfix"></div>
	  </div>	 
</div>











<div class="container">



		 <div class="arrivals">	
		 <h3>Related Products</h3>
		 <div class="arrival-grids">			 
			 <ul id="flexiselDemo1">
				 
				 
			<?php	 
			$sql = "SELECT * FROM product WHERE type='$prod_type'";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) 
		{
			// output data of each row
			while($row = $result->fetch_assoc()) 
			{
				$target=$row["code"];
				$target='products/'.$target.'.jpg';
				?><a>
				 <li>
				 
					 <img src="<?php echo $target;?>" alt="Image could not be displayed"/>	
					 <div class="arrival-info">
						 <h3>Code :<?php echo $row["code"];?></h3>
						 <p>Rs.<?php echo $row["price"];?></p>
						 <!--<span class="pric1"><del>Rs 18000</del></span>
						 <span class="disc">[12% Off]</span>-->
					 </div>
					 <div class="viw"></a>
					 
				
					 
					 
					 
					 
					 <form action="single.php" method="POST">
						<button style="color: #00a0dc;
    background-color: #eee;
    border: 0;" value="<?php echo $row["id"];?>" name="buy_product_id"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>Quick View</button>
					 </form>
					 </div>				 
				 </li>
	<?php }}}?>
				</ul>
				<script type="text/javascript">
				 $(window).load(function() {			
				  $("#flexiselDemo1").flexisel({
					visibleItems: 4,
					animationSpeed: 1000,
					autoPlay: false,
					autoPlaySpeed: 3000,    		
					pauseOnHover:true,
					enableResponsiveBreakpoints: true,
					responsiveBreakpoints: { 
						portrait: { 
							changePoint:480,
							visibleItems: 1
						}, 
						landscape: { 
							changePoint:640,
							visibleItems: 2
						},
						tablet: { 
							changePoint:768,
							visibleItems: 3
						}
					}
				});
				});
				</script>
							<script type="text/javascript" src="js/jquery.flexisel.js"></script>	  
				 </div>
			</div>
</div>








<div class="shoping">
	 <div class="container">
	 	 
		 <div class="shpng-grids">
			 <div class="col-md-4 shpng-grid">
				 <h3>Free Shipping</h3>
				 <p>On Order Over Rs999</p>
			 </div>
			 <div class="col-md-4 shpng-grid">
				 <h3>Order Return</h3>
				 <p>Return Within 14days</p>
			 </div>
			 <div class="col-md-4 shpng-grid">
				 <h3>COD</h3>
				 <p>Cash On Delivery</p>
			 </div>
			 <div class="clearfix"></div>
		 </div>
	 </div>
</div>
<!---->
<div class="footer">
	 <div class="container">
		 <div class="ftr-grids">
			 <div class="col-md-4 ftr-grid">
				 <h4>Lazos Karma</h4>
				 <ul>
					 <li><a href="index.php">Home</a></li>
					 <li><a href="about.php">About Us</a></li>
					 <li><a href="contact.php">Contact Us</a></li>
					 <li><a href="https://www.facebook.com/lazoskarma/">Find on Facebok</a></li>
					 
				 </ul>
			 </div>
			 <div class="col-md-4 ftr-grid">
				 <h4>Our Products</h4>
				 <ul>
					 <li><a href="kurta.php">Kurta</a></li>
					 <li><a href="mokhu.php">Mokhu</a></li>
					 <li><a href="jacket.php">Jacket</a></li>
					 <li><a href="jacket_kurta.php">Jacket-Kurta</a></li>
					 <li><a href="semi_indo.php">Semi Indo-Western</a></li>					 
				 </ul>
			 </div>
			 
			 <div class="col-md-4 ftr-grid">
				 <h4>Find Us here</h4>
				 <ul>
					 <p>Heritage India (Lazos Karma)</p>
								<p>26 Shreeji Industrial Estate,</p>
								<p>Subhash Road,</p> 
								<p>Jogeshwari East,</p> 
								<p>Mumbai-400 060.</p>
					 
				 </ul>
			 </div>
			 <div class="clearfix"></div>
		 </div>		
	 </div>
</div>

<!---->
 <div class="copywrite">
	 <div class="container">
		 <p>Copyright © 2015 Wedding Store. All Rights Reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
		 </div>
</div>	
</body>
</html>