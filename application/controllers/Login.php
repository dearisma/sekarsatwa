<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->model('Login_model', 'lm');
		date_default_timezone_set('Asia/Jakarta');
	}
	public function index()
	{
		// if ($this->session->userdata('data_session') != null) {
		// 	redirect('Login/v_login', 'refresh');
		// } else {
			$this->load->view('Login/v_login');
		// }
	}
	
	public function proses_login()
	{
		$this->form_validation->set_rules('username', 'username', 'trim|required', array('required' => 'username harus diisi'));
		$this->form_validation->set_rules('password', 'password', 'trim|required', array('required' => 'Password harus diisi'));
		
		if ($this->form_validation->run() == TRUE) {
			$w = array(
				'username' => $this->input->post('username'),
				'password' => $this->input->post('password')
			);
			$cek = $this->lm->cek('admin', $w)->row();
			if ($cek != null) {

				$array = array(
					'username' => $cek->username,
					'password' => $cek->password,
					'login' => TRUE,
				);
					$this->session->set_userdata('data_session', $array);
					redirect('index.php/admin/overview', 'refresh');
				
				
			}else {
				redirect('Login', 'refresh');
			}
		}else {
			redirect('Login', 'refresh');
		}
	}
	
	
	
	public function register()
	{
		
		$this->load->view('Login/v_register');
		
		
	}
	
}
