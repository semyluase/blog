<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Karya extends CI_Controller {

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
	function __construct(){
		parent::__construct();
		$this->load->library('pagination');
	}

	public function index($p=0)
	{
		$recordperpage = 5;
		$mypaging['base_url'] = base_url().'admin/karya/index/';
		$mypaging['total_rows'] = $this->KaryaModels->query("SELECT * FROM tb_karyailmiah where statusaktif='1'")->num_rows();
		$mypaging['per_page'] = $recordperpage;
		$mypaging['uri_segment'] = 4;
		$mypaging['first_link'] = 'First';
        $mypaging['first_tag_open'] = '<li class="page-item">';
        $mypaging['first_tag_close'] = '</li>';
        $mypaging['last_link'] = 'Last';
        $mypaging['last_tag_open'] = '<li class="page-item">';
        $mypaging['last_tag_close'] = '</li>';
        $mypaging['full_tag_open'] = '<ul class="pagination">';
        $mypaging['full_tag_close'] = '</ul>';
        $mypaging['cur_tag_open'] = '<li class="page-item active"><a href = "javascript: void(0)">';
        $mypaging['cur_tag_close'] = '</a></li>';
        $mypaging['num_tag_open'] = '<li class="page-item">';
        $mypaging['num_tag_close'] = '</li>';
        $mypaging['prev_link'] = '&laquo;';
        $mypaging['prev_tag_open'] = '<li class="page-item">';
        $mypaging['prev_tag_close'] = '</li>';
        $mypaging['next_link'] = '&raquo;';
        $mypaging['next_tag_open'] = '<li class="page-item">';
        $mypaging['next_tag_close'] = '</li>';	

		$this->pagination->initialize($mypaging);
		$data['pagi'] = $this->pagination->create_links();
		$data['karyailmiah'] =  $this->KaryaModels->query("SELECT a.id, a.judul, a.tahun, a.id_userupdate, a.id_jenis, e.deskripsi FROM tb_karyailmiah a, enumeration e where a.id_jenis = e.id and a.statusaktif = '1'");
		$data['enum'] =  $this->KaryaModels->query("SELECT id, deskripsi FROM enumeration where statusaktif='1' and jenisdata='jeniskaryailmiah'");
		$data['logged_in'] = $this->session->userdata('logged_in');
		$this->session->keep_flashdata('ada_error');
		$this->load->view('admin/karya',$data);
	}

	public function add_new_successfully(){
		$row = $_POST;

		$data['judul'] = $row['judul'];
		$data['tahun'] = $row['tahun'];
		$data['id_jenis'] = $row['jenis'];
		$data['inputdate'] = date('y-m-d h:i:s');
		$data['updatedate'] = date('y-m-d h:i:s');
		$data['id_userinput'] = $row['admininput'];
		$data['id_userupdate'] = $row['admininput'];
		$data['statusaktif'] = '1';

		if ($this->KaryaModels->insert('tb_karyailmiah',$data)) {
			$this->session->set_flashdata('ada_error','<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><i class="material-icons">close</i></button><span>Sukses Memasukan Data</span></div>');
			redirect(base_url().'admin/karya');
		} else {
			$this->session->set_flashdata('ada_error','<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><i class="material-icons">close</i></button><span>Gagal Menginsert Data</span></div>');
			redirect(base_url().'admin/karya');
		}
	}

	public function edit_new_successfully(){
		$row = $_POST;

		$data['id'] = $row['id'];
		$data['judul'] = $row['judul'];
		$data['tahun'] = $row['tahun'];
		$data['id_jenis'] = $row['jenis'];
		$data['updatedate'] = date('y-m-d h:i:s');
		$data['id_userupdate'] = $row['admininput'];
		$data['statusaktif'] = '1';

		$this->KaryaModels->editRecord('id',$data['id'],'tb_karyailmiah',$data);

		$this->session->set_flashdata('ada_error','<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><i class="material-icons">close</i></button><span>Sukses Memasukan Data</span></div>');
		redirect(base_url().'admin/karya');
	}

	public function delete_new_successfully(){
		$row = $_POST;

		$data['id'] = $row['id'];
		$data['updatedate'] = date('y-m-d h:i:s');
		$data['id_userupdate'] = $row['admininput'];
		$data['statusaktif'] = '0';

		$this->KaryaModels->editRecord('id',$data['id'],'tb_karyailmiah',$data);

		$this->session->set_flashdata('ada_error','<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><i class="material-icons">close</i></button><span>Sukses Memasukan Data</span></div>');
		redirect(base_url().'admin/karya');
	}
}
