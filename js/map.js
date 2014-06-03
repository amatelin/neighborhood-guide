function getPosition(element) {
    var xPosition = 0;
    var yPosition = 0;
  
    while(element) {
        xPosition += (element.offsetLeft - element.scrollLeft + element.clientLeft);
        yPosition += (element.offsetTop - element.scrollTop + element.clientTop);
        element = element.offsetParent;
    }
    return { x: xPosition, y: yPosition };
}

function initialize() {
        var mapOptions = {
          center: new google.maps.LatLng(45.521624,-73.575468),
          zoom: 15,
          disableDefaultUI: true
        };
        var coord = new google.maps.LatLng(45.514738, -73.565611);
        var map = new google.maps.Map(document.getElementById("map_canvas"),
            mapOptions);

        //Add Marker
        var marker = new google.maps.Marker({
    			position: coord,
    			map: map,
    			title:"La Distillerie"
				});

				var contentString = "<div><h5>La Distillerie</h5><p style=\"text-align: left;\">Places: 55<br>Bar</p></div>"

  			var infowindow = new google.maps.InfoWindow({
      		content: contentString
  			});

				google.maps.event.addListener(marker, 'mouseover', function() {
 					infowindow.open(map,marker);   			
  			});
  			google.maps.event.addListener(marker, 'mouseout', function() {
 					infowindow.close();   			
  			});
      }
google.maps.event.addDomListener(window, 'load', initialize);
