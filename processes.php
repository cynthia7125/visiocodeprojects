<?php
	session_start();
	require_once "connect.php";
	
	if(isset($_POST["New_Supermarket"])){
		$Supermarket_name = $_POST["Supermarket_name"];
		$Supermarket_address = $_POST["Supermarket_address"];
		
		$sql = "INSERT INTO supermarkets (Supermarket_name, Supermarket_address) VALUES ('$Supermarket_name', '$Supermarket_address')";

		if ($conn->query($sql) === TRUE) {
			$conn->close();
			header("Location: supermarket.php");
			exit();
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}	
	if(isset($_POST["edit_super"])){
		$Supermarket_name = $_POST["Supermarket_name"];
		$Supermarket_address = $_POST["Supermarket_address"];
		$Supermarket_ID = $_POST["Supermarket_ID"];
		
		$sql = "UPDATE supermarkets SET Supermarket_name = '$Supermarket_name', Supermarket_address = '$Supermarket_address' WHERE Supermarket_ID = '$Supermarket_ID' LIMIT 1";

		if ($conn->query($sql) === TRUE) {
			$conn->close();
			header("Location: supermarket.php");
			exit();
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
    }
    if(isset($_POST["del_super"])){
		$Supermarket_ID = $_POST["Supermarket_ID"];
		
		$sql = "UPDATE supermarkets SET activation = 2 WHERE Supermarket_ID = '$Supermarket_ID'";

		if ($conn->query($sql) === TRUE) {
            $conn->close();
            
			header("Location: supermarket.php");
			exit();
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
    }
    if(isset($_POST["New_offer"])){
		$Supermarket_ID = $_POST["Supermarket_ID"];
		$Offer_name = $_POST["Offer_name"];
		$Offer_duration = $_POST["Offer_duration"];
		
		$sql = "INSERT INTO offers (Supermarket_ID, Offer_name, Offer_duration) VALUES ('$Supermarket_ID', '$Offer_name', '$Offer_duration')";

		if ($conn->query($sql) === TRUE) {
			$conn->close();
			header("Location: offers.php");
			exit();
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}	
	if(isset($_POST["edit_offer"])){
		
		$Offer_name = $_POST["Offer_name"];
		$Offer_duration = $_POST["Offer_duration"];
        $Offer_ID = $_POST["Offer_ID"];
       
		
		$sql = "UPDATE offers SET Offer_name = '$Offer_name', Offer_duration = '$Offer_duration' WHERE Offer_ID = '$Offer_ID' LIMIT 1";

		if ($conn->query($sql) === TRUE) {
			$conn->close();
			header("Location: offers.php");
			exit();
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
    }
    if(isset($_POST["del_offer"])){
		$Offer_ID = $_POST["Offer_ID"];
		
		$sql = "UPDATE offers SET activation = 2 WHERE Offer_ID = '$Offer_ID'";

		if ($conn->query($sql) === TRUE) {
            $conn->close();
            
			header("Location: offers.php");
			exit();
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
    }
	
	if(isset($_POST["New_User"])){
		$username = $_POST["username"];
		$address = $_POST["address"];
        $email = $_POST["email"];
        $password = $_POST["password"];
		
		$sql = "INSERT INTO users (username, address, email, password) VALUES ('$username', '$address', '$email', md5('$password'))";

		if ($conn->query($sql) === TRUE) {
			$conn->close();
			header("Location: users.php");
			exit();
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}	
	if(isset($_POST["edit_user"])){
		$User_ID = $_POST["user_ID"];
		$username = $_POST["username"];
		$address = $_POST["address"];
		$email = $_POST["email"];
		$permissions = $_POST["permissions"];
        $password = $_POST["password"];
		
		
		$sql = "UPDATE users SET username = '$username', address = '$address', email = '$email', permissions = '$permissions', password = '$password' 
		WHERE User_ID = '$User_ID' LIMIT 1";

		if ($conn->query($sql) === TRUE) {
			$conn->close();
			header("Location: users.php");
			exit();
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
    }
    if(isset($_POST["del_user"])){
		$User_ID = $_POST["User_ID"];
		
		$sql = "UPDATE users SET activation = 2 WHERE User_ID = '$User_ID'";

		if ($conn->query($sql) === TRUE) {
            $conn->close();
            
			header("Location: users.php");
			exit();
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
    }
	
	if(isset($_POST["New_category"])){
		$Item_category_name = $_POST["Item_category_name"];
		$Item_category_description = $_POST["Item_category_description"];
		
		$sql = "INSERT INTO item_category (Item_category_name, Item_category_description) VALUES ('$Item_category_name', '$Item_category_description')";

		if ($conn->query($sql) === TRUE) {
			$conn->close();
			header("Location: itemcategory.php");
			exit();
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}	
	if(isset($_POST["edit_category"])){
		$Item_category_name = $_POST["Item_category_name"];
		$Item_category_description = $_POST["Item_category_description"];
		$Item_category_ID = $_POST["Item_category_ID"];
		
		$sql = "UPDATE item_category SET Item_category_name = '$Item_category_name', Item_category_description = '$Item_category_description' WHERE Item_category_ID = '$Item_category_ID' LIMIT 1";

		if ($conn->query($sql) === TRUE) {
			$conn->close();
			header("Location: itemcategory.php");
			exit();
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
    }
    if(isset($_POST["del_category"])){
		$Item_category_ID = $_POST["Item_category_ID"];
		
		$sql = "UPDATE item_category SET activation = 2 WHERE Item_category_ID = '$Item_category_ID'";

		if ($conn->query($sql) === TRUE) {
            $conn->close();
            
			header("Location: itemcategory.php");
			exit();
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
    }
	if(isset($_POST["New_item"])){
		$Item_category_ID = $_POST["Item_category_ID"];
		$Offer_ID = $_POST["Offer_ID"];	
		$Item_name = $_POST["Item_name"];
		$Item_description = $_POST["Item_description"];
		$Original_unit_cost = $_POST["Original_unit_cost"];
        $Item_unit_cost = $_POST["Item_unit_cost"];
        $Item_quantity_in_stock= $_POST["Item_quantity_in_stock"];
        $Item_image = $_POST["Item_image"];
       
		
		$sql = "INSERT INTO item (Item_category_ID, Offer_ID, Item_name, Item_description, Original_unit_cost, Item_unit_cost, Item_quantity_in_stock, Item_image) 
        VALUES ('$Item_category_ID', '$Offer_ID', '$Item_name', '$Item_description', '$Original_unit_cost', '$Item_unit_cost', '$Item_quantity_in_stock', '$Item_image')";

		if ($conn->query($sql) === TRUE) {
			$conn->close();
			header("Location: item.php");
			exit();
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}	
	if(isset($_POST["edit_item"])){

		$Item_name = $_POST["Item_name"];
		$Item_description = $_POST["Item_description"];
		$Original_unit_cost = $_POST["Original_unit_cost"];
        $Item_unit_cost = $_POST["Item_unit_cost"];
        $Item_quantity_in_stock = $_POST["Item_quantity_in_stock"];
        $Item_image = $_POST["Item_image"];
        
        
		$Item_ID = $_POST["Item_ID"];
		
		$sql = "UPDATE item SET 
        Item_name = '$Item_name', Item_description = '$Item_description', Original_unit_cost = '$Original_unit_cost', Item_unit_cost ='$Item_unit_cost', 
        Item_quantity_in_stock = $Item_quantity_in_stock, Item_image = '$Item_image' 
        WHERE Item_ID = '$Item_ID' LIMIT 1";

		if ($conn->query($sql) === TRUE) {
			$conn->close();
			header("Location: item.php");
			exit();
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
    }
    if(isset($_POST["del_item"])){
		$Item_ID = $_POST["Item_ID"];
		
		$sql = "UPDATE item SET activation = 2 WHERE Item_ID = '$Item_ID'";

		if ($conn->query($sql) === TRUE) {
            $conn->close();
            
			header("Location: item.php");
			exit();
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}
	


	

	// Items search function

	if(isset($_POST['search'])){
	  //require('db.php');
	  include('connect.php');
	  include('search_header.php');


	  $search_item = $_POST['search'];
	  $display_item ="SELECT * FROM item WHERE Item_name LIKE '%$search_item%'" ;
	
	  $result = $conn->query($display_item);

	  if ($result->num_rows > 0) {
		  // output data of each row
  ?>
  <!-- <div class="panel-heading" style=" width: 50%; float: right; background-color:#87CEEB; color:black; font-size:20px;"><b>Active item</b></div> -->
  <!-- <div class='panel-footer'  style=' width: 49.5%; float: right; color: black; font-style: Bold; font-size:xx-large; font-family:cursive;'>Active item</div> -->
  <table align="center" style="width:80%;">
  <caption class="panel-heading" style=" width: 100%;  
			  background-color:#87CEEB; color:black; font-size:20px;">
			  <center><b>Search items</b></center>
			  </caption>   
	  
	  <tr>
			  <th>Item name</th>
			  <th>Stock</th>
			  <th>Original cost</th>
			  <th>Cost</th>
			  <th>saved</th>
			  <th>Actions</th>
		  </tr>
  
  <?php
	  // output data of each row
	  while($row = $result->fetch_assoc()) {
		  ?>
		  <tr><td  style = "width:20%; background-color: #;"><?php print $row["Item_name"]; ?></td>
			  <td  style = "width:15%; background-color: #;"><?php print $row["Item_quantity_in_stock"]; ?></td>
			  <td  style = "width:15%; background-color: #;"><?php print $row["Original_unit_cost"]; ?></td>
			  <td  style = "width:15%; background-color: #;"><?php print $row["Item_unit_cost"]; ?></td>
			  <td  style = "width:15%; background-color: #;"><?php print $row["Saved_percentage"]; ?>%</td>
			  
		  <?php
		 if($row["activation"] == 1) {
		  ?>
			  <td style = "width: 20%; background-color: #373737;">
		  <div class="row text-center">
			<div class="col">
			  <ul class="list-inline">
				<li class="list-inline-item"><a href="item.php?edit_item=<?php print $row["Item_ID"]; ?>" class="p-2"><i class="glyphicon glyphicon-edit"></i></a></li>
				<li class="list-inline-item"><a href="item.php?del_item=<?php print $row["Item_ID"]; ?>" class="p-2"><i class="glyphicon glyphicon-trash"></i></a></li>
			  </ul>
			</div>
		  </div>
	  </td>
	  <?php
		 } 
	 
		 else {
		  ?>
			 	<td style = "width: 20%; background-color: #373737;">
	<div class="row text-center">
	  <div class="col">
		<ul class="list-inline">
		   <li class="list-inline-item"><a href="item.php?upload_item=<?php print $row["Item_ID"]; ?>" class="p-2"><i class="glyphicon glyphicon-upload"></i></a></li>
		</ul>
	  </div>
	</div>
</td>
	  <?php
		 } 
	  ?>
		  
  <?php
	  }
  ?>
  </tr></table>
  <?php
		echo "<br><hr>";
		echo "<p align= 'center'><a href='item.php'><font color=#2277AA font face='arial' size='6pt'>Back to Items<font></a></p>";
	} else {
		echo "<p align='center'><font color=#2277AA font face='arial' size='10pt'>No Records available</font> </p><hr>";
		echo "<p align= 'center'><a href='item.php'><font color=#2277AA font face='arial' size='6pt'>Back to Items<font></a></p>";
  }
  
   
  }

	// Items category search function

	if(isset($_POST['search_category'])){
		//require('db.php');
		include('connect.php');
		include('search_header.php');
  
  
		$search_item_category = $_POST['search_category'];
		$display_item_category ="SELECT * FROM item_category WHERE Item_category_name LIKE '%$search_item_category%'" ;
	  
		$result = $conn->query($display_item_category);
  
		if ($result->num_rows > 0) {
			// output data of each row
	?>
	<!-- <div class="panel-heading" style=" width: 50%; float: right; background-color:#87CEEB; color:black; font-size:20px;"><b>Active item</b></div> -->
	<!-- <div class='panel-footer'  style=' width: 49.5%; float: right; color: black; font-style: Bold; font-size:xx-large; font-family:cursive;'>Active item</div> -->
	<table align="center" style="width:80%; ">
	<caption class="panel-heading" style=" width: 100%;  
				background-color:#87CEEB; color:black; font-size:20px;">
				<center><b>Search items category</b></center>
				</caption>   
		
		<tr>
			  <th>ID</th>
			  <th>Category name</th>
			  <th>Actions</th>
			</tr>
	
	<?php
		// output data of each row
		while($row = $result->fetch_assoc()) {
			?>
			<tr><td  style = "width:10%; background-color: #;"><?php print $row["Item_category_ID"]; ?></td>
				<td  style = "width:70%; background-color: #;"><?php print $row["Item_category_name"]; ?></td>
							
			<?php
		   if($row["activation"] == 1) {
			?>
				<td style = "width: 30%; background-color: #373737;">
			<div class="row text-center">
			  <div class="col">
				<ul class="list-inline">
				  <li class="list-inline-item"><a href="itemcategory.php?edit_category=<?php print $row["Item_category_ID"]; ?>" class="p-2"><i class="glyphicon glyphicon-edit"></i></a></li>
				  <li class="list-inline-item"><a href="itemcategory.php?del_category=<?php print $row["Item_category_ID"]; ?>" class="p-2"><i class="glyphicon glyphicon-trash"></i></a></li>
				</ul>
			  </div>
			</div>
		</td>
		<?php
		   } 
	   
		   else {
			?>
				   <td style = "width: 20%; background-color: #373737;">
	  <div class="row text-center">
		<div class="col">
		  <ul class="list-inline">
			 <li class="list-inline-item"><a href="itemcategory.php?upload_category=<?php print $row["Item_category_ID"]; ?>" class="p-2"><i class="glyphicon glyphicon-upload"></i></a></li>
		  </ul>
		</div>
	  </div>
  </td>
		<?php
		   } 
		?>
			
	<?php
		}
	?>
	</tr></table>
	<?php
			echo "<br><hr>";
			echo "<p align= 'center'><a href='itemcategory.php'><font color=#2277AA font face='arial' size='6pt'>Back to Item Category<font></a></p>";
		} else {
			echo "<p align='center'><font color=#2277AA font face='arial' size='10pt'>No Records available</font> </p><hr>";
			echo "<p align= 'center'><a href='itemcategory.php'><font color=#2277AA font face='arial' size='6pt'>Back to Item Category<font></a></p>";
	}
	
	 
	}
  

	
			// offers search function

			if(isset($_POST['search_offers'])){
				//require('db.php');
				include('connect.php');
				include('search_header.php');
		  
		  
				$search_offer = $_POST['search_offers'];
				$display_offer ="SELECT * FROM offers WHERE Offer_name LIKE '%$search_offer%'" ;
			  
				$result = $conn->query($display_offer);
		  
				if ($result->num_rows > 0) {
					// output data of each row
			?>
			<!-- <div class="panel-heading" style=" width: 50%; float: right; background-color:#87CEEB; color:black; font-size:20px;"><b>Active offers</b></div> -->
			<!-- <div class='panel-footer'  style=' width: 49.5%; float: right; color: black; font-style: Bold; font-size:xx-large; font-family:cursive;'>Active offers</div> -->
			<table align="center" style="width:80%;">
			<caption class="panel-heading" style=" width: 100%;  
						background-color:#87CEEB; color:black; font-size:20px;">
						<center><b>Search offers</b></center>
						</caption>   
				
				<tr>
						<th>ID</th>
						<th>offers name</th>
						<th>Offer duration</th>
						<th>Actions</th>
					</tr>
			
			<?php
				// output data of each row
			while($row = $result->fetch_assoc()) {
				?>
				<tr><td  style = "width:10%; background-color: #;"><?php print $row["Offer_ID"]; ?></td>
					<td  style = "width:25%; background-color: #;"><?php print $row["Offer_name"]; ?></td>
					<td  style = "width:25%; background-color: #;"><?php print $row["Offer_duration"]; ?></td>
					
				<?php
					if($row["activation"] == 1) {
						?>
						<td style = "width: 20%; background-color: #373737;">
						<div class="row text-center">
						<div class="col">
							<ul class="list-inline">
							<li class="list-inline-offers"><a href="offers.php?edit_offer=<?php print $row["Offer_ID"]; ?>" class="p-2"><i class="glyphicon glyphicon-edit"></i></a></li>
							<li class="list-inline-offers"><a href="offers.php?del_offer=<?php print $row["Offer_ID"]; ?>" class="p-2"><i class="glyphicon glyphicon-trash"></i></a></li>
							</ul>
						</div>
						</div>
						</td>
					<?php
					} 
				
					else {
								?>
								
						<td style = "width: 20%; background-color: #373737;">
						<div class="row text-center">
							<div class="col">
							<ul class="list-inline">
								<li class="list-inline-offers"><a href="offers.php?upload_offer=<?php print $row["Offer_ID"]; ?>" class="p-2"><i class="glyphicon glyphicon-upload"></i></a></li>
							</ul>
							</div>
						</div>
						</td>
				<?php
				   } 
				?>
					
			<?php
				}
			?>
			</tr></table>
			<?php
					echo "<br><hr>";
					echo "<p align= 'center'><a href='offers.php'><font color=#2277AA font face='arial' size='6pt'>Back to Offers<font></a></p>";
				} else {
					echo "<p align='center'><font color=#2277AA font face='arial' size='10pt'>No Records available</font> </p><hr>";
					echo "<p align= 'center'><a href='offers.php'><font color=#2277AA font face='arial' size='6pt'>Back to Offers<font></a></p>";
			}
			
			 
			}
  

		// users search function

		if(isset($_POST['search_users'])){
			//require('db.php');
			include('connect.php');
			include('search_header.php');
		
		
			$search_users = $_POST['search_users'];
			$display_users ="SELECT * FROM users WHERE email LIKE '%$search_users%'" ;
			
			$result = $conn->query($display_users);
		
			if ($result->num_rows > 0) {
				// output data of each row
		?>
		<!-- <div class="panel-heading" style=" width: 50%; float: right; background-color:#87CEEB; color:black; font-size:20px;"><b>Active users</b></div> -->
		<!-- <div class='panel-footer'  style=' width: 49.5%; float: right; color: black; font-style: Bold; font-size:xx-large; font-family:cursive;'>Active users</div> -->
		<table align="center" style="width:80%;">
		<caption class="panel-heading" style=" width: 100%;  
					background-color:#87CEEB; color:black; font-size:20px;">
					<center><b>Search users</b></center>
					</caption>   
			
			<tr>
					<th>User ID</th>
					<th>Usersname</th>
					<th>Email</th>
					<th>Actions</th>
				</tr>
		
		<?php
			// output data of each row
			while($row = $result->fetch_assoc()) {
				?>
				<tr><td  style = "width:15%; background-color: #;"><?php print $row["user_ID"]; ?></td>
					<td  style = "width:20%; background-color: #;"><?php print $row["username"]; ?></td>
					<td  style = "width:15%; background-color: #;"><?php print $row["email"]; ?></td>
					
				<?php
				if($row["activation"] == 1) {
				?>
					<td style = "width: 20%; background-color: #373737;">
				<div class="row text-center">
					<div class="col">
					<ul class="list-inline">
						<li class="list-inline-users"><a href="users.php?edit_user=<?php print $row["user_ID"]; ?>" class="p-2"><i class="glyphicon glyphicon-edit"></i></a></li>
						<li class="list-inline-users"><a href="users.php?del_user=<?php print $row["user_ID"]; ?>" class="p-2"><i class="glyphicon glyphicon-trash"></i></a></li>
					</ul>
					</div>
				</div>
			</td>
			<?php
				} 
			
				else {
				?>
						<td style = "width: 20%; background-color: #373737;">
			<div class="row text-center">
			<div class="col">
				<ul class="list-inline">
					<li class="list-inline-users"><a href="users.php?upload_user=<?php print $row["user_ID"]; ?>" class="p-2"><i class="glyphicon glyphicon-upload"></i></a></li>
				</ul>
			</div>
			</div>
		</td>
			<?php
				} 
			?>
				
		<?php
			}
		?>
		</tr></table>
		<?php
			echo "<br><hr>";
			echo "<p align= 'center'><a href='users.php'><font color=#2277AA font face='arial' size='6pt'>Back to Users<font></a></p>";

		} else {
			echo "<p align='center'><font color=#2277AA font face='arial' size='10pt'>No Records available</font> </p><hr>";
			echo "<p align= 'center'><a href='users.php'><font color=#2277AA font face='arial' size='6pt'>Back to Users<font></a></p>";
		}
			
		}

				// supermarkets search function

				if(isset($_POST['search_supermarket'])){
					//require('db.php');
					include('connect.php');
					include('search_header.php');
				
				
					$search_supermarket = $_POST['search_supermarket'];
					$display_supermarkets ="SELECT * FROM supermarkets WHERE Supermarket_name LIKE '%$search_supermarket%'" ;
					
					$result = $conn->query($display_supermarkets);
				
					if ($result->num_rows > 0) {
						// output data of each row
				?>
				<!-- <div class="panel-heading" style=" width: 50%; float: right; background-color:#87CEEB; color:black; font-size:20px;"><b>Active supermarkets</b></div> -->
				<!-- <div class='panel-footer'  style=' width: 49.5%; float: right; color: black; font-style: Bold; font-size:xx-large; font-family:cursive;'>Active supermarkets</div> -->
				<table align="center" style="width:80%;">
				<caption class="panel-heading" style=" width: 100%;  
							background-color:#87CEEB; color:black; font-size:20px;">
							<center><b>Search supermarkets</b></center>
							</caption>   
					
					<tr>
							<th>Supermarket name</th>
							<th>Actions</th>
						</tr>
				
				<?php
					// output data of each row
					while($row = $result->fetch_assoc()) {
						?>
						<tr><td  style = "width:20%; background-color: #;"><?php print $row["Supermarket_name"]; ?></td>
							
							
						<?php
						if($row["activation"] == 1) {
						?>
							<td style = "width: 20%; background-color: #373737;">
						<div class="row text-center">
							<div class="col">
							<ul class="list-inline">
								<li class="list-inline-supermarkets"><a href="supermarket.php?edit_super=<?php print $row["Supermarket_ID"]; ?>" class="p-2"><i class="glyphicon glyphicon-edit"></i></a></li>
								<li class="list-inline-supermarkets"><a href="supermarket.php?del_super=<?php print $row["Supermarket_ID"]; ?>" class="p-2"><i class="glyphicon glyphicon-trash"></i></a></li>
							</ul>
							</div>
						</div>
					</td>
					<?php
						} 
					
						else {
						?>
								<td style = "width: 20%; background-color: #373737;">
					<div class="row text-center">
					<div class="col">
						<ul class="list-inline">
							<li class="list-inline-supermarkets"><a href="supermarket.php?upload_super=<?php print $row["Supermarket_ID"]; ?>" class="p-2"><i class="glyphicon glyphicon-upload"></i></a></li>
						</ul>
					</div>
					</div>
				</td>
					<?php
						} 
					?>
						
				<?php
					}
				?>
				</tr></table>
				
				<?php
						echo "<br><hr>";
						echo "<p align= 'center'><a href='supermarket.php'><font color=#2277AA font face='arial' size='6pt'>Back to Supermarket<font></a></p>";
					
					} else {
						echo "<p align='center'><font color=#2277AA font face='arial' size='10pt'>No Records available</font> </p><hr>";
						echo "<p align= 'center'><a href='supermarket.php'><font color=#2277AA font face='arial' size='6pt'>Back to Supermarket<font></a></p>";
				}
				
					
				}
?>