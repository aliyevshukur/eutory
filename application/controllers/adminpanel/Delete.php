<?php

/**
 *
 */
class Delete extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model("adminpanel/Delete_model");
  }

  function index()
  {
    $data['tables'] = $this->Delete_model->get_all();
    $this->load->view('pages/adminpanel/Delete_view',$data);
  }

  function delete()
  {
    // if ($this->input->post('delete') ==  true) {
      $id = $this->input->post('id');
      $tablename = $this->input->post('tablename');

     $this->Delete_model->delete($id,$tablename);

     redirect('adminpanel/delete');
    // }
  }
}


 ?>
