<!-- <script type="text/javascript" src="index.js"></script> -->
<?php
// $conn = mysqli_connect('localhost', 'root', 'root', 'db');
include ("index.php");
 
    $address = 'data.Supermarket_name'; // Address
    $apiKey = 'AIzaSyC4kfKZQ5dXxc-UFw75sGsYsktSNV9qnMk'; // Google maps now requires an API key.
    // Get JSON results from this request
    $geo = file_get_contents('https://maps.googleapis.com/maps/api/geocode/json?address='.urlencode($address).'&sensor=false&key='.$apiKey);
    $geo = json_decode($geo, true); // Convert the JSON to an array

    $lat = array();
    if (isset($geo['status']) && ($geo['status'] == 'OK')) {
    $latitude = $geo['results'][0]['geometry']['location']['lat']; // Latitude
    $longitude = $geo['results'][0]['geometry']['location']['lng']; // Longitude
      if ($latitude != null && $longitude != null){
        $lat[] = [$longitude, $latitude];
      }    
    }
    
   
echo implode($lat);
?>
<!-- <script></script> -->