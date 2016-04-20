
<?php 

include 'nav.php';
?>
<br><br><br><br><br><br>
<div id="map" style = "width:2000px;height:800px"  ></div>
          <body>
    <input id="pac-input" class="controls" type="text"
        placeholder="Enter a location">
    <div id="type-selector" class="controls">
      <input type="radio" name="type" id="changetype-all" checked="checked">
      <label for="changetype-all">All</label>

     
    </div>
    <div id="map"></div>
	<style> 
	html, body, #map-canvas {
    height: 400px;
    margin: 0px;
    padding: 0px
}
.controls {
    margin-top: 16px;
    border: 1px solid transparent;
    border-radius: 2px 0 0 2px;
    box-sizing: border-box;
    -moz-box-sizing: border-box;
    height: 32px;
    outline: none;
    box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
}
#pac-input {
    background-color: #fff;
    padding: 0 11px 0 13px;
    width: 400px;
    font-family: Roboto;
    font-size: 15px;
    font-weight: 300;
    text-overflow: ellipsis;
}
#pac-input:focus {
    border-color: #4d90fe;
    margin-left: -1px;
    padding-left: 14px;
    /* Regular padding-left + 1. */
    width: 401px;
}
.pac-container {
    font-family: Roboto;
}
#type-selector {
    color: #fff;
    background-color: #4d90fe;
    padding: 5px 11px 0px 11px;
}
#type-selector label {
    font-family: Roboto;
    font-size: 13px;
    font-weight: 300;
}
#trigger-search {
 
    border: 1px solid black;
    margin: 10px;
    background: yellow;
}
	
	</style>
    <script>
	
      // This example requires the Places library. Include the libraries=places
      // parameter when you first load the API. For example:
      // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

      function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
			
          center: {lat: 13.7355, lng: 100.5313},
          zoom: 16,
			
			
  
        });
        var input = /** @type {HTMLInputElement} */
    (
    document.getElementById('pac-input'));
    map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);
	
    var searchBox = new google.maps.places.SearchBox(
    /** @type {HTMLInputElement} */
    (input));

    // [START region_getplaces]
    // Listen for the event fired when the user selects an item from the
    // pick list. Retrieve the matching places for that item.

        var types = document.getElementById('type-selector');
        map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);
        map.controls[google.maps.ControlPosition.TOP_LEFT].push(types);

        var autocomplete = new google.maps.places.Autocomplete(input);
        autocomplete.bindTo('bounds', map);

        var infowindow = new google.maps.InfoWindow();
        var marker = new google.maps.Marker({
          map: map,
          anchorPoint: new google.maps.Point(0, -29)
        });

        autocomplete.addListener('place_changed', function() {
          infowindow.close();
          marker.setVisible(false);
          var place = autocomplete.getPlace();
          if (!place.geometry) {
            window.alert("Autocomplete's returned place contains no geometry");
            return;
          }

          // If the place has a geometry, then present it on a map.
          if (place.geometry.viewport) {
            map.fitBounds(place.geometry.viewport);
          } else {
            map.setCenter(place.geometry.location);
            map.setZoom(17);  // Why 17? Because it looks good.
          }
          marker.setIcon(/** @type {google.maps.Icon} */({
            url: place.icon,
            size: new google.maps.Size(71, 71),
            origin: new google.maps.Point(0, 0),
            anchor: new google.maps.Point(17, 34),
            scaledSize: new google.maps.Size(35, 35)
          }));
          marker.setPosition(place.geometry.location);
          marker.setVisible(true);

          var address = '';
          if (place.address_components) {
            address = [
              (place.address_components[0] && place.address_components[0].short_name || ''),
              (place.address_components[1] && place.address_components[1].short_name || ''),
              (place.address_components[2] && place.address_components[2].short_name || '')
            ].join(' ');
          }

          infowindow.setContent('<div><strong>' + place.name + '</strong><br>' + address);
          infowindow.open(map, marker);
        });

        // Sets a listener on a radio button to change the filter type on Places
        // Autocomplete.
        function setupClickListener(id, types) {
          var radioButton = document.getElementById(id);
          radioButton.addEventListener('click', function() {
            autocomplete.setTypes(types);
          });
        }

        setupClickListener('changetype-all', []);
        setupClickListener('changetype-address', ['address']);
        setupClickListener('changetype-establishment', ['establishment']);
        setupClickListener('changetype-geocode', ['geocode']);
      }
	  
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBZ6_4pGvErwygV2evUv_d__d2Gn-K2Oz8&libraries=places&callback=initMap"
        async defer></script>