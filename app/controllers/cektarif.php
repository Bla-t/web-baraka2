<?php
class cektarif extends Controller
{

  public function index()
  {
    $data['judul'] = 'BST | Cek Tarif';
    $this->view('header', $data);
    $this->view('cektarif/index');
    $this->view('footer');
  }
}
