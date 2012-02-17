
<?php

class request extends CI_Controller{

	function index()
	{
		$this->display();
	}
	
	function display()
	{
		$data['title'] = 'Request';
		$this->load->view($this->config->item('theme') . '/Request');
	}
	
	function details()
	{
		$this->load->view($this->config->item('theme') . '/RequestDetails');
	}
}

?>