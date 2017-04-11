<?php
class Template extends MY_Controller
{
	function __construct()
	{
		parent::__construct();
	}
	
	function sample_template($data = null)
	{
		$data='Template/sample_template_v';
		$this->load->view( $data);
	
	}
	function why_admin($data = null)
	{
		
		//$this->load->view('About/about_v', $data);
	
	}
	
}
?>