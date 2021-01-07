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
	<!-- <link href="http://localhost/visiocodeprojects/admin/lumino/css/styles.css" rel="stylesheet"> -->


	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

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

/* background: url("offers_background.jpg"); */
background: #e9ecf2;
background-size: 100%;
opacity: 0.8;
}


	</style>
	
  </head>
<body style="margin:0px;" method="POST">
<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>
				<a class="navbar-brand" href="#"><span>Offers</span>Admin</a>
				<div class="navbar-brand">Edit Users</div>
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

		<p></br></br></p>

<center>
  <div class="row">
	<div class="col-md-2"></div>
	<div class="col-md-8">
	
	<?php
	include "connect.php";
	if(isset($_GET["edit_user"])){
		$user_ID  = $_GET["edit_user"];
		$spot_super = "SELECT * FROM users WHERE user_ID = '$user_ID' LIMIT 1";
		$spot_super_res = $conn->query($spot_super);
		$spot_super_row = $spot_super_res->fetch_assoc();
	}
	?>
	
		<div class="panel panel-primary" style="width:550px; height:370px; font-family:cursive; ">
			<div class="panel-heading" style="background-color:#87CEEB; color:black; font-size:20px;"><b>New User</b></div>
			<div class="panel-body" >		
			  <div class="row" style="margin:10px; ">
					<form method="POST" action = "processes.php" >
<input class="st" type = "text" placeholder="Enter username" name="username" <?php if(isset($_GET["edit_user"])){ ?>value = "<?php print $spot_super_row["username"]; ?>" <?php } ?> /><br /><br />
<input class="st" type = "text" placeholder="Enter email" name="email" <?php if(isset($_GET["edit_user"])){ ?>value = "<?php print $spot_super_row["email"]; ?>" <?php } ?> /><br /><br />
<input class="st" type = "text" placeholder="permissions: 0 = supermarket, 1 = Admin, 2 = User" name="permissions" <?php if(isset($_GET["edit_user"])){ ?>value = "<?php print $spot_super_row["permissions"]; ?>" <?php } ?> /><br /><br />
<input class="st" type = "password" placeholder="Enter password" name="password" <?php if(isset($_GET["edit_user"])){ ?>value = "<?php print $spot_super_row["password"]; ?>" <?php } ?> /><br /><br />


	<?php if(isset($_GET["edit_user"])){ ?>
		<input type="hidden" value = "<?php print $spot_super_row["user_ID"]; ?>" name = "user_ID" />
		
        <input style="float:right;" type="submit" value="Edit <?php print $spot_super_row["username"]; ?>" name = "edit_user">
        
	<?php }else{ ?>
		<input style="float:right;" type="submit" value="New User" name = "New_User">
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

	$sql = "SELECT * FROM users WHERE activation = 1 ORDER BY username DESC";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		// output data of each row
?>
<!-- <div class="panel-heading" style=" width: 50%; float: right; background-color:#87CEEB; color:black; font-size:20px;"><b>Active users</b></div> -->
<!-- <div class='panel-footer'  style=' width: 49.5%; float: right; color: black; font-style: Bold; font-size:xx-large; font-family:cursive;'>Active users</div> -->
<table style="float: right; width:50%;">
<caption class="panel-heading" style=" width: 100%;  
            background-color:#87CEEB; color:black; font-size:20px;">
            <b>Active users</b>
            </caption>   
    
    <tr>
			<th>ID</th>
			<th>Username</th>
			<th>Email</th>
			<th>Action</th>
           
        </tr>


<?php
    // output data of each row
    while($row = $result->fetch_assoc()) {
?>
        <tr><td  style = "width: 10%; background-color: #;"><?php print $row["user_ID"]; ?></td>
			<td  style = "width:20%; background-color: #;"><?php print $row["username"]; ?></td>
        <td  style = "width:40%; background-color: #;"><?php print $row["email"]; ?></td>
        		
			<td style = "width: 30%; background-color: #373737;">
        <div class="row text-center">
          <div class="col">
            <ul class="list-inline">
              <li class="list-inline-item"><a href="?edit_user=<?php print $row["user_ID"]; ?>" class="p-2"><i class="glyphicon glyphicon-edit"></i></a></li>
              <li class="list-inline-item"><a href="?del_user=<?php print $row["user_ID"]; ?>" class="p-2"><i class="glyphicon glyphicon-trash"></i></a></li>
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
    echo "<strong><h2 style = 'color:grey; font-style: italic;'>You have NO activated users</h2></strong>";
}
?>
 
 <?php

$sql = "SELECT * FROM users WHERE activation = 2 ORDER BY username DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	// output data of each row
?>


<!-- <div class="panel-heading" style=" width: 50%; float: left; background-color:#87CEEB; color:black; font-size:20px;"><b>De-activated users</b></div> -->
<table style="float: left; width:50%;">

<caption class="panel-heading" style=" width: 100%;  
            background-color:#87CEEB; color:black; font-size:20px;">
            <b>De-activated users</b>
            </caption>   
    
    <tr>
			<th>ID</th>
            <th>Username</th>
			<th>Email</th>
			<th>Action</th>
           
        </tr>

<?php
// output data of each row
while($row = $result->fetch_assoc()) {
?>
    <tr><td  style = "width: 10%; background-color: #;"><?php print $row["user_ID"]; ?></td>
		<td  style = "width: 20%; background-color: #;"><?php print $row["username"]; ?></td>
    <td  style = "width: 40%; background-color: #;"><?php print $row["email"]; ?></td>
	
		<td style = "width: 30%; background-color: #373737;">
	<div class="row text-center">
	  <div class="col">
		<ul class="list-inline">
		   <li class="list-inline-item"><a href="?upload_user=<?php print $row["user_ID"]; ?>" class="p-2"><i class="glyphicon glyphicon-upload"></i></a></li>
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
echo "<strong><h2 style = 'color:grey; font-style: italic;'>You have NO De-activated users</h2></strong>";
}
?>
  <?php
   if(isset($_GET["del_user"])){
	$user_ID  = $_GET["del_user"];
		
		$sql = "UPDATE users SET activation = 2 WHERE user_ID = '$user_ID' ";

		if ($conn->query($sql) === TRUE) {
			$conn->close();
			// $msg ='<script> swal({
			// 	title: "Done!",
			// 	text: "You clicked the button!",
			// 	icon: "success",
			// 	button: "OK!",
			//   });</script>';
			// header("Location: supermarket.php");
			exit();
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}
	if(isset($_GET["upload_user"])){
		$user_ID  = $_GET["upload_user"];
			
			$sql = "UPDATE users SET activation = 1 WHERE user_ID = '$user_ID' ";
	
			if ($conn->query($sql) === TRUE) {
				$conn->close();
				// echo '<div class="alert alert-success" role="alert">User successfully deactivated</div>';
				// header("Location: supermarket.php");
				exit();
			} else {
				echo "Error: " . $sql . "<br>" . $conn->error;
			}
		}
	?>
</table>
	</center>
	<script type="text/javascript">
	var email = document.getElementById("email")
        email.addEventListener('keyup', function(){
                checkEmail(email.value)
        })
    function checkEmail(email){
        var text = document.getElementById("email").value;
    
        var regx = /^([a-zA-Z0-9\.-]+)@([a-zA-Z0-9]+).([a-z]{2,8})(.[a-z]{2,8})?$/;
            if(regx.test(text)){
                document.getElementById("lbltext").innerHTML = "Valid";
                document.getElementById("lbltext").style.visibility = "visible";
                document.getElementById("lbltext").style.color = "green";
    
            }
            else{
                document.getElementById("lbltext").innerHTML = "InValid email";
                document.getElementById("lbltext").style.visibility = "visible";
                document.getElementById("lbltext").style.color = "red";
            }

        
        
	}

		(function() {

			var quotes = $(".quotes");

			function showNextQuote() {
			quotes
				.fadeIn(2000)
				.delay(2000)
				.fadeOut(2000);
			}

			showNextQuote();

})();
		
</script>
</body>
</html>