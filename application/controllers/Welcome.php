<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
	public function index()
	{
		$this->load->library('mongo_db',array('activate'=>'defaults'), 'mongo_db');

		$this->mongo_db->insert('mahasiswa', array('nama'=>'lisma', 'username'=>'ibulisma' ));
	}
}
