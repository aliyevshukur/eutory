<?php

/**
 *
 */
class Update_model extends CI_Model
{

  function __construct()
  {
    parent::__construct();
  }

  function get_table($tableNa,$tableId)
  {
    return $this->db->where('id',$tableId)->get($tableNa)->result();
  }

  function update($data,$tableNa,$id){
    if ($tableNa == 'recent') {
      $this->db->where('id', $id);
      $this->db->update('recent', $data);
    }elseif ($tableNa == 'top') {
      $this->db->where('id', $id);
      $this->db->update('top', $data);
    }else{
      $this->db->where('id', $id);
      $this->db->update('choosed', $data);
  }
}
}

 ?>
