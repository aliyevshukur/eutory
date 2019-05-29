<?php
class Eutory_model extends CI_Model {

        public function __construct()
        {
            parent::__construct();

        }

        public function get_recent()
        {
          return $this->db->get('recent')->result();
        }

        public function get_top()
        {
          return $this->db->get('top')->result();
        }

        public function get_choosed()
        {
          return $this->db->get('choosed')->result();
        }
}
