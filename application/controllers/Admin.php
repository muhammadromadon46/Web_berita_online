<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	
	public function index()
	{
		$data['title']='Admin | BeritaIns';
		
		$this->load->view('admin/main',$data);
	}

	public function Login()
	{
		$data['title']='Login_Admin | BeritaIns';
		
		$this->load->view('admin/login',$data);
	}

	

}
