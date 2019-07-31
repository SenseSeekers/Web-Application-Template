<?php
	class User_model extends CI_Model{

		/*USER LOGIN APPROVALS*/
		public function userLogin($data){
			$this->db->select('*');
			$this->db->from('tb_user');
			$this->db->where('username',$data['username']);
			$this->db->where('password',md5($data['password']));
			$this->db->where('access','1');
			$qresult = $this->db->get(); 
			$has  = $qresult->num_rows(); 

			if($has === 1){
				$result = $qresult->row(); 
				return $result; 
			}
		}
/*------------------------------------------------------------------*/
		public function Adduserdata($data){
			$this->db->insert('tb_user',$data);
		}
/*------------------------------------------------------------------*/		
		public function GetallUser(){
			$this->db->select('*'); 
			$this->db->from('tb_user'); 
			$result = $this->db->get(); 
			$result = $result->result(); 
			return $result; 
		}

/*------------------------------------------------------------------*/
		public function toAdmin($id){
			$this->db->set('types','Admin');
			$this->db->where('id',$id);
			$this->db->update('tb_user');
		}
		public function toManager($id){
			$this->db->set('types','Manager');
			$this->db->where('id',$id);
			$this->db->update('tb_user');
		}
		public function toOperator($id){
			$this->db->set('types','Operator');
			$this->db->where('id',$id);
			$this->db->update('tb_user');
		}
/*-----------------------------------------------------------------*/
	public function toOn($id){
		$this->db->set('access',1);
		$this->db->where('id',$id);
		$this->db->update('tb_user');
	}		
/*-------------------------------------------------------------------*/
	public function toOff($id){
		$this->db->set('access',0);
		$this->db->where('id',$id);
		$this->db->update('tb_user');
	}	
/*------------------------------------------------------------------*/	

		public function UpdateUser($data){
			$this->db->set('username',$data['username']);
			$this->db->set('password',md5($data['password']));
			$this->db->where('id',$data['id']); 
			$this->db->update('tb_user'); 
		}

/*--------------------------------------------------------------------*/
	public function userRemove($id){
		$this->db->where('id',$id);
		$this->db->delete('tb_user');
	}
/*--------------------------------------------------------------------*/

	
	}
?>