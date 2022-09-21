<?php
class tracking extends Controller
{
  public function index()
  {
    $data['judul'] = 'BST | Tracking Barang';
    $data['kepala'] = '';
    $data['kepala2'] = '';
    $data['footer'] = '<script src="' . BASEURL . '/app/js/nav.js"></script>';
    $this->view('header', $data);
    $this->view('tracking/index');
    $this->view('footer', $data);
  }
}
