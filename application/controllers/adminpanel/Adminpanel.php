<?php

/**
 *
 */
class Adminpanel extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    if (!$this->session->userdata('admin')) {
      redirect('admin');
    }
    $this->load->model('adminpanel/Adminpanel_model');

  }

  public function index(){
    $data['tables'] = $this->Adminpanel_model->get_all();
    $this->load->view('pages/adminpanel/Adminpanel_view',$data);
  }

  function logout()
  	{
  		$this->session->sess_destroy();
  		redirect('admin');
  	}
}


 ?>
