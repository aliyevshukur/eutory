<?php
class Register_model extends CI_Model
{

	function __construct()
  {
    parent::__construct();
  }

	function register($data)
	{
	  $this->db->insert('admins',$data);
	}
}
?>
