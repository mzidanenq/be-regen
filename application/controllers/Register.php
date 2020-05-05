<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller 
{



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

// |
	public function index()
	{
		//BUAT VALIDASI FORM -ZIDANE
		$this->form_validation->set_rules('id', 'ID', 'required|min_length[4]|max_length[6]|is_unique[admin.ID_Karyawan]', array(
			'is_unique'	=> '%s Karyawan has been registered'
		));
		$this->form_validation->set_rules('pass', 'Password', 'required|min_length[8]|callback_password_check');
		$this->form_validation->set_rules('konpass', 'Konfirmasi Password', 'required|matches[pass]');

		//CEK VALIDASI UDH BENER APA BELUM -ZIDANE
		if($this->form_validation->run() == FALSE) 
		{
			//LOAD VIEW -ZIDANE
			$this->load->view('templates/header');
			$this->load->view('register');
			$this->load->view('templates/footer');
			//BUAT DEBUG DB
			// $datas = $this->Model_admin->view();
			// foreach($datas as $data) 
			// {
			// 	echo $data->ID_Karyawan;
			// }
			// echo $this->input->post('id');
		} else 
		{
			// echo "testing"; INI JG BUAT DEBUG
			//NGAMBIL DATA DARI FORM DI JADIIN ARRAY
			$data = array( 
			'ID_Karyawan'	=> $this->input->post('id'),
			'Password'		=> $this->input->post('pass')
			);

			//KIRIM DATA KE MODEL -ZIDANE
			$reg = $this->Model_admin->register($data);

			//DEBUG DB JG -ZIDANE
			if($reg) 
			{
				echo "registrasi berhasil";
				redirect('login');
			} else 
			{
				echo "registrasi gagal";
				redirect('register');
			}
			//redirect();
		}
	}

	//fungsi cek password harus ada huruf dan angka
	public function password_check($str) 
	{
		if (preg_match('#[0-9]#', $str) && preg_match('#[a-zA-Z]#', $str)) 
		{
		return TRUE;
		}	
		else 
		{
		$this->form_validation->set_message('password_check', 'Password must containt word and number');
		return FALSE;
		}
	}
}
