<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Photos extends CI_Controller {

  public function index()
  {
      // Load view
      $data['yield'] = 'photos/index';
      $this->load->view('layouts/application', $data);
  }
  
}

/* End of file photos.php */
/* Location: ./application/controllers/photos.php */