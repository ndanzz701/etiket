<?php 

    class Controlerror extends CI_Controller {

        public function index(){
            $this->load->view('error404');
        }

    }