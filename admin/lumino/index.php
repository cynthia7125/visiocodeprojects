<?php
	include "C:/xampp/htdocs/visiocodeprojects/connect.php"; 
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" href="http://localhost/visiocodeprojects/image/favicon.ico" /> 
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src='https://kit.fontawesome.com/a076d05399.js'></script>
	<title>Offers - Dashboard</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/datepicker3.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">


	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->

</head>
<body>
<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>
				<a class="navbar-brand" href="#"><span>Offers</span>Admin</a>
				<div class="navbar-brand"><a href = "http://localhost/visiocodeprojects/users.php"><span>Edit Users</span></a></div>
				<div class="navbar-brand"><a href = "http://localhost/visiocodeprojects/supermarket.php"><span>Edit Supermarkets</span></a></div>
				<div class="navbar-brand">Dashboard</div>
				<div class="navbar-brand"><a href = "http://localhost/visiocodeprojects/barchart.php"><span>Charts</span></a></div>
				<div class="navbar-brand"><a href="http://localhost/visiocodeprojects/login.php"><span><em class="fa fa-power-off"> logout</em></span></a></div>
						</div>
				<ul class="nav navbar-top-links navbar-right">
				</ul>
			</div>
		</div><!-- /.container-fluid -->
	</nav>
	<div class="d-flex justify-content-center">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Dashboard</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-10">
				<h1 class="page-header">Dashboard</h1>
			</div>
		</div><!--/.row-->
		
		<div class="panel panel-container">
			<div class="row">
				<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
					<div class="panel panel-teal panel-widget border-right">
						<div class="row no-padding"><em class="fa fa-xl fa-shopping-cart color-teal"></em>
							<div class="large">
							<?php
							
							 $sql = "select * from offers where created BETWEEN DATE_SUB( CURDATE( ) ,INTERVAL 1 month ) AND CURDATE( ) ";
							 $result = $conn->query($sql);
							 $row = mysqli_fetch_assoc($result);
							if ($row > 0){
								print count($row); 
							 } 
							 else{
								 echo 0;
							 }
							 
							 ?>
							</div>
							<div class="text-muted">New Offers</div>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
					<div class="panel panel-orange panel-widget border-right">
						<div class="row no-padding"><em class="fa fa-xl fa-users color-red"></em>
							<div class="large"><?php
							  
							 $got = "select * from users where created BETWEEN DATE_SUB( CURDATE( ) ,INTERVAL 1 month ) AND CURDATE( )";
							 $result = $conn->query($got);
							 $row = mysqli_fetch_assoc($result);
							 if ($row){
								print count($row); 
							 } 
							 else{
								 echo 0;
							 }
							 
							 ?></div>
							<div class="text-muted">New Users</div>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
					<div class="panel panel-orange panel-widget border-right">
						<div class="row no-padding"><em class="fas fa-xl fa-dolly color-orange"></em>
							<div class="large"><?php
							  
							 $gotten = "select * from item where created BETWEEN DATE_SUB( CURDATE( ) ,INTERVAL 1 month ) AND CURDATE( )";
							 $result = $conn->query($gotten);
							 $rowz = mysqli_fetch_assoc($result);
							 if ($rowz){
								echo count($rowz); 
							 } 
							 else{
								 echo 0;
							 }
							 
							 ?></div>
							<div class="text-muted">New Items</div>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
					<div class="panel panel-red panel-widget ">
						<div class="row no-padding"><em style='font-size:36px' class="fas fa-store color-blue"></em>
							<div class="large"><?php
							
							$gott = "select * from supermarkets WHERE created BETWEEN DATE_SUB( CURDATE( ) ,INTERVAL 1 month ) AND CURDATE( ) and activation = 1";
							$result = $conn->query($gott);
							$row = mysqli_fetch_assoc($result);
							if ($row){
								print count($row); 
							 } 
							 else{
								 echo 0;
							 }
							 
							 ?>
							</div>
							<div class="text-muted">New supermarkets</div>
						</div>
					</div>
				</div>
			</div><!--/.row-->
		</div>
	
		<div class="row">
			<div class="col-xs-6 col-md-3">
				<div class="panel panel-default">
					<div class="panel-body easypiechart-panel">
						<h4>New Offers</h4>
						<?php
							$weeklyTarget = 100;
							
							$currentNew = count($row);
							$percentss = ($currentNew / $weeklyTarget) * 100;
						?>
						<div class="easypiechart" id="easypiechart-teal" data-percent=<?php echo $percentss ?> ><span class="percent"><?php
								echo $percentss;
							?>%</span></div>
					</div>
				</div>
			</div>
			<div class="col-xs-6 col-md-3">
				<div class="panel panel-default">
					<div class="panel-body easypiechart-panel">
						<h4>New Users</h4>
						<?php
							$weeklyTarget = 200;
							$currentNew = count($row);
							$percent = ($currentNew / $weeklyTarget) * 100;
						?>
						<div class="easypiechart" id="easypiechart-red" data-percent=<?php echo $percent ?> ><span class="percent">
						<?php
							echo $percent;
						?>%</span></div>
					</div>
				</div>
			</div>
			<div class="col-xs-6 col-md-3">
				<div class="panel panel-default">
					<div class="panel-body easypiechart-panel">
						<h4>New items</h4>
						<?php
							$weeklyTarget = 100;
							$currentNew = count($rowz);
							$percent = ($currentNew / $weeklyTarget) * 100;
						?>
						<div class="easypiechart" id="easypiechart-orange" data-percent=<?php echo $percent ?> ><span class="percent">
						<?php
							echo $percent;
						?>%</span></div>
					</div>
				</div>
			</div>
			<div class="col-xs-6 col-md-3">
				<div class="panel panel-default">
					<div class="panel-body easypiechart-panel">
						<h4>New Supermarkets</h4>
						<?php
							$weeklyTarget = 10;
							$currentNew = count($row);
							$percents = ($currentNew / $weeklyTarget) * 100;
						?>
						<div class="easypiechart" id= "easypiechart-blue" data-percent=<?php echo $percents ?> > <span class="percent"><?php
						echo $percents;
					?>%</span></div>
					</div>
				</div>
			</div>
		</div><!--/.row-->
<?php

    include('C:/xampp/htdocs/visiocodeprojects/admin/includes/scripts.php');
    include('C:/xampp/htdocs/visiocodeprojects/admin/includes/footer.php');
?>