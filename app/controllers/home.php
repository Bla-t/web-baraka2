<?php
class home extends Controller
{
  public function index()
  {
    $data['judul'] = 'BST | HOME';
    $data['slide'] = $this->model('home_model')->slider();
    $this->view('header', $data);
    $this->view('home/index', $data);
    $this->view('footer');
  }
}
