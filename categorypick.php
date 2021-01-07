<?php
// $conn = mysqli_connect('localhost', 'root', 'root', 'db');
include ("connect.php");
 session_start();
if(!$conn)
{
    echo 'Database Error: ' . mysqli_connect_error() ;
    exit;
}
$sql = mysqli_query($conn, "select Item_category_name, ativation from item_category");
$data = array();
while($row = mysqli_fetch_assoc($sql))
{
    $data[] = $row;
}

echo json_encode($data);
?>