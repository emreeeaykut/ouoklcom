<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index(){
		$this->load->model('Users');
		$data['user'] = $this->Users->get_list();
		
		$this->load->view('welcome',$data);
	}





}
