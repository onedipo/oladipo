<?php
class About extends MY_Controller
{
	function __construct()
	{
		parent::__construct();
	}
	
	function index($data=null)
	{
		
		$this->load->view('Template/why_admin_v', $data);
		
		$data ='about/about_v';
		$this->load->view($data);
	}
}
?>