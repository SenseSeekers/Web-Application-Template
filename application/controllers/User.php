<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	public function __construct(){
		parent::__construct(); 

		/*----------------------------------*/
		$this->load->model('user_model');
		/*----------------------------------*/
	}
	
	public function index()
	{
		$data = array();
		$data['active_wm'] = 'user_option';  
		/*---------------------------------------------------------*/
		$data['Users'] = $this->User_model->GetallUser($data);
		/*---------------------------------------------------------*/
		$data['header'] = $this->load->view('php/header.php',$data); 
		$data['menu'] = $this->load->view('php/left_menu.php',$data); 
		$data['content'] = $this->load->view('php/user_option.php',$data); 
		$data['footer'] = $this->load->view('php/footer.php',$data); 
		/*---------------------------------------------------------*/
		$this->load->view('index',$data);
	}

	public function adduser_form(){
		$data = array();
		$data['username'] = $this->input->post('username');
		$data['types'] = $this->input->post('types');
		$data['password'] = $this->input->post('password');

		$username = $data['username'];
		$types = $data['types'];
		$password = $data['password'];
		if( empty($username) OR empty($types) OR empty($password)){
		$data = array();
		$data['msg'] = '<span class="glyphicon glyphicon-remove" aria-hidden="true" style="color:red;"></span>';
		$this->session->set_flashdata($data);
		redirect('User/');
		}else{
		$data['password'] = md5($data['password']);
		$this->User_model->Adduserdata($data);
		$data = array();
		$data['msg'] = '<span class="glyphicon glyphicon-ok" aria-hidden="true" style="color:red;"></span>';
		$this->session->set_flashdata($data);
		redirect('User/');
		}
	}
	/*-----------------------------------------------------------------------------*/
	public function Admin($id){
		$this->User_model->toAdmin($id);
		redirect('User/');
	}
	public function Manager($id){
		$this->User_model->toManager($id);
		redirect('User/');
	}
	public function Operator($id){
		$this->User_model->toOperator($id);
		redirect('User/');
	}
	/*-----------------------------------------------------------------------------*/
	public function accessOff($id){
		$this->User_model->toOn($id);
		redirect('User');
	}

	public function accessOn($id){
		$this->User_model->toOff($id);
		redirect('User');

	}

	/*-----------------------------------------------------------------------------*/
	public function UserDelete($id){
		$this->User_model->userRemove($id);
		redirect('User');
	}
	/*-------------------------------------------------------------------------*/

	public function userupdate(){
		$data = array();
		$data['id'] = $this->input->post('id');
		$data['username'] = $this->input->post('username');
		$data['password']=$this->input->post('password');
		$id = $data['id'];
		$username = $data['username'];
		if(empty($username)){

		redirect('User'); 
		}else{
		$this->user_model->UpdateUser($data); 		
		redirect('User'); 
		}
	}
}
