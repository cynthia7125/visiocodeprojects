<!DOCTYPE html>
<html>
  <head>
    <title>Administrator</title>
	<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="style.css" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
	<script src="js/jquery2.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	
	
	<style type="text/css">
		table{
			border:0px solid black;
			width:97%;
			color:black;
			font-family:cursive;
			font-size:25px;
			text-align: left;
			border-collapse: collapse;
		}
		th{
			background-color: #87CEEB;
			color:black;
			
		}
		td{
			padding-top:8px
		}
		table, td, th {
			border: 1px solid black;
			font-size:22px;
        }
		tr:nth-child(even) {
			background-color: #f2f2f2
		}
		
		  .st{
			  width:500px;
			  height:40px;
			  
		  }
		  label{
			  float:left;
			  font-size:20px;
  }
  body{

background: url("offers_background.jpg");

background-size: 100%;
opacity: 0.8;
}

	</style>
	
  </head>
<body style="margin:0px;" method="POST" >
    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">	
            <div class="navbar-header" style="width: 100%">
                <!-- <a href="#" class="navbar-brand">Shoppers</a> -->
                <div class="navbar-brand">Edit Items</div>
                <div class="navbar-brand"><a href = "itemcategory.php">Edit Items Category</a></div>
                <div class="navbar-brand"><a href = "offers.php">Edit Offers</a></div>
				<form action="processes.php" method="POST" style="float:right; ">
		<input style=" margin-top:15px; border-radius: 5px; color: black; width: 200px;" type="text" name="search" 
		placeholder="Enter item name..." required/>
		<button style="color: black;" name="submit">search</button></form>
            </div>
        
        </div>
        </div>
        <p></br><br/></p>
        <div class="container-fluid">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8" id="signup_msg">
                <!--Alert from signup form-->
            </div>
            <div class="col-md-2"></div>
        </div>
        </div>

<br>
<br>
<center>
  <div class="row">
	<div class="col-md-2"></div>
	<div class="col-md-8">
	
	<?php
	include "connect.php";
	if(isset($_GET["edit_item"])){
		$Item_ID  = $_GET["edit_item"];
		$spot_item = "SELECT * FROM item WHERE Item_ID = '$Item_ID' LIMIT 1";
		$spot_item_res = $conn->query($spot_item);
		$spot_item_row = $spot_item_res->fetch_assoc();
	}
	?>
	
		<div class="panel panel-primary" style="width:550px; height:600px; font-family:cursive; ">
			<div class="panel-heading" style="background-color:#87CEEB; color:black; font-size:20px;"><b>New Item</b></div>
			<div class="panel-body" >		
			  <div class="row" style="margin:10px; ">
					<form method="POST" action = "processes.php" >
                    <?php

						$sql = "SELECT * FROM item_category";
						
                        $result = $conn->query($sql);
                            // output data of each row
                        ?>
                            <select class="st" name = "Item_category_ID" required>

						<option value =" ">--Select item category--</option>
						
                        <?php				
                        // output data of each row
                            while($spot_super_row = $result->fetch_assoc()) {
                        ?>
						
                        <option value ="<?php print $spot_super_row["Item_category_ID"]; ?>"><?php print $spot_super_row["Item_category_name"]; ?></option>
                    <?php } ?>
					</select><br/><br/>
					
                    <?php

                    $sql = "SELECT * FROM offers";
                    $result = $conn->query($sql);
                        // output data of each row
                    ?>
                    <select class="st" name = "Offer_ID" required>

					<option value =" ">--Select offer--</option>
					
                    <?php				
                    // output data of each row
                        while($spot_super_row = $result->fetch_assoc()) {
                    ?>
					
                    <option value ="<?php print $spot_super_row["Offer_ID"]; ?>"><?php print $spot_super_row["Offer_name"]; ?></option>
                    <?php } ?>
</select><br/><br/>


<input class="st" type = "text" placeholder="Enter Item Name" name="Item_name" <?php if(isset($_GET["edit_item"])){ ?>value = "<?php print $spot_item_row["Item_name"]; ?>" <?php } ?> /><br /><br />
<input class="st" type = "text" placeholder="Enter Item description" name="Item_description" <?php if(isset($_GET["edit_item"])){ ?>value = "<?php print $spot_item_row["Item_description"]; ?>" <?php } ?> /><br /><br />
<input class="st" type = "text" placeholder="Enter Original unit cost" name="Original_unit_cost" <?php if(isset($_GET["edit_item"])){ ?>value = "<?php print $spot_item_row["Original_unit_cost"]; ?>" <?php } ?> /><br /><br />

<input class="st" type = "text" placeholder="Enter Item unit cost" name="Item_unit_cost" <?php if(isset($_GET["edit_item"])){ ?>value = "<?php print $spot_item_row["Item_unit_cost"]; ?>" <?php } ?> /><br /><br />
<input class="st" type = "text" placeholder="Enter Item quantity in stock" name="Item_quantity_in_stock" <?php if(isset($_GET["edit_item"])){ ?>value = "<?php print $spot_item_row["Item_quantity_in_stock"]; ?>" <?php } ?> /><br /><br />
<input class="st" type = "text" placeholder="Enter Image URL" name="Item_image" <?php if(isset($_GET["edit_item"])){ ?>value = "<?php print $spot_item_row["Item_image"]; ?>" <?php } ?> /><br /><br />
<!-- <textarea class="st" placeholder = "Enter Item Address" style="width:500px; height:100px;" name="Item_address" /><?php if(isset($_GET["edit_item"])) {  print $spot_item_row["Item_address"];  } ?> </textarea><br /><br /> -->

	<?php if(isset($_GET["edit_item"])){ ?>
		<input type="hidden" value = "<?php print $spot_item_row["Item_ID"]; ?>" name = "Item_ID" />
		
		<input style="float:right;" type="submit" value="Edit <?php print $spot_item_row["Item_name"]; ?>" name = "edit_item">
	<?php }else{ ?>
		<input style="float:right;" type="submit" value="New Item" name = "New_item">
	<?php } ?>
						
					</form>
					<br><br>
			  </div>
			</div>
		</div>
	  </div>
	
    <div class="col-md-2"></div>
    </div>

	
	  <?php

		  
?>
  </div>

  
<?php

	$sql = "SELECT * FROM item WHERE activation = 1 ORDER BY Item_name DESC";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		// output data of each row
?>
<!-- <div class="panel-heading" style=" width: 50%; float: right; background-color:#87CEEB; color:black; font-size:20px;"><b>Active item</b></div> -->
<!-- <div class='panel-footer'  style=' width: 49.5%; float: right; color: black; font-style: Bold; font-size:xx-large; font-family:cursive;'>Active item</div> -->
<table style="float: right; width:50%;">
<caption class="panel-heading" style=" width: 100%;  
            background-color:#87CEEB; color:black; font-size:20px;">
            <b>Active items</b>
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
            
		
			<td style = "width: 20%; background-color: #373737;">
        <div class="row text-center">
          <div class="col">
            <ul class="list-inline">
              <li class="list-inline-item"><a href="?edit_item=<?php print $row["Item_ID"]; ?>" class="p-2"><i class="glyphicon glyphicon-edit"></i></a></li>
              <li class="list-inline-item"><a href="?del_item=<?php print $row["Item_ID"]; ?>" class="p-2"><i class="glyphicon glyphicon-trash"></i></a></li>
            </ul>
          </div>
        </div>
	</td>
		</tr>
<?php
	}
?>

<?php
	} else {
    echo "No Records available       ";
}
?>
 
 <?php

$sql = "SELECT * FROM item WHERE activation = 2 ORDER BY Item_name DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	// output data of each row
?>


<!-- <div class="panel-heading" style=" width: 50%; float: left; background-color:#87CEEB; color:black; font-size:20px;"><b>De-activated item</b></div> -->
<table style="float: left; width:50%;">
<caption class="panel-heading" style=" width: 100%;  
            background-color:#87CEEB; color:black; font-size:20px;">
            <b>De-activated items</b>
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
	
		<td style = "width: 20%; background-color: #373737;">
	<div class="row text-center">
	  <div class="col">
		<ul class="list-inline">
		   <li class="list-inline-item"><a href="?upload_item=<?php print $row["Item_ID"]; ?>" class="p-2"><i class="glyphicon glyphicon-upload"></i></a></li>
		</ul>
	  </div>
	</div>
</td>
	</tr>
<?php
}
?>

<?php
} else {
echo "No Records available";
}
?>
  <?php
   if(isset($_GET["del_item"])){
	$Item_ID  = $_GET["del_item"];
		
		$sql = "UPDATE item SET activation = 2 WHERE Item_ID = '$Item_ID' ";

		if ($conn->query($sql) === TRUE) {
			$conn->close();
			// $msg ='<script> swal({
			// 	title: "Done!",
			// 	text: "You clicked the button!",
			// 	icon: "success",
			// 	button: "OK!",
			//   });</script>';
			// header("Location: Item.php");
			exit();
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}
	if(isset($_GET["upload_item"])){
		$Item_ID  = $_GET["upload_item"];
			
			$sql = "UPDATE item SET activation = 1 WHERE Item_ID = '$Item_ID' ";
	
			if ($conn->query($sql) === TRUE) {
				$conn->close();
				// echo '<div class="alert alert-success" role="alert">User successfully deactivated</div>';
				// header("Location: Item.php");
				exit();
			} else {
				echo "Error: " . $sql . "<br>" . $conn->error;
			}
		}
	?>
</table>
	</center>
</body>
</html>
