<?php

/**
 *
 */
class Add extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model("adminpanel/Add_model");
  }

  function index()
  {
    $this->load->view('pages/adminpanel/Add_view');
  }
  function add()
  {
    if ($this->input->post('upload') ==  true) {

      $title = $this->input->post('title');
      $preview = $this->input->post('preview');
      $article = $this->input->post('article');
      $tablename = $this->input->post('section');
      //$data['thumbnail'] = $this->input->post('thumbnail');

    $data = array(
        'title' => $title,
        'preview' => $preview,
        'article' => $article
);
     $this->Add_model->add($data,$tablename);
     redirect('adminpanel/adminpanel');
    }
  }
}


 ?>
