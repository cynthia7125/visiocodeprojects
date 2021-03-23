var ajax = new XMLHttpRequest();
var method = "GET";
var url = "http://localhost/visiocodeprojects/map.php";
var asynchronous = true;

ajax.open(method, url, asynchronous);

// ajax.send();

// ajax.onreadystatechange = function(){
//   if (this.readyState == 4 && this.status == 200){

//       var local = this.responseText;
        
//          console.log(local);


navigator.geolocation.getCurrentPosition(
  function (position) {
      initMap(document.getElementById('long').value = position.coords.latitude, 
      document.getElementById('lat').value = position.coords.longitude)
  },
  function errorCallback(error) {
      console.log(error)
  }
);
function initMap() {
  var test = '<?php implode($lat); ?>'; 
var pointA = new google.maps.LatLng(document.getElementById('long').value, document.getElementById('lat').value),
pointB = new google.maps.LatLng(-1.3099, 36.8142),
  myOptions = {
    zoom: 10,
    center: pointA
  },
  map = new google.maps.Map(document.getElementById('map'), myOptions),
  // Instantiate a directions service.
  directionsService = new google.maps.DirectionsService,
  directionsDisplay = new google.maps.DirectionsRenderer({
    map: map
  })


// get route from A to B
calculateAndDisplayRoute(directionsService, directionsDisplay, pointA, pointB);

}
function calculateAndDisplayRoute(directionsService, directionsDisplay, pointA, pointB) {
directionsService.route({
origin: pointA,
destination: pointB,
travelMode: google.maps.TravelMode.DRIVING
}, function(response, status) {
if (status == google.maps.DirectionsStatus.OK) {
directionsDisplay.setDirections(response);
}else {
window.alert('Directions request failed due to ' + status);
}
});
}         
//   }
// }
