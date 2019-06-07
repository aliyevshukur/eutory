<?php
class Login extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		if($this->session->userdata('admin'))
		redirect('adminpanel/adminpanel');
	}
	function index()
	{
		$this->load->view('pages/adminpanel/Login_view');
	}
	function verify()
	{
		//username:admin password:123456
		$this->load->model('adminpanel/login_model');
		$check = $this->login_model->validate();
		if($check)
		{
			$this->session->set_userdata('admin','1');
			redirect('adminpanel/adminpanel');
		}
		else
		{

			redirect('adminpanel');
		}
	}
}
