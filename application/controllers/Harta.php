<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Harta extends CI_Controller {

	function __construct(){
		parent::__construct();
		
			$this->load->model('harta_model');
		
	}

	public function index()
	{
		$rez = [];
		$date = $this->harta_model->get_by_judet();
		foreach($date as $d){
			$rez[$d->judet] = $d->nr;
		}
		$data = array(
			'by_judet' => $rez,

		);
		
		$this->load->view('templates/header');
		$this->load->view('harta',$data);
		$this->load->view('templates/footer');
	
	}

}
