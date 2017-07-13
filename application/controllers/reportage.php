<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class reportage extends CI_Controller {

	public function index(){
		$this->load->model('Users');
		$data['user'] = $this->Users->get_list();
		
		$this->load->view('welcome',$data);
	}

	public function detail($id){
		$this->load->model('Users');
		$this->Users->id = $id;
		
		$data['users'] = $this->Users->get_detail_row($id);
		$data['asnwers'] = $this->Users->get_detail_list();
		$data['total'] = $this->Users->total_reportage();

		$this->load->view('reportage', $data);
	}

	public function search($job){
		$this->load->model('Users');

		$data['reportages'] = $this->Users->get_reportage($job);

		$this->load->view('search',$data);
	}


}
