<?php

class todo extends CI_Controller{

	public function __construct()
	{
		parent:: __construct();
        $this->load->model("Todo_model");

	}

	public function index()
	{
		$data['table']  = $this->Todo_model->get_all();

		// $viewData = array(
		// 	"todo"		=>$todo
		// );

		$this->load->view('Todo_view',$data);

	}

	public function insert()
	{
		$title = $this->input->post('title');

		$this->Todo_model->insert(
			array(
				'title'		=>$title,
				'status'	=>'NotCompleted'
			)
		);

		redirect(base_url());
	}

	public function delete($id)
	{
		$this->Todo_model->delete($id);
		redirect(base_url());
	}

	public function update($id,$status)
	{
		$this->Todo_model->update($id,$status);
		redirect(base_url());
	}

}

 ?>
