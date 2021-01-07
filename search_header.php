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
    <!-- <link rel="stylesheet" href="style.css" /> -->
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
<?php
$display_users ="SELECT * FROM users where username = '{$_SESSION['username']}'" ;
					  
$result = $conn->query($display_users);

if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
		if($row["permissions"] == 0) {
?>

    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">	
            <div class="navbar-header" style="width: 100%">
				<!-- <a href="#" class="navbar-brand">Shoppers</a> -->
				
                <div class="navbar-brand"><a href = "item.php">Edit Items</a></div>
                <div class="navbar-brand"><a href = "itemcategory.php">Edit Items Category</a></div>
                <div class="navbar-brand"><a href = "offers.php">Edit Offers</a></div>
				
            </div>
            </div>
        </div>
      
<?php
		}

		if($row["permissions"] == 1) {
	?>

		<div class="navbar navbar-inverse navbar-fixed-top">
			<div class="container-fluid">	
				<div class="navbar-header" style="width: 100%">
					<!-- <a href="#" class="navbar-brand">Shoppers</a> -->
					
					<div class="navbar-brand"><a href = "userrs.php">Edit Users</a></div>
					<div class="navbar-brand"><a href = "supermarket.php">Edit Supermarkets</a></div>
					
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
	<?php
			}
	}
}
?>
<br>
<br>

</body>
</html>