<?php 

class Site extends CI_Controller {
 /*
 	function index() {
	 	$this->load->model('data_model');
	 	$data['rows'] = $this->data_model->getAll();
	 	
	 	$this->load->view('home', $data);
 	}
  */
  
  function index(){
  
  	$data = array();
  	
  	
  	if($query = $this->Site_model->get_records()){
	  	$data['records'] = $query;
  	}
  	
  	$this->load->view('options_view', $data);
  }
 
  
  function create(){
	  $data = array(
	  	'title' => $this->input->post('title'),
	  	'contents' => $this->input->post('content')
	  );
	  
	  //$this->load->model('Site_model');  //autoloaded
	  $this->site_model->add_record($data);
	  $this->index();
	  //print_r($data);
  }
 
 
 
 
 
 
}