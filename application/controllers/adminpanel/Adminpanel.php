<?php

/**
 *
 */
class Adminpanel extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model('adminpanel/Adminpanel_model');

  }

  public function index(){
    $data['tables'] = $this->Adminpanel_model->get_all();
    $this->load->view('pages/adminpanel/Adminpanel_view',$data);
  }

  
}


 ?>
