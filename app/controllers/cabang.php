<?php
class cabang extends Controller
{
  public function index()
  {
    $data['judul'] = 'BST | Cabang';
    $data['map_data'] = $this->model('cabang_model')->getlatlong();
    $this->view('header', $data);
    $this->view('cabang/index', $data);
    $this->view('footer');
  }
}
