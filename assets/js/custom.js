// Initialize and add the map
function initMap() {
  // The location of Uluru
  var uluru = {lat: 40.4167, lng: -3.70325};
  // The map, centered at Uluru
  var map = new google.maps.Map(
      document.getElementById('map'), {zoom: 5, center: uluru});
  // The marker, positioned at Uluru
  var marker = new google.maps.Marker({position: uluru, map: map});
}
