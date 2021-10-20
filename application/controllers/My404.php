<?php
class My404 extends CI_Controller
{
	public function __construct()
	{
       parent::__construct();
	}
   
	public function index()
	{
       $this->output->set_status_header('404');
       $data['main_content'] 	= 'frontend/err404';   
       //$this->load->view('includes/error/template_error', $data);
       $this->load->view('includes/template', $data);
    }
}