<?php
	session_start();
?>
<!DOCTYPE html>
<html>
  <head>
	<title>Administrator</title>
	<link rel="shortcut icon" href="http://localhost/visiocodeprojects/image/favicon.ico" /> 
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

        /* background: url("offers_background.jpg"); */
		background: #e9ecf2;
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
				<!-- <div class="navbar-brand"><a href = "http://localhost/visiocodeprojects/admin/lumino/index.php"><span>Dashboard</span></a></div>	 -->
				<div class="navbar-brand"><a href = "http://localhost/visiocodeprojects/supermarketcharts.php"><span>Charts</span></a></div>
				<div class="navbar-brand"><a href="http://localhost/visiocodeprojects/login.php"><span><em class="fa fa-power-off"> logout</em></span></a></div>

				<form action="processes.php" method="POST" style="float:right; ">
				<input style=" margin-top:15px; border-radius: 5px; color: black; width: 200px;" type="text" name="search_category" 
				placeholder="Enter category name..." required/>
				<button style="color: black;" name="submit">search</button></form>
			</div>
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

	$sql = "SELECT DISTINCT Item_category_name FROM item_category, item, offers, supermarkets WHERE supermarket_name = 'Weacon' ORDER BY Item_category_name DESC";
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
    echo "<strong><h2 style = 'color:grey; font-style: italic;'>You have NO activated item categories</h2></strong>";
}
?>
 </table>
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
	$sql = "SELECT * FROM item_category WHERE activation = 2 ORDER BY Item_category_name DESC";
	$result = $conn->query($sql);

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
echo "<strong><h2 style = 'color:grey; font-style: italic;'>You have NO De-activated item Category</h2></strong>";
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