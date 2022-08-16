<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ==" crossorigin="" />
  <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js" integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew==" crossorigin=""></script>
  <script src="<?= BASEURL; ?>/js/jquery3.6.js"></script>
  <script src="<?= BASEURL; ?>/js/leaflet.markercluster-src.js"></script>
  <script src="<?= BASEURL; ?>/js/leaflet-search.js"></script>
  <!-- <script src="<?= BASEURL; ?>/js/BST.js"></script> -->
  <link rel="stylesheet" href="<?= BASEURL; ?>/css/MarkerCluster.css" />
  <link rel="stylesheet" href="<?= BASEURL; ?>/css/MarkerCluster.Default.css" />
  <link rel="stylesheet" href="<?= BASEURL; ?>/css/leaflet-search.css" />
</head>
<div id="mapin" class="maps">
  <script>
    var map = L.map('mapin').setView([-1.3889, 117.3141], 5);
    // var tileUrl = ;
    // var attribute = ;
    var tiles = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
      attribution: 'Map data &copy;<a href="https://www.openstreetmap.org">OpenStreetMap</a>,' + ' license Under<a href="https://www.openstreetmap.org/copyright"> ODbl.</a>'
    });
    tiles.addTo(map);

    //GEOJSON//
    var markers = L.markerClusterGroup();
    map.addLayer(markers);

    var controlSearch = new L.Control.Search({
      position: 'topright',
      layer: markers,
      initial: false,
      zoom: 19,
      marker: false
    });

    map.addControl(controlSearch);
    /////////////////////////
    var addressPoints =
      <?= json_encode($data['map_data']); ?>;

    for (var i = 0; i < addressPoints.length; i++) {
      var a = addressPoints[i];
      var title = a['extern'];
      var marker = L.marker(new L.LatLng(a['latitude'], a['longitude']), {
        title: title
      });
      marker.bindPopup(title);
      markers.addLayer(marker);
    }
    //map.addLayer(markers);
  </script>
</div>