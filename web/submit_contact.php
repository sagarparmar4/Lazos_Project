<?php
	
	if(isset($_POST['userName']) && isset($_POST['userEmail']) && isset($_POST['userPhone']) && isset($_POST['userMsg']))
	{
		$name=$_POST['userName'];
		$email=$_POST['userEmail'];
		$phone=$_POST['userPhone'];
		$message=$_POST['userMsg'];
		//$rating=$_POST['rating'];
		$rating=4.5; //temp
		if(!empty($name) && !empty($email) && !empty($phone) && !empty($message))
		{
			include "config.php";	 
			// Check connection
			if ($conn->connect_error) 
			{
				header("Location: 404.php"); //connection failed
			} 
			$sql = "INSERT INTO contact (name, email, phone, msg)
			VALUES ('$name', '$email', '$phone', '$message')";

			if ($conn->query($sql) === TRUE) 
			{
				echo "<script>
						alert('Thanks For Feedback.');
						window.location.href='contact.php';
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