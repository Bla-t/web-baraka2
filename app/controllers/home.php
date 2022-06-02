<?php
class home extends Controller
{
  public function index()
  {
    $data['judul'] = 'BST | HOME';
    $this->view('header', $data);
    $this->view('home/index');
    $this->view('footer');
  }
}
