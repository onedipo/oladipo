<?php
class Home extends MY_Controller
{
	function __construct()
	{
		parent::__construct();
	}
	
	function index($data=null)
	{
		$data = 'Template/why_admin_v';
		$this->load->view( $data);
		$this->load->view( 'home_v');
	}
	
	
}
?>