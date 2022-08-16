<?php
class cektarif extends Controller
{

  public function index()
  {
    $data['judul'] = 'BST | Cek Tarif';
    $data['kepala'] = '';
    $data['kepala2'] = '';
    $this->view('header', $data);
    $this->view('cektarif/index');
    $this->view('footer');
  }
}
