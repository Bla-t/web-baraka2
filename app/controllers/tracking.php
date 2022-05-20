<?php
class tracking extends Controller
{
  public function tracking()
  {
    $data['judul'] = 'Tracking Barang';
    $this->view('header', $data);
    $this->view('tracking');
    $this->view('footer');
  }
}
