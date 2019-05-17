// contact page map
function initMap() {
	// map location
	var options = {
		zoom: 15,
		center: {lat:49.229693, lng:-123.004313}
	}
	
	// new map
	var map = new google.maps.Map(document.getElementById('map'),options);
	
	// marker
	var marker = new google.maps.Marker ({
		position: {lat:49.229693,lng:-123.004313},
		map:map
	})
}
