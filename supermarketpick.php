<?php
// $conn = mysqli_connect('localhost', 'root', 'root', 'db');
include ("connect.php");
 session_start();
if(!$conn)
{
    echo 'Database Error: ' . mysqli_connect_error() ;
    exit;
}

$sql = mysqli_query($conn, "select DISTINCT supermarkets.Supermarket_name from supermarkets, offers, 
                    item where offers.Supermarket_ID = supermarkets.Supermarket_ID and 
                    item.Offer_ID = (SELECT offers.Offer_ID from offers where item.Offer_ID = offers.Offer_ID)");
$data = array();
while($row = mysqli_fetch_assoc($sql))
{
    $data[] = $row;
}

echo json_encode($data);
?>