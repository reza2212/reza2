<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Download extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->helper(array('url','download')); //memanggil helper dowload dan url			
	}

	public function index(){		
		$this->load->view('v_download'); //memanggil view pada v_dowload Control
	}

	public function lakukan_download(){				
		force_download('gambar/HCI.docx',NULL); //directory root codeigniter 
	}	

}