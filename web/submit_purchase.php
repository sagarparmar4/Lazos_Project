<?php
	if(isset($_POST['userName']) && isset($_POST['userEmail']) && isset($_POST['userPhone']) && isset($_POST['userAddress']) && isset($_POST['purchaseCode']))
	{
		$name=$_POST['userName'];
		$email=$_POST['userEmail'];
		$phone=$_POST['userPhone'];
		$userAdd=$_POST['userAddress'];
		$product_code=$_POST['purchaseCode'];
		//$rating=$_POST['rating'];
		$rating=4.5; //temp
		if(!empty($name) && !empty($email) && !empty($phone) && !empty($userAdd) && !empty($product_code))
		{
			include "config.php";	 
			// Check connection
			if ($conn->connect_error) 
			{
				header("Location: 404.php"); //connection failed
			} 
			$sql = "INSERT INTO purchase (name, email, phone, address, product)
			VALUES ('$name', '$email', '$phone', '$userAdd', '$product_code')";

			if ($conn->query($sql) === TRUE) 
			{
				echo "<script>
						alert('Thanks For Shopping.');
						window.location.href='index.php';
					  </script>";
				//header("Location: contact.html");
			} 
			else 
			{
				header("Location: 404.php"); //exec query error
			}
			$conn->close();
		}
		else
		{
			echo "</script>alert(Enter Values.);</script>";
		}
	}
?>