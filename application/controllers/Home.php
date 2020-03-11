<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class Home extends CI_Controller
{
	public function __construct(){
		parent::__construct();
		var_dump($_SESSION);
	}
	public function index()
	{
		$data = array();
		$data['page_title'] = "City of Cebu | Barangay Case System";
		$data['css'] = $this->config->item('css');
		$data['js'] = $this->config->item('js');
		$data['images'] = $this->config->item('images');
		$data['error'] = '';
		$this->load->view('template/header',$data);
		$this->load->view('contents/home_page');
		$this->load->view('template/footer',$data);
	}

	public function logout()
	{
		
		unset($_SESSION);
		$this->session->sess_destroy();
		redirect('Login');
	}
}


?>