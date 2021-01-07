<?php
// $conn = mysqli_connect('localhost', 'root', 'root', 'db');
include ("connect.php");
 session_start();
if(!$conn)
{
    echo 'Database Error: ' . mysqli_connect_error() ;
    exit;
}
$sql = mysqli_query($conn, "SELECT item.Item_name, item.Item_image, item.Item_unit_cost, item.activation, item.Saved_percentage, item.Original_unit_cost, offers.`Offer_name`, supermarkets.`Supermarket_name`, supermarkets.`Supermarket_ID` FROM item  LEFT JOIN offers ON 	(item.Offer_ID = offers.Offer_ID) LEFT JOIN supermarkets ON (offers.`Supermarket_ID` = supermarkets.`Supermarket_ID`)");
$data = array();
while($row = mysqli_fetch_assoc($sql))
{
    $data[] = $row;
}

echo json_encode($data);
?>