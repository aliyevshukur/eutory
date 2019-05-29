<?php

/**
 *
 */
class Add_model extends CI_Model
{

  function __construct()
  {
    parent::__construct();
  }

  function add($data,$tablename){
    if ($tablename == 'recent') {
      $this->db->insert('recent',$data);
    }elseif ($tablename == 'top') {
      $this->db->insert('top',$data);
    }else{
      $this->db->insert('choosed',$data);
    }

  }
}


 ?>
