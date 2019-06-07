<?php
class eutory extends CI_Controller {

        public function __construct()
        {
            parent::__construct();
              $this->load->model("Eutory_model");
        }

        public function index()
        {
          $data['recent'] = $this->Eutory_model->get_recent();
          $data['top'] = $this->Eutory_model->get_top();
          $data['choosed'] = $this->Eutory_model->get_choosed();
          $this->load->view('home.php',$data);
        }
}
