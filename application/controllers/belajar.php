<?php
defined('BASEPATH') OR exit('No direct script access allowed'); //mencegah akses langsung pada file controller

class Belajar extends CI_Controller {
	
	function __construct(){
		parent::__construct();		
		$this->load->model('m_modal'); //memanggil model dalam pada m_modal
	}

	function user(){
		$data['user'] = $this->m_modal->ambil_data()->result(); //memanggil data dari m-modal 
		$this->load->view('view_user.php',$data); // memanggil view pada view_user control
	}

}