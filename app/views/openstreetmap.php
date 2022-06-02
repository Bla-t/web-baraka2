<style>
    #mapin {
        height: 475px;
    }

</style>
</head>
<body>
    <div id ="mapin"></div>
<script type="text/javascript">
    var map = L.map('mapin').setView([-1.3889,117.3141],5);
    // var tileUrl = ;
    // var attribute = ;
    var tiles = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png',{attribution:'Map data &copy;<a href="https://www.openstreetmap.org">OpenStreetMap</a>,'+' license Under<a href="https://www.openstreetmap.org/copyright"> ODbl.</a>'});
    tiles.addTo(map);

    //GEOJSON//
    var markers = L.markerClusterGroup();
    map.addLayer(markers);
    
        
    var controlSearch = new L.Control.Search({
		position:'topright',		
		layer: markers,
		initial: false,
        zoom: 19,
		marker: false
	});

	map.addControl( controlSearch );
    
        for (var i = 0; i < addressPoints.length; i++) {
            var a = addressPoints[i];
            var title = a[2];
            var marker = L.marker(new L.LatLng(a[0], a[1]), { title: title });
            marker.bindPopup(title);
            markers.addLayer(marker);
        }
       //map.addLayer(markers);


</script>