<?php
class karir extends Controller
{
  public function index()
  {
    $data['judul'] = 'BST | Lowongan Pekerjaan';
    $data['karir'] = $this->model('karir_model')->getkarir();
    $data['jumlah'] = $this->model('karir_model')->spesifickarir();
    $data['kepala'] = '';
    $data['kepala2'] = '';
    $data['footer'] = '<script src="' . BASEURL . '/app/js/nav.js"></script>';
    $this->view('header', $data);
    $this->view('karir/index', $data);
    $this->view('footer', $data);
  }
  public function cari()
  {
    $data['judul'] = 'BST | Cari Lowongan Pekerjaan';
    $data['karir'] = $this->model('karir_model')->getkarir();
    $data['jumlah'] = $this->model('karir_model')->spesifickarir();
    // $data['kepala'] = '';
    // $data['kepala2'] = '';
    // $data['footer'] = '<script src="' . BASEURL . '/app/js/nav.js"></script>';
    // $this->view('header', $data);
    // $this->view('karir/index', $data);
    // $this->view('footer', $data);
  }
}
