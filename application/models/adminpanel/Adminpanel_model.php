<?php

/**
 *
 */
class Adminpanel_model extends CI_Model
{

  function __construct()
  {
    parent::__construct();
  }
  function get_all()
  {
    $tables = array(
                    'recent' =>$this->db->get('recent')->result() ,
                    'top' =>$this->db->get('top')->result() ,
                    'choosed' =>$this->db->get('choosed')->result() ,
                   );
    return $tables;
  }

}


 ?>
