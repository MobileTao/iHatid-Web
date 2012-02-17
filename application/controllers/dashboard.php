
<?php

class dashboard extends CI_Controller{

	function index()
	{
		$this->display();
	}
	
	function display()
	{
		$data['title'] = 'Register';
		$this->load->view($this->config->item('theme') . '/Dashboard');
	}
}

?>