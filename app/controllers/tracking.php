<?php
class tracking extends Controller
{
  public function index()
  {
    $data['judul'] = 'BST | Tracking Barang';
    $this->view('header', $data);
    $this->view('tracking/index');
    $this->view('footer');
  }
}
