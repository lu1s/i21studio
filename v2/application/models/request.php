<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Request extends CI_Model {
		function __construct(){
			parent::__construct();
			$this->load->database();

		}
		function save_request($email, $message){
			$this->db->select('Id')->from('emails')->where('email',$email)->limit(1);
			$q = $this->db->get();
			if($q->num_rows() > 1){
				$idr = $q->result()->first_row();
				$id = $idr->Id;
			}
			else{
				$this->db->insert('emails',array('email'=>$email));
				$id = $this->db->insert_id();
			}
			$this->db->insert('messages', array(
				  'Email' 	=> $id
				, 'Message'	=> $message
			));
			return true;
		}
	}


