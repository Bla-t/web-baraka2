<?php
class home extends Controller
{
  public function index()
  {
    $data['judul'] = 'BST | HOME';
    $data['slide'] = $this->model('home_model')->slider();
    $data['jumlah'] = $this->model('home_model')->jumlah();
    $this->view('header', $data);
    $this->view('home/index', $data);
    $this->view('footer');
  }
}
