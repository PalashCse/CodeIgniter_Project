<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {
	
	public function index(){

		$this->load->model('login_model');
		if( $this->login_model->is_user_login() ){

			redirect('dashboard');

		}
		else{
			$this->load->view('login-page');
		}
		
	}

	public function user_login_data_check(){

		$this->form_validation->set_rules('User_name', 'Username', 'trim|xss_clean|min_length[3]|max_length[12]');
		$this->form_validation->set_rules('Userpassword', 'Password', 'trim|xss_clean|min_length[3]|max_length[12]');

		if($this->form_validation->run() == FALSE ){

			$this->load->view('login-page');
		}
		else{
			$this->load->model('login_model');

			$result=$this->login_model->user_login_data_check();
			if( $result ){

				redirect('dashboard');

			}
			else{

				$this->load->view('login-page');

			}
		}
	}

	public function logout(){

		$this->session->unset_userdata('current_user_id');
		$this->session->unset_userdata('current_user_name');

		$this->session->sess_destroy();
		redirect('login/?logout=success');
	}
}
