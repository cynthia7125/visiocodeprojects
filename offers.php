

 <?php
	session_start();
?>
<!DOCTYPE html>
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

        /* background: url("offers_background.jpg"); */
		background: #e9ecf2;
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
				<!-- <div class="navbar-brand"><a href = "http://localhost/visiocodeprojects/admin/lumino/index.php"><span>Dashboard</span></a></div>	 -->
				<div class="navbar-brand"><a href = "http://localhost/visiocodeprojects/supermarketcharts.php"><span>Charts</span></a></div>
				<div class="navbar-brand"><a href="http://localhost/visiocodeprojects/login.php"><span><em class="fa fa-power-off"> logout</em></span></a></div>

				<form action="processes.php" method="POST" style="float:right; ">
		<input style=" margin-top:15px; border-radius: 5px; color: black; width: 200px;" type="text" name="search_offers" 
		placeholder="Enter offer name..." required/>
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
    echo "<strong><h2 style = 'color:grey; font-style: italic;'>You have NO activated offers</h2></strong>";
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
echo "<strong><h2 style = 'color:grey; font-style: italic;'>You have NO De-activated offers</h2></strong>";
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
