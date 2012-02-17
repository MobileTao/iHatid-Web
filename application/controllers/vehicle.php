
<?php

class vehicle extends CI_Controller{

	function index()
	{
		$this->display();
	}
	
	function display()
	{
		$data['title'] = 'Vehicle List';
		$this->load->view($this->config->item('theme') . '/VehicleList');
	}
	
	function register()
	{
		$data['title'] = 'Register Vehicle';
		$this->load->view($this->config->item('theme') . '/VehicleRegistration');
	}
	
}

?>