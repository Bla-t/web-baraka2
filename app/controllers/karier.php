<?php
class karier extends Controller
{
  public function index($id = 0)
  {
    if ($id == 0) {
      header("location:" . BASEURL . "/karir");
    } else {

      $data['job'] = $this->model('karir_model')->getjob($id);
    }
    $data['judul'] = 'BST | Karier';
    $data['cabang'] = 'cabang';
    $data['kepala'] = '';
    $data['kepala2'] = '';
    $data['footer'] = '';
    $this->view('header', $data);
    $this->view('karier/index', $data);
    $this->view('footer', $data);
  }
}
