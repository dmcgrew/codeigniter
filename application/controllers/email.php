<?php

class Email extends CI_Controller {
	
	function __construct(){
		parent::__construct();
	}
	
	
	function index() {
		$this->load->view('newsletter');
	}
	
	function send(){
		
		// load form validation library
		$this->load->library('form_validation');
	
		// set form validation rules
		$this->form_validation->set_rules('name', 'Name', 'trim|required');
		$this->form_validation->set_rules('email', 'Email Address', 'trim|required|valid_email');
		
		if($this->form_validation->run() == FALSE){
			$this->load->view('newsletter');
		} else {
			//validation has passed. Now send the email...
			$name = $this->input->post('name');
			$email = $this->input->post('email');
			
			$this->load->library('email');
			$this->email->set_newline("\r\n");
			
			$this->email->from('dustinmcgrew@gmail.com', 'Dustin McGrew');
			$this->email->to($email);
			$this->email->subject('Email test');
			$this->email->message('It is working. Cool.');
			
			if($this->email->send()){
				//echo "Your email was sent, fool.";
				$this->load->view('signup_confirmation');
			} else {
				show_error($this->email->print_debugger());
			}
			
		}
		
	
		
		
	}
	
}