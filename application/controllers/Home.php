<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	
	public function index()
	{
		$data['title']='Home | BeritaIns';
		$data['view_page']='homepage';
		$this->load->view('site',$data);
	}
	public function about()
	{
		$data['title']='About Us | BeritaIns';
		$data['view_page']='about_us';
		$this->load->view('site',$data);
	}
	public function isi_berita()
	{
		$data['title']='Berita | BeritaIns';
		$data['view_page']='berita';
		$this->load->view('site',$data);
	}
	public function arsip_berita()
	{
		$data['title']='Arsip | BeritaIns';
		$data['view_page']='arsip';
		$this->load->view('site',$data);
	}
	public function kontak_berita()
	{
		$data['title']='Kontak | BeritaIns';
		$data['view_page']='contact';
		$this->load->view('site',$data);
	}



}
