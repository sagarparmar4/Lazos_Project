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
<link href="css/style1.css" rel="stylesheet" type="text/css" media="all" />	
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
					<li><a href="about.html">About</a></li>|
					<li><a href="contact.html">Contact</a></li>
				</ul>
			</div>
			<div class="top_left">
				<ul>
					<li class="top_link">Email:<a href="mailto:info@example.com">lazoskarma@gmail.com</a></li>
					<!--<li class="top_link"><a href="login.html">My Account</a></li>-->					
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
					<a href="index.html"><h1>Lazos Karma</h1></a>
				</div>
			 <!---->
		 
			 <div class="top-nav">
				<ul class="memenu skyblue"><li class="grid"><a href="index.html">Home</a></li>
					<li class="active"><a href="#">Our Products</a>
						<div class="mepanel">
							<div class="row">
								<div class="col1 me-one">
									<!--<h4>Shop</h4>-->
									<ul>
										<li><a href="kurta.html">Kurta</a></li>
										<li><a href="mokhu.html">Mokhu</a></li>
										<li><a href="jacket.html">Jacket</a></li>
										<li><a href="jacket_kurta.html">Jacket-kurta</a></li>
										<li><a href="semi_indo.html">Semi Indo-Western</a></li>
										
									</ul>
								</div>
								<!--<div class="col1 me-one">
									<h4>Style Zone</h4>
									<ul>
										<li><a href="product.html">Men</a></li>
										<li><a href="product.html">Women</a></li>
										<li><a href="product.html">Brands</a></li>
										<li><a href="product.html">Kids</a></li>
										<li><a href="product.html">Accessories</a></li>
										<li><a href="product.html">Style Videos</a></li>
									</ul>	
								</div>
								<div class="col1 me-one">
									<h4>Popular Brands</h4>
									<ul>
										<li><a href="product.html">Levis</a></li>
										<li><a href="product.html">Persol</a></li>
										<li><a href="product.html">Nike</a></li>
										<li><a href="product.html">Edwin</a></li>
										<li><a href="product.html">New Balance</a></li>
										<li><a href="product.html">Jack & Jones</a></li>
										<li><a href="product.html">Paul Smith</a></li>
										<li><a href="product.html">Ray-Ban</a></li>
										<li><a href="product.html">Wood Wood</a></li>
									</ul>	
								</div>-->
							</div>
						</div>
					</li>
					<li class="grid"><a href="about.html">About Us</a></li>
					<li class="grid"><a href="contact.html">Contact</a></li>
				</ul>
				<div class="clearfix"> </div>
			 </div>
			 <!---->
			<!--<div class="cart box_1">
				 <a href="checkout.html">
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
<div class="product-model">	 
	 <div class="container">
			<ol class="breadcrumb">
		  <li><a href="index.html">Home</a></li>
		  <li class="active">Products</li>
		 </ol>
			<h2>Our Products</h2>			
		 <div class="col-md-9 product-model-sec">
		 <?php
	include "config.php";	  
	if(!$conn)
	{
		echo "Error : ".mysql_error($conn);      //display error if connetion is not set
	}
	
	//Part 1
	else
	{
		

?>
		 <!-- card start -->
		 
		 
		 
		 
		 
		 <?php 
						 
						 
						 
						 $sql = "SELECT * FROM product where TYPE='mokhu'";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) 
		{
			// output data of each row
		
			while($row = $result->fetch_assoc()) 
			{
				/*
					display results according to 
					"Filtered Value Of Column : ID"
					Stored in Array Named $Value
				*/
				$target=$row["code"];
				$target='products/'.$target.'.jpg'; //image location

						 
						 
							
						 ?>
		 
		 
		 
		 
					 <div class="product-grid love-grid">
						<div class="more-product"><span> </span></div>						
						<div class="product-img b-link-stripe b-animate-go  thickbox">
							<img src="<?php echo $target;?>" class="img-responsive" alt=""/>
							<div class="b-wrapper">
							<h4 class="b-animate b-from-left  b-delay03">
							
							
							
							
							
							<form action="single.php" method="POST">
							
							<button class="btns" value="<?php echo $row["id"];?>" name="buy_product_id"><span class="glyphicon glyphicon-zoom-in" aria-hidden="true"></span>Quick View</button>
							
							</form>
							
							
							
							
							
							</h4>
							</div>
						</div>						
						<div class="product-info simpleCart_shelfItem">
							<div class="product-info-cust prt_name">
								<h4>Code:<?php echo $row["code"];?></h4>
								
								<span class="item_price">Rs.<?php echo $row["price"];?></span>								
								
								<!--<button type="submit" class="item_add items" value="<//?php echo $row["id"];?>">Buy</button>-->
							</div>													
							<div class="clearfix"> </div>
						</div>
					</div>	
		<!-- card end -->
		
		<?php 
			}
		}
	}
?>
					 
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