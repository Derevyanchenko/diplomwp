var map_options = {"map_style":"[{\"featureType\":\"landscape\",\"stylers\":[{\"saturation\":-100},{\"lightness\":65},{\"visibility\":\"on\"}]},{\"featureType\":\"poi\",\"stylers\":[{\"saturation\":-100},{\"lightness\":51},{\"visibility\":\"simplified\"}]},{\"featureType\":\"road.highway\",\"stylers\":[{\"saturation\":-100},{\"visibility\":\"simplified\"}]},{\"featureType\":\"road.arterial\",\"stylers\":[{\"saturation\":-100},{\"lightness\":30},{\"visibility\":\"on\"}]},{\"featureType\":\"road.local\",\"stylers\":[{\"saturation\":-100},{\"lightness\":40},{\"visibility\":\"on\"}]},{\"featureType\":\"transit\",\"stylers\":[{\"saturation\":-100},{\"visibility\":\"simplified\"}]},{\"featureType\":\"administrative.province\",\"stylers\":[{\"visibility\":\"off\"}]},{\"featureType\":\"water\",\"elementType\":\"labels\",\"stylers\":[{\"visibility\":\"on\"},{\"lightness\":-25},{\"saturation\":-100}]},{\"featureType\":\"water\",\"elementType\":\"geometry\",\"stylers\":[{\"hue\":\"#ffff00\"},{\"lightness\":-25},{\"saturation\":-97}]}]"};
    var map = null, markers = [], newMarkers = [], markerCluster = null, bounds = [], infobox = [];

	var customIcon = new google.maps.MarkerImage(
        'images/map-marker.png',
        null, // size is determined at runtime
        null, // origin is 0,0
        null, // anchor is bottom center of the scaled image
        new google.maps.Size(38, 50)
	);
    
	var markerClusterOptions = {
		gridSize: 60, // Default: 60
		maxZoom: 14,
		styles: [{
			width: 46,
			height: 46,
			url: "images/map-marker-round.png"
		}]
	};
		
    var	mapOptions = {
    	center: new google.maps.LatLng(0, 0),
    	zoom: 14,
    	scrollwheel: false,
    	streetViewControl: true,
    	disableDefaultUI: true,
    	zoomControl: true,
    };
    
    var alter = 0;
    
    function initMap() {
    	map = new google.maps.Map(document.getElementById("google-map"), mapOptions);
			if (map_options.map_style!=='') {
			var styles = JSON.parse(map_options.map_style);
			map.setOptions( { styles: styles } );
		}
	 
	bounds = new google.maps.LatLngBounds();
	markers = initMarkers(map, [
    
    // address, phones, shedule, coordinates for google map
    { title:'', address:'', shedule:'', phone:'', latLng: new google.maps.LatLng(55.76593448331996,37.52700509503484)},
    ]);	
	markerCluster = new MarkerClusterer(map, newMarkers ,markerClusterOptions); 
	// Maps Fully Loaded: Hide + Remove Spinner
	google.maps.event.addListenerOnce(map, 'idle', function() {
		jQuery('.spinner').fadeTo(800, 0.5);
		
		setTimeout(function() {
		  jQuery('.spinner').remove();
		  
		}, 800);
	});
	
	// Spiderfier
	var oms = new OverlappingMarkerSpiderfier(map, { markersWontMove: true, markersWontHide: true, keepSpiderfied: true, legWeight: 5 });
	
	function omsMarkers( markers ) {
	  for ( var i = 0; i < markers.length; i++ ) {
		 
	  	oms.addMarker( markers[i] );
	  }   
	}
	
	omsMarkers(markers);
		
}

google.maps.event.addDomListener(window, 'load', initMap);
//google.maps.event.addDomListener(window, 'resize', initMap);

function initMarkers(map, markerData) {
	for( var i = 0; i < markerData.length; i++ ) {
		marker = new google.maps.Marker({
	    map: map,
	    position: markerData[i].latLng,
			icon: customIcon,
	    //animation: google.maps.Animation.DROP
		//center: markerData[i].latLng
		});
		bounds.extend(markerData[i].latLng);
		infoboxOptions = {
	    content: 	'<div class="map-marker-wrapper">'+
						'<div class="map-marker-container">'+
							'<div class="content">'+
							  '<h5 class="title">'+markerData[i].title+'</h5>'+
							  '<div class="g-address">'+markerData[i].address+'</div>'+
                              '<div class="g-shedule">'+markerData[i].shedule+'</div>'+
                              '<div class="g-phone">'+markerData[i].phone+'</div>'+
							'</div>'+
						'</div>'+
				    '</div>',
	    disableAutoPan: false,
		  pixelOffset: new google.maps.Size(-125, -55),
		  zIndex: null,
		  isHidden: true,
		  alignBottom: true,
		  closeBoxURL: "",
		  infoBoxClearance: new google.maps.Size(12, 12)
		};
		newMarkers.push(marker);
	
		newMarkers[i].infobox = new InfoBox(infoboxOptions);
		//newMarkers[i].infobox.open(map, marker);
	
		google.maps.event.addListener(marker, '', (function(marker, i) {
	    return function() {
				
	    	if ( newMarkers[i].infobox.getVisible() ) {
		    	newMarkers[i].infobox.setVisible(false);
	    	}
	    	else {
		    	jQuery('.infoBox').hide();
		    	newMarkers[i].infobox.setVisible(true);
	    	}	
			newMarkers[i].infobox.open(map, this);  
			map.setCenter(marker.getPosition());  	
           // map.panTo(newMarkers[i].latLng);  
			map.panBy(0,-175);

		}
	    
		})( marker, i ) );
		
		google.maps.event.addListener(map, 'click', function() {
	    jQuery('.infoBox').hide();
	  });

	}
	// Set Map Bounds And Max. Zoom Level
	google.maps.event.addListenerOnce(map, 'bounds_changed', function(event) {
		map.fitBounds(bounds);
				if (this.getZoom() > 13) {
	    this.setZoom(18);
	  }
	  	});
	
	return newMarkers;
	
} // initMarkers()