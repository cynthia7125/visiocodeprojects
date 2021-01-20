INSERT INTO `item` (`Item_category_ID`, `Offer_ID`, `Item_name`, `Item_description`, `Original_unit_cost`, `Item_unit_cost`, 
`Item_quantity_in_stock`, `Item_image`) VALUES( 2, 10, 'badroom set', ' bedroom furniture', 28000, 22600, 13, 'bedroom set.jpg')

INSERT INTO `item` (`Item_category_ID`, `Offer_ID`, `Item_name`, `Item_description`, `Original_unit_cost`, `Item_unit_cost`, 
`Item_quantity_in_stock`, `Item_image`) VALUES
(2, 11,  'office', 'office furniture', 34000, 30200, 16, 'office set.jpg'),
(2, 14,  'dinning', 'dinning furniture', 20000, 15400, 44, 'dinning set.jpg'),
(11, 21,  'sugar', 'bakery', 112, 101, 456, 'kabras.jpg'),
(7, 10, 'famila', 'porriage flour', 142, 120, 123, 'famila.jpg'),
(6, 13, 'weetabix', 'breakfast cereal', 459, 364, 243, 'weetabix.jpg'),
(5, 17, 'tooth brush', 'tooth brush', 449, 399, 222, 'toothB.jpg'),
(5, 16, 'Riunite', 'wine', 1499, 1349, 45, 'toothB.jpg'),
(5, 14, 'Sunlight', 'Washing powder', 366, 314, 456, 'sunlight.jpg'),
(7, 11, 'jogoo', 'Maize flour', 121, 100, 656, 'jogoo.jpg'),
(12, 12, 'Mwea Rice', 'Packed rice', 200, 166, 432, 'mwea pearl rice.jpg'),
(9, 21, 'berries', 'fruits', 250, 199, 65, 'berries.jpg'),
(9, 23, 'Apples', 'fruits', 150, 119, 130, 'apples choice.jpg'),
(9, 17, 'oranges', 'fruits', 259, 230, 212, 'oranges.jpg'),
(10, 15, 'Nuts cake', 'cake', 749, 630, 6, 'cake.jpg'),
(5, 22, 'Tissue paper', '10 roles of tissue', 319, 289, 491, 'T-Paper.jpg'),
(2, 20, 'Book Shelf', 'A book shelf ', 34600, 31999, 23, 'book shelf.jpg');



INSERT INTO `item` (`Item_ID`, `Item_category_ID`, `Offer_ID`, `Item_name`, `Item_description`, `Original_unit_cost`, `Item_unit_cost`, `Saved_percentage`, `Item_quantity_in_stock`, `Item_image`, `activation`) VALUES
(1, 1, 1, 4, 'Asus laptop', '64GB laptop 8GB Ram', 60000, 55000, 8.33, 30, 'asus.png', '1'),





select DISTINCT supermarkets.Supermarket_name, offers.Offer_ID, item.Offer_ID from item, offers, supermarkets 
where offers.Supermarket_ID = supermarkets.Supermarket_ID and item.Offer_ID = (SELECT offers.Offer_ID from offers, supermarkets 
where supermarkets.Supermarket_ID = offers.Supermarket_ID and item.Offer_ID = offers.Offer_ID)



select DISTINCT supermarkets.Supermarket_name, offers.Offer_ID from item, offers, supermarkets where 
offers.Supermarket_ID = supermarkets.Supermarket_ID and item.Offer_ID = (SELECT offers.Offer_ID from offers, supermarkets 
where supermarkets.Supermarket_ID = offers.Supermarket_ID and item.Offer_ID = offers.Offer_ID)


select supermarkets.Supermarket_name as supermarkets, supermarkets.Supermarket_name, offers.Offer_ID from item, offers, 
supermarkets where offers.Supermarket_ID = supermarkets.Supermarket_ID and item.Offer_ID = (SELECT offers.Offer_ID from 
offers, supermarkets where supermarkets.Supermarket_ID = offers.Supermarket_ID and item.Offer_ID = offers.Offer_ID) 
GROUP BY supermarkets.Supermarket_name

 


 <?php
	session_start();
?>
<!DOCTYPE html>
  <head>
    <title>Administrator</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link href="http://localhost/visiocodeprojects/admin/lumino/css/bootstrap.min.css" rel="stylesheet">
	<link href="http://localhost/visiocodeprojects/admin/lumino/css/font-awesome.min.css" rel="stylesheet">
	<link href="http://localhost/visiocodeprojects/admin/lumino/css/datepicker3.css" rel="stylesheet">
	<link href="http://localhost/visiocodeprojects/admin/lumino/css/styles.css" rel="stylesheet">

	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <link rel="stylesheet" href="style.css" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
	<script src="js/jquery2.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	
	<link rel="icon" type="image/icon" href="favicon.jpg">
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
		.quotes {display: none;}
	</style>
	
  </head>
<body method="POST" >

<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>
				<a class="navbar-brand" href="#"><span>Offers</span>Admin</a>
				<div class="navbar-brand"><a href = "http://localhost/visiocodeprojects/itemcategory.php"><span>Item Categories</span></a></div>
				<div class="navbar-brand">Offers</div>
				<div class="navbar-brand"><a href = "http://localhost/visiocodeprojects/item.php"><span>Items</span></a></div>
				<div class="navbar-brand"><a href = "http://localhost/visiocodeprojects/admin/lumino/index.php"><span>Dashboard</span></a></div>	
				<div class="navbar-brand"><a href = "http://localhost/visiocodeprojects/barchart.php"><span>Charts</span></a></div>

				<form action="processes.php" method="POST" style="float:right; ">
				<input style=" margin-top:15px;  border-radius: 5px; color: black; width: 200px;" id="email" type="text" 
				name="search_users" placeholder="Enter user email ..." required/>
				<button style="color: black;" name="submit">search</button></form></div>
				<ul class="nav navbar-top-links navbar-right">
				</ul>
			</div>
		</div><!-- /.container-fluid -->
	</nav>

		<p></br></br></p>

<center>
  <div class="row">
	<div class="col-md-2"></div>
	<div class="col-md-8">
	
	<?php
	include "connect.php";
	if(isset($_GET["edit_offer"])){
        $Offer_ID  = $_GET["edit_offer"];
        $spot_super = "SELECT * FROM offers WHERE Offer_ID = '$Offer_ID' LIMIT 1";
		$spot_super_res = $conn->query($spot_super);
        $spot_super_row = $spot_super_res->fetch_assoc();
        
	}
	?>
	
		<div class="panel panel-primary" style="width:550px; height:300px; font-family:cursive; ">
			<div class="panel-heading" style="background-color:#87CEEB; color:black; font-size:20px;"><b>New offer</b></div>
			<div class="panel-body" >		
			  <div class="row" style="margin:10px; ">
					<form method="POST" action = "processes.php" >
					<?php

					$sql = "SELECT * FROM supermarkets";

					$result = $conn->query($sql);
						// output data of each row
					?>
						<select class="st" name = "Supermarket_ID" required>

					<option value =" ">--Select Supermarket name--</option>
					<option value ="<?php print $spot_super_row["Supermarket_ID"]; ?>"><?php print $_SESSION['username']; ?></option>
					
					</select><br/><br/>
<input class="st" type = "text" placeholder="Enter Offer Name" name="Offer_name" <?php if(isset($_GET["edit_offer"])){ ?>value = "<?php print $spot_super_row["Offer_name"]; ?>" <?php } ?> /><br /><br />
<input class="st" type = "text" placeholder = "Enter Offer Duration" name="Offer_duration" <?php if(isset($_GET["edit_offer"])) {  ?>value = "<?php  print $spot_super_row["Offer_duration"];  ?>" <?php } ?> /><br /><br />

	<?php if(isset($_GET["edit_offer"])){ ?>
		<input type="hidden" value = "<?php print $spot_super_row["Offer_ID"]; ?>" name = "Offer_ID" />
		
		<input style="float:right;" type="submit" value="Edit <?php print $spot_super_row["Offer_name"]; ?>" name = "edit_offer">
	<?php }else{ ?>
		<input style="float:right;" type="submit" value="New offer" name = "New_offer">
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

// if(isset($_POST['search'])){
// 	//require('db.php');
// 	include('connect.php');


// 	$search_item = $_POST['search'];
// 	$display_item ="SELECT * FROM offers WHERE Offer_name = '$Offer_name' LIMIT 1" ;


	$sql = "SELECT * FROM offers, supermarkets WHERE offers.activation = 1 and supermarkets.Supermarket_ID = offers.Supermarket_ID 
	and supermarkets.Supermarket_name = '".$_SESSION['username']."' ORDER BY Offer_name DESC";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		// output data of each row
?>

<!-- <div class="panel-heading" style=" width: 50%; float: right; background-color:#87CEEB; color:black; font-size:20px;"><b>Active offers</b></div> -->
<!-- <div class='panel-footer'  style=' width: 49.5%; float: right; color: black; font-style: Bold; font-size:xx-large; font-family:cursive;'>Active offers</div> -->
<table style="float: right; width:50%;">
<caption class="panel-heading" style=" width: 100%;  
            background-color:#87CEEB; color:black; font-size:20px;">
			<b>Active offers</b>
			
            </caption>   
    
    <tr>
			<th>ID</th>
			<th>Offer name</th>
			<th>Offer duration</th>
            <th>Action</th>
           
        </tr>


<?php
    // output data of each row
    while($row = $result->fetch_assoc()) {
?>
        <tr><td  style = "width:10%; background-color: #;"><?php print $row["Offer_ID"]; ?></td>
			<td  style = "width:40%; background-color: #;"><?php print $row["Offer_name"]; ?></td>
        	<td  style = "width: 20%; background-color: #;"><?php print $row["Offer_duration"]; ?></td>
		
			<td style = "width: 30%; background-color: #373737;">
        <div class="row text-center">
          <div class="col">
            <ul class="list-inline">
              <li class="list-inline-item"><a href="?edit_offer=<?php print $row["Offer_ID"]; ?>" class="p-2"><i class="glyphicon glyphicon-edit"></i></a></li>
              <li class="list-inline-item"><a href="?del_offer=<?php print $row["Offer_ID"]; ?>" class="p-2"><i class="glyphicon glyphicon-trash"></i></a></li>
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
    echo "<strong><h2 style = 'color:white'>You have NO active Offers</h2></strong>";
}
?>
 </table>
 <?php

$sql = "SELECT * FROM offers, supermarkets WHERE offers.activation = 2 and supermarkets.Supermarket_ID = offers.Supermarket_ID 
and supermarkets.Supermarket_name = '".$_SESSION['username']."' ORDER BY Offer_name DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	// output data of each row
?>

<!-- 
<div class="panel-heading" style=" width: 50%; float: left; background-color:#87CEEB; 
color:black; font-size:20px;"><b>De-activated offers</b></div> -->
<table style="float: left; width:50%; margin-left: 1px;">
<caption class="panel-heading" style=" width: 100%;  
            background-color:#87CEEB; color:black; font-size:20px;">
			<b>De-activated offers</b>
	
            </caption>   
    
    <tr>
			<th>ID</th>
			<th>Offer name</th>
			<th>Offer duration</th>
            <th>Action</th>
           
        </tr>
<?php
// output data of each row
while($row = $result->fetch_assoc()) {
?>
    <tr><td  style = "width:10%; background-color: #;"><?php print $row["Offer_ID"]; ?></td>
		<td  style = "width: 40%; background-color: #;"><?php print $row["Offer_name"]; ?></td>
    <td  style = "width: 20%; background-color: #;"><?php print $row["Offer_duration"]; ?></td>
	
		<td style = "width: 30%; background-color: #373737;">
	<div class="row text-center">
	  <div class="col">
		<ul class="list-inline">
		   <li class="list-inline-item"><a href="?upload_offer=<?php print $row["Offer_ID"]; ?>" class="p-2"><i class="glyphicon glyphicon-upload"></i></a></li>
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
echo "<strong><h2 style = 'color:white'>You have NO De-activated offers</h2></strong>";
}
?>
  <?php
   if(isset($_GET["del_offer"])){
	$Offer_ID  = $_GET["del_offer"];
		
		$sql = "UPDATE offers SET activation = 2 WHERE Offer_ID = '$Offer_ID' ";

		if ($conn->query($sql) === TRUE) {
			$conn->close();
			// $msg ='<script> swal({
			// 	title: "Done!",
			// 	text: "You clicked the button!",
			// 	icon: "success",
			// 	button: "OK!",
			//   });</script>';
			// header("Location: offer.php");
			exit();
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}
	if(isset($_GET["upload_offer"])){
		$Offer_ID  = $_GET["upload_offer"];
			
			$sql = "UPDATE offers SET activation = 1 WHERE Offer_ID = '$Offer_ID' ";
	
			if ($conn->query($sql) === TRUE) {
				$conn->close();
				// echo '<div class="alert alert-success" role="alert">User successfully deactivated</div>';
				// header("Location: offer.php");
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



-- offers search
<form action="processes.php" method="POST" style="float:right; ">
		<input style=" margin-top:15px; border-radius: 5px; color: black; width: 200px;" type="text" name="search_offers" 
		placeholder="Enter offer name..." required/>
		<button style="color: black;" name="submit">search</button></form>




<!DOCTYPE html>
<html>
  <head>
    <title>Administrator</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link href="http://localhost/visiocodeprojects/admin/lumino/css/bootstrap.min.css" rel="stylesheet">
	<link href="http://localhost/visiocodeprojects/admin/lumino/css/font-awesome.min.css" rel="stylesheet">
	<link href="http://localhost/visiocodeprojects/admin/lumino/css/datepicker3.css" rel="stylesheet">
	<link href="http://localhost/visiocodeprojects/admin/lumino/css/styles.css" rel="stylesheet">

	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

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
<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>
				<a class="navbar-brand" href="#"><span>Offers</span>Admin</a>
				<div class="navbar-brand">Item Categories</div>
				<div class="navbar-brand"><a href = "http://localhost/visiocodeprojects/offers.php"><span>Offers</span></a></div>
				<div class="navbar-brand"><a href = "http://localhost/visiocodeprojects/item.php"><span>Items</span></a></div>
				<div class="navbar-brand"><a href = "http://localhost/visiocodeprojects/admin/lumino/index.php"><span>Dashboard</span></a></div>	
				<div class="navbar-brand"><a href = "http://localhost/visiocodeprojects/barchart.php"><span>Charts</span></a></div>

				<form action="processes.php" method="POST" style="float:right; ">
				<input style=" margin-top:15px;  border-radius: 5px; color: black; width: 200px;" id="email" type="text" 
				name="search_users" placeholder="Enter user email ..." required/>
				<button style="color: black;" name="submit">search</button></form></div>
				<ul class="nav navbar-top-links navbar-right">
				</ul>
			</div>
		</div><!-- /.container-fluid -->
	</nav>

		<p></br></br></p>

<center>
  <div class="row">
	<div class="col-md-2"></div>
	<div class="col-md-8">
	
	<?php
	include "connect.php";
	if(isset($_GET["edit_category"])){
		$Item_category_ID  = $_GET["edit_category"];
		$spot_super = "SELECT * FROM item_category WHERE Item_category_ID = '$Item_category_ID' LIMIT 1";
		$spot_super_res = $conn->query($spot_super);
		$spot_super_row = $spot_super_res->fetch_assoc();
	}
	?>
	
		<div class="panel panel-primary" style="width:550px; height:350px; font-family:cursive; ">
			<div class="panel-heading" style="background-color:#87CEEB; color:black; font-size:20px;"><b>New Item Category</b></div>
			<div class="panel-body" >		
			  <div class="row" style="margin:10px; ">
					<form method="POST" action = "processes.php" >
<input class="st" type = "text" placeholder="Enter Category Name" name="Item_category_name" <?php if(isset($_GET["edit_category"])){ ?>value = "<?php print $spot_super_row["Item_category_name"]; ?>" <?php } ?> /><br /><br />
<label style="float:left">Category Description</label><textarea class="st" placeholder = "Enter Category Description" style="width:500px; height:100px;" name="Item_category_description" /><?php if(isset($_GET["edit_category"])) {  print $spot_super_row["Item_category_description"];  } ?> </textarea><br /><br />

	<?php if(isset($_GET["edit_category"])){ ?>
		<input type="hidden" value = "<?php print $spot_super_row["Item_category_ID"]; ?>" name = "Item_category_ID" />
		
		<input style="float:right;" type="submit" value="Edit <?php print $spot_super_row["Item_category_name"]; ?>" name = "edit_category">
	<?php }else{ ?>
		<input style="float:right;" type="submit" value="New category" name = "New_category">
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

	$sql = "SELECT * FROM item_category WHERE activation = 1 ORDER BY Item_category_name DESC";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		// output data of each row
?>
<!-- <div class="panel-heading" style=" width: 50%; float: right; background-color:#87CEEB; color:black; font-size:20px;"><b>Active item category</b></div> -->
<!-- <div class='panel-footer'  style=' width: 49.5%; float: right; color: black; font-style: Bold; font-size:xx-large; font-family:cursive;'>Active item_category</div> -->
<table style="float: right; width:50%;">
<caption class="panel-heading" style=" width: 100%;  
            background-color:#87CEEB; color:black; font-size:20px;">
            <b>Active item category</b>
            </caption>   
    
   		<tr>
			<th>ID</th>
            <th>Category name</th>
            <th>Action</th>
           
        </tr>


<?php
    // output data of each row
    while($row = $result->fetch_assoc()) {
?>
		<tr><td  style = "width:10%; background-color: #;"><?php print $row["Item_category_ID"]; ?></td>
			<td  style = "width:70%; background-color: #;"><?php print $row["Item_category_name"]; ?></td>
		
			<td style = "width: 30%; background-color: #373737;">
        <div class="row text-center">
          <div class="col">
            <ul class="list-inline">
              <li class="list-inline-item"><a href="?edit_category=<?php print $row["Item_category_ID"]; ?>" class="p-2"><i class="glyphicon glyphicon-edit"></i></a></li>
              <li class="list-inline-item"><a href="?del_category=<?php print $row["Item_category_ID"]; ?>" class="p-2"><i class="glyphicon glyphicon-trash"></i></a></li>
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

$sql = "SELECT * FROM item_category WHERE activation = 2 ORDER BY Item_category_name DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	// output data of each row
?>


<!-- <div class="panel-heading" style=" width: 50%; float: left; background-color:#87CEEB; color:black; font-size:20px;"><b>De-activated item category</b></div> -->
<table style="float: left; width:50%;">
<caption class="panel-heading" style=" width: 100%;  
            background-color:#87CEEB; color:black; font-size:20px;">
            <b>De-activated item category</b>
            </caption>   
    
    <tr>
			<th>ID</th>
            <th>Category name</th>
            <th>Action</th>
           
        </tr>
<?php
// output data of each row
while($row = $result->fetch_assoc()) {
?>
	<tr><td  style = "width:10%; background-color: #;"><?php print $row["Item_category_ID"]; ?></td>
		<td  style = "width: 60%; background-color: #;"><?php print $row["Item_category_name"]; ?></td>
	
		<td style = "width: 30%; background-color: #373737;">
	<div class="row text-center">
	  <div class="col">
		<ul class="list-inline">
		   <li class="list-inline-item"><a href="?upload_category=<?php print $row["Item_category_ID"]; ?>" class="p-2"><i class="glyphicon glyphicon-upload"></i></a></li>
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
   if(isset($_GET["del_category"])){
	$Item_category_ID  = $_GET["del_category"];
		
		$sql = "UPDATE item_category SET activation = 2 WHERE Item_category_ID = '$Item_category_ID' ";

		if ($conn->query($sql) === TRUE) {
			$conn->close();
			// $msg ='<script> swal({
			// 	title: "Done!",
			// 	text: "You clicked the button!",
			// 	icon: "success",
			// 	button: "OK!",
			//   });</script>';
			// header("Location: category.php");
			exit();
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}
	if(isset($_GET["upload_category"])){
		$Item_category_ID  = $_GET["upload_category"];
			
			$sql = "UPDATE item_category SET activation = 1 WHERE Item_category_ID = '$Item_category_ID' ";
	
			if ($conn->query($sql) === TRUE) {
				$conn->close();
				// echo '<div class="alert alert-success" role="alert">User successfully deactivated</div>';
				// header("Location: category.php");
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



-- itemcategory search
<form action="processes.php" method="POST" style="float:right; ">
		<input style=" margin-top:15px; border-radius: 5px; color: black; width: 200px;" type="text" name="search_category" 
		placeholder="Enter category name..." required/>
		<button style="color: black;" name="submit">search</button></form>




<?php
	session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Administrator</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link href="http://localhost/visiocodeprojects/admin/lumino/css/bootstrap.min.css" rel="stylesheet">
	<link href="http://localhost/visiocodeprojects/admin/lumino/css/font-awesome.min.css" rel="stylesheet">
	<link href="http://localhost/visiocodeprojects/admin/lumino/css/datepicker3.css" rel="stylesheet">
	<link href="http://localhost/visiocodeprojects/admin/lumino/css/styles.css" rel="stylesheet">

	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

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
<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>
				<a class="navbar-brand" href="#"><span>Offers</span>Admin</a>
				<div class="navbar-brand"><a href = "http://localhost/visiocodeprojects/itemcategory.php"><span>Item Categories</span></a></div>
				<div class="navbar-brand"><a href = "http://localhost/visiocodeprojects/offers.php"><span>Offers</span></a></div>
				<div class="navbar-brand">Items</div>
				<div class="navbar-brand"><a href = "http://localhost/visiocodeprojects/admin/lumino/index.php"><span>Dashboard</span></a></div>	
				<div class="navbar-brand"><a href = "http://localhost/visiocodeprojects/barchart.php"><span>Charts</span></a></div>

				<form action="processes.php" method="POST" style="float:right; ">
				<input style=" margin-top:15px;  border-radius: 5px; color: black; width: 200px;" id="email" type="text" 
				name="search_users" placeholder="Enter user email ..." required/>
				<button style="color: black;" name="submit">search</button></form></div>
				<ul class="nav navbar-top-links navbar-right">
				</ul>
			</div>
		</div><!-- /.container-fluid -->
	</nav>

		<p></br></br></p>

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

					$sql = "SELECT * FROM offers, supermarkets WHERE offers.activation = 1 and supermarkets.Supermarket_ID = offers.Supermarket_ID 
					and supermarkets.Supermarket_name = '".$_SESSION['username']."' ";
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
<input class="st" type = "text" placeholder="Enter Image URL eg. image_name.jpg" name="Item_image" <?php if(isset($_GET["edit_item"])){ ?>value = "<?php print $spot_item_row["Item_image"]; ?>" <?php } ?> /><br /><br />
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

	$sql = "SELECT * FROM item, offers, supermarkets WHERE item.activation = 1 and supermarkets.Supermarket_ID = offers.Supermarket_ID 
	and item.Offer_ID = offers.Offer_ID and supermarkets.Supermarket_name = '".$_SESSION['username']."' ORDER BY Item_name DESC";
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
    echo "<h2 style = 'color:white'>You have <strong>NO</strong> active Offers</h2>";
}
?>
 </table>
 <?php

$sql = "SELECT * FROM item, offers, supermarkets WHERE item.activation = 2 and supermarkets.Supermarket_ID = offers.Supermarket_ID 
and item.Offer_ID = offers.Offer_ID and supermarkets.Supermarket_name = '".$_SESSION['username']."' ORDER BY Item_name DESC";
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
echo "<h2 style = 'color:white'>You have <strong>NO</strong> De-activated offers</h2>";
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




-- item search
<form action="processes.php" method="POST" style="float:right; ">
		<input style=" margin-top:15px; border-radius: 5px; color: black; width: 200px;" type="text" name="search" 
		placeholder="Enter item name..." required/>
		<button style="color: black;" name="submit">search</button></form>



class Solution {
    public int solution(int[] A) {
        // write your code in Java SE 8
        int min = A[0];
		int sum;
        for (int i = 0; i < A.length; i++) {
            if (min%4 == 0){
                    sum =+ A[i];
				min = sum;	               
            }
            else {
                min = 0;
            }
        }
        return min;
    }
}


class Solution {
    public int solution(String S) {
        // write your code in Java SE 8
		String[] arr = S.split("(?<=[a-z])\\.\\s+");
        String max = arr[0];
		int cou = 0;
        for (int i =0; i< arr.length; i++){
           
			String[] words = max.split("\\s+");
   			cou = words.length;
            
        }
     return cou;   
    }
}


class Solution {
    public int solution(int[] A) {
        // write your code in Java SE 8
        int max = A[0];
        for (int i = 1; i < A.length; i++) {
            if (max%4 == 0){
                if (A[i] > max) {
                    max = A[i];
                }
				else {
					max = 0;
				}
			}
        }
        return max;
    }
}