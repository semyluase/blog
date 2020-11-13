<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

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
		$this->load->view('register');
	}
	public function add_new_successfully(){
		$row = $_POST;

		$data['fullname'] = $row['FullName'];
		$data['username'] = $row['Username'];
		$data['password'] = md5($row['Password']);
		$data['inputdate'] = date('y-m-d h:i:s');
		$data['updatedate'] = date('y-m-d h:i:s');
		$data['level'] = 'ADMIN';

		if ($this->LoginModels->insert('tb_login',$data)) {
			$this->session->set_flashdata('ada_error','<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><i class="material-icons">close</i></button><span>Sukses Melakukan Pendaftaran</span></div>');
			redirect(base_url().'login');
		} else {
			$this->session->set_flashdata('ada_error','<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><i class="material-icons">close</i></button><span>Gagal Melakukan Pendaftaran</span></div>');
			redirect(base_url().'register');
		}
	}
}
