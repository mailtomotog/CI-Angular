<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct(){
		#Call for construct in super class
		parent::__construct();
        $this->load->view('templates/header');
        $this->load->view('page');
        $this->load->view('templates/footer');
	}

    public function index(){
    	
	}
}