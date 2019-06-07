<?php

/**
 *
 */
class Update extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model("adminpanel/Update_model");
  }

  function index()
  {
    $this->load->view('pages/adminpanel/Update_view');
  }

  function show()
  {
    if ($this->input->post('show') ==  true) {
       $tableNa = $this->input->post('section');
       $tableId = $this->input->post('id');

     $data['table'] = $this->Update_model->get_table($tableNa,$tableId);
     $this->load->view('pages/adminpanel/Update_view',$data);

   }
  }

  function update()
  {
    // if ($this->input->post('update') ==  true) {

      $title = $this->input->post('title');
      $preview = $this->input->post('preview');
      $article = $this->input->post('article');

      $tableNa = $this->input->post('section');
      $id = $this->input->post('id');

      $data = array(
              'title' => $title,
              'preview' => $preview,
              'article' => $article
      );

      $this->Update_model->update($data,$tableNa,$id);
      redirect('adminpanel/update');
    // }
  }
}


 ?>
