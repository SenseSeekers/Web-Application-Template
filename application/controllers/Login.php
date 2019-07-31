<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct(){
		parent::__construct(); 

		/*----------------------------------*/
		$this->load->model('user_model');
		/*----------------------------------*/
	}


	public function index()
	{
		$data = array(); 
		/*---------------------------------------------------------*/
		$data['login_form'] = $this->load->view('login.php',$data); 
		/*---------------------------------------------------------*/
		$this->load->view('index',$data);
	}


	public function Loginform(){
		$data = array(); 
		/*---------------------------------------------------------*/
		$data['username'] = $this->input->post('username'); 
		$data['password'] = $this->input->post('password'); 
		/*---------------------------------------------------------*/

		$username = $data['username']; 
		$password = $data['password'];

		if(empty($username) OR empty($password)){
			$sdata = array();
			$sdata['msg'] = '<span style="color:red;">Login Failed !</span>'; 
			$this->session->set_flashdata($sdata);
			redirect('Login',$sdata); 
		}else{

			$sdata = array();
			$check = $this->user_model->userLogin($data);
			if($check){
				$sdata = array(); 
				$sdata['user_id'] = $check->user_id;  
				$sdata['username'] = $check->username; 
				$sdata['types'] = $check->types;
				$sdata['userlogin'] = TRUE; 
				$this->session->set_userdata($sdata);//set as session... 
				redirect('Dashboard',$sdata);
			}else{
				$sdata = array();
				$sdata['msg'] = '<span style="color:red;">Invalid Username or Password !</span>'; 
				$this->session->set_flashdata($sdata);
				redirect('Login',$sdata); 
			}
		}
	}//login method end..

	public function Logout(){
		//$uid = $this->session->id;
		//$this->login_model->userLoginOFF($uid);//update login status.OFF..
		$this->session->unset_userdata($user_id);
		$this->session->unset_userdata($username); 
		$this->session->unset_userdata($password);
		$this->session->unset_userdata('userlogin',FALSE);

		$this->session->sess_destroy(); 
		redirect('Login',$data); 
	}

}
