<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->helper('url');
	}

	public function index()
	{
		$data['price_conceptual'] = 0.000941403;
		$data['price_realistic'] = 0.001882806;
		$data['price_photorealistic'] = 0.002824209;
		$data['footer_js'] = array(
			base_url('/assets/js/main.js')
		);
		$this->load->view('shared/header');
		$this->load->view('home/main', $data);
		$this->load->view('shared/footer', $data);
	}
}

/* End of file home.php */
/* Location: ./application/controllers/home.php */