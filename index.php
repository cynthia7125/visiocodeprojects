<?php
// $conn = mysqli_connect('localhost', 'root', 'root', 'db');
// insertScript("categorypick.js");
include ("connect.php");
 session_start();
if(!$conn)
{
    echo 'Database Error: ' . mysqli_connect_error() ;
    exit;
}
$script = file_get_contents('categorypick.js');
$abc = "<script>document.writeln(data[a].Item_category_name.checked.value);</script>";
// WHERE item_category.Item_category_name = '$abc'
$sql = mysqli_query($conn, "SELECT item.Item_name, item_category.Item_category_name, item.Item_image, item.Item_unit_cost, item.activation, item.Saved_percentage, item.Original_unit_cost, offers.`Offer_name`, supermarkets.`Supermarket_name`, supermarkets.`Supermarket_ID` FROM item LEFT JOIN offers ON (item.Offer_ID = offers.Offer_ID) LEFT JOIN supermarkets ON (offers.`Supermarket_ID` = supermarkets.`Supermarket_ID`) LEFT JOIN item_category ON (item.Item_category_ID = item_category.Item_category_ID) where item.activation = 1");
$data = array();
while($row = mysqli_fetch_assoc($sql))
{
    $data[] = $row;
}

echo json_encode($data);
?>