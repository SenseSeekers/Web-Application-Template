<?php
	class Walet_model extends CI_Model{
		
	/*------------------------------------------------------------------*/
	/*Service category add*/
		public function addcategory($data){
		$this->db->insert('tb_service_category',$data);
		}

	/*------------------------------------------------------------------*/
	/*Service category Getallcategory*/	
		public function Getallcategory()
		{
		$this->db->select('*'); 
		$this->db->from('tb_service_category'); 
		$result = $this->db->get(); 
		$result = $result->result(); 
		return $result; 
		}
		
		public function allcategoryservice()
		{
		$this->db->select('*'); 
		$this->db->from('tb_service_category'); 
		$this->db->where('status','1');
		$result = $this->db->get(); 
		$result = $result->result(); 
		return $result; 
		}

		/*-------------------------------------------------------------*/
		public function Updatecategory($data)
		{
		$this->db->set('category_name',$data['category_name']);
		$this->db->where('id',$data['id']); 
		$this->db->update('tb_service_category'); 
		}
		
		/*-------------------------------------------------------------*/
		public function Updateproject($data)
		{
		$this->db->set('project_name',$data['project_name']);
		$this->db->set('project_description',$data['project_description']);
		$this->db->set('project_address',$data['project_address']);
		$this->db->where('id',$data['id']); 
		$this->db->update('tb_project'); 
		}

		/*--------------------------------------------------------------*/
		/*Service category status*/
		public function toOn($id){
		$this->db->set('status',1);
		$this->db->where('id',$id);
		$this->db->update('tb_service_category');
		}		

		/*-------------------------------------------------------------------*/
		/*Service category status*/
		public function toOff($id)
		{
		$this->db->set('status',0);
		$this->db->where('id',$id);
		$this->db->update('tb_service_category');
		}
		/*--------------------------------------------------------------------*/
		/*Service category Delete*/
		public function categoryremove($id)
		{
		$this->db->where('id',$id);
		$this->db->delete('tb_service_category');
		}

	/*
	|-------------------------------------------------
	|--------------- Project category----------------- 
	|-------------------------------------------------
	*/

	public function addproject($data)
	{
	$this->db->insert('tb_project',$data);
	}

	public function ProjectRemove($id)
	{
	$this->db->where('id',$id);
	$this->db->delete('tb_project');
	}		
	
	/*---------------------------------------------------------------------*/
	public function GetallProject()
	{
	$this->db->select('*'); 
	$this->db->from('tb_project'); 
	$result = $this->db->get(); 
	$result = $result->result(); 
	return $result; 
	}

	/*--------------------------------------------------------------*/
	/*Service project status*/
	public function proOn($id){
	$this->db->set('status',1);
	$this->db->where('id',$id);
	$this->db->update('tb_project');
	}		

	/*-------------------------------------------------------------------*/
	/*Service project status*/
	public function proOff($id)
	{
	$this->db->set('status',0);
	$this->db->where('id',$id);
	$this->db->update('tb_project');
	}


	public function allproject()
	{
	$this->db->select('*'); 
	$this->db->from('tb_project'); 
	$this->db->where('status','1');
	$result = $this->db->get(); 
	$result = $result->result(); 
	return $result; 
	}


	public function getallprojectByid($id){
			$this->db->select('*');
			$this->db->from('tb_project');
			$this->db->where('id',$id);
			$result = $this->db->get();
			$result = $result->row();
			return $result; 
		}


	/*---------------------------------------------------------------------*/
	/*--------------------------Walet add ---------------------------------*/
	/*---------------------------------------------------------------------*/
	/*--------------------------------------------------------------------*/

	public function addwaletfrom($data)
	{
	$this->db->insert('tb_debit',$data);
	}

	public function allexpeaditure($data)
	{
	$this->db->select('*');
	$this->db->from('tb_debit');
	$result = $this->db->get();
	$result = $result->result();
	return $result;
	}

	public function allexpeaditureUpdate($data)
	{
		var_dump($data);
	$this->db->select('*');
	$this->db->from('tb_debit');
	$this->db->where('id',$data['id']);
	$result = $this->db->get();
	$result = $result->row();
	return $result;
	}

	/*-------------------------------------------------------------*/	
	/*add payment option*/
	
	public function addallpayment($data){
	$this->db->insert('tb_credit',$data);
		}
	/*----------------------------------------------------------*/
	public function allpayment(){
			$this->db->select('*'); 
			$this->db->from('tb_credit'); 
			$result = $this->db->get(); 
			$result = $result->result(); 
			return $result; 
		}	

		/*------------------------------*/
		public function getcategoryByid($id){
			$this->db->select('*');
			$this->db->from('tb_service_category');
			$this->db->where('id',$id);
			$result = $this->db->get();
			$result = $result->row();
			return $result; 
		}

		/*------------------------------------*/
		public function gettotaldeposit(){
			$this->db->select_sum('payment');
			$this->db->from('tb_credit');
			$result = $this->db->get();
			$result = $result->row();
			return $result;
		}

		/*------------------------------------*/
		public function gettotalExpense(){
			$this->db->select_sum('payment');
			$this->db->from('tb_debit');
			$result = $this->db->get();
			$result = $result->row();
			return $result;
		}

		/*--------------------------------------------*/
//SELECT sum(payment) FROM tb_debit WHERE project_id = 2
		/*------------------------------------------
		public function getprojectDeposit($id){
			//$this->db->select('sum(payment)');
			$this->db->select_sum('*');
			$this->db->from('tb_debit');
			$this->db->where('project_id',$id);
			$result = $this->db->get('payment');
			$result = $result->num_rows();
			return $result;
		}
		/*-------------------------------------------*/


}