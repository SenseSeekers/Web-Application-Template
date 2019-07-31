<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Debit extends CI_Controller {

	
	/*-------------------------------------------------------------*/
	/*-------------------------------------------------------------*/
	public function category_from(){
			$data = array();
			$data['category_name'] = $this->input->post('category_name');
			$category_name = $data['category_name'];
			if(empty($category_name)){
			$data = array();
			$data['msg'] = '<span class="glyphicon glyphicon-remove" aria-hidden="true" style="color:red;"></span>';
			$this->session->set_flashdata($data);
			redirect('Dashboard/add_service');
			}else{
			$data['category_name'] = $data['category_name'];
			$this->Walet_model->addcategory($data);
			$data = array();
			$data['msg'] ='<span class="glyphicon glyphicon-ok" aria-hidden="true" style="color:green;"></span>';
			$this->session->set_flashdata($data);
			redirect('Dashboard/add_service');
			}
		}

	/*------------------------------------------------------------*/
		public function category_update(){
			$data = array();
			$data['id'] = $this->input->post('id');
			$data['category_name'] = $this->input->post('category_name');
			$id = $data['id'];
			$category_name = $data['category_name'];
			if(empty($id) OR empty($category_name)){
				redirect('Dashboard/add_service'); 
			}else{
			$this->Walet_model->Updatecategory($data); 		
			redirect('Dashboard/add_service'); 
			}
		}
	/*-------------------------------------------------------------*/

			public function statusOff($id){
			$this->Walet_model->toOn($id);
			redirect('Dashboard/add_service');
			}

			public function statusOn($id){
			$this->Walet_model->toOff($id);
			redirect('Dashboard/add_service');

			}

		/*--------------------------------------------------------------*/
			public function categorydelete($id){
			$this->Walet_model->categoryremove($id);
			redirect('Dashboard/add_service');

		}
		/*--------------------------------------------------------------*/
		public function addwalet_from(){
		$data = array();
		$data['vouchar_date'] 	= $this->input->post('vouchar_date'); 
		$data['vouchar_no'] 	= $this->input->post('vouchar_no');
		$data['project_id'] 	=$this->input->post('project_id');

		$data['service_cat_id'] = $this->input->post('service_cat_id');
		$data['description'] 	= $this->input->post('description');
		$data['unit_price']	 	= $this->input->post('unit_price');  
		$data['quantity'] 		= $this->input->post('quantity');  
		/*---------------------------------------------------------*/
		$data['total_amount'] = ($data['unit_price'] * $data['quantity']);  
		/*---------------------------------------------------------*/
		$data['payment'] = $this->input->post('payment'); 
		/*---------------------------------------------------------*/
		$data['due'] = $data['total_amount']-$data['payment'];  
		/*---------------------------------------------------------*/
		if(empty($data['service_cat_id'])){
			$sdata = array();
			$sdata['msg'] = '<span class="glyphicon glyphicon-remove" aria-hidden="true" style="color:red;"></span>'; 
			$this->session->set_flashdata($sdata);		
			redirect('Dashboard/add_walet');	

		}else{
			$this->Walet_model->addwaletfrom($data); 
			$sdata = array();
			$sdata['msg'] = '<span class="glyphicon glyphicon-ok" aria-hidden="true" style="color:green;"></span>'; 
			$this->session->set_flashdata($sdata);		
			redirect('Dashboard/add_walet');				
		}
	}
	/*-----------------------------------------------------------------*/
	/*-------------------------------------------------------------*/
	public function project_from(){
			$data = array();
			$data['project_name'] = $this->input->post('project_name');
			$data['project_description'] = $this->input->post('project_description');
			$data['project_address'] = $this->input->post('project_address');

			$project_name = $data['project_name'];
			if(empty($project_name)){
			$data = array();
			$data['msg'] = '<span class="glyphicon glyphicon-remove" aria-hidden="true" style="color:red;"></span>';
			$this->session->set_flashdata($data);
			redirect('Dashboard/project');
			}else{
			$data['project_name'] = $data['project_name'];
			$this->Walet_model->addproject($data);
			$data = array();
			$data['msg'] ='<span class="glyphicon glyphicon-ok" aria-hidden="true" style="color:green;"></span>';
			$this->session->set_flashdata($data);
			redirect('Dashboard/project');
			}
		}

			/*------------------------------------------------------------*/
		public function project_update(){
			$data = array();
			$data['id'] = $this->input->post('id');
			$data['project_name'] = $this->input->post('project_name');
			$data['project_description'] = $this->input->post('project_description');
			$data['project_address'] = $this->input->post('project_address');
			$id = $data['id'];
			$project_name = $data['project_name'];
			if(empty($id) OR empty($project_name)){
				redirect('Dashboard/project'); 
			}else{
			$this->Walet_model->Updateproject($data); 		
			redirect('Dashboard/project'); 
			}
		}
	/*-----------------------------------------------------------------------*/	
		public function ProjectDelete($id){
			$this->Walet_model->ProjectRemove($id);
			redirect('Dashboard/project');

		}
	/*------------------------------------------------------------------------*/

		public function projectOn($id){
			$this->Walet_model->proOn($id);
			redirect('Dashboard/project');
		}

		public function projectOff($id){
			$this->Walet_model->proOff($id);
			redirect('Dashboard/project');

			}


}