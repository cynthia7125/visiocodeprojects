<?php
// $conn = mysqli_connect('localhost', 'root', 'root', 'db');
// insertScript("categorypick.js");
include ("connect.php");


if(!$conn)
{
    echo 'Database Error: ' . mysqli_connect_error() ;
    exit;
}

$sql = mysqli_query($conn, "select * from item where created BETWEEN DATE_SUB(CURDATE( ) ,INTERVAL 1 week) AND CURDATE( )");
$data = array();
while($row = mysqli_fetch_assoc($sql))
{
    $data[] = $row;
}

echo json_encode($data);


?>