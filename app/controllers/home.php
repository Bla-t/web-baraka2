<?php
class home extends Controller
{
  public function index()
  {
    $data['judul'] = 'bst MVC';
    $this->view('header', $data);
    $this->view('index');
    $this->view('footer');
  }
}
