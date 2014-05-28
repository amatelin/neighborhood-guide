function initialize() {
        var mapOptions = {
          center: new google.maps.LatLng(45.521624,-73.575468),
          zoom: 15,
          disableDefaultUI: true
        };
        var map = new google.maps.Map(document.getElementById("map_canvas"),
            mapOptions);
      }
google.maps.event.addDomListener(window, 'load', initialize);
