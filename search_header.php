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

background-size: 100%;
opacity: 0.8;
}

	</style>
	
  </head>
<body style="margin:0px;" method="POST" >
<?php
$display_users ="SELECT * FROM users where username = '{$_SESSION['username']}'" ;
					  
$result = $conn->query($display_users);

if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
		if($row["permissions"] == 0) {
?>

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
				<div class="navbar-brand"><a href = "http://localhost/visiocodeprojects/item.php"><span>Items</span></a></div>
				<div class="navbar-brand"><a href = "http://localhost/visiocodeprojects/admin/lumino/index.php"><span>Dashboard</span></a></div>	
				<div class="navbar-brand"><a href = "http://localhost/visiocodeprojects/barchart.php"><span>Charts</span></a></div>
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
      
<?php
		}

		if($row["permissions"] == 1) {
	?>

<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>
				<a class="navbar-brand" href="#"><span>Offers</span>Admin</a>
				<div class="navbar-brand"><a href = "http://localhost/visiocodeprojects/supermarket.php">Edit Users</a></div>
				<div class="navbar-brand"><a href = "http://localhost/visiocodeprojects/supermarket.php"><span>Edit Supermarkets</span></a></div>
				<div class="navbar-brand"><a href = "http://localhost/visiocodeprojects/admin/lumino/index.php"><span>Dashboard</span></a></div>	
				<div class="navbar-brand"><a href = "http://localhost/visiocodeprojects/barchart.php"><span>Charts</span></a></div>
				<div class="navbar-brand"><a href="http://localhost/visiocodeprojects/login.php"><span><em class="fa fa-power-off"> logout</em></span></a></div>

				<form action="processes.php" method="POST" style="float:right; ">
				<input style=" margin-top:15px;  border-radius: 5px; color: black; width: 200px;" id="email" type="text" 
				name="search_users" placeholder="Enter user email ..." required/>
				<button style="color: black;" name="submit">search</button></form>	
			
			</div>
				
				
				
				<ul class="nav navbar-top-links navbar-right">
				</ul>
			</div>
		</div><!-- /.container-fluid -->
	</nav>
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
	<?php
			}
	}
}
?>
<br>
<br>

</body>
</html>