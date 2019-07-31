 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function __construct(){
	parent::__construct(); 

	/*----------------------------------*/
	$this->load->model('user_model');
	$this->load->model('Walet_model');
	/*----------------------------------*/
	}

	public function index()
	{
	$data = array();
	$data['active_wm'] 		= 'home';  
	$data['Project'] 	= $this->Walet_model->GetallProject($data);
	/*----------------------------------------------------------------*/
	//$data['project_deposit'] = $this->Walet_model->getprojectDeposit($data);
	/*----------------------------------------------------------------*/
	$data ['total_deposit'] = $this->Walet_model->gettotaldeposit($data);
	$data ['total_expense'] = $this->Walet_model->gettotalExpense($data);
	/*-----------------------------------------------------------------*/
	$data['header']	 	= $this->load->view('php/header.php',$data); 
	$data['menu'] = $this->load->view('php/left_menu.php',$data); 
	$data['content']	= $this->load->view('php/dashboard.php',$data); 
	$data['footer'] 	= $this->load->view('php/footer.php',$data); 
	/*----------------------------------------------------------------*/
	$this->load->view('index',$data);
	}

	public function add_service(){
	$data = array(); 
	/*----------------------------------------------------------------*/
	$data['Category'] 	= $this->Walet_model->Getallcategory($data);
	/*----------------------------------------------------------------*/
	$data['header']		= $this->load->view('php/Header.php',$data);
	$data['menu'] = $this->load->view('php/left_menu.php',$data); 
	$data['content']	= $this->load->view('php/add_service.php',$data);
	$data['footer'] 	= $this->load->view('php/footer.php',$data);
	$this->load->view('index.php',$data);
	}
	/*-----------------------------------------------------------------*/
	public function add_walet(){
	$data = array(); 
	$data['active_wm'] 	= 'add_walet';
	/*----------------------------------------------------------------*/
	$data['categories']	= $this->Walet_model->allcategoryservice($data);
	$data['project']	= $this->Walet_model->allproject($data);
	/*----------------------------------------------------------------*/
	$data['header'] 	= $this->load->view('php/Header.php',$data);
	$data['menu'] = $this->load->view('php/left_menu.php',$data); 
	$data['content']	= $this->load->view('php/add_walet.php',$data);
	$data['footer'] 	= $this->load->view('php/footer.php',$data);
	$this->load->view('index.php',$data);
	}


	public function add_walet_payment()
	{
	$data = array(); 
	$data['active_wm'] 	= 'add_walet'; 
	$data['header']		= $this->load->view('php/Header.php',$data);
	$data['menu'] = $this->load->view('php/left_menu.php',$data); 
	$data['content'] 	= $this->load->view('php/add_walet_payment.php',$data);
	$data['footer']		= $this->load->view('php/footer.php',$data);
	$this->load->view('index.php',$data);
	}
	

	public function walet_report(){
	$data = array(); 
	$data['active_wm'] 		= 'walet_report'; 
	/*----------------------------------------------------------------*/
	$data ['total_expense'] = $this->Walet_model->gettotalExpense($data);
	$data['walet_report']	= $this->Walet_model->allexpeaditure($data);
	/*----------------------------------------------------------------*/
	$data['header']			= $this->load->view('php/Header.php',$data);
	$data['content'] 		= $this->load->view('php/walet_report.php',$data);
	$data['footer'] 		= $this->load->view('php/footer.php',$data);
	$this->load->view('index.php',$data);
	}

	public function project(){
	$data = array(); 
	/*----------------------------------------------------------------*/
	$data['Project'] 	= $this->Walet_model->GetallProject($data);
	/*----------------------------------------------------------------*/
	$data['header'] 	= $this->load->view('php/Header.php',$data);
	$data['menu'] 		= $this->load->view('php/left_menu.php',$data); 
	$data['content']	= $this->load->view('php/project.php',$data);
	$data['footer'] 	= $this->load->view('php/footer.php',$data);
	$this->load->view('index.php',$data);
	}

	public function expeaditure_update($id)
	{
	$data = array(); 
	$data['id'] = $id;
	/*----------------------------------------------------------------*/
	$data['expeaditures_data'] = $this->Walet_model->allexpeaditureUpdate($data);
	/*----------------------------------------------------------------*/
	$data['header'] 	= $this->load->view('php/Header.php',$data);
	$data['menu'] 		= $this->load->view('php/left_menu.php',$data); 
	$data['content']	= $this->load->view('php/expeaditure_update.php',$data);
	$data['footer'] 	= $this->load->view('php/footer.php',$data);
	$this->load->view('index.php',$data);
	}

}


