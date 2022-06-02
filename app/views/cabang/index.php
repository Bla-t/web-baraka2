<!-- Banner Image  -->
<div class="banner-image w-100 vh-100 d-flex justify-content-center align-items-center">
  <div class="content text-center">
    <h1 class="text-dark">CABANG</h1>
  </div>
</div>

<!-- Main Content Area -->
<div class="container my-5 d-grid gap-5">
  <div class="p-5 border maping">
    <h4 class="font-weight-normal judulmap" style="text-align: center; color: #001c50;">
      Lokasi Baraka di Sekitar Anda
    </h4>
    <div id="mapin" class="maps">
      <script type="text/javascript">
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

        for (var i = 0; i < addressPoints.length; i++) {
          var a = addressPoints[i];
          var title = a[2];
          var marker = L.marker(new L.LatLng(a[0], a[1]), {
            title: title
          });
          marker.bindPopup(title);
          markers.addLayer(marker);
        }
        //map.addLayer(markers);
      </script>
    </div>
  </div>
  <div class="p-5 ">
    <ul class="list-group list-group-horizontal-lg">
      <li class="list-group-item list-group-item-action list-group-item-primary">
        <a class="nav-link text-light" href="#">JADETABEK</a>
      </li>
      <li class="list-group-item list-group-item-action list-group-item-primary">
        <a class="nav-link text-light" href="#">JAWA BARAT</a>
      </li>
      <li class="list-group-item list-group-item-action list-group-item-primary">
        <a class="nav-link text-light" href="#">JAWA TENGAH</a>
      </li>
      <li class="list-group-item list-group-item-action list-group-item-primary">
        <a class="nav-link text-light" href="#">JAWA TIMUR</a>
      </li>
      <li class="list-group-item list-group-item-action list-group-item-primary">
        <a class="nav-link text-light" href="#">BALI</a>
      </li>
      <li class="list-group-item list-group-item-action list-group-item-primary">
        <a class="nav-link text-light" href="#">SUMATRA</a>
      </li>
      <li class="list-group-item list-group-item-action list-group-item-primary">
        <a class="nav-link text-light" href="#">KALIMANTAN</a>
      </li>
      <li class="list-group-item list-group-item-action list-group-item-primary">
        <a class="nav-link text-light" href="#">NTB</a>
      </li>
    </ul>
    <!-- <div class="btn-group gap-1" role="group" aria-label="Basic example">
      <button type="button" class="btn btn-outline-warning">JADETABEK</button>
      <button type="button" class="btn btn-outline-warning">JAWA BARAT</button>
      <button type="button" class="btn btn-outline-warning">JAWA TENGAH</button>
      <button type="button" class="btn btn-outline-warning">JAWA TIMUR</button>
      <button type="button" class="btn btn-outline-warning">BALI</button>
      <button type="button" class="btn btn-outline-warning">SUMATRA</button>
      <button type="button" class="btn btn-outline-warning">KALIMANTAN</button>
      <button type="button" class="btn btn-outline-warning">NTB</button>
    </div> -->
  </div>
  <div class="p-5 border">
    <p>
      Lorem ipsum dolor sit amet consectetur adipisicing elit.
      Necessitatibus veniam ipsa earum quibusdam, atque ipsum error maiores
      natus iusto fugit id saepe neque rerum magni laudantium accusantium
      dolorem numquam quasi.
    </p>
  </div>
  <div class="p-5 border">
    <p>
      Lorem ipsum dolor sit amet consectetur adipisicing elit.
      Necessitatibus veniam ipsa earum quibusdam, atque ipsum error maiores
      natus iusto fugit id saepe neque rerum magni laudantium accusantium
      dolorem numquam quasi.
    </p>
  </div>
  <div class="p-5 border">
    <p>
      Lorem ipsum dolor sit amet consectetur adipisicing elit.
      Necessitatibus veniam ipsa earum quibusdam, atque ipsum error maiores
      natus iusto fugit id saepe neque rerum magni laudantium accusantium
      dolorem numquam quasi.
    </p>
  </div>
  <div class="p-5 border">
    <p>
      Lorem ipsum dolor sit amet consectetur adipisicing elit.
      Necessitatibus veniam ipsa earum quibusdam, atque ipsum error maiores
      natus iusto fugit id saepe neque rerum magni laudantium accusantium
      dolorem numquam quasi. df
    </p>
  </div>
</div>