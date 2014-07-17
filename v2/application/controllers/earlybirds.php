<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Earlybirds extends CI_Controller {

	public function __construct()
   {
        parent::__construct();
        $this->load->library("session");
        $this->load->helper('url');
   }

	public function index()
	{
		$data['session_id'] = $this->session->userdata('session_id');
		$this->load->view('home/main', $data);
	}
	public function insert()
	{
		if($this->input->post('sid') == false || $this->input->post('email') == false){
			$response = array('success'=>false,'message'=>'El request es inválido.');
		}
		elseif($this->input->post('sid') != $this->session->userdata('session_id')){
			$response = array('success'=>false,'message'=>'ID de sesión inválida. Por favor recarga la página.');
		}
		elseif(!preg_match('/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$/', $this->input->post('email'))){
			$response = array('success'=>false,'message'=>'El correo electrónico es inválido.');
		}
		else{
			$this->load->database();
			$this->db->select('id')->from('earlybirds')->where('email',$this->input->post('email'))->limit(1);
			if($this->db->count_all_results() > 0){
				$response = array('success'=>true,'message'=>'already there');
			}
			else{
				$this->db->insert('earlybirds', array('email'=>$this->input->post('email')));
				$response = array('success'=>true,'message'=>'inserted');
			}
		}
		$data['response'] = $response;
		$this->load->view('shared/json',$data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/earlybirds.php */