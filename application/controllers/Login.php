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
		$this->load->view('login');
	}

	public function do_login(){
		$data = array(
			'username' => $this->input->post('username'),
			'password' => md5($this->input->post('password'))
			);

		$query = $this->LoginModels->getRecordWhere('*','tb_login','username',$data['username']);

		$row = $query->row();

		if ($query->num_rows()>0) {
			if ($data['password'] == $row->password) {
				$sess_array = array(
					'id' =>$row->id,
					'username' =>$row->username,
					'email' => $row->email,
					'fullname' => $row->fullname,
					'level' =>$row->level);
				$this->session->set_userdata('logged_in',$sess_array);
				redirect(base_url().'admin/dashboard');
			} else {
				$this->session->set_flashdata('login_error','<div class="alert alert-danger" role="alert"><span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span><span class="sr-only">Error: </span> Password Salah!!!</div>');
				redirect(base_url().'login');
			}
			
		} else {
			$this->session->set_flashdata('login_error','<div class="alert alert-danger" role="alert"><span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span><span class="sr-only">Error:</span> Username Salah!!!</div>');
				redirect(base_url().'login');
		}
		
	}

	public function logout(){
		$this->session->unset_userdata('logged_in');
		redirect(base_url());
	}
}
