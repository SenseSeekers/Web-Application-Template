<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Credit extends CI_Controller {
	public function __construct(){
		parent::__construct(); 

		/*----------------------------------*/
		$this->load->model('user_model');
		/*----------------------------------*/
	}
	
	public function index()
	{
		$data = array();
		$data['active_wm'] = 'walet';  

		$data ['total_deposit'] = $this->Walet_model->gettotaldeposit($data);
		$data['add_payment'] = $this->Walet_model->allpayment('$data');
		/*---------------------------------------------------------*/
		$data['header'] = $this->load->view('php/header.php',$data); 
		$data['content'] = $this->load->view('php/receiver_walet.php',$data); 
		$data['footer'] = $this->load->view('php/footer.php',$data); 
		/*---------------------------------------------------------*/
		$this->load->view('index',$data);
	}

	public function walet_list()
	{
		$data = array();
		$data['active_wm'] = 'walet';  

		$data['add_payment'] = $this->Walet_model->allpayment('$data');
		$data ['total_deposit'] = $this->Walet_model->gettotaldeposit($data);
		$data ['total_expense'] = $this->Walet_model->gettotalExpense($data);
		$data['expeaditure'] = $this->Walet_model->allexpeaditure('$data');
		/*---------------------------------------------------------*/
		$data['header'] = $this->load->view('php/header.php',$data); 
		$data['content'] = $this->load->view('php/walet_list.php',$data); 
		$data['footer'] = $this->load->view('php/footer.php',$data); 
		/*---------------------------------------------------------*/
		$this->load->view('index',$data);
	}

	public function Expeaditure_walet()
	{
		$data = array();
		$data['active_wm'] = 'walet'; 
		 
		/*---------------------------------------------------------*/
		$data ['total_expense'] = $this->Walet_model->gettotalExpense($data);
		$data['expeaditure'] = $this->Walet_model->allexpeaditure('$data');
		/*---------------------------------------------------------*/
		$data['header'] = $this->load->view('php/header.php',$data); 
		$data['content'] = $this->load->view('php/expeaditure_walet.php',$data); 
		$data['footer'] = $this->load->view('php/footer.php',$data); 
		/*---------------------------------------------------------*/
		$this->load->view('index',$data);
	}

	/*---------------------------------------------------------*/

	public function addpayment_from(){
		$data = array();
		$data ['issue_date'] = $this->input->post('issue_date');
		$data ['vochar_no'] = $this->input->post('vochar_no');
		$data ['credit_category'] = $this->input->post('credit_category');
		$data ['description'] = $this->input->post('description');
		$data ['amount'] = $this->input->post('amount');
		$data ['payment'] = $this->input->post('payment');

		$issue_date = $data['issue_date'];
		$vochar_no = $data['vochar_no'];
		//$credit_category = $data['credit_category'];
		//$description = $data['description'];
		//$amount = $data['amount'];
		$payment = $data['payment'];

		if(empty($issue_date) OR empty($vochar_no) OR  empty($payment)){
			$data = array();
			$data['msg'] = '<span class="glyphicon glyphicon-remove" aria-hidden="true" style="color:red;"></span>';
			$this->session->set_flashdata($data);
			redirect('Dashboard/add_walet_payment');
		}else{
		//$data['issue_date'] = $data['issue_date'];	
		//var_dump($data); die(); 

		$this->Walet_model->addallpayment($data);
		$data = array();
		$data['msg'] = '<span class="glyphicon glyphicon-ok" aria-hidden="true" style="color:green;"></span>';
		$this->session->set_flashdata($data);
		redirect('Dashboard/add_walet_payment/');

		}

	}
		
}
