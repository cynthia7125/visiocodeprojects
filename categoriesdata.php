<?php
	header('Content-Type: application/json');

	require_once('C:/xampp/htdocs/visiocodeprojects/connect.php');

    $sqlQuery = "select count(item_category.Item_category_ID) as Categories, item_category.Item_category_name, item.Item_category_ID 
    from item_category, item where item_category.Item_category_ID = item.Item_category_ID GROUP BY item_category.Item_category_ID";
    
    $result = mysqli_query($conn,$sqlQuery);

	$data = array();
	foreach ($result as $row) {
		$data[] = $row;
	}

	mysqli_close($conn);

    echo json_encode($data);    

?>