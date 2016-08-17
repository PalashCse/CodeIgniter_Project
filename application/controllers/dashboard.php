<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index(){

		$this->load->model('login_model');

		if( $this->login_model->is_user_login() ){

			$this->load->view('dashboard-page');

		}
		else{
			redirect('login/? first login');
		}

		
	}
}