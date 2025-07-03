<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Master extends CI_Controller {

	function __construct() {
		parent::__construct();
		 $this->load->library('form_validation');
		 $this->load->helper(array('form', 'url'));
		 //$this->load->model('RegModel');
		 $this->load->library('session');
		 //ini_set("default_socket_timeout", 6000);
	}

	public function index(){
		$this->load->view('login');
	}

	public function customer(){
		$date_past = date("Y", strtotime('-25 year'));
		$date_year = date("Y");
		for($i=$date_past;$i<=$date_year;$i++){
			$years[] = $i;
		}
		$data['years'] = $years;
		//$data['year'] = array('2000,');
		$this->load->view('customer', $data);
	}

	public function loan_entry(){
		$this->load->view('loan_entry');
	}

	public function loan_receipt(){
		$this->load->view('loan_receipt');
	}

	public function loan_closed(){
		$this->load->view('loan_closed');
	}

	public function cash_book(){
		$this->load->view('cash_book');
	}

	public function finance_ledger(){
		$this->load->view('finance_ledger');
	}

	public function outstanding(){
		$this->load->view('outstanding');
	}

	public function completed(){
		$this->load->view('completed');
	}
}


