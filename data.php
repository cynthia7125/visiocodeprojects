<?php
	header('Content-Type: application/json');

	require_once('C:/xampp/htdocs/visiocodeprojects/connect.php');

	$sqlQuery = "select (COUNT(supermarkets.Supermarket_name)/ (SELECT count(*) from item)) as supermarkets, 
	supermarkets.Supermarket_name, offers.Offer_ID from item, offers, supermarkets where 
	offers.Supermarket_ID = supermarkets.Supermarket_ID and item.Offer_ID = (SELECT offers.Offer_ID from offers 
	where item.Offer_ID = offers.Offer_ID) GROUP BY supermarkets.Supermarket_name";
	

	$result = mysqli_query($conn,$sqlQuery);

	$data = array();
	foreach ($result as $row) {
		$data[] = $row;
	}

	mysqli_close($conn);

    echo json_encode($data);    

?>