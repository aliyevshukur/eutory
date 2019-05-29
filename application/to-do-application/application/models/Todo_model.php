<?php

class todo_model extends CI_Model{

	public function __construct()
	{
		parent:: __construct();
	}

	public $tableName = "todo";

	public function get_all()
	{
		return $this->db->get($this->tableName)->result();
	}

	public function insert($data)
	{
		$this->db->insert('todo',$data);
	}

	public function delete($id)
	{
		$this->db->where("id",$id)->delete($this->tableName);
	}

//	static $fixer = true;

	public function update($id,$status)
	{

		// if ($status = "Completed") {
		// 	$this->db->set('status', 'NotCompleted');
		// 	$this->db->where('id', $id);
		// 	$this->db->update('todo');
		// }
		//
		// if($status = "NotCompleted") {
		// 	$this->db->set('status', 'Completed	');
		// 	$this->db->where('id', $id);
		// 	$this->db->update('todo');
		// }

		// if ($fixer) {
		//
		// 	$this->db->set('status', 'Completed');
		// 	$this->db->where('id', $id);
		// 	$this->db->update('todo');
		// 	$fixer  = false;
		//
		// }else{
		//
		// 	$this->db->set('status', 'NotCompleted');
		// 	$this->db->where('id', $id);
		// 	$this->db->update('todo');
		// 	$fixer = true;
		// }

		switch ($status) {
			case 'Completed':
					$this->db->set('status', 'NotCompleted');
					$this->db->where('id', $id);
					$this->db->update('todo');
				break;
		case 'NotCompleted':
			  	$this->db->set('status', 'Completed');
			  	$this->db->where('id', $id);
			  	$this->db->update('todo');
				break;		
		}

	}

}

 ?>
