<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends CI_Controller {

	function __construct(){
		parent::__construct();
			
			$this->load->model('api_model');
		
		
	}

	public function index()
	{
		
		$ip = $_SERVER['REMOTE_ADDR'];
		$userag = $_SERVER['HTTP_USER_AGENT'];
		if( $this->api_model->is_ip_blocked($ip) == true){
			$this->api_model->user_log($ip,"BLOCKED IP ACCESED API",$userag);
		
			
		}else{
			$this->api_model->user_log($ip,"ACCESED API",$userag);
		}

		
		
		$this->load->view('templates/header');
		$this->load->view('api');
		$this->load->view('templates/footer');
	
	}

	public function getPersoane()
	{
		header('Content-Type: application/json');
		$ip = $_SERVER['REMOTE_ADDR'];
		$userag = $_SERVER['HTTP_USER_AGENT'];

		if( $this->api_model->is_ip_blocked($ip) == true){
			$this->api_model->user_log($ip,"BLOCKED IP ACCESED GETPERSOANE",$userag);
			$r =  new stdClass();
	
			$r->message = "You have been blocked. Crawling or commercial use is not allowed for the free plan. Please visit https://covid19.hackout.ro/api/ for more details.";

			echo json_encode($r);
			
		}else{
			$this->api_model->user_log($ip,"GET PERSOANE",$userag);

			$response =  new stdClass();
		
			$response = $this->api_model->get_all_person();
	
			echo json_encode($response);
		}
		
		
		
	
	}

	public function getJudet($judet)
	{
		header('Content-Type: application/json');
		$ip = $_SERVER['REMOTE_ADDR'];
		$userag = $_SERVER['HTTP_USER_AGENT'];

		if( $this->api_model->is_ip_blocked($ip) == true){
			$this->api_model->user_log($ip,"BLOCKED IP ACCESED GETJUDET: $judet",$userag);
			$r =  new stdClass();
	
			$r->message = "You have been blocked. Crawling or commercial use is not allowed for the free plan. Please visit https://covid19.hackout.ro/api/ for more details.";

			echo json_encode($r);
			
		}else{
			$this->api_model->user_log($ip,"GET JUDET: $judet",$userag);

			$response =  new stdClass();
			
			$response = $this->api_model->get_judet(strtoupper($judet));
		
			echo json_encode($response);
		}
	
	
	}

	public function slogs()
	{
		
		$data = array(
			'logs' => $this->api_model->get_logs(),
			'top'  => $this->api_model->logs_ip(),
		);
		
		$this->load->view('templates/header');
		$this->load->view('slogs', $data);
		$this->load->view('templates/footer');
	
	}

}
