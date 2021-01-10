<?php
// $conn = mysqli_connect('localhost', 'root', 'root', 'db');
include ("connect.php");
 session_start();
if(!$conn)
{
    echo 'Database Error: ' . mysqli_connect_error() ;
    exit;
}
$sql = mysqli_query($conn, "SELECT item_category.Item_category_name, item_category.activation, item_category.Item_category_description, item_category.Item_category_ID FROM item_category where item_category.activation = 1");
$data = array();
while($row = mysqli_fetch_assoc($sql))
{
    $data[] = $row;
}

echo json_encode($data);
?>