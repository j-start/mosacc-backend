<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Renovasi_dan_pembangunan extends CI_Controller {
    
    public function __construct()
    {
      parent::__construct();
      if ($this->session->userdata('status') == NULL) {
        redirect('homepage');
      }
    }
  
    public function index()
    {
        $this->load->view('acc/renovasi_dan_pembangunan_v');
    }
    
}

/* End of file  Renovasi_dan_pembangunan.php */

