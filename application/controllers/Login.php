<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct(){
		parent::__construct();
		
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
		$this->load->view('contents/login_page');
		$this->load->view('template/footer',$data);
	}

	// User login process
	public function auth_login()
	{
		$post_data = $this->input->post();
		$result = $this->Main_model->user_login($post_data,'UserAccounts');
		if($result == true)
		{
			redirect('Home');
		} else {
			echo "User account does not exists.";
		}
	}
}
