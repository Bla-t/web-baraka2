<?php
class about extends Controller
{
  public function index()
  {
    $data['judul'] = 'abot';
    $this->view('header', $data);
    $this->view('about');
    $this->view('footer');
  }
}
