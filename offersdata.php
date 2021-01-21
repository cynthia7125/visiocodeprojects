<?php
	header('Content-Type: application/json');

	require_once('C:/xampp/htdocs/visiocodeprojects/connect.php');

	$sqlQuery = "select count(offers.Offer_ID) as offers, offers.Offer_name, item.Item_ID from offers,
				 item where offers.Offer_ID = item.Offer_ID GROUP BY offers.Offer_ID";
	

	$result = mysqli_query($conn,$sqlQuery);

	$data = array();
	foreach ($result as $row) {
		$data[] = $row;
	}

	mysqli_close($conn);

    echo json_encode($data);    

?>