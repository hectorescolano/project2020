<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('contents/login_page');
		$this->load->view('template/footer');
	}
}
