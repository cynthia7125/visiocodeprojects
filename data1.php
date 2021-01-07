<?php
	header('Content-Type: application/json');

	require_once('C:/xampp/htdocs/visiocodeprojects/connect.php');

    $sqlQuery = "select count(supermarkets.Supermarket_ID) as supermarkets, supermarkets.Supermarket_name, offers.Offer_ID 
    from offers, supermarkets where offers.Supermarket_ID = supermarkets.Supermarket_ID GROUP BY supermarkets.Supermarket_ID";

	$result = mysqli_query($conn,$sqlQuery);

	$data = array();
	foreach ($result as $row) {
		$data[] = $row;
	}

	mysqli_close($conn);

    echo json_encode($data);    

?>