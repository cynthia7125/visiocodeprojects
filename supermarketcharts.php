<?php
    include "connect.php"; 
?>
<!DOCTYPE html>
<html>
<head>
<title>Administrator Charts</title>
<link rel="shortcut icon" href="http://localhost/visiocodeprojects/image/favicon.ico" /> 
	<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link href="http://localhost/visiocodeprojects/admin/lumino/css/bootstrap.min.css" rel="stylesheet">
	<link href="http://localhost/visiocodeprojects/admin/lumino/css/font-awesome.min.css" rel="stylesheet">
	<link href="http://localhost/visiocodeprojects/admin/lumino/css/datepicker3.css" rel="stylesheet">
	<link href="http://localhost/visiocodeprojects/admin/lumino/css/styles.css" rel="stylesheet">



	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

<style type="text/css">
BODY {
    width: 80%;
}

#chart-container {
    width: 100%;
    height: auto;
}
</style>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/Chart.min.js"></script>


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
				<div class="navbar-brand"><a href = "http://localhost/visiocodeprojects/itemcategory.php"><span>Item Categories</span></a></div>
				<div class="navbar-brand"><a href = "http://localhost/visiocodeprojects/offers.php"><span>Offers</span></a></div>
				<div class="navbar-brand"><a href = "http://localhost/visiocodeprojects/item.php"><span>Items</span></a></div>
				<!-- <div class="navbar-brand"><a href = "http://localhost/visiocodeprojects/admin/lumino/index.php"><span>Dashboard</span></a></div>	 -->
				<div class="navbar-brand">Charts</div>
				<div class="navbar-brand"><a href="http://localhost/visiocodeprojects/login.php"><span><em class="fa fa-power-off"> logout</em></span></a></div>

				</div>
				<ul class="nav navbar-top-links navbar-right">
				</ul>
			</div>
		</div><!-- /.container-fluid -->
	</nav>




		<p></br></br></p>
    <div id="chart-container">
        <canvas id="graphCanvas"></canvas>
    </div>

    <script>
        $(document).ready(function () {
            showGraph();
        });


        function showGraph()
        {
            {
                $.post("offersdata.php",
                function (data)
                {
                    console.log(data);
                     var Offer_name = [];
                    var offers = [];

                    for (var i in data) {
                        Offer_name.push(data[i].Offer_name);
                        offers.push(data[i].offers);
                    }

                    var chartdata = {
                        labels: Offer_name,
                        datasets: [
                            {
                                label: 'Items per offer',
                                backgroundColor: '#49e2ff',
                                borderColor: '#46d5f1',
                                hoverBackgroundColor: '#CCCCCC',
                                hoverBorderColor: '#666666',
                                data: offers
                            }
                        ]
                    };

                    var graphTarget = $("#graphCanvas");

                    var barGraph = new Chart(graphTarget, {
                        type: 'bar',
                        data: chartdata
                    });
                });
            }
        }
    </script>

<p></br></br></p>
    <div id="chart-container">
        <canvas id="graphCanvas1"></canvas>
    </div>

    <script>
        $(document).ready(function () {
            showGraph1();
        });


        function showGraph1()
        {
            {
                $.post("categorydata.php",
                function (data)
                {
                    console.log(data);
                     var Item_category_name = [];
                    var Categories = [];

                    for (var i in data) {
                        Item_category_name.push(data[i].Item_category_name);
                        Categories.push(data[i].Categories);
                    }

                    var chartdata1 = {
                        labels: Item_category_name,
                        datasets: [
                            {
                                label: 'Items per category',
                                backgroundColor: '#49e2ff',
                                borderColor: '#46d5f1',
                                hoverBackgroundColor: '#CCCCCC',
                                hoverBorderColor: '#666666',
                                data: Categories
                            }
                        ]
                    };

                    var graphTarget1 = $("#graphCanvas1");

                    var barGraph1 = new Chart(graphTarget1, {
                        type: 'bar',
                        data: chartdata1
                    });
                });
            }
        }
    </script>
<?php

    include('C:/xampp/htdocs/visiocodeprojects/admin/includes/scripts.php');
    include('C:/xampp/htdocs/visiocodeprojects/admin/includes/footer.php');
?>