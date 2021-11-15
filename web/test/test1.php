<html>
<body>
\n</h3><br>
<!---->
<?php
	include "..\config.php";	  
	if(!$conn)
	{
		echo "Error : ".mysql_error($conn);      //display error if connetion is not set
	}
	
	//Part 1
	else
	{
		$sql = "SELECT * FROM product where TYPE='kurta' ORDER BY RAND() LIMIT 6";
		//$result = $conn->query($sql);

		if ($result->num_rows > 0) 
		{
			// output data of each row
			$count=0;
			while($row = $result->fetch_assoc()) 
			{
				/*
					display results according to 
					"Filtered Value Of Column : ID"
					Stored in Array Named $Value
				*/
				?>
				<h3>
				<?php
				if($count==3)
				{
					echo "Done";
				}
				?></h3>
				<?php
				$count++;
				echo "Count : ".$count;
				echo "Id : ".$row["id"];
				$target=$row["code"];
				echo "Target :".$target;
				$target='products/'.$target.'.jpg'; //image location
				echo "Target Result :".$target;
				echo "Code : ".$row["code"];
				echo "Price : ".$row["price"];
				echo "Type : ".$row["type"];
				?><br><?php
			}
		}
	}
?>
