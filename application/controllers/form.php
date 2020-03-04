<?php 

class Form extends CI_Controller{

	function __construct(){ //memanggil fungsi construk pada controller form
		parent::__construct();
		$this->load->library('form_validation'); //memanggil librari pada form validasi
	}

	function index(){
		$this->load->view('v_form'); //memanggil view pada v_form control
	}

	function aksi(){
		$this->form_validation->set_rules('nama','Nama','required'); //form validasi nama
		$this->form_validation->set_rules('email','Email','required'); // form validasi email
		$this->form_validation->set_rules('konfir_email','Konfirmasi Email','required'); //form falidasi konfirmasi email

		if($this->form_validation->run() != false){ //validasi apakah data bernilai true or false
			echo "Form validation oke";
		}else{
			$this->load->view('v_form'); //memanggil view pada v_form control
		}
	}
}