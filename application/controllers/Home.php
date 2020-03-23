<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct(){
		parent::__construct();
		
			$this->load->model('home_model');
		
	}

	public function index()
	{
		$data = array(
			'all_count' => $this->home_model->get_all_infections_count(),
			'today_count' => $this->home_model->get_today_count(date("Y-m-d")),
			'vindecati_count' =>  $this->home_model->get_vindecati_count(),
			'decedati_count' =>  $this->home_model->get_decedati_count(),
			'infectii_chart' => $this->home_model->get_infectii_chart(),
			'by_country' => $this->home_model->get_infectii_by_country()

		);
		
		$this->load->view('templates/header');
		$this->load->view('home',$data);
		$this->load->view('templates/footer');
	
	}

}
