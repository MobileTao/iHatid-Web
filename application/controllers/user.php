<?php

class User extends CI_Controller {

	function index()
	{
		$data['title'] = 'Register';
		$this->load->view($this->config->item('theme') . '/header');
		$this->register();
		$this->load->view($this->config->item('theme') . '/footer');
	}
	
	function register()
	{
		$this->load->view($this->config->item('theme') . '/view_register');
	}



}



?>