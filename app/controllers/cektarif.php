<?php
class cektarif extends Controller
{

  public function index()
  {
    $data['judul'] = 'BST | Cek Tarif';
    $data['kepala'] = '';
    $data['kepala2'] = '';
    $data['footer'] = '<script src="' . BASEURL . '/app/js/nav.js"></script>';
    $this->view('header', $data);
    $this->view('cektarif/index');
    $this->view('footer', $data);
  }
}
