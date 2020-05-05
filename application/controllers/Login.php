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
	public function index()
	{
		$this->form_validation->set_rules('id', 'ID','required');
		$this->form_validation->set_rules('pass', 'Password','required');

		if($this->form_validation->run() == FALSE) {
			$this->load->view('templates/header');
			$this->load->view('login');  
			$this->load->view('templates/footer');
		} else {
			$auth = $this->Model_admin->login();

			if($auth == true) {
				// nanti di bikin redirect dan session disini -zidane
				echo "berhasil login";
			} else {
				//ntr dibikin validasi lagi disini -zidane
				echo "id atau password salah";
			}
		}

		      
	}
}
