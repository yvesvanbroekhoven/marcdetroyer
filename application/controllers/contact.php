<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact extends CI_Controller {

  public function send()
  {
    $this->load->library('form_validation');
    
    // Validations
    $this->form_validation->set_rules('contact[name]',      'name',     'required');
    $this->form_validation->set_rules('contact[email]',     'email',    'required|valid_email');
    $this->form_validation->set_rules('contact[question]',  'question', 'required');
    
    if ($this->form_validation->run() == FALSE){
      
      // Load view
      $data['yield'] = 'photos/index';
      $this->load->view('layouts/application', $data);
      
    } else {
      
      $name     = $_POST['contact']['name'];
      $email    = $_POST['contact']['email'];
      $tel      = $_POST['contact']['tel'];
      $question = $_POST['contact']['question'];
      
      $this->load->library('email');

      $this->email->from($email, $name);
      $this->email->to('yvesvanbroekhoven@gmail.com');

      $this->email->subject($name . ' stuurde je een bericht via het contact formulier');
      $this->email->message($question);

      $this->email->send();

      //$this->email->print_debugger();
      
      // Load view
      $data['notice'] = "Thank you for your message. I will answer you as soon as possible.";
      $data['yield']  = 'photos/index';
      $this->load->view('layouts/application', $data);
      
    }
    
  }
  
}

/* End of file photos.php */
/* Location: ./application/controllers/photos.php */