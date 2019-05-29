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

   }else {
     $this->load->view('pages/adminpanel/Update_view');
   }
  }

  function update()
  {
    if ($this->input->post('update') ==  true) {

      $title = $this->input->post('title');
      $preview = $this->input->post('preview');
      $article = $this->input->post('article');
      $tableNa = $this->input->post('section');

      $data = array(
              'title' => $title,
              'preview' => $preview,
              'article' => $article
      );

      $this->Update_model->update($data,$tableNa);
       redirect('adminpanel/update');
    }
  }
}


 ?>
