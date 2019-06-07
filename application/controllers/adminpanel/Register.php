<?php

/**
 *
 */
class Register extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model("adminpanel/Register_model");
  }

  function index()
  {
    $this->load->view('pages/adminpanel/Register_view');
  }


  function register()
  {
    // if ($this->input->post('update') ==  true) {

      $name = $this->input->post('name');
      $username = $this->input->post('username');
      $password = md5($this->input->post('password'));

      $data = array(
              'name' => $name,
              'username' => $username,
              'password' => $password
      );


      $this->Register_model->register($data);

     redirect('adminpanel/register');

  }
}


 ?>
