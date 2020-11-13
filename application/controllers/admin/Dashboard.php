<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

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
		$data['logged_in'] = $this->session->userdata('logged_in');
		$user = $this->session->userdata('logged_in');
		$query = $this->LoginModels->getRecordWhere('*','tb_login','username',$user['id']);
		$data['totalkarya'] = $this->KaryaModels->query("select * from tb_karyailmiah where statusaktif = '1'")->num_rows();
		$data['totalenum'] = $this->EnumModels->query("select * from enumeration where statusaktif = '1'")->num_rows();

		$row = $query->row();
		$this->load->view('admin/dashboard',$data);
	}
}
