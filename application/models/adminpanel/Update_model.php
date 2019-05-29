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

  function update($data,$tableNa){
    if ($tableNa == 'recent') {
      $this->db->replace('recent',$data);
    }elseif ($tablename == 'top') {
      $this->db->replace('top',$data);
    }else{
      $this->db->replace('choosed',$data);
    }

  }
}


 ?>
