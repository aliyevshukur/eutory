<?php
class login extends CI_Controller {

        public function __construct()
        {
            parent::__construct();

        }

        public function index()
        {
            $this->load->view('pages/login_view.php');
        }
}

// TODO: Database ::  Title ,article,previews
