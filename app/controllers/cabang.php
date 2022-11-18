<?php
class cabang extends Controller
{
  public function index()
  {
    $data['judul'] = 'BST | Cabang';
    $data['kepala'] =
      '
      <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ==" crossorigin="" />
      <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js" integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew==" crossorigin=""></script>';
    $data['kepala2'] = '      
      <script src="' . BASEURL . '/app/js/leaflet.markercluster-src.js"></script>
      <script src="' . BASEURL . '/app/js/leaflet-search.js"></script>
      <link rel="stylesheet" href="' . BASEURL . '/app/css/leaflet-search.css" />
    ';
    $data['map_data'] = $this->model('cabang_model')->getlatlong();
    $data['footer'] = '<script src="' . BASEURL . '/app/js/nav.js"></script>';
    $this->view('header', $data);
    $this->view('cabang/index', $data);
    $this->view('footer', $data);
  }
  // public function map()
  // {
  //   $data['map_data'] = $this->model('cabang_model')->getlatlong();
  //   $this->view('cabang/map', $data);
  // }
}
