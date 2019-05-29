<?php

/**
 *
 */
class Delete_model extends CI_Model
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

  function delete($id,$tablename){
    if ($tablename == 'recent') {
      $this->db->delete('recent', array('id' => $id));
      $this->db->query('ALTER TABLE recent DROP `id`;');
      $this->db->query('ALTER TABLE recent AUTO_INCREMENT = 1;');
      $this->db->query('ALTER TABLE recent ADD `id` int UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY FIRST;');
    }elseif ($tablename == 'top') {
        $this->db->delete('top', array('id' => $id));
        $this->db->query('ALTER TABLE top DROP `id`;');
        $this->db->query('ALTER TABLE top AUTO_INCREMENT = 1;');
        $this->db->query('ALTER TABLE top ADD `id` int UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY FIRST;');
    }else{
        $this->db->delete('choosed', array('id' => $id));
        $this->db->query('ALTER TABLE choosed DROP `id`;');
        $this->db->query('ALTER TABLE choosed AUTO_INCREMENT = 1;');
        $this->db->query('ALTER TABLE choosed ADD `id` int UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY FIRST;');
    }


  }
}


 ?>
