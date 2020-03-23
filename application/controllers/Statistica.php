<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Statistica extends CI_Controller {

	function __construct(){
		parent::__construct();
		
			$this->load->model('statistica_model');
		
	}

	public function index()
	{
		$data = array(
			'all_person' => $this->statistica_model->get_all_person_not_null(),
			'connections' => $this->statistica_model->get_connections(),
			'all_person_null' => $this->statistica_model->get_all_person()
		);
		
		$this->load->view('templates/header');
		$this->load->view('statistica', $data);
		$this->load->view('templates/footer');
	
	}

	public function conexiuni()
	{
		$data = array(
			'all_person' => $this->statistica_model->get_all_person(),
			'connections' => $this->statistica_model->get_connections()
		);
		
		$this->load->view('templates/header');
		$this->load->view('conexiuni', $data);
		$this->load->view('templates/footer');
	
	}

	public function date()
	{
		$data = array(
			'all_person' => $this->statistica_model->get_all_person(),
			'connections' => $this->statistica_model->get_connections()
		);
		
		$this->load->view('templates/header');
		$this->load->view('date', $data);
		$this->load->view('templates/footer');
	
	}

}
