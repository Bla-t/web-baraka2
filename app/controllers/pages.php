<?php
class pages extends Controller
{
  public function index()
  {
    $data['judul'] = 'BST EXPRESS';
    $this->view('header', $data);
    $this->view('index');
    $this->view('footer');
  }
  public function tracking()
  {
    $data['judul'] = 'Tracking Barang';
    $this->view('header', $data);
    $this->view('tracking');
    $this->view('footer');
  }
  public function about()
  {
    $data['judul'] = 'Tentang Kami';
    $this->view('header', $data);
    $this->view('about');
    $this->view('footer');
  }
}
